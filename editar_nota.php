<?php
require 'conexao.php'; 
include 'cabecalho_alunos.php';
$mudar = $_GET['edita'];
$name = $_GET['nome'];
?>
<div id="left">
 
 <header><h1><span>Yes Solutions<span></h1></header>
 <section>
	 <nav>
		 <a href="form_alunos.php">Cadastrar Aluno</a> |
		 <a href="listar_alunos.php">Lista dos Alunos</a>
	 </nav>
	 <div class="clear"></div>
<section>
</div>
<div id="right">
			<header><h2><span>Editar Nota<span></h2></header>
			<section>
				<p>Para editar a nota do(a) aluno(a) no sistema, você deve colocar os dados nos lugares correspondentes(Caso queira mudar os dados do aluno(a), terá quer excluir e em seguida cadastrar denovo).</p>
			    <br>
				
            <form action="editar_alunos.php?edi_n=<?=$mudar?>" method="POST">
            <p><strong>Alteração de Nota do(a) Aluno(a) <?=$name?></strong></p>
            
	        <div id="form_part2">
            Nota AV1: <input type="text" name="notaav1"/>
            Nota AV2: <input type="text" name="notaav2"/><br/>
            </div>
            <div id="botao">
					<br>
            <input type="submit" value="editar" />
</div>
</form>
<?php 
include 'rodape_alunos.php'
?>   