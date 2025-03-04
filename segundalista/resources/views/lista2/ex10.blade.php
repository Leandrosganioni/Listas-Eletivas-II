@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex10_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para tabuada:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>

                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($tabuada)
        <p>O resultado é {{ $tabuada }}</p>
    @endisset
@endsection

