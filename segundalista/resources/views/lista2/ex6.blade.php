@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex6_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para contagem:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>

                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($contagem)
        <p>O resultado é {{ $contagem }}</p>
    @endisset
@endsection

