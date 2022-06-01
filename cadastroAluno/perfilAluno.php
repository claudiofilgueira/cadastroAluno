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
    session_start();
    $img=(isset($_SESSION['imagem']) && !empty($_SESSION['imagem']))?$_SESSION['imagem']:"img/avatar-none.png";
    ?>

  <main style="border:solid 1px red; height:29.7cm; width:21cm; margin: 0 auto;"> 

  <div class="container">
      <div class="row">
          <img alt="Foto do aluno" src="<?=$img?>" class="col-sm-4"/>
         <h1 style="text-align:center;" class="col-sm-8">Perfil do Estudante</h1>
     </div>
     <div class="row">
        <h2><?php =$nome;?></h2>

     </div>
</div>


   

</main>
  </body>
</html>