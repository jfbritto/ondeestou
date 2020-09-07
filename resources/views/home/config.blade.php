@extends('includes.base')

@section('body')

<div class="card mb-3">
    <div class="card-header">
        Informações do perfil
    </div>
    <div class="card-body">

        <form action="POST" id="formEditUser">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" id="name" placeholder="Nome">
                <input type="hidden" class="form-control" id="id">
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="city" placeholder="Cidade ou localização">
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-align-justify"></i></div>
                </div>
                <textarea class="form-control" id="bio" cols="30" rows="5" placeholder="Breve descrição sobre você"></textarea>
            </div>
        </form>
    </div>
    <div class="card-footer text-right">
        <button form="formEditUser" type="submit" class="btn btn-outline-success">Salvar</button>
    </div>
</div>

<!-- <div class="card mb-3">
    <div class="card-header">
        Temas
    </div>
    <div class="card-body">

    </div>
</div> -->

@stop

@section('js')
<script src="/js/home/config.js"></script>
@stop