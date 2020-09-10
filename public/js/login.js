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

    $("#formAddUser").on("submit", function(e){
        e.preventDefault();

        if($("#password").val() != $("#password2").val()){
            Swal.fire({
                icon: "error",
                text: "Rapaz, acho que as senhas que você me passou não são iguais! \nTenta de novo, fazendo favor!!",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonText: "OK",
                onClose: () => {},
            });
            return false;
        }
        
        Swal.queue([{
            title: 'Carregando...',
            allowOutsideClick: false,
            allowEscapeKey: false,
            onOpen: () => {
                Swal.showLoading();
                $.post("/register", {
                    name:$("#name").val(), 
                    email:$("#email").val(), 
                    password:$("#password").val(),
                }, function(data) {
                    if(data.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Bem vindo',
                            text: 'Cadastro realizado com sucesso',
                            showConfirmButton: false,
                            showCancelButton: false
                        });
    
                        setTimeout(function() {
                            window.location = "/home";
                        }, 1000);
                    }else{

                        Swal.fire('Erro!', data.message, 'error');

                    }
                }, 'json');
            }
        }]);

    });
    
    $("#formForgotPass").on("submit", function(e){
        e.preventDefault();
        
        Swal.queue([{
            title: 'Carregando...',
            allowOutsideClick: false,
            allowEscapeKey: false,
            onOpen: () => {
                Swal.showLoading();
                $.post("/forgot-pass", {
                    email:$("#email").val(), 
                }, function(data) {
                    if(data.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Show!',
                            text: 'Dá um confere na sua caixa de emails, acabamos de te enviar um! Confere nos spams também ;)',
                            showConfirmButton: false,
                            showCancelButton: false
                        });
                        
                        // setTimeout(function() {
                            //     window.location = "/home";
                            // }, 1000);
                        }else{
                            
                            Swal.fire('Erro!', data.message, 'error');
                            
                        }
                    }, 'json');
                }
            }]);
            
        });
        
    
        $("#formChangePass").on("submit", function(e){
            e.preventDefault();
    
            if($("#password").val() != $("#password2").val()){
                Swal.fire({
                    icon: "error",
                    text: "Putz, acho que as senhas que você me passou não são iguais! \nTenta de novo, fazendo favor!!",
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonText: "OK",
                    onClose: () => {},
                });
                return false;
            }
            
            Swal.queue([{
                title: 'Carregando...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    Swal.showLoading();
                    $.post("/change-pass", { 
                        token:$("#token").val(), 
                        password:$("#password").val(),
                    }, function(data) {
                        if(data.status == 'success') {

                            Swal.fire({
                                icon: "success",
                                title: 'Show!',
                                text: "Senha alterada com sucesso! Guarda essa com carinho :)",
                                showConfirmButton: false,
                                showCancelButton: true,
                                cancelButtonText: "OK",
                                onClose: () => {
                                    window.location = "/home";
                                },
                            });
        
                        }else{
    
                            Swal.fire('Erro!', data.message, 'error');
    
                        }
                    }, 'json');
                }
            }]);
    
        });

    });