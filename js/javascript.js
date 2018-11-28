$(document).ready(function(){
  $('#montante').click(function(){
    var vista = parseFloat($('#mont-vista').val());
    var juros = parseFloat($('#mont-juros').val());
    var pjuros = juros/100;
    var nparcelas = parseInt($('#mont-nparcelas').val());
    var montante = 0;
    montante = vista * Math.pow(1+juros, nparcelas);
    $('#resposta').text(montante);
  });
});
