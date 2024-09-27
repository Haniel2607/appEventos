@extends('layout')
@section('content')
<div class="container mt-5">
    <h2>Cadastro de Evento</h2>
    <form method="post" action="{{route('cadastra-evento')}}">
        @csrf
        <div class="col-md-6">
            <label for="inputNomeEvento" class="form-label">Nome Evento</label>
            <input type="text" class="form-control" id="nomeEvento" name= "nomeEvento" placeholder="Digite o nome do Evento" required>
        </div>
        <div class="col-md-6">
            <label for="inputDataEvento" class="form-label">Data Evento</label>
            <input type="date" class="form-control" id="dataEvento" name="dataEvento" placeholder="dd/mm/aaaa" required>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Local Evento</label>
            <input type="text" class="form-control" id="localEvento" name="localEvento" placeholder="Digite o Local do Evento" required>
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Imagem do Evento (URL)</label>
            <input type="text" class="form-control" id="imgEvento" name="imgEvento" placeholder="Digite a URL da imagem" required>
        </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

@endsection