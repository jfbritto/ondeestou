@extends('includes.base')

@section('css')
<link rel="stylesheet" href="{{ url('jcrop') }}/jquery.Jcrop.min.css">
<style>	
    .img-holder-slider {
        /* border:1px solid #efefef; */
        background-color: #ddd;
        min-height: 144px;
    }
    
    .img-holder-slider img {
        width: 100%;
    }
    
    .jcrop-keymgr {
        display: hidden !important;
    }
</style>
@stop

@section('body')

<div class="card mb-3">
    <div class="card-header">
        Foto
    </div>
    <div class="card-body">

        <div class="row" style="padding: 10px;">
            <div class="col-md-5">
                <div class="form-group">
                    <button class="btn btn-primary btn-sm" id="upload">Buscar</button>
                    <button class="btn btn-warning btn-sm" id="crop" data-toggle="modal" data-target="#modal-default">Cortar</button>
                </div>
            </div>
            <div class="col-md-7">
                <input type="hidden" name="image" class="image_name">
                <div class="img-holder-slider"></div>
                <!-- Coordinates -->
                <input type="hidden" name="x" class="x" value="0" />
                <input type="hidden" name="y" class="y" value="0" />
                <input type="hidden" name="w" class="w" value="700" />
                <input type="hidden" name="h" class="h" value="180" />
            </div>
        </div>

    </div>
    <div class="card-footer text-right">
    </div>
</div>
	
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Cortar imagem</h4>
			</div>
			<div class="modal-body" id="toCrop" style="padding: 0!important;"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary" id="saveImage">Salvar</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="card mb-3">
    <div class="card-header">
        Editar URL personalizada
    </div>
    <div class="card-body">

        <form action="POST" id="formEditURL">

            <div class="row">
                <div class="col-md-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ondeestou.app/</div>
                        </div>
                        <input required type="text" class="form-control" id="url_name" placeholder="Informe a URL">
                    </div>
                </div>
            </div>

            <input type="hidden" class="form-control" id="id">
        </form>
    </div>
    <div class="card-footer text-right">
        <button form="formEditURL" type="submit" class="btn btn-outline-success">Salvar</button>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Informações do perfil
    </div>
    <div class="card-body">

        <form action="POST" id="formEditUser">

            <div class="row">
                <div class="col-md-12">
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
                        <input required minlength="6" type="password" class="form-control" id="password" placeholder="Informe a nova senha">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                        </div>
                        <input required minlength="6" type="password" class="form-control" id="password2" placeholder="Repita a nova senha">
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
<script src="{{ url('jcrop') }}/upload.js"></script>
<script src="{{ url('jcrop') }}/jquery.Jcrop.min.js"></script>

<script>
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    function showCoords(c)
    {
        $('.x').val(c.x);
        $('.y').val(c.y);
        $('.w').val(c.w);
        $('.h').val(c.h);
    }

    function initiate_ajax_upload(button_id) {
        //alert(button_id);
        var button = $('#' + button_id), interval;

        new AjaxUpload(button, {
            action: '{{ route("upload.image") }}',
            name: 'file',
            onSubmit: function (file, ext) {
                button.text('Uploading');
                this.disable();
                interval = window.setInterval(function () {
                    var text = button.text();
                    if (text.length < 13) {
                        button.text(text + '.');
                    } else {
                        button.text('Uploading');
                    }
                }, 200);
            },
            onComplete: function (file, response) {
                console.log(response);
                this.enable();
                button.html('Browse');
                var obj = JSON.parse(response);
                if(obj.error)
                {
                    alert(obj.error);
                }
                else
                {
                    $('.image_name').val(obj.file);
                    $('.img-holder-slider').html('<img src="{{url("/")}}/uploads/'+obj.file+'" style="max-width:100%;" />');
                    $('#toCrop').html('<img src="{{url("/")}}/uploads/'+obj.file+'" />');
                    $(".modal-dialog").css('width',obj.width+"px");
                    $('#toCrop img').Jcrop({
                        onSelect: showCoords,
                        onChange: showCoords,
                            setSelect:   [ 0, 0, 0, 0 ],
                        });
                }
                window.clearInterval(interval);
            }
        });
    }

    $(function() {
        initiate_ajax_upload('upload');
    })

    // When clicked Save in Modal
    $('#saveImage').click(function(){
        $(this).text('Saving');
        $(this).attr('disabled','disabled');
        interval = window.setInterval(function () {
            var text = $(this).text();
            if (text.length < 11) {
                $(this).text(text + '.');
            } else {
                $(this).text('Saving');
            }
        }, 200);
        $.ajax({
            data:'x='+$('.x').val()+'&y='+$('.y').val()+'&w='+$('.w').val()+'&h='+$('.h').val()+'&file='+$('.image_name').val(),
            type:'post',
            url:'{{ route("crop.image") }}',
            success:function(response)
            {
                $('#saveImage').removeAttr('disabled');
                $('#saveImage').html('Save Image');
                $('#modal-default').modal('hide');
                window.clearInterval(interval);
                $('.img-holder-slider').html('<img src="/storage/user/'+$('.image_name').val()+'?rand='+Math.random()+'" />');
            }
        });
    })

</script>
@stop