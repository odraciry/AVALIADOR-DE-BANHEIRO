<x-base>

<form action="{{ route('avaliacao.store') }}" method="POST">
    @csrf <!-- Token de segurança obrigatório para requisições POST -->
    
    
    <select class="form-control" id="banheiro_id" name="banheiro_id" required>
                    <option value="">Selecione um banheiro</option>
                    @foreach($banheiros as $banheiro)
                        <option value="{{ $banheiro->id }}">{{ $banheiro->name }}</option>
                    @endforeach
                </select>
                <div>
        <label for="description">avalição:</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <button type="submit">Salvar</button>
</form>
</x-base>