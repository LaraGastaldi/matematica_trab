<?php

?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-3">
      <!-- BARRA DE NAVEGAÇÃO -->
      <ul class="nav nav-tabs">
        <li class="nav-item" id="nav1">
          <a class="nav-link active" data-toggle="tab" href="#div1">Juros</a>
        </li>
        <li class="nav-item" id="nav2">
          <a class="nav-link" data-toggle="tab" href="#div2">Montante</a>
        </li>
        <li class="nav-item" id="nav3">
          <a class="nav-link" data-toggle="tab" href="#div3">A vista ou a prazo? (com investimento)</a>
        </li>
      </ul>
    </div>
    <!-- /// -->
    <div class="tab-content">
      <div id="div1" class="container tab-pane active">
        <h2>Cálculo de juros</h2>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">A vista</span>
          </div>
          <input type="number" class="form-control" step="any">
          <div class="input-group-prepend">
            <span class="input-group-text">Valor por parcela</span>
          </div>
          <input type="number" class="form-control" step="any">
          <div class="input-group-prepend">
            <span class="input-group-text">Meses de parcela</span>
          </div>
          <input type="number" class="form-control">
        </div>
        <button type="button" class="btn btn-primary btn-block">Calcular</button>
      </div>
      <!-- /// -->
      <div id="div2" class="container tab-pane fade">
        <h2>Cálculo do montante</h2>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">A vista</span>
          </div>
          <input type="number" class="form-control" id="mont-vista" step="any">
          <div class="input-group-prepend">
            <span class="input-group-text">Juros (%)</span>
          </div>
          <input type="number" class="form-control" id="mont-juros" step="any">
          <div class="input-group-prepend">
            <span class="input-group-text">Meses de parcela</span>
          </div>
          <input type="number" class="form-control" id="mont-nparcela">
        </div>
        <button type="button" class="btn btn-primary btn-block" id="montante">Calcular</button>
      </div>
      <!-- /// -->
      <div id="div3" class="container tab-pane fade">
        <h2>A vista ou a prazo?</h2>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Dinheiro na caixa</span>
          </div>
          <input type="number" class="form-control">
          <div class="input-group-prepend">
            <span class="input-group-text">% do investimento</span>
          </div>
          <input type="number" class="form-control">
          <div class="input-group-prepend">
            <span class="input-group-text">A vista</span>
          </div>
          <input type="number" class="form-control">
          <div class="input-group-prepend">
            <span class="input-group-text">Valor por parcela</span>
          </div>
          <input type="number" class="form-control">
          <div class="input-group-prepend">
            <span class="input-group-text">Meses de parcela</span>
          </div>
          <input type="number" class="form-control">
        </div>
        <button type="button" class="btn btn-primary btn-block">Calcular</button>
      </div>
      <div class="container" id="resposta">
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
