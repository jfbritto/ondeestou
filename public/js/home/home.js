$(document).ready(function () {
    loadSocialNetwork();
    loadLinks();
    loadUser();

    $("#newLinkBtn").on("click", function () {
        $("#addLinkModal").modal("show");
    });

    $("#lista-links").on("click", ".editLink", function () {

        Swal.queue([{title: "Carregando...",
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    Swal.showLoading();
                },
            },
        ]);

        let id = $(this).data("id");
        loadEditModal(id);
    });

    $("#lista-links").on("click", ".openLink", function () {
        let link = $(this).data("link");
        window.open(link, "_blank");
    });

    // listar redes sociais
    function loadSocialNetwork() {
        $.get(window.location.origin + "/search-social-network", {})
            .then(function (data) {
                if (data.status == "success") {
                    $("#id_social_network").html("");

                    $("#id_social_network").append(`
                    <option value="">
                        Selecione
                    </option>
                `);

                    if (data.data.length > 0) {
                        for (var i in data.data) {
                            $("#id_social_network").append(`
                            <option value="${data.data[i].id}">
                                ${data.data[i].name}
                            </option>
                        `);
                        }
                    } else {
                        $("#id_social_network").append(`
                        <option value="">
                            Nenhuma rede encontrada
                        </option>
                    `);
                    }
                }
            })
            .catch();
    }

    //listar os links cadastrados do usuário logado
    function loadLinks() {
        $.get(window.location.origin + "/search-links", {})
            .then(function (data) {
                if (data.status == "success") {
                    $("#lista-links").html("");

                    if (data.data.length > 0) {
                        for (var i in data.data) {
                            $("#lista-links").append(`
                            <div class="list-group" style="margin-bottom: 10px;">
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="background-color: ${data.data[i].color}; color: #fff">
                                    ${data.data[i].icon}
                                    <span>${data.data[i].name}</span>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-light editLink" data-id="${data.data[i].id}"><i class="fas fa-pen"></i></button>
                                    </div>
                                </a>
                            </div>

                        `);
                        }
                    }
                }
            })
            .catch();

            // <button type="button" class="btn btn-light openLink" data-link="${data.data[i].link}"><i class="fas fa-link"></i></button>
    }

    //carregar informações do usuário logado
    function loadUser() {
        $.get(window.location.origin + "/search-user-by-id", {})
            .then(function (data) {
                if (data.status == "success") {
                    if (data.data.length > 0) {
                        let url =
                            $("#txturlhidden").val() + data.data[0].url_name;
                        $("#txturl").val(url);
                    }
                }
            })
            .catch();
    }

    // cadastrar novo link
    $("#formAddLink").submit(function (e) {
        e.preventDefault();

        Swal.queue([
            {
                title: "Carregando...",
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    Swal.showLoading();
                    $.post(window.location.origin + "/add-link", {
                        id_social_network: $("#id_social_network").val(),
                        link: $("#link").val(),
                    })
                        .then(function (data) {
                            if (data.status == "success") {
                                $("#addLinkModal").modal("hide");
                                loadSocialNetwork();
                                loadLinks();

                                $("#formAddLink").each(function () {
                                    this.reset();
                                });

                                Swal.fire({
                                    icon: "success",
                                    text: "Link cadastrado com sucesso!",
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

    // listar redes sociais
    function loadEditModal(id) {
        $.get(window.location.origin + "/search-link-by-id", {
            id:id
        })
            .then(function (data) {

                let dataLink = data;

                if (dataLink.status == "success") {

                    $.get(window.location.origin + "/search-social-network", {})
                    .then(function (data) {

                        let dataNetwork = data;

                        if (dataNetwork.status == "success") {
                            $("#id_social_network_edit").html("");

                            if (dataNetwork.data.length > 0) {
                                for (var i in dataNetwork.data) {
                                    $("#id_social_network_edit").append(`
                                        <option value="${dataNetwork.data[i].id}" ${dataLink.data[0].id_social_network==dataNetwork.data[i].id?'selected':''}>
                                            ${dataNetwork.data[i].name}
                                        </option>
                                    `);
                                }
                            } else {
                                $("#id_social_network_edit").append(`
                                <option value="">
                                    Nenhuma rede encontrada
                                </option>
                            `);
                            }

                            Swal.close();
                            $("#editLinkModal").modal("show");
                        }
                    })
                    .catch();
                        
                    $("#link_edit").val(dataLink.data[0].link);
                    $("#id_link_edit").val(dataLink.data[0].id);
                }
            })
            .catch();
    }

    // editar link
    $("#formEditLink").submit(function (e) {
        e.preventDefault();

        Swal.queue([
            {
                title: "Carregando...",
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    Swal.showLoading();
                    $.post(window.location.origin + "/edit-link", {
                        id_social_network: $("#id_social_network_edit").val(),
                        link: $("#link_edit").val(),
                        id_link: $("#id_link_edit").val(),
                    })
                        .then(function (data) {
                            if (data.status == "success") {
                                $("#editLinkModal").modal("hide");
                                loadLinks();

                                $("#formAddLink").each(function () {
                                    this.reset();
                                });

                                Swal.fire({
                                    icon: "success",
                                    text: "Link editado com sucesso!",
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

    //copiar texto
    $("#txturlbtn").on("click", function () {
        copiarTexto();
    });

    function copiarTexto() {
        const inputTest = document.querySelector("#txturl");
        inputTest.select();
        document.execCommand("copy");
    }
});
