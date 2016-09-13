<?php
include('inc/header.php');
session_start();
if (isset($_SESSION['validacao'])) {
	?>
	<div class="ui top attached tabular menu">
		<a class="item active" data-tab="cadastrar">Cadastrar</a>
		<a class="item" data-tab="consultar">Consultar</a>
	</div>

	<!-- Inicio da primeira tab cadastro-->
	<div class="ui bottom attached tab segment active" data-tab="cadastrar">
		<form class="ui form" id="form-add-cliente" method="post" action="gravar_registro.php">
			<h4 class="ui dividing header">Informações Cadastrais</h4>
			<div class="ui grid">
				<div class="eight wide column">
					<div class="field">
						<label>Nome *</label>
						<input type="text" name="nome" placeholder="Nome" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label for="cpf">CPF *</label>
						<input type="text" name="cpf" id="CPF" placeholder="CPF" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label for="rg">RG *</label>
						<input type="text" name="rg" id="RG" placeholder="RG" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label>Data de Nascimento *</label>
						<input type="date" name="nascimento" placeholder="xx/xx/xxxx" required>
					</div>
				</div>
				<div class="four wide column">
					<div class="field">
						<label for="sexo">Sexo *</label>
						<div class="ui selection dropdown">
							<input type="hidden" name="genero" required>
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
						<label>Profissão *</label>
						<input type="text" name="profissao" placeholder="Profissão" required>
					</div>
				</div>
				<div class="four wide column">
					<label>Telefone</label>
					<input type="text" name="telefone" id="Telefone" placeholder="(xx) xxxx-xxxx">
				</div>
				<div class="four wide column">
					<label>Celular *</label>
					<input type="text" name="celular" id="Celular" placeholder="(xx) xxxxx-xxxx" required>
				</div>
				<div class="eight wide column">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="exemplo@dominio.com">
				</div>
				<div class="four wide column">
					<label for="endereço">Endereço *</label>
					<input type="text" name="endereco" placeholder="Endereço" required>
				</div>
				<div class="three wide column">
					<label for="cidade">Cidade *</label>
					<input type="text" name="cidade" placeholder="Cidade" required>
				</div>
				<div class="three wide column">
					<label for="bairro">Bairro *</label>
					<input type="text" name="bairro" placeholder="Bairro" required>
				</div>
				<div class="three wide column">
					<div class="field">
						<label for="estado">Estado *</label>
						<div class="ui search selection dropdown">
							<input type="hidden" name="genero" required>
							<i class="dropdown icon"></i>
							<div class="default text">Selecione</div>
							<div class="menu">
								<div class="item" data-value="ac">Acre</div>
								<div class="item" data-value="al">Alagoas</div>
								<div class="item" data-value="ap">Amapá</div>
								<div class="item" data-value="am">Amazonas</div>
								<div class="item" data-value="ba">Bahia</div>
								<div class="item" data-value="ce">Ceará</div>
								<div class="item" data-value="df">Distrito Federal</div>
								<div class="item" data-value="es">Espírito Santo</div>
								<div class="item" data-value="go">Goiás</div>
								<div class="item" data-value="ma">Maranhão</div>
								<div class="item" data-value="mt">Mato Grosso</div>
								<div class="item" data-value="ms">Mato Grosso do Sul</div>
								<div class="item" data-value="mg">Minas Gerais</div>
								<div class="item" data-value="pa">Pará</div>
								<div class="item" data-value="pb">Paraíba</div>
								<div class="item" data-value="pr">Paraná</div>
								<div class="item" data-value="pe">Pernambuco</div>
								<div class="item" data-value="pi">Piauí</div>
								<div class="item" data-value="rj">Rio de Janeiro</div>
								<div class="item" data-value="rn">Rio Grande do Norte</div>
								<div class="item" data-value="rs">Rio Grande do Sul</div>
								<div class="item" data-value="ro">Rondônia</div>
								<div class="item" data-value="rr">Roraima</div>
								<div class="item" data-value="sc">Santa Catarina</div>
								<div class="item" data-value="sp">São Paulo</div>
								<div class="item" data-value="se">Sergipe</div>
								<div class="item" data-value="to">Tocantins</div>
							</div>
						</div>
					</div>
				</div>
				<div class="three wide column">
					<label for="cep">CEP</label>
					<input type="text" name="cep" id="cep" placeholder="Cep">
				</div>
				<h4>* Campos Obrigatórios</h4>
				<div class="sixteen wide column">
					<input type="submit" class="ui green button" value="Cadastrar">
					<input type="reset" class="ui blue button" value="Limpar Campos">
					<input type="hidden" value="add_cliente" name="tipo_registro">
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