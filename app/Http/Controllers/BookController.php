<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = book::all();
        return view('welcome' , compact('books'));
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
    public function store()
    {
        //
        $newBuku = new book();
        $newBuku->name = \request('title');
        $newBuku->rating= \request('rating');
        if($newBuku->save()){
            return  redirect()->route('index');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }


    public function update($id){
        $edit = book::find($id);
        $edit->name = \request('title');
        $edit->rating = \request('rating');
        $edit->save();
        return  redirect()->route('index');

    }

    public function hapus($id){

        $deleteBook = book::find($id);
        $deleteBook->delete();
        return redirect()->back();
    }

    public function  showEdit($id){
        $ids = $id;
        return view('edit' , compact('ids'));
    }
}
