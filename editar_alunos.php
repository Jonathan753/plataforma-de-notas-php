<?php
require 'conexao.php'; 

$id = $_GET['edi_n'];
$nota1 = $_POST['notaav1'];
$nota2 = $_POST['notaav2'];
$notafinal = ($nota1+$nota2)/2;

$sql = "UPDATE notas SET valor_notaav1 = '$nota1', valor_notaav2 = '$nota2', valor_notafinal = '$notafinal' WHERE fk_alunos_cpf = '$id'";

mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error($conexao));

header('Location: listar_alunos.php');
?>