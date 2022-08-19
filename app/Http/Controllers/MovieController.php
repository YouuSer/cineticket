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
        ])->json();
        $intheater = Http::get(config('services.tmdb.base_url').'/movie/now_playing', [
            'api_key' => config('services.tmdb.key'),
            'region' => 'FR',
            'language'=>'fr'
        ])->json();

        return Inertia::render('Home', [
            'upcoming' => $upcoming['results'],
            'intheater' => $intheater['results'],
        ]);
    }

    public function show($id)
    {
        $movie = Http::get(config('services.tmdb.base_url').'/movie/'.$id, [
            'api_key' => config('services.tmdb.key'),
            'region' => 'FR',
            'language'=>'fr'
        ])->json();

        return Inertia::render('Movie', [
            'movie' => $movie,
        ]);
    }
}
