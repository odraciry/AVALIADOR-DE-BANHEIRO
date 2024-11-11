<?php

namespace App\Http\Controllers;

use App\Models\Banheiro;
use Illuminate\Http\Request;

class BanheiroController extends Controller
{
    public function index(){
        $banheiros = Banheiro::all();
        // return view('index');
        return view('banheiro.index', ['banheiro'  => $banheiros]);
    }
    
    public function create()
    {
        return view('banheiro.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'description' => 'nullable|string',
        ]);

        // Criação do banheiro
        Banheiro::create($request->only( 'name','description'));

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('banheiro.index')->with('success', 'avaliacao cadastrada com sucesso!');
    }
}
