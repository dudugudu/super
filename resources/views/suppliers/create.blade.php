@extends('template.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <form action="{{ route('suppliers.create')}}" method="POST" class="bg-light p-4 rounded">
      @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" required>
      </div>
      <div class="mb-3">
        <label for="company_name" class="form-label">Razão Social</label>
        <input type="text" class="form-control" id="company_name" name="company_name" required>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
</div>
@endsection