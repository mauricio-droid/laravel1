<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestBookCreate;
use App\Models\Autor;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index')
            ->with('books',$books);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autorsIds = Autor::all();
        $categoriesId = Category::all();
        return view('book.create')
        ->with('autorsIds', $autorsIds)
        ->with('categoriesId', $categoriesId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestBookCreate $request)
    {
        $book = new Book($request->all());
        $book->save();
        return redirect()->route('book.index');
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
        $book = Book::findOrFail($id);
        $autorsIds = Autor::all();
        $categoriesId = Category::all();
        return view('book.edit')
        ->with('book', $book)
        ->with('autorsIds', $autorsIds)
        ->with('categoriesId', $categoriesId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestBookCreate $request, $id)
    {
        //dd($request->all());
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->category_id = $request->category_id;
        $book->autor_id = $request->autor_id;
        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
