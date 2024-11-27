<div class="box-container">
<x-base>
    <style>

    </style>
        <div>
            <form action="{{ url('banheiro/') }}" method="GET">
                <div class="search-input-container">
                    <input
                        type="text"
                        name="search"
                        class="search-input"
                        placeholder="Digite o termo de busca"
                        value="{{ request('search') }}"
                    >
                </div>
                <button type="submit">Buscar</button>
            </form>
            <h1>ROTA DAS BANHEIRO</h1>
            <div class="container">
                @foreach ($banheiros as $item)
                    <div class="card futuristic-card">
                        <h2>{{ $item->name }}</h2>
                        <p>{{ $item->description }}</p>
                        <form action="{{ url('banheiro/' . $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">deletar</button>
                        </form>
                        <hr>
                    </div>
                @endforeach
            </div>
            <a href="banheiro/create" class="link-futuristic">Novo banheiro</a>
            <div class="pagination">
                <!-- Links de navegação -->

                {{ $banheiros->links() }}
            </div>
        </div>
    </x-base>
</div>
