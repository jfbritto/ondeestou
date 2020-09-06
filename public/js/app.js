$(document).ready(function(){

    $('#login').keydown(function(){
        
        let text = $(this).val();

        if(text.length < 1){
            $('#animate').attr('src', "/img/animation/textbox_user_Clicked.JPG");
        }
        else if(text.length > 7 && text.length < 48){
            $('#animate').attr('src', "/img/animation/textbox_user_" + parseInt(Math.floor(text.length / 2)) +".jpg");
        }
        else if(text.length >= 48){
            $('#animate').attr('src', '/img/animation/textbox_user_24.jpg');
        }
        else{
            $('#animate').attr('src', '/img/animation/textbox_user_1.jpg');
        }
    });

    $('#login').focus(function(){
        $('#animate').attr('src', '/img/animation/textbox_user_Clicked.JPG');
    });

    $('#login').blur(function(){
        $('#animate').attr('src', '/img/animation/debut.JPG');
    });


    $('#senha').focus(function(){
        $('#animate').attr('src', '/img/animation/textbox_password.png');
    });

    $('#senha').blur(function(){
        $('#animate').attr('src', '/img/animation/debut.JPG');
    });
});