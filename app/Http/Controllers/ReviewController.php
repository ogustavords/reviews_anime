<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($id)
    {
        return view('review-create', ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        // Aqui você pode adicionar lógica para armazenar a revisão no banco de dados

        return redirect()->route('anime.details', ['id' => $id])->with('success', 'Review submitted!');
    }
}
