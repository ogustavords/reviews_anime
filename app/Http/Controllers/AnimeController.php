<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        return view('dashboard'); 
    }

    public function details($id)
    {
        return view('anime-details', compact('id'));
    }
}
