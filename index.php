<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <title>cálculos financeiros</title>
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
          <input type="number" class="form-control" step="any" id="juros-vista">
          <div class="input-group-prepend">
            <span class="input-group-text">Valor por parcela</span>
          </div>
          <input type="number" class="form-control" step="any" id="juros-vparcelas">
          <div class="input-group-prepend">
            <span class="input-group-text">Meses de parcela</span>
          </div>
          <input type="number" class="form-control" id="juros-nparcelas">
        </div>
        <br>
        <button type="button" class="btn btn-primary btn-block" id="juros">Calcular</button>
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
          <input type="number" class="form-control" id="mont-nparcelas">
        </div>
        <br>
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
      <br>
      <div class="container" id="resposta">
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
