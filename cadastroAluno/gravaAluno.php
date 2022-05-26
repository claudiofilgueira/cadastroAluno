<?php
require_once("connect.php");

#echo "O nome informado foi: " .$_POST['nome'];


$nome = $_POST['nome'];
global $conn;

if ($_POST){
echo "o valor passado foi: ".$nome;
}else{
    echo "Sem post.";}
#gravar($conn, $nome);

function gravar($conn, $nome){
    $sql = "INSERT INTO aluno (id,nome) VALUES (null,'{$nome}')";

    if(mysqli_query($conn, $sql)){

        echo "Cadastro efetuado com sucesso!";
    }else{
        echo "deu ruim " .$sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>