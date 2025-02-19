@extends('layout')

@section('conteudo') 

<form method="post" action="/exer1resp"> {{-- acao do formulario importante para onde ir --}}
    @csrf 
    
    {{-- conteudo do formulario --}}
</form>


    @isset($variavel)
        <p> texto {{ $variavel  }}</p> {{-- variável que será retornada --}}
    @endisset 
@endsection