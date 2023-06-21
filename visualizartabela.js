$(document).ready(function () {
  $('.dashboard-stat a.more').on('click', function () {
    $('.portlet.box').removeClass('grey');
    $('.portlet.box').removeClass('green');
    $('.portlet.box').removeClass('blue');
    $('.portlet.box').removeClass('purple');
    var cor = $(this).closest('.dashboard-stat').attr('class').split(' ')[1];
    $('.portlet.box').addClass(cor);
  });

  $(".tabela").hide();
  $("#clientes-box").click(function () {
    $(".tabela").not(".tabela-clientes").hide();
    $(".tabela-clientes").show();
  });
  $("#usuarios-box").click(function () {
    $(".tabela").not(".tabela-usuarios").hide();
    $(".tabela-usuarios").show();
  });
  $("#fornecedores-box").click(function () {
    $(".tabela").not(".tabela-fornecedores").hide();
    $(".tabela-fornecedores").show();
  });

});
