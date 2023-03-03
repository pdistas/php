<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>

<a href="index.html">Home</a>
<hr>

<h2>Consulta de Alunos</h2>
<div>
    <form method="post">

        RA:<br>
        <input type="text" size="10" name="ra">
        <input type="submit" value="Consultar">
        <hr>
    </form>
</div>

</body>
</html>

<?php
    include("conexaoBD.php");

     if ($_SERVER["REQUEST_METHOD"] === 'POST') {

         if (isset($_POST["ra"]) && ($_POST["ra"] != "")) {
             $ra = $_POST["ra"];
             $stmt = $pdo->prepare("select * from alunos 
             where ra= :ra order by curso, nome");
             $stmt->bindParam(':ra', $ra);
         } else {
             $stmt = $pdo->prepare("select * from alunos 
             order by curso, nome");
         }

         try {
             //buscando dados
             $stmt->execute();

             echo "<form method='post'><table border='1px'>";
             echo "<tr><th></th><th>RA</th><th>Nome</th><th>Curso</th></tr>";

             while ($row = $stmt->fetch()) {
                 echo "<tr>";
                 echo "<td><input type='radio' name='raAluno' 
                      value='" . $row['ra'] . "'>";
                 echo "<td>" . $row['ra'] . "</td>";
                 echo "<td>" . $row['nome'] . "</td>";
                 echo "<td>" . $row['curso'] . "</td>";
                 echo "</tr>";
             }

             echo "</table><br>
             
             <button type='submit' formaction='remove.php'>Excluir Aluno</button>
             <button type='submit' formaction='edicao.php'>Editar Aluno</button>
             
             </form>";


         } catch (PDOException $e) {
             echo 'Error: ' . $e->getMessage();
         }

         $pdo = null;
     }
?>