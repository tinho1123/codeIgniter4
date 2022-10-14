$(".btn-editar").on("click", function () {
  $.ajax({
    url: "<?= base_url('empresas/get-dados') ?>" + "/" + $(this).data("id"),
    type: "get",
    beforeSend: function () {},
  })
    .done(function (response) {
      $("#editarEmpresa #uuid").val(response[0].id);
      $("#editarEmpresa #inputRazaoSocial").val(response[0].razao_social);
      $("#editarEmpresa #inputFundacao").val(response[0].fundacao);
      $("#editarEmpresa #inputEmail").val(response[0].email);
      $("#editarEmpresa #checkboxAtivo").prop(
        "checked",
        response[0].ativo == "S" ? true : false
      );
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
  $("#editarEmpresa").modal("show");
});

$(".btn-excluir").on("click", function () {
  $.ajax({
    url: "<?= base_url('empresas/delete') ?>" + "/" + $(this).data("id"),
    type: "delete",
    beforeSend: function () {},
  })
    .done(function (response) {
      location.reload();
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
});
