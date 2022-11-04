<?php
$servename = "localhost";
$username = "root";
$password = "";
$bd = "bdcurso";

$conexao = mysqli_connect($servename, $username, $password, $bd);

if(mysqli_connect_errno()){
    printf("<p style = 'color red';> Conexão Falhou: %s\n</p>", mysqli_connect_error());
}
?>