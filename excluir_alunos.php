<?php
require 'conexao.php';

$id = $_GET['teste'];

$sql = "DELETE FROM alunos WHERE cpf = '$id'";
mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error($conexao));
header('Location: listar_alunos.php');
exit();

?>