@extends('template.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <a class="btn btn-primary" href="/fornecedores/create" role="button">
            Cadastrar Fornecedores
        </a>
    </div>
    <div class="col-md-8 m-3">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->cnpj }}</td>
                    <td>{{ $supplier->company_name }}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a class="fa-solid fa-trash trash-icon" href="{{route('suppliers.delete',$supplier->id)}}"></a>
                            <a class="fa-solid fa-pen-to-square edit-icon" href="{{route('suppliers.update',$supplier->id)}}"></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection