$(document).ready(function () {
    loadViews();
    loadClicks();

    //carregar informações do usuário logado
    function loadViews() {
        $.get(window.location.origin + "/search-views", {}).then(function (data) {
                if (data.status == "success") {

                    $("#tot-views").html(data.data.length);
                    
                }
            })
            .catch();
    }

    //carregar informações do usuário logado
    function loadClicks() {

        $.get(window.location.origin + "/search-clicks", {}).then(function(data) {
            if(data.status == 'success') {

                $("#lista-links").html("");

                if(data.data.length > 0){

                    for (var i in data.data) {

                        $("#lista-links").append(`
                            <div class="list-group" style="margin-bottom: 10px;">
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    ${data.data[i].icon}
                                    <span>${data.data[i].name}</span>
                                    <span>${data.data[i].total}</span>
                                </a>
                            </div>

                        `);

                    }

                }

            } 
        }).catch();

    }


});
