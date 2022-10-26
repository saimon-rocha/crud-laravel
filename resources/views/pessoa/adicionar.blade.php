@extends('layouts.app')

@section('conteudo')
    
    {!! Form::open(['route' => 'pessoa.store']) !!}
        @include('pessoa.form')
    {!! Form::close() !!}

@endsection