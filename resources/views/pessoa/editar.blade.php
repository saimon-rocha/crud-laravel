@extends('layouts.app')

@section('conteudo')
    {!! Form::model($pessoa, ['route' => ['pessoa.update', $pessoa->cd_pessoa], 'method' => 'PATCH']) !!}
        @include('pessoa.form')
    {!! Form::close() !!}
@endsection