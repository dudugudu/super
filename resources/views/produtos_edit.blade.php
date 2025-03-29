@extends('template')

@section('content')

<form action="{{ route('produtos.create')}}" method="POST" class="bg-light p-4 rounded">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value={{product->name}} required>
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection