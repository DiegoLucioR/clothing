<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/frete.css">
</head>

<body style="background-color:black ;">
<img class="frete" src="../images/logoPreto-Branco.png" alt="">
    <form class="row col-12 mt-5 p-5">
  <div class="col-md-6">
    <label class= text-light for="inputEmail4" class="form-label">contato</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label class= text-light for="inputPassword4" class="form-label">Data de Aniversário(opcional)</label>
    <input type="text" class="form-control" id="inputDataAniversario">
  </div>
  <div class="col-12">
    <label class=text-light for="inputAddress" class="form-label">N°</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="ex:1234...">
  </div>
  <div class="col-12">
    <label class=text-light for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento,casa ou estúdio">
  </div>
  <div class="col-md-6">
    <label class= text-light for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label class= text-light for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label class= text-light for="inputZip" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class=text-light class="form-check-label" for="gridCheck">
        Salvar informações
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">confirmar</button>
  </div>
</form>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>