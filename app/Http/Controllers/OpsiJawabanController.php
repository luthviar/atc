<?php

namespace App\Http\Controllers;

use App\OpsiJawaban;
use App\Question;
use Illuminate\Http\Request;

class OpsiJawabanController extends Controller
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
    public function create($id_question)
    {
        return view('test.add-opsi')->with('id_question',$id_question);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opsi = new OpsiJawaban;
        $opsi->id_question = $request->id_question;
        $opsi->isi_opsi = $request->isi_opsi;
        $opsi->pilihan = $request->pilihan;
        $opsi->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function show(OpsiJawaban $opsiJawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(OpsiJawaban $opsiJawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpsiJawaban $opsiJawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpsiJawaban $opsiJawaban)
    {
        //
    }
}
