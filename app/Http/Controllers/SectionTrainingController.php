<?php

namespace App\Http\Controllers;

use App\Training;
use App\SectionTraining;
use App\SectionTrainingType;
use Illuminate\Http\Request;

class SectionTrainingController extends Controller
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
    public function create($idTraining)
    {
        $type = SectionTrainingType::all();
        $training = Training::find($idTraining);
        return view('test.add-section-training')->with('type', $type)->with('training', $training);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sectionTraining = new SectionTraining;
        $sectionTraining->id_type = $request->type;
        $sectionTraining->id_training = $request->id_training;
        $sectionTraining->sequence = $request->sequence;
        $sectionTraining->save();

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function show($sectionTraining)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionTraining $sectionTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionTraining $sectionTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionTraining $sectionTraining)
    {
        //
    }
}
