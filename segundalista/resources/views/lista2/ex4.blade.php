@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex4_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para quantidade de números primos:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($numerosPrimos)
        <p>O resultado é {{ $numerosPrimos }}</p>
    @endisset
@endsection

