<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Sistema de Cadastro do Perfil do Estudante</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        h1, h5, label{color: orange;}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
  </head>
  <body>


<?php  
session_start();
   $img=(isset($_SESSION['imagem']) && !empty($_SESSION['imagem']))?$_SESSION['imagem']:"img/avatar-none.png";
    ?>


      <div class="container">
        <h1 class="jumbotron text-center">Cadastro do Perfil do Estudante</h1>



           
        <form method="post" action="gravaAluno.php">

        <div class="form-row ">
            
            <div class="col-md-12 " id="results">
                <figure class="mx-auto d-block ">
                    <img src="<?=$img?>" class="mx-auto d-block img-fluid rounded " alt="Foto do aluno">
                </figure><br/>
                
            </div>
            <div class="col-md-12 ">
                <input type="button" class="btn btn-primary mx-auto d-block" data-toggle="modal" data-target="#cadastrar" name="urlFoto"  value="Escolher Foto"/>
                <input type="hidden" name="image" class="image-tag"/>
            </div>
        </div> 

            <div class="form-row ">
                <div class="col">  
                    <label for="cpf" >CPF</label>
                    <input type="number" id="cpf" class="form-control" placeholder="CPF" name="cpf">
                </div>
            </div>
            <div class="form-row ">
                <div class="col">
                    <label for="nome" class="">Nome do candango</label>
                    <input type="text" id="nome" class="form-control" placeholder="Nome Completo" minlength="15" name="nome">
                </div>
            </div>
            <div class="form-row  ">
                <div class="col-md-4 ">
                    <label for="email" class="">E-mail</label>
                    <input type="text" id="email" class="form-control " placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email">
                </div>
            
                <div class="col">
                    <label for="telefone" class="">Telefone</label>
                    <input type="tel" id="telefone" class="form-control " placeholder="Telefone" name="telefone">
                </div>
                              
                <div class="col">
                    <label for="nascimento" class="">Data de Nascimento</label>
                    <input type="date" id="nascimento" class="form-control " name="nascimento">
                </div>
            </div>   
            <div class="form-row ">
                <div class="col-md-6">
                    <label for="endereco" class="">Endereço</label>
                    <input type="text" id="endereco" class="form-control" placeholder="Endereço" name="endereco">
                </div>
            
                <div class="col-md-6">
                    <label for="bairro" class="">Bairro</label>
                    <input type="text" id="bairro" class="form-control" placeholder="Bairro" name="bairro">
                </div>
            </div>          
            <div class="form-row ">   
                <div class="col-md-6">
                    <label for="escolaridade" class="">Nível de escolaridade</label>
                    <select id="escolaridade" class="form-control" name="escolaridade">
                        <option value="escolha" selected>Escolha uma opção</option>
                        <option value="emi">Ensino Médio Incompleto</option>
                        <option value="emc">Ensino Médio Completo</option>
                        <option value="tec">Técnico</option>
                        <option value="esi">Ensino Superiro Incompleto</option>
                        <option value="esc">Ensino Superiro Completo</option>
                        <option value="pge">Pós Graduação - Especialização</option>
                        <option value="mes">Mestrado</option>
                        <option value="dou">Doutorado</option>

                    </select>
                </div>
           
                <div class="col-md-6">
                    <label for="instituicao" class="">Estuda em outra instituição atualmente</label>
                    <select id="instituicao" class="form-control" name="estuda">
                        <option value="escolha" selected>Escolha uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                      </select>
                </div>
            </div>  
            <div class="form-row ">   
                <div class="col">
                    <label for="qualInst" class="">Caso afirmativo, qual instituição?</label>
                    <input type="text" id="qualInst" class="form-control" placeholder="Informe a Instituição" name="instituicao">
                </div>
            </div>     
            <div class="form-row ">   
                <div class="col">
                    <label for="curso" class="">Qual o Curso?</label>
                    <input type="text" id="curso" class="form-control" placeholder="Informe o curso realizado" name="curso">
                </div>
            </div>     
            <div class="form-row ">   
                <div class="col">
                    <label for="motivo" class="">Por qual motivo você escolheu se matricular em um curso do Senac RJ?</label>
                    <textarea id="motivo" class="form-control" placeholder="Informe o motivo" name="motivo"></textarea>
                </div>
            </div>          
            <div class="form-row ">   
                <div class="col">
                    <label for="razao" class="">O que te levou a escolher este curso?</label>
                    <textarea id="razao" class="form-control" placeholder="Informe o motivo" name="razao"></textarea>
                </div>
            </div>     
            <div class="form-row ">   
                <div class="col">
                    <label for="experiencia" class="">Você tem experiência na área profissional do curso?</label>
                    <textarea id="experiencia" class="form-control" placeholder="Informe a sua experiência" name="experiencia"></textarea>
                </div>
            </div>           
            <div class="form-row ">   
                <div class="col">
                    <label for="expectativas" class="">Qual são suas expectativas após a conclusão do curso?</label>
                    <textarea id="expectativas" class="form-control" placeholder="Informe a sua expectativa" name="expectativa"></textarea>
                </div>
            </div>                                                                         
            
            <input type="submit" value="Salvar Cadastro" class="btn btn-success" />
            <input type="reset" value="Lmpar Tela" class="btn btn-warning" />
          </form>
        
      </div>


  
  <!-- Modal -->
  <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Escolha a sua melhor foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             <form method="POST" action="http://localhost/cadastroaluno/storeImage.php">
                 <div id="my_camera" ></div>
                 <input type="hidden" name="image" class="image-tag" />
                 <input type="submit" onClick="take_snapshot()" class="btn btn-primary"></submit>
               
            </form>
        </div>
      
      </div>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script language="JavaScript">
      Webcam.set({
        width: 490,
        height: 390,
        image_format: "jpeg",
        jpeg_quality: 100,
      });

      Webcam.attach("#my_camera");
 
      function take_snapshot() {
        Webcam.snap(function (data_uri) {
          $(".image-tag").val(data_uri);
          document.getElementById("results").innerHTML =
            '<img src="' + data_uri + '" class="mx-auto d-block img-fluid rounded " alt="Foto do aluno"/>';
        });
        $('.modal').modal('hide');
      }

      
    </script>
    
  </body>
</html>