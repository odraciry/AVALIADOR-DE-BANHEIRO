<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Banheiro;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index(){
        $avaliacoes = Avaliacao::all();
        $banheiros = Banheiro::all();
        // return view('index');
        return view('avaliacao.index', ['avaliacao'  => $avaliacoes, 'banheiro' => $banheiros]);
    }
    
    public function create()
    {
        $banheiros = Banheiro::all();
        return view('avaliacao.create', ['banheiros'  => $banheiros]);

    }

    public function store(Request $request)
    {

        $request->validate([
            'description' => 'nullable|string',
            'banheiro_id' => 'required|exists:banheiro,id',
        ]);

        // Criação da avaliacao
        Avaliacao::create($request->only( 'description', 'banheiro_id'));

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('avaliacao.index')->with('success', 'avaliacao cadastrada com sucesso!');
    }
}
