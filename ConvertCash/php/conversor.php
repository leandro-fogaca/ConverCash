<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>CC - Conversor</title>
  </head>

  <body>
    
    <header>
      <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <div class="container">
          
          <a href="../php/index.php" class="navbar-brand">
            <img src="../img/logocc.png" width="142">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="conversor.php" class="nav-link">Conversor</a>
              </li>
              <li class="nav-item">
                <a href="suporte.php" class="nav-link">Suporte</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <div class="container">
    <div class="row justify-content-center">
      <img class="col-sm-6 col-md-5 col-lg-4 col-lg-3 col-xl-3 col-xxl-3" src="../img/conversao.png" alt="Logo ">
    </div>

    <div data-js="currencies-container" class="row justify-content-center mb-4 mt-4">
      <div class="col-sm-3 col-lg-2">
        <select data-js="currency-one" class="form-select"></select>
      </div>

      <div class="col-sm-3 col-lg-2">
        <select data-js="currency-two" class="form-select"></select>
      </div>
    </div>

    <div class="row justify-content-center align-items-center mb-4 mt-4">
      <div class="col-sm-3 col-md-2">
        <input data-js="currency-one-times" type="number" min="1" class="form-control form-control-lg" value="1">
      </div>
      
      <div class="col-sm-3 col-md-2">
        <p data-js="converted-value" class="converted-value fs-1 text-center mb-0"></p>
      </div>

      <p data-js="conversion-precision" class="conversion-precision text-center m-4"></p>
    </div>
  </div>

  <script src="./app.js"></script>
</body>
</html>