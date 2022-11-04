<?php
require 'conexao.php'; 
include 'cabecalho_alunos.php';
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
			<header><h2><span>Cadastrar Aluno<span></h2></header>
			<section>
				<p>Para cadastrar um(a) aluno(a) no sistema, você deve colocar os dados nos lugares correspondentes.</p>
				
				<br>
				
                <form action="inserir_alunos.php" method="POST">
					<p><strong>Insira o novo aluno no sistema: </strong></p>
					<div id="form_part1">
	                Nome: <input type="text" name="nome" /><br />
	                CPF: <input type="number" name="cpf"/><br/>
					Data de nascimento: <input type="date" name="nascimento" /><br />
					</div>
					<br>
					<div id="form_part2">
                    Nota AV1: <input type="text" name="notaav1"/>
					Nota AV2: <input type="text" name="notaav2"/>
					</div>
					<div id="botao">
					<br>
					<input type="submit" value="enviar" />
					</div>
			    </form>
			</section>
			<footer></footer>
        </div>
<?php 
include 'rodape_alunos.php'
?>   