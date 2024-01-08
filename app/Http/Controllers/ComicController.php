<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //inserire elementi di un nuovo comic in db
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        //
        $formData = $request->all();
        $newComic = new Comic();
        $newComic->title = $formData["title"];
        $newComic->description = $formData["description"];
        $newComic->thumb = 'https://www.coverbrowser.com/image/action-comics/1-1.jpg';
        $newComic->price = $formData["price"];
        $newComic->sale_date = '2024-01-08';
        $newComic->series = 'comics';
        $newComic->type = $formData["type"];
        $newComic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Comic $comic;
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        //
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**w
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
