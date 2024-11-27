<div class="box-container">
<x-base>
    <div>
        <h1>ROTA DAS AVALIACOES</h1>
        <div class="container">
        <div class="card futuristic-card">

            @foreach ($avaliacao as $item)
            <form action="{{ url('avaliacao/' . $item->id) }}" method="GET">
                @csrf
                @method('UPDATE')
                <button type="submit">update</button>
            </form>
            @foreach ($banheiro as $banheiroItem)
                    @if ($banheiroItem->id == $item->banheiro_id)
                        <h2>Banheiro: {{$banheiroItem->name}} <br> <span>descrição: {{$banheiroItem->description}}</span></h2>
                        <p></p>
                    @endif
                @endforeach
                <p>Avaliacao: {{$item->description}}</p>
                <form action="{{ url('avaliacao/' . $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
                <hr>
            @endforeach
        </div>
        </div>
        <a href="avaliacao/create" class="link-futuristic">Nova avaliacao</a>
    </div>
</x-base>
</div>
