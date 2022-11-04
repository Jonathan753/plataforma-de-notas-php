<?php
require 'conexao.php'; 

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$nota1 = $_POST['notaav1'];
$nota2 = $_POST['notaav2'];
$media = ($nota1+$nota2)/2;
$fk = $cpf;

$sql = "INSERT INTO alunos (nome, cpf, data_nascimento) VALUE ('$nome', '$cpf', '$nascimento')";
$sql1 = "INSERT INTO notas (valor_notaav1, valor_notaav2, valor_notafinal, fk_alunos_cpf) VALUE ('$nota1', '$nota2', '$media', '$fk')";

mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error($conexao));
mysqli_query($conexao, $sql1) or die ("Erro: " . mysqli_error($conexao));

header('Location: listar_alunos.php');
?>