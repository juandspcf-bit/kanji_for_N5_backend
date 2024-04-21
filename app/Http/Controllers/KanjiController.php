<?php

namespace App\Http\Controllers;

use App\Models\Kanji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kanjiCharacter)
    {
        
        $response = Http::get("kanjialive-api.p.rapidapi.com/api/public/kanji/$kanjiCharacter");
        $json = $response->json();

        return $kanjiCharacter;

    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kanji $kanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kanji $kanji)
    {
        //
    }
}
