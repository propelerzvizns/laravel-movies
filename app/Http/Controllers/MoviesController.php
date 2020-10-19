<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\CreateMovieRequest;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMovieRequest $request)
    {
        //
        info('store');
        info($request);

        $data = $request->validated();
        return $data;
        $movie = Movie::create([
            "title" => $data['title'],
            "director" => $data['director'],
            "imageUrl" => $data['imageUrl'],
            "duration" => $data['duration'],
            "releaseDate" => $data['releaseDate'],
            "genre" => $data['genre'],
       ]);
        return $movie;
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
        $movie = Movie::findOrFail($id);
        return response()->json($movie);

    }

    /**
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
