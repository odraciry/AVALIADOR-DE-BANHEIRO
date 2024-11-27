<?php

namespace App\Http\Controllers;

use App\Models\Banheiro;
use Illuminate\Http\Request;

class BanheiroController extends Controller
{
    // public function index(){
    //     $banheiros = Banheiro::all();
    //     // $banheiros = Banheiro::paginate(10);
    //     // return view('index');
    //     return view('banheiro.index', ['banheiro'  => $banheiros]);
    // }
    public function index(Request $request)
    {
        // $banheiros = Banheiro::all();
        // $banheiros = Banheiro::paginate(5);
        // Captura o termo de busca
        $search = $request->input('search');

        $banheiros = Banheiro::where('name', 'like', "%$search%")->get();
        foreach($banheiros as $banheiro){
            $t[] = ['name'=>$banheiro->name];
            dd($t);
        }
        // Recupera os registros com busca e paginação
        $banheiros = Banheiro::when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })->paginate(10);

        // return view('index');
        return view('banheiro.index', compact('banheiros'));
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

        // Criação do banheiro4
        Banheiro::create($request->only('name', 'description'));

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('banheiro.index')->with('success', 'avaliacao cadastrada com sucesso!');
    }

    public function destroy(string $id)
    {
        $banheiro = Banheiro::find($id);
        if (!$banheiro) {
            // return response()->json(['error' => 'Item não encontrado', 'variavel' => dd($banheiro)], 404);
            return dd($banheiro);
        }
        $banheiro->delete();
        return redirect()->route('banheiro.index')->with('success', 'item deletado com sucesso!');
    }
}
