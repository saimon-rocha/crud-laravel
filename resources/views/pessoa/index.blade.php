@extends('layouts.app')

@section('conteudo')

<script>
    function excluir(cdPessoa) {
        if (confirm('Deseja excluir ?')) {
            var csrf = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                method: "DELETE",
                url: "/pessoa/" + cdPessoa,
                data: {
                    '_token': csrf
                },
                success: function() {
                    self.location.reload();
                }
            });
        }
    }
</script>

<h1 style="text-align: center;">Listagem de Pessoas</h1>

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
                <a href="{{route('pessoa.edit', $objPessoa->cd_pessoa)}}" title="Editar">EDITAR</a>
                <a href="{{ route('pessoa.destroy', $objPessoa->cd_pessoa)}} " style="margin-left: 10px;" title="Deletar" onclick="javascript:excluir({{ $objPessoa->cd_pessoa }})">EXCLUIR</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Botões -->
<div style="margin-top: 20px;">
    <a href="{{route('pessoa.create')}}" class="btn btn-primary">Cadastrar</a>
</div>
@endsection()