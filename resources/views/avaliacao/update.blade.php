<x-base>

    <form action="{{ route('avaliacao.update', ['product' => $avaliacao->id]) }}" method="POST">
        @csrf<!-- Token de segurança obrigatório para requisições POST -->
    @method('PUT')

    <select class="form-control" id="banheiro_id" name="banheiro_id" required>
                    <option value="{{$banheiro->id}}">{{ $banheiro->name }}</option>
                    @foreach($banheiros as $banheiros)
                        <option value="{{ $banheiros->id }}" selected="{{ $banheiros->id }}">{{ $banheiros->name }}</option>
                    @endforeach
                </select>
                <div>
        <label for="description">avalição:</label>
        <textarea name="description" id="description">{{$avaliacao->description}}</textarea>
    </div>

    <button type="submit">Salvar</button>
</form>
</x-base>
