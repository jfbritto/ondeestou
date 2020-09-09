$(document).ready(function () {
    loadUser();

    //carregar informações do usuário logado
    function loadUser() {
        $.get(window.location.origin + "/search-user-by-id", {})
            .then(function (data) {
                if (data.status == "success") {
                    if (data.data.length > 0) {
                        $("#id").val(data.data[0].id);
                        $("#name").val(data.data[0].name);
                        $("#city").val(data.data[0].city);
                        $("#bio").val(data.data[0].bio);
                        $("#url_name").val(data.data[0].url_name);
                    }
                }
            })
            .catch();
    }

    // editar user
    $("#formEditUser").submit(function (e) {
        e.preventDefault();

        Swal.queue([
            {
                title: "Carregando...",
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    Swal.showLoading();
                    $.post(window.location.origin + "/edit-user", {
                        id: $("#id").val(),
                        name: $("#name").val(),
                        url_name: $("#url_name").val(),
                        city: $("#city").val(),
                        state: $("#state").val(),
                        latitude: $("#latitude").val(),
                        longitude: $("#longitude").val(),
                        bio: $("#bio").val(),
                    })
                        .then(function (data) {
                            if (data.status == "success") {

                                loadUser();

                                $("#formAddLink").each(function () {
                                    this.reset();
                                });

                                Swal.fire({
                                    icon: "success",
                                    text: "Perfil editado com sucesso!",
                                    showConfirmButton: false,
                                    showCancelButton: true,
                                    cancelButtonText: "OK",
                                    onClose: () => {},
                                });
                            } else if (data.status == "error") {
                                // showError(data.message);
                                Swal.fire({
                                    icon: "error",
                                    text: data.message,
                                    showConfirmButton: false,
                                    showCancelButton: true,
                                    cancelButtonText: "OK",
                                    onClose: () => {},
                                });
                            }
                        })
                        .catch();
                },
            },
        ]);
    });

    // editar password
    $("#formEditPass").submit(function (e) {
        e.preventDefault();

        if($("#password").val() != $("#password2").val()){
            Swal.fire({
                icon: "error",
                text: "Senhas informadas não são iguais!",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonText: "OK",
                onClose: () => {},
            });
            return false;
        }

        Swal.queue([
            {
                title: "Carregando...",
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    Swal.showLoading();
                    $.post(window.location.origin + "/edit-pass", {
                        id: $("#id").val(),
                        password: $("#password").val(),
                    })
                        .then(function (data) {
                            if (data.status == "success") {

                                loadUser();

                                $("#formAddLink").each(function () {
                                    this.reset();
                                });

                                Swal.fire({
                                    icon: "success",
                                    text: "Senha editada com sucesso!",
                                    showConfirmButton: false,
                                    showCancelButton: true,
                                    cancelButtonText: "OK",
                                    onClose: () => {},
                                });
                            } else if (data.status == "error") {
                                // showError(data.message);
                                Swal.fire({
                                    icon: "error",
                                    text: data.message,
                                    showConfirmButton: false,
                                    showCancelButton: true,
                                    cancelButtonText: "OK",
                                    onClose: () => {},
                                });
                            }
                        })
                        .catch();
                },
            },
        ]);
    });

});
