<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_list = Comic::orderBy('id', 'desc')->paginate(5);
        //dump($comics_list);
        return view('comics.home', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this->validationValues());
        $data = $request->all();
        $new_comic = new Comic();
        $data['slug'] = $this->createSlugUrl($data['title']);
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate($this->validationValues());
        $data = $request->all();
        $data['slug'] = $this->createSlugUrl($data['title']);
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('delete', "Selected DB entry successfully deleted");
    }


    //Private Functions
    private function createSlugUrl($string){
        return Str::slug($string, '-');
    }

    private function validationValues(){
        return [
            'title' => 'Required|min:3|max:255',
            'thumb' => 'Required|min:3|max:255',
            'price' => 'Required|numeric|min:0.99|max:999999.99',
            'series' => 'Required|min:3|max:255',
            'sale_date' => 'Required|date_format:Y-m-d',
            'type' => 'Required|min:3|max:45',
            'description' => 'Required|min:5'
        ];
    }
}
