<?php
require_once("connect.php");

#echo "O nome informado foi: " .$_POST['nome'];



global $conn;

if ($_POST){
    $cpf = (isset($_POST['cpf'])) ? $cpf = $_POST['cpf'] : "";
    $nome = (isset($_POST['nome'])) ? $nome = $_POST['nome'] :"";
    $email = (isset($_POST['email'])) ? $email = $_POST['email'] :"";
    $telefone = (isset($_POST['telefone'])) ? $telefone = $_POST['telefone'] :"";
    $nascimento = (isset($_POST['nascimento'])) ? $nascimento = $_POST['nascimento'] :"";
    $endereco = (isset($_POST['endereco'])) ? $endereco = $_POST['endereco'] :"";
    $bairro = (isset($_POST['bairro'])) ? $bairro = $_POST['bairro'] :"";
    $escolaridade = (isset($_POST['escolaridade'])) ? $escolaridade = $_POST['escolaridade'] :"";
    $estuda = (isset($_POST['estuda'])) ? $estuda = $_POST['estuda'] :"";
    $instituicao = (isset($_POST['instituicao'])) ? $instituicao = $_POST['instituicao'] :"";
    $curso = (isset($_POST['curso'])) ? $curso = $_POST['curso'] :"";
    $motivo = (isset($_POST['motivo'])) ? $motivo = $_POST['motivo'] :"";
    $razao = (isset($_POST['razao'])) ? $razao = $_POST['razao'] :"";
    $experiencia = (isset($_POST['experiencia'])) ? $experiencia = $_POST['experiencia'] :"";
    $expectativa = (isset($_POST['expectativa'])) ? $expectativa = $_POST['expectativa'] :"";
    $urlFoto = (isset($_POST['urlFoto'])) ? $urlFoto = $_POST['urlFoto'] :"";

    
echo "CPF".$cpf."<br>", "nome".$nome."<br>","e-mail".$email."<br>", "Telefone".$telefone."<br>", "Nascimento" .$nascimento."<br>","endereço: ".$endereco."<br>", "bairro".$bairro."<br>";
echo "escolaridade".$escolaridade."<br>", "estuda".$estuda."<br>", "instituição".$instituicao."<br>", "curso".$curso."<br>", "motivo".$motivo."<br>", "razao".$razao."<br>", "exepriência".$experiencia."<br>", "expectativa".$expectativa."<br>", "urlFoto".$urlFoto;

}else{
    return;}
gravar($conn, $cpf, $nome, $email, $telefone, $nascimento, $endereco, $bairro, $escolaridade, $estuda, $instituicao, $curso, $motivo, $razao, $experiencia, $expectativa, $urlFoto);

function gravar($conn, $cpf, $nome, $email, $telefone, $nascimento, $endereco, $bairro, $escolaridade, $estuda, $instituicao, $curso, $motivo, $razao, $experiencia, $expectativa, $urlFoto){
    $sql = "INSERT INTO aluno (cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, estuda, instituicao, curso, motivo, razao, experiencia, expectativa, urlFoto) VALUES ('{$cpf}','{$nome}', '{$email}', '{$telefone}', '{$nascimento}', '{$endereco}', '{$bairro}', '{$escolaridade}', '{$estuda}', '{$instituicao}', '{$curso}', '{$motivo}', '{$razao}','{$experiencia}', '{$expectativa}', '{$urlFoto}')";

    if(mysqli_query($conn, $sql)){

        echo "Cadastro efetuado com sucesso!";
    }else{
        echo "deu ruim " .$sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>