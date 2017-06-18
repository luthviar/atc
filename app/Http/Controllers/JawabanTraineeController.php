<?php

namespace App\Http\Controllers;

use DB;
use App\JawabanTrainee;
use App\Test;
use Illuminate\Http\Request;

class JawabanTraineeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $question = DB::table('questions')
            ->join('question_types', function($join) {
                $join->on('question_types.id','=','questions.id_type');
            })->select('questions.*', 'question_types.name')
            ->where('questions.id_test','=',$id)
            ->get();
        
        foreach ($question as $ques) {
            $jawaban = new JawabanTrainee;
            $id = $ques->id;
            $jawaban->id_question = $ques->id;
            $jawaban->isi_jawaban = $request->$id;    
            $jawaban->save();
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function show(JawabanTrainee $jawabanTrainee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function edit(JawabanTrainee $jawabanTrainee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JawabanTrainee $jawabanTrainee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(JawabanTrainee $jawabanTrainee)
    {
        //
    }
}
