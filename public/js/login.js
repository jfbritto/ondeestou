$(document).ready(function(){

    $("#formAutenticar").on("submit", function(e){
        e.preventDefault();

        let login = $("#login").val(); 
        let senha = $("#senha").val();
        
        Swal.queue([{
            title: 'Carregando...',
            allowOutsideClick: false,
            allowEscapeKey: false,
            onOpen: () => {
                Swal.showLoading();
                $.post("/login", {login, senha}, function(data) {
                    if(data.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Bem vindo',
                            text: 'Login realizado com sucesso',
                            showConfirmButton: false,
                            showCancelButton: false
                        });
    
                        setTimeout(function() {
                            window.location = "/home";
                        }, 1000);
                    }else{

                        Swal.fire('Erro!', data.mensagem, 'error');

                    }
                }, 'json');
            }
        }]);

    });

});