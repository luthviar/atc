<?php

namespace App\Http\Controllers;

use DB;
use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show($test)
    {
        $test = Test::find($test);
        $question = DB::table('questions')
            ->join('question_types', function($join) {
                $join->on('question_types.id','=','questions.id_type');
            })->select('questions.*', 'question_types.name')
            ->where('questions.id_test','=',$test->id)
            ->get();
        foreach ($question as  $ques) {
            if($ques->id_type == 1){
                $ques->opsi = DB::table('opsi_jawabans')
                    ->select('opsi_jawabans.*')
                    ->where('id_question','=',$ques->id)
                    ->get();
            }
        }
        return view('test.test-view')->with('test',$test)->with('question',$question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
