<?php
 require 'conexao.php';
 $listagem_aluno= mysqli_query($conexao, "SELECT * FROM alunos");
 $listagem_nota= mysqli_query($conexao, "SELECT * FROM notas");
 
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
			<header><h2><span>Lista dos Alunos<span></h2></header>
			<section>
				<p>Segue abaixo os alunos cadastrado no sistema.</p>
                <br>
                <br>
                <p><strong>Alunos Listado</strong></p>
	            <table border="1">
		            <tr>
                        <th></th>
			            <th>Nome do Aluno</th>
			            <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Nota AV1</th>
                        <th>Nota AV2</th>
                        <th>Nota Final</th>
                        <th>Nota Média Geral</th>
                        <th></th>
                    </tr>
<?php while(($linha1 = mysqli_fetch_array($listagem_aluno))&&($linha2 = mysqli_fetch_array($listagem_nota))){ ?>             
		            <tr>
                        <td style="width: 102px"><a href="editar_nota.php?edita=<?=$linha2['fk_alunos_cpf']?>&&nome=<?=$linha1['nome']?>" id="botao_edi">Editar nota</a></td>
			            <td><?= $linha1['nome']?></td>
			            <td><?= $linha1['cpf']?></td>
                        <td><?php  $date = date_create($linha1['data_nascimento']);
                        echo date_format($date, 'd/m/Y')?></td>
                        <td><?= $linha2['valor_notaav1']?></td>
                        <td><?= $linha2['valor_notaav2']?></td>
                        <td><?= $linha2['valor_notafinal']?></td>
                        <td><?= $linha2['valor_notafinal']?></td>
                        <td style="width: 102px"><a href="excluir_alunos.php?teste=<?=$linha1['cpf']?>" id="botao_ex">Excluir</a></td>
                        
                    </tr>
<?php } ?>
                </table>
            </section>
			<footer></footer>
</div>
<?php 
include 'rodape_alunos.php'
?>   