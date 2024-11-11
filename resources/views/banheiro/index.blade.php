<x-base>
    <div>
        <h1>ROTA DAS BANHEIRO</h1>
        @foreach ($banheiro as $item)
            <div class="card">
                <h2>{{$item->name}}</h2>
                <p>{{$item->description}}</p>
                <hr>
            </div>
        @endforeach
        <a href="banheiro/create" class="link-futuristic">Novo banheiro</a>
    </div>
</x-base>