<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = Module::orderBy('parent', 'ASC')->get();
        return view('test.viewall')->with('module',$module);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Module::all();
        return view('test.create-module')->with('parent',$parent);
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
            'short_name' => 'required',
            'nama' => 'required',
            'desc' => 'required',
        ]);

        $module = new Module;
        $module->short_name = $request->short_name;
        $module->nama = $request->nama;
        $module->description = $request->desc;
        if($request->parent != null){
            $module->parent = $request->parent;    
        }
        $module->save();

        return redirect('module');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show( $module)
    {
        $modul = Module::find($module);
        $training = Module::find($module)->training;
        $array = [
            "module" => $modul,
            "training" => $training,
        ];

        return view('test.view')->with('modul',$array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
