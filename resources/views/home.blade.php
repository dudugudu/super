@extends('template.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
    
    <a class="btn btn-primary" href="{{ route('suppliers.show')}}" role="button">
        Fornecedores
    </a>
    <a class="btn btn-primary" href="{{ route('products.show')}}" role="button">
        Produtos
    </a>
    </div>
</div>
@endsection

   