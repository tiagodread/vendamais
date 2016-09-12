<?php
include('inc/header.php');
session_start();
if (isset($_SESSION['validacao'])) {
	?>
	<h4>Gerenciar Clientes</h4>
	<div class="ui top attached tabular menu">
		<a class="item active" data-tab="cadastrar">Cadastrar</a>
		<a class="item" data-tab="consultar">Consultar</a>
	</div>

	<!-- Inicio da primeira tab cadastro-->
	<div class="ui bottom attached tab segment active" data-tab="cadastrar">
		<form class="ui form" id="form-add-cliente" method="post">
			<h4 class="ui dividing header">Informações Cadastrais</h4>

			<div class="ui grid">
				<div class="eight wide column">
					<div class="field">
						<label>Nome</label>
						<input type="text" name="nome" placeholder="Nome" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label for="cpf">CPF</label>
						<input type="text" name="cpf" id="CPF" placeholder="CPF" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label for="rg">RG</label>
						<input type="text" name="rg" id="RG" placeholder="RG" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label>Data de Nascimento</label>
						<input type="date" name="nascimento" placeholder="xx/xx/xxxx" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label for="sexo">Sexo</label>
						<div class="ui selection dropdown">
							<input type="hidden" name="genero">
							<i class="dropdown icon"></i>
							<div class="default text">Selecione</div>
							<div class="menu">
								<div class="item" data-value="1">Masculino</div>
								<div class="item" data-value="0">Feminino</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eight wide column">
					<div class="field">
						<label>Profissão</label>
						<input type="text" name="profissao" placeholder="Profissão">
					</div>
				</div>
				<div class="four wide column">
					<label for="telefone">Telefone</label>
					<input type="text" name="telefone" id="Telefone" placeholder="(xx) xxxx-xxxx">
				</div>
				<div class="four wide column">
					<label for="telefone">Celular</label>
					<input type="text" name="celular" id="Celular" placeholder="(xx) xxxxx-xxxx">
				</div>
				<div class="eight wide column">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="exemplo@dominio.com">
				</div>
				<div class="four wide column">
					<label for="endereço">Endereço</label>
					<input type="text" name="endereco" placeholder="Endereço">
				</div>
				<div class="three wide column">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" placeholder="Cidade">
				</div>
				<div class="three wide column">
					<label for="bairro">Bairro</label>
					<input type="text" name="bairro" placeholder="Bairro">
				</div>
				<div class="three wide column">
					<label for="estado">Estado</label>
					<input type="text" name="estado" placeholder="Estado">
				</div>
				<div class="three wide column">
					<label for="cep">CEP</label>
					<input type="text" name="cep" placeholder="Cep">
				</div>
				<div class="sixteen wide column">
					<input type="submit" class="ui green button" value="Cadastrar">
					<input type="reset" class="ui blue button" value="Limpar Campos">
				</div>
			</div>
		</form>
	</div>
	<!-- Fim da primeira tab e do formulario-->

	<!-- Inicio da segunda tab e consulta-->
	<div class="ui bottom attached tab segment" data-tab="consultar">

	</div>
	<!-- Fim da segunda tab e consulta-->


	<?php
}else
{
	echo "<script>
	alert('Voce nao esta logado no sistema!');	
	location.href='index.php';
</script>";
}
?>