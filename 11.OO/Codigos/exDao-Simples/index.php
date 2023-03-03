<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> 

  <title>Adiciona Aluno</title>
</head>

<body>

<div class="container">
    <h3>DAO (Data Access Object) - Cadastrar Aluno</h3>
    <form method="post" action="class/AlunoController.php">

      <input type="hidden" name="acao" value="inserir">

      <div class="form-group">
        <label>RA</label>
        <input type="text" class="form-control" name="ra">
      </div>

      <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome">
      </div>


      <div class="form-group">
        <label>Curso</label>
        <input type="text" class="form-control" name="curso">
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</div>

</body>
</html>