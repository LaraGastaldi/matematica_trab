$(document).ready(function() {
  function isNumber(n) {
    return !isNaN(parseFloat(n)) && !isNaN(n - 0);
  }
  $('#juros').click(function() {
      var nparcelas = parseFloat($('#juros-nparcelas').val());
      var vista = parseFloat($('#juros-vista').val());
      var vparcelas = parseFloat($('#juros-vparcelas').val());
      var numeros = [];
      var posicao = 0;
      for (var i = nparcelas; i >= 0; i--) {
        if (posicao === 0) {
          numeros[posicao] = vista;
        } else {
          numeros[posicao] = -vparcelas;
        }
        posicao = posicao + 1;
      }
      numeros.reverse(numeros);
      var valores = [0, 2];
    	var tamanho = false;
      do {
        var sinal = 0;
        var result1 = 0;
        var result2 = 0;
        var terceiro = (valores[0] + valores[1]) / 2;
        for (var j = 0; j <= nparcelas; j++) {
          sinal = sinal + Math.pow(terceiro, j) * numeros[j];
          result1 = result1 + Math.pow(valores[0], j) * numeros[j];
          result2 = result2 + Math.pow(valores[1], j) * numeros[j];
        }
        if ((result1 > -(Math.pow(10, -7)) && sinal > -(Math.pow(10, -7))) || (result1 < Math.pow(10, -7) && sinal < Math.pow(10, -7))) {
          valores[0] = terceiro;
        } else if ((result2 > -(Math.pow(10, -7)) && sinal > -(Math.pow(10, -7))) || (result2 < Math.pow(10, -7) && sinal < Math.pow(10, -7))) {
          valores[1] = terceiro;
        }
        if (Math.abs(valores[1] - valores[0]) < Math.pow(10, -7)) {
          tamanho = true;
          var resultadofinal = (valores[0] + valores[1])/2;
          resultadofinal = (resultadofinal - 1)*100;
        } else {
          tamanho = false;
        }
      } while (tamanho === false);
      if((parseFloat(resultadofinal))<0){
        $('#resposta').append("<div class='alert alert-warning alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Ops! Verifique os valores</div>");
      }else if (isNumber(parseFloat(resultadofinal))) {
        $('#resposta').append("<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>A porcentagem do juros é de " + resultadofinal + "%</div>");
      }else{
        $('#resposta').append("<div class='alert alert-warning alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Ops! Verifique os valores</div>");
      }
    });
  $('#montante').click(function() {
  var vista = parseFloat($('#mont-vista').val());
  var juros = parseFloat($('#mont-juros').val());
  var pjuros = juros / 100;
  var nparcelas = parseFloat($('#mont-nparcelas').val());
  var montante = vista * Math.pow(1 + pjuros, nparcelas);
  montante = Number((montante).toFixed(2));
  if (isNumber(parseFloat(montante))) {
    $('#resposta').append("<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>O valor do montante é de R$" + montante + "</div>");
  } else {
    $('#resposta').append("<div class='alert alert-warning alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Ops! Verifique os valores</div>");
  }
});
});
