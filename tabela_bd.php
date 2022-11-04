<?php
require 'conexao.php';

$sql = "CREATE TABLE alunos (\n"

    . " cpf INT(11),\n"

    . " nome VARCHAR(50),\n"

    . " data_nascimento DATE,\n"

    . " PRIMARY KEY (cpf)\n"

    . " )";

$sql1 = "CREATE TABLE notas(\n"

    ."id_notas INT(11),\n"

    ."valor_notaav1 FLOAT(2,2),\n"

    ."valor_notaav2 FLOAT(2,2),\n"

    ."valor_notafinal FLOAT(2,2),\n"

    ."fk_alunos_cpf INT(11),\n"

    ."PRIMARY KEY (id_notas),\n"

    ."FOREIGN KEY (fk_alunos_cpf) REFERENCES alunos (cpf)\n"

    .")\n";


mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error($conexao));
mysqli_query($conexao, $sql1) or die ("Erro: " . mysqli_error($conexao));
header('Location: index.php');
exit();
?>