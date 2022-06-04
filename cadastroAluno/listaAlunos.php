<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Perfil do Estudante</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        h1, h5, label{color: orange;}
    </style>
  </head>
  <body>
  <?php 

    require_once('connect.php');
    session_start();
    $img=(isset($_SESSION['imagem']) && !empty($_SESSION['imagem']))?$_SESSION['imagem']:"img/avatar-none.png";
    $sql="Select * from aluno";
    $resultado = mysqli_query($conn, $sql) or die ("Erro ao acessar o Registro.");
    ?>

  <main style="border:solid 1px red; height:29.7cm; width:21cm; margin: 0 auto;"> 

  <div class="container">
      <div class="row">
          <h1 style="text-align:center;" class="col-sm-8">Lista de Estudantes</h1>
     </div>
     <div class="row">
        <table class="table">
            <tr >
                <td>Nome</td>
                <td>E-mail</td>
                <td>Telefone</td>
                <td>Grupo</td>
                <td>Editar</td>
                <td>Exibir</td>

            </tr>
         <?php while($regsitro = mysqli_fetch_array($resultado)){
             $cpf = $regsitro['cpf'];             
             $nome = $regsitro['nome'];
             $email = $regsitro['email'];
             $telefone = $regsitro['telefone'];

             echo "<tr>";
             echo " <td>$nome</td>";
             echo " <td>$email</td>";
             echo " <td>$telefone</td>";
             echo " <td></td>";    
             echo ' <td><a href="">Editar</a></td>';
             echo ' <td><a href="perfilAluno.php?cpf='.$cpf.'">Exibir</a></td>';
         }

         ?>


        </table>


     </div>
</div>


   

</main>
  </body>
</html>