@extends('includes.base')

@section('body')

<div class="card mb-3">
    <div class="card-header">
        Informações do perfil
    </div>
    <div class="card-body">

        <form action="POST" id="formEditUser">

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-link"></i></div>
                        </div>
                        <input type="text" class="form-control" id="url_name" placeholder="Informe a URL">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                        <input type="text" class="form-control" id="city" placeholder="Cidade">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                        <input type="text" class="form-control" id="state" placeholder="Estado">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                        <input type="text" class="form-control" id="latitude" placeholder="Latitude">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                        <input type="text" class="form-control" id="longitude" placeholder="Longitude">
                    </div>                    
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-align-justify"></i></div>
                        </div>
                        <textarea class="form-control" id="bio" cols="30" rows="5" placeholder="Breve descrição sobre você"></textarea>
                    </div>
                </div>
            </div>

            <input type="hidden" class="form-control" id="id">
        </form>
    </div>
    <div class="card-footer text-right">
        <button form="formEditUser" type="submit" class="btn btn-outline-success">Salvar</button>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Editar senha
    </div>
    <div class="card-body">

        <form action="POST" id="formEditPass">

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="Informe a nova senha">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control" id="password2" placeholder="Repita a nova senha">
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="card-footer text-right">
        <button form="formEditPass" type="submit" class="btn btn-outline-success">Salvar</button>
    </div>
</div>


@stop

@section('js')
<script src="/js/home/config.js"></script>
@stop