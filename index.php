<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
     <div class="row">
      <div class="col">
      <h1>Cadastro</h1>
      <form action="cadastro_script.php" method="POST">
      <div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" name="nome">
</div>
<div class="form-group">
  <label for="endereço">Endereço</label>
  <input type="text" class="form-control" name="endereco">
</div>
<div class="form-group">
  <label for=telefone">Telefone</label>
  <input typer="text" class="form-control" name="telefone">
<div class="form-group">
  <label for="telefone">Email</label>
  <input typer="email" class="form-control" name="email">
</div>
<label for="telefone">Data de Nascimento</label>
  <input typer="date" class="form-control" name="data_nascimento">
   </div>
   <div class="form-group">
     <input type="submit" class="btn btn-success">
</div>
  </form>
    </div>
  </div>
</div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>