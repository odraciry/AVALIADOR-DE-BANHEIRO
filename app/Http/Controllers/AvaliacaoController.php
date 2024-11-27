<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Banheiro;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index(){
        $banheiro  = Banheiro::find(5)->avalicao()->get();
        // $banheiro  = Banheiro::where(['id'=>5, 'name'=>'linkon'])->where('description', 'like', "%muito%")->first();
        foreach($banheiro as $b){
            $t[] = $b->description;
        }
        dd($t);
        dd($banheiro);

        $avaliacoes = Avaliacao::all();
        $banheiros = Banheiro::all();


        // return view('index');
        return view('avaliacao.index', ['avaliacao'  => $avaliacoes, 'banheiro' => $banheiros]);
    }
    // Mostra um único item (READ)
    public function show($id)
    {
        $avaliacao = Avaliacao::find($id);
        $banheiro = Banheiro::find($avaliacao->banheiro_id);
        $banheiros = Banheiro::all();
        if (!$avaliacao) {
            return response()->json(['error' => 'avaliacao não encontrado'], 404);
        }

        return view('avaliacao.update', ['avaliacao'  => $avaliacao, 'banheiro' => $banheiro, 'banheiros' => $banheiros]);

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

    public function update(Request $request, $id)
    {
        $avaliacao = Avaliacao::find($id);

        if (!$avaliacao) {
            return response()->json(['error' => 'Avaliacao não encontrado'], 404);
        }

        $validated = $request->validate([
            'description' => 'nullable|string',
            'banheiro_id' => 'required|exists:banheiro,id',
        ]);

        $avaliacao->update($validated);

        return redirect()->route('avaliacao.index')->with('success', 'avaliacao cadastrada com sucesso!');
    }

    public function destroy(string $id)
    {
        $avaliacao = Avaliacao::find($id);
        if (!$avaliacao) {
            return response()->json(['error' => 'Item não encontrado'], 404);
        }
        $avaliacao->delete();
        return redirect()->route('avaliacao.index')->with('success', 'item deletado com sucesso!');
    }
}
