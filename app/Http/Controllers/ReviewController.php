<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Dados estáticos de exemplo
        $reviews = [
            ['id' => 1, 'content' => 'Review 1 exemplo...'],
            ['id' => 2, 'content' => 'Review 2 exemplo...'],
            // Adicione mais reviews estáticas conforme necessário
        ];

        return view('perfil.index', ['reviews' => $reviews]);
    }

    public function create($id)
    {
        return view('review-create', ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        // Aqui você pode adicionar lógica para armazenar a revisão no banco de dados

        return redirect()->route('anime.details', ['id' => $id])->with('success', 'Review submitted!');
    }

    public function edit($id)
    {
        return view('review-edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('perfil.show')->with('success', 'Review atualizada!');
    }

    public function destroy($id)
    {
        return redirect()->route('perfil.show')->with('success', 'Review excluída!');
    }
}
