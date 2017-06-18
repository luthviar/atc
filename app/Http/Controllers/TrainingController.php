<?php

namespace App\Http\Controllers;

use DB;
use App\Module;
use App\Personnel; 
use App\Training;
use App\SectionTraining;
use App\TrainerTraining;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module = Module::all();
        $Personnel = Personnel::all();
        return view('test.create-training')->with('module',$module)->with('personnel',$Personnel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'module' => 'required',
            'title' => 'required',
            'trainer' => 'required',
        ]);

        // $training = new Training;
        // $training->id_module = $request->module;
        // $training->title = $request->title;
        // $training->description = $request->desc;
        // $training->enroll_key = $request->enroll_key;
        // $training->save();

        $id = DB::table('trainings')-> insertGetId(array(
            'id_module' => $request->module,
            'title' => $request->title,
            'description' => $request->desc,
            'enroll_key' => $request->enroll_key,
        ));

        $trainer = new TrainerTraining;
        $trainer->id_user = $request->trainer;
        $trainer->id_training = $id;
        $trainer->save();

        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($training)
    {
        $train = Training::find($training);
        //$section = SectionTraining::where('id_training',$training->id)->get();
        $section = DB::table('section_trainings')
            ->join('section_training_types', function($join) {
                $join->on('section_training_types.id','=','section_trainings.id_type');
            })->select('section_trainings.*', 'section_training_types.nama')
            ->where('section_trainings.id_training','=',$training)
            ->get();
        $array = array();
        foreach ($section as $value) {
            $content = DB::table('section_trainings')
            ->join('tests', function($join) {
                $join->on('tests.id_section_training','=','section_trainings.id');
            })->select('section_trainings.*', 'tests.*')
            ->where('tests.id_section_training','=',$value->id)
            ->get();

            $array = array_add($array,$value->id,$content);
        }
        return view('test.training-show', [
            'training' => $train,
            'section' => $section,
            'content' => $array
            ]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
    }
}
