@extends('includes.base')

@section('body')

<div class="card mb-3">
    <div class="card-header">
        Compartilhe esse link!
    </div>
    <div class="card-body">

        <div class="input-group is-invalid">

            <input id="txturl" type="text" readonly value="" class="form-control">
            <input id="txturlhidden" type="hidden" value="{{env('APP_URL')}}" class="form-control">

            <div class="input-group-append">
                <button id="txturlbtn" class="btn btn-outline-secondary" type="button"><i class="fas fa-copy"></i></button>
            </div>
        </div>

    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        <a href="#" class="btn btn-outline-success" id="newLinkBtn">Novo Link</a>
    </div>
    <div class="card-body" id="lista-links">
        
    </div>
</div>

<!-- Modal cadastrar link -->
<div class="modal fade" id="addLinkModal" tabindex="-1" role="dialog" aria-labelledby="addLinkModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLinkModalLabel"><i class="fas fa-link"></i> &nbsp; Adicionar Link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="POST" id="formAddLink">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="tipe">Icone</span>
                        </div>
                        <select required name="" id="id_social_network" class="form-control">
                            <option value="">Selecione</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputNewName">Nome</span>
                        </div>
                        <input id="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputNewName">
                    </div>

                    <div class="input-group mb-3 txt-msg" style="display: none;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputNewPhone">Telefone</span>
                        </div>
                        <input id="phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputNewPhone">
                    </div>

                    <div class="input-group mb-3 txt-msg" style="display: none;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputNewMsg">Mensagem prévia</span>
                        </div>
                        <input id="msg" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputNewMsg">
                    </div>

                    <div class="input-group mb-3 link-msg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputNewLink">Link</span>
                        </div>
                        <input required id="link" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputNewLink" value="">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button form="formAddLink" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar link -->
<div class="modal fade" id="editLinkModal" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLinkModalLabel"><i class="fas fa-link"></i> &nbsp; Editar Link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="POST" id="formEditLink">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="tipe">Icone</span>
                        </div>
                        <select required name="" id="id_social_network_edit" class="form-control">
                            <option value="">Selecione</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputName">Nome</span>
                        </div>
                        <input id="name_edit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputName">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputLink">Link</span>
                        </div>
                        <input required id="link_edit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputLink">
                    </div>

                    <input type="hidden" value="" id="id_link_edit">

                </form>
            </div>
            <div class="modal-footer">
                <button form="formEditLink" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar ordem -->
<div class="modal fade" id="editOrderModal" tabindex="-1" role="dialog" aria-labelledby="editOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOrderModalLabel"><i class="fas fa-sort"></i> &nbsp; Ordenar link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="POST" id="formEditOrder">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="tipe">Ordem de exibição</span>
                        </div>
                        <select name="" id="order_link" class="form-control">
                        </select>
                    </div>

                    <input type="hidden" value="" id="id_link_order">

                </form>
            </div>
            <div class="modal-footer">
                <button form="formEditOrder" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script src="/js/home/home.js"></script>
@stop