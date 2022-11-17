@extends('layouts.app')
@section('titulo', 'Lista')
@section('conteudo')

<h1 style="text-align: center;">Clientes</h1>

<!-- Tabela de Listagem -->
<table class="table table-dark" style="text-align: center; margin-top:20px;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Data Nascimento</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $objPessoa)
        <tr>
            <td> {{ $objPessoa->cd_pessoa }}</td>
            <td> {{ $objPessoa->nm_pessoa }}</td>
            <td> {{ date('d/m/Y', strtotime($objPessoa->dt_nascimento)) }}</td>
            <td>
                <form action="/pessoa/{{ $objPessoa->cd_pessoa }}" method="POST">
                    <a href="/pessoa/edit/{{ $objPessoa->cd_pessoa }}" class="btn btn-info">
                        <i class="bi bi-pencil"></i>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                </form>
            </td>
            <a></a>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection()