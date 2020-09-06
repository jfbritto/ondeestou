@extends('includes.base')

@section('body')

<div class="card mb-3">
    <div class="card-header">
        Compartilhe!
    </div>
    <div class="card-body">

        <div class="input-group is-invalid">

            <input type="text" readonly value="http://ondeestoubr.com.br/jfbritto" class="form-control">

            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-copy"></i></button>
            </div>
        </div>

    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        <a href="#" class="btn btn-outline-success" id="newLinkBtn">Novo Link</a>
    </div>
    <div class="card-body">
        
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #da3279; color: #fff">
            <i class="fab fa-instagram icon-style"></i>
            <span>Instagram</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #0d8bf0; color: #fff">
            <i class="fab fa-facebook icon-style"></i>
            <span>Facebook</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #3ec250; color: #fff">
            <i class="fab fa-whatsapp icon-style"></i>
            <span>WhatsApp</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #fffc00; color: #fff">
            <i class="fab fa-snapchat icon-style"></i>
            <span>SnapChat</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #007bb5; color: #fff">
            <i class="fab fa-linkedin icon-style"></i>
            <span>linkedin</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #171515; color: #fff">
            <i class="fab fa-github icon-style"></i>
            <span>github</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #9147ff; color: #fff">
            <i class="fab fa-twitch icon-style"></i>
            <span>twitch</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #ff0000; color: #fff">
            <i class="fab fa-youtube icon-style"></i>
            <span>youtube</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #1ed760; color: #fff">
            <i class="fab fa-spotify icon-style"></i>
            <span>spotify</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #000000; color: #fff">
            <i class="fab fa-tiktok icon-style"></i>
            <span>tiktok</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #156de8; color: #fff">
            <i class="fab fa-bitbucket icon-style"></i>
            <span>bitbucket</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #0062ff; color: #fff">
            <i class="fab fa-dropbox icon-style"></i>
            <span>dropbox</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
            <i class="fas fa-at icon-style"></i>
            <span>email</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #ff4500; color: #fff">
            <i class="fab fa-reddit icon-style"></i>
            <span>reddit</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #ca2127; color: #fff">
            <i class="fab fa-pinterest icon-style"></i>
            <span>pinterest</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #40a4c4; color: #fff">
            <i class="fab fa-periscope icon-style"></i>
            <span>periscope</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #ebb22d; color: #fff">
            <i class="fab fa-slack icon-style"></i>
            <span>slack</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #146295; color: #fff">
            <i class="fab fa-steam icon-style"></i>
            <span>steam</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #f78a0f; color: #fff">
            <i class="fab fa-soundcloud icon-style"></i>
            <span>soundcloud</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #2ba3d6; color: #fff">
            <i class="fab fa-telegram icon-style"></i>
            <span>telegram</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #001935; color: #fff">
            <i class="fab fa-tumblr icon-style"></i>
            <span>tumblr</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #1da1f2; color: #fff">
            <i class="fab fa-twitter icon-style"></i>
            <span>twitter</span>
            <i class="fas fa-arrow-right"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" style="background-color: #3d95ce; color: #fff">
            <i class="fab fa-vimeo icon-style"></i>
            <span>vimeo</span>
            <i class="fas fa-arrow-right"></i>
        </li>
    </ul>

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
                            <span class="input-group-text" id="numBox">Tipo</span>
                        </div>
                        <select name="" id="" class="form-control">
                            <option value="">Selecione</option>
                            <option value="">WhatsApp</option>
                            <option value="">Instagram</option>
                            <option value="">Facebook</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="latBox">Link</span>
                        </div>
                        <input required id="latitudeEdit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="latBox">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="forNome">Nome</span>
                        </div>
                        <input required id="longitudeEdit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="forNome">
                    </div>

                    <input type="hidden" id="idEdit" value="">
                </form>
            </div>
            <div class="modal-footer">
                <button form="formAddLink" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script src="/js/home/home.js"></script>
@stop