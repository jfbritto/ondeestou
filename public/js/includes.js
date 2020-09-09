$(document).ready(function(){
    
    $(".logout").on("click", function(){
        
        Swal.queue([{
            title: 'Desconectando...',
            allowOutsideClick: false,
            allowEscapeKey: false,
            onOpen: () => {
                Swal.showLoading();
                $.post("/logout", function(data){ 
                    window.location = "/";
                },'json');
            }
        }]);

    })

});