<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class MovieController extends Controller
{
    public function index(): \Inertia\Response
    {
        $upcoming = Http::get(config('services.tmdb.base_url').'/movie/upcoming', [
            'api_key' => config('services.tmdb.key'),
            'region' => 'FR',
            'language'=>'fr'
        ])->json()['results'];
        $intheater = Http::get(config('services.tmdb.base_url').'/movie/now_playing', [
            'api_key' => config('services.tmdb.key'),
            'region' => 'FR',
            'language'=>'fr'
        ])->json()['results'];

        return Inertia::render('Home', [
            'upcoming' => $upcoming,
            'intheater' => $intheater,
        ]);
    }

    public function show($id)
    {
        $movie = collect(Http::get(config('services.tmdb.base_url').'/movie/'.$id, [
            'api_key' => config('services.tmdb.key'),
            'region' => 'FR',
            'language'=>'fr',
            'append_to_response' => 'videos,images'
        ])->json());

        $movie['trailer'] = 'https://www.youtube.com/watch?v='.$movie['videos']['results']['0']['key'];

        return Inertia::render('Movie', [
            'movie' => $movie,
        ]);
    }
}
