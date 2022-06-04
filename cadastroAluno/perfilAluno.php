<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Perfil do Estudante</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        h1, h5, label{color: orange;}
        p span{font-weight:bolder;}
    </style>
  </head>
  <body>
  <?php 
  require_once('connect.php');
    session_start();
    if($_GET['cpf']){
      $cpf=$_GET['cpf'];
    }
    //$img=(isset($_SESSION['imagem']) && !empty($_SESSION['imagem']))?$_SESSION['imagem']:"img/avatar-none.png";
    $sql = "SELECT * FROM `aluno` WHERE cpf = $cpf;";
    $resultado = mysqli_query($conn, $sql) or die ("Erro ao acessar o Registro.");

    while($regsitro = mysqli_fetch_array($resultado)){
      $nome = $regsitro['nome'];
      $email = $regsitro['email'];
      $telefone = $regsitro['telefone'];
      $img = $regsitro['urlFoto'];
      $nascimento = $regsitro['nascimento'];
      $endereco = $regsitro['endereco'];
      $bairro = $regsitro['bairro'];
      $escolaridade = $regsitro['escolaridade'];
      $estuda = $regsitro['estuda'];
      $instituicao = $regsitro['instituicao'];
      $curso = $regsitro['curso'];
      $motivo = $regsitro['motivo'];
      $razao = $regsitro['razao'];
      $experiencia = $regsitro['experiencia'];
      $expectativa = $regsitro['expectativa'];

      switch ($escolaridade){

        case "emi":
          $escolaridade = "Ensino Médio Incompleto";
          break;

          case "emc":
            $escolaridade = "Ensino Médio Completo";
            break;

          case "tec":
             $escolaridade = "Técnico";
            break;

          case "esi":
            $escolaridade = "Ensino Superiro Incompleto";
            break;

          case "esc":
            $escolaridade = "Ensino Superiro Completo";
            break;    

          case "pge":
            $escolaridade = "Pós Graduação - Especialização";
            break; 

          case "mes":
            $escolaridade = "Mestrado";
            break;     
            
          case "dou":
            $escolaridade = "Doutorado";
            break;            
      }
    
    }
    ?>

  <main style="border:solid 1px red; height:29.7cm; width:21cm; margin: 0 auto;"> 

  <div class="container">
      <div class="row">
          <img alt="Foto do aluno" src="<?=$img?>" class="col-sm-4"/>
         <h1 style="text-align:center;" class="col-sm-8">Perfil do Estudante</h1>
     </div>
     <div class="row">
        <h2><?=$nome;?></h2>
     </div>
     <div class="row">
     <p><span>E-mail:</span> <?=$email?></p>
    </div>
    <div class="row">
     <p><span>Telefone:</span> <?=$telefone?></p>
    </div>
    <div class="row">
     <p><span>Nascimento: </span><?=date('d/m/y',strtotime($nascimento));?></p>
    </div>
    <div class="row">
     <p><span>Endereço:</span> <?=$endereco?></p>
    </div>
    <div class="row">
     <p><span>Bairro:</span> <?=$bairro?></p>
    </div>
    <div class="row">
     <p><span>Escolaridade:</span> <?=$escolaridade?></p>
    </div>
    <div class="row">
     <p><span>Estuda em Outra Instituição: </span><?=$estuda?></p>
    </div>
    <div class="row">
     <p><span>Nome da Instituição que Estuda:</span> <?=$instituicao?></p>
    </div>
    <div class="row">
     <p><span>Curso: </span><?=$curso?></p>
    </div>    
    <div class="row">
     <p><span>Por qual motivo escolheu se matricular em um curso do Senac RJ: </span><?=$motivo?></p>
    </div>  
    <div class="row">
     <p><span>O que o levou a escolher este curso:</span> <?=$razao?></p>
    </div>      
    <div class="row">
     <p><span>Possui experiência na área profissional do curso: </span><?=$experiencia?></p>
    </div>  
    <div class="row">
     <p><span>Quais são suas expectativas após a conclusão do curso:</span> <?=$expectativa?></p>
    </div>      


</div>


   

</main>
  </body>
</html>