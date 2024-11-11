<x-base>
    <div>
        <h1>ROTA DAS AVALIACOES</h1>
        <div class="card">
        @foreach ($avaliacao as $item)
        @foreach ($banheiro as $banheiroItem)
                @if ($banheiroItem->id == $item->banheiro_id)
                    <h2>Banheiro: {{$banheiroItem->name}} <br> <span>descrição: {{$banheiroItem->description}}</span></h2>
                    <p></p>
                @endif
            @endforeach
            <p>Avaliacao: {{$item->description}}</p>
        
            <hr>
        @endforeach
        </div>
        <a href="avaliacao/create" class="link-futuristic">Nova avaliacao</a>
    </div>
</x-base>