<x-base>
    <form action="{{ route('banheiro.store') }}" method="POST">
        @csrf <!-- Token de segurança obrigatório para requisições POST -->

        <div>
            <label for="name">Nome do banheiro:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="description">Descrição:</label>
            <textarea name="description" id="description"></textarea>
        </div>

        <button type="submit">Salvar</button>
    </form>
</x-base>
