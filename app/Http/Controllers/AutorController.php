<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAutorCreate;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = Autor::all();
        return view('autor.index')->with('autors',$autors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \
     Illuminate\Http\Response
     */
    public function store(RequestAutorCreate $request)
    {
        //dd($request->all());
        $autor = new Autor($request->all());
        $autor->save();
        return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);}
        $autor = Autor::findOrFail($id);
        //dd($autor);
        return view('autor.edit')
            ->with('autor',$autor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestAutorCreate $request, $id)
    {
        //dd($request,$request->all(),$request->name);
        $autor = Autor::findOrFail($id);
        $autor->name = $request->name;
        $autor->save();
        return redirect()->route('autor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        if($autor->books->count() !=0) return redirect()->route('autor.index')->withErrors(['No se puede borrar '.$autor->name.' porque tiene '.$autor->books->count().' libro(s)']);
        $autor->delete();
        return redirect()->route('autor.index');
    }
}
