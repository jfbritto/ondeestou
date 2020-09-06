@extends('includes.base')

@section('body')

<div class="card mb-3">
    <div class="card-header">
        <a href="#" class="btn btn-outline-success">Editar Perfil</a>
    </div>
    <div class="card-body">

    <label for="">Cidade</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
        </div>
        <input type="text" class="form-control" id="CidadeId" placeholder="Localização">
    </div>

        
        
        <div class="form-group">
            <label for="">Bio</label>
            <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
        </div>

    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Temas
    </div>
    <div class="card-body">

    </div>
</div>

@stop

@section('js')
<script src="/js/home/home.js"></script>
@stop