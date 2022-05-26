<?php
require_once("connect.php");

#echo "O nome informado foi: " .$_POST['nome'];



global $conn;

if ($_POST){
    $cpf = (isset($_POST['cpf'])) ? $cpf = $_POST['cpf'] : mysqli_close($conn);
    $nome = (isset($_POST['nome'])) ? $nome = $_POST['nome'] : mysqli_close($conn);
    $email = (isset($_POST['email'])) ? $email = $_POST['email'] :mysqli_close($conn);
    $telefone = (isset($_POST['telefone'])) ? $telefone = $_POST['telefone'] :mysqli_close($conn);
    $nascimento = (isset($_POST['nascimento'])) ? $nascimento = $_POST['nascimento'] :mysqli_close($conn);
    $endereco = (isset($_POST['endereco'])) ? $endereco = $_POST['endereco'] :mysqli_close($conn);
    $bairro = (isset($_POST['bairro'])) ? $bairro = $_POST['bairro'] :mysqli_close($conn);
    $escolaridade = (isset($_POST['escolaridade'])) ? $escolaridade = $_POST['escolaridade'] :mysqli_close($conn);
    $estuda = (isset($_POST['estuda'])) ? $estuda = $_POST['estuda'] :mysqli_close($conn);
    $instituicao = (isset($_POST['instituicao'])) ? $instituicao = $_POST['instituicao'] :mysqli_close($conn);
    $curso = (isset($_POST['curso'])) ? $curso = $_POST['curso'] :mysqli_close($conn);
    $motivo = (isset($_POST['motivo'])) ? $motivo = $_POST['motivo'] :mysqli_close($conn);
    $razao = (isset($_POST['razao'])) ? $razao = $_POST['razao'] :mysqli_close($conn);
    $experiencia = (isset($_POST['experiencia'])) ? $experiencia = $_POST['experiencia'] :mysqli_close($conn);
    $expectativa = (isset($_POST['expectativa'])) ? $endereco = $_POST['expectativa'] :mysqli_close($conn);
    $urlFoto = (isset($_POST['urlFoto'])) ? $urlFoto = $_POST['urlFoto'] :mysqli_close($conn);

echo "CPF".$cpf."<br>", "nome".$nome."<br>","e-mail".$email."<br>", "Telefone".$telefone."<br>", "Nascimento" .$nascimento."<br>","endereço: ".$endereco."<br>", "bairro".$bairro."<br>";
echo $escolaridade."<br>", $estuda."<br>", $instituicao."<br>", $curso."<br>", $motivo."<br>", $razao."<br>", $experiencia."<br>", $expectativa."<br>", $urlFoto;

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