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
                        city: $("#city").val(),
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

});
