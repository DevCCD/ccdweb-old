<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();

        return view('adminlte3.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $colors =[
            'red'=>'Rojo',
            'yellow'=>'Amarillo',
            'green'=>'Verde',
            'blue'=>'Azul',
            'indigo'=>'Indigo',
            'purple'=>'Morado',
            'pink'=>'Rosado'
        ];
        return view('adminlte3.tags.create',compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:tags',
            'color'=>'required',
        ]);
        $tag =Tag::create($request->all());
       return redirect()->route('adminlte3.tags.edit',compact('tag'))->with('info','La Etiqueta se Creó con Exito');; 
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('adminlte3.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $colors =[
            'red'=>'Rojo',
            'yellow'=>'Amarillo',
            'green'=>'Verde',
            'blue'=>'Azul',
            'indigo'=>'Indigo',
            'purple'=>'Morado',
            'pink'=>'Rosado'
        ];
        return view('adminlte3.tags.edit', compact('tag','colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:tags,slug,$tag->id",
            'color'=>'required',
        ]);
        $tag->update($request->all());
        return redirect()->route('adminlte3.tags.edit',$tag)->with('info','La Etiqueta se Actualizó con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('adminlte3.tags.index',$tag)->with('info','La Etiqueta se Eliminó con Exitó');
    }
}
