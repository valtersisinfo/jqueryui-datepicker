$(document).ready(function()
{
  $.datepicker.setDefaults( $.datepicker.regional["pt-BR"]);

  // Setter
  $("#IData").datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true,
    //maxDate: new Date(),
    //minDate: "1990-03-26",
    showButtonPanel: true,
    yearRange: "1990:2021",
  });

  $("#IData").on("change", function()
  {
    Vi += 1;
    $("#IEvento").val(Vi);
  });

  $("#STema, #SIdioma").on("change", function(){
    $("body").css("display", "none");
    $("body").append("<form id='FPost' method='POST' action='index.php'></form>")
    $("#FPost").append("<input type='hidden' name='tema' value='" + $("#STema option:selected").html() + "'>");
    $("#FPost").append("<input type='hidden' name='idioma' value='" + $("#SIdioma option:selected").html() + "'>");
    $("#FPost").append("<input type='hidden' name='tamanho' value='" + $("#ITamanho").val() + "'>");
    $("#FPost")[0].submit();
    $("#FPost").remove();
  });

  $("#ITamanho").on("input change", function(){
    $("#LTamanho").html($(this).val() + " px");
    $(".ui-datepicker").css("font-size", $(this).val() + "px");
  });
  $("#ITamanho").trigger("change");
  $("#ITamanho").trigger("change");

  var Vi = 0;

  $( "#BData" ).on("click", function(){
    $( "#IData" ).trigger("focus");
    $( "#IData" ).trigger("focus");
  });

  


  /*
    todayBtn: true, // Botao hoje
    todayHighlight: true, // Mostra que dia e hoje
    format: "yyyy-mm-dd", // Formato que a data deve ter
    endDate: new Date(), // Define uma data maxima - Hoje
    autoclose: true, // Fecha automaticamente
    language: $("#ScDatePicker").attr("lang"), // Idioma do sistema
    forceParse: true // Forcar que usuario digite a data
  */

});