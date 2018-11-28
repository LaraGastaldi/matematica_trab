$(document).ready(function(){
  function isNumber(n) { return !isNaN(parseFloat(n)) && !isNaN(n - 0) }
  $('#juros').click(function(){
    var nparcelas = parseFloat('#juros-nparcelas').val();
    alert(nparcelas);
    var vista = parseFloat('#juros-vista').val();
    var vparcelas = parseFloat('#juros-vparcelas').val();
    var numeros = [];
    var posicao = 0;
    for (var i = nparcelas; i >= 0; i--) {
      if (posicao === 0) {
        numeros[posicao] = vista;
      } else {
        numeros[posicao] = vparcelas;
      }
      posicao = posicao + 1;
    }
    numeros.reverse(numeros);
    for (var i = 0; i <= 2; i += 0.1) {
      var result1 = 0;
      var result2 = 0;
      for (var j = 0; j <= nparcelas; j++) {
        result1 = result1 + Math.pow(i, j) * numeros[j];
        result1 = result1 + Math.pow(i + 1, j) * numeros[j];
      }
      if ((result1 > -(Math.pow(10, -7)) && result2 < Math.pow(10, -7)) || (result1 < Math.pow(10, -7) && result2 > -(Math.pow(10, -7)))) {
        var valores = [i, i + 1];
        var numeroraizes = true;
        break;
      }
    }
    if (!isset(numeroraizes)) {
      var raizes1 = false;
    } else {
      var raizes1 = true;
    }
    if (raizes1) {
      do {
        var sinal = 0;
        var result1 = 0;
        var result2 = 0;
        var terceiro = (valores[0] + valores[1]) / 2;
        for (var i = 0; i <= nparcelas; i++) {
          sinal = sinal + Math.pow(terceiro, i) * numeros[i];
          result1 = result1 + Math.pow(valores[0], i) * numeros[i];
          sinal = sinal + Math.pow(valores[1], i) * numeros[i];
        }
        if ((result1 > -(Math.pow(10, -7)) && sinal > -(Math.pow(10, 7))) || (result1 < Math.pow(10, -7) && sinal < Math.pow(10, -7))) {
          valores[i] = terceiro;
        } else if ((result2 > -(Math.pow(10, -7)) && sinal > -(Math.pow(10, -7))) || (result2 < pow(10, -7) && sinal < Math.pow(10, -7))) {
          valores[i + 1] = terceiro;
        }
        if (Math.abs(valores[i + 1] - valores[i]) < pow(10, -7)) {
          var tamanho = true;
          resultadofinal = (valores[i] + valores[i + 1]) / 2;
          resultadofinal = resultadofinal - 1;
        } else {
          var tamanho = false;
        }
      } while (tamanho === false);
      $('#resposta').html("<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>A porcentagem do juros é de " + resultadofinal +"%</div>");
    }else{
      $('#resposta').html("<div class='alert alert-warning alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Ops! Verifique os valores</div>");
    }
  });
  $('#montante').click(function(){
    var vista = parseFloat($('#mont-vista').val());
    var juros = parseFloat($('#mont-juros').val());
    var pjuros = juros/100;
    var nparcelas = parseFloat($('#mont-nparcelas').val());
    var montante = vista * Math.pow(1 + pjuros, nparcelas);
    montante = Number((montante).toFixed(2));
    if (isNumber(parseFloat(montante))) {
      $('#resposta').html("<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>O valor do montante é de R$" + montante +"</div>");
    }else{
      $('#resposta').html("<div class='alert alert-warning alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Ops! Verifique os valores</div>");
    }
  });
});
