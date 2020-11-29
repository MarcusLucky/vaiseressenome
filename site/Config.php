<?php  
  include_once("../autenticate/autenticacao.php");
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title> ECArts - Configuração </title>
	<h1 align="center"> config </h1>

	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/config.css">
</head>

<Script>
	function voltar() {

	}
</Script>

<body>

<nav class="nav-main">
        <div class="btn-toggle-nav" onclick="toggleNav()"></div>
        <ul class="top">
            <li><a href="index.php">Principal</a></li>
            <li><a href="TopRating.php">Melhores Avaliados</a></li>
            <li class="help"><a href="help.php">Ajuda</a></li>
            <li class="abous"><a href="AboutUs.php">Sobre Nós</a></li>
        </ul>
    </nav>

	<?php  include("aside.php"); ?>


	<div class="up-div">

		<form method="POST" action="salvarImagem.php"  enctype="multipart/form-data">
			<p><input class="up chage-image" type="file" name="image" value="Troca de imagem" required></p>
			<button type="submit">Salvar Imagem</button>
		</form>



		<p><Button class="up delete-perfil" onclick="Apagar">Apagar conta</button>
			<!-- ao clicar na imagem voce pode visualizala -->
		<p><button class="up add-card" onclick="">Adiconar cartão</button></p>
		<p> <input class="up back" type="button" value="voltar" onclick="history.back()"></p>
	</div>
	<form id="re">
		<table class="table-dados" align="center" style="border:4px double;" width="600" height="300">
			<tr>
				<th align="left"> Dados Pessoais</th>
			</tr>
			<tr>
				<td align="right"> Novo Nome: </td>
				<td> <input class="input-form" type="text" required="" name="nome" size="30" placeholder="Nome completo"
						maxlength="40"> </td>
			</tr>

			<tr>
				<td align="right"> Nova senha:</td>
				<td><input class="input-form password" type="password" name="Senha" size="30" maxlength="8"> </td>
			</tr>

			<tr>
				<td align="right"> Tel:</td>
				<td><input class="input-form" type="text" size="30" maxlength="9"> </td>
			</tr>

			<tr>
				<td align="right"> E-Mail:</td>
				<td><input class="input-form" type="text" name="email" size="30"></td>
			</tr>
		</table>

		<table class="table-conta" align="center" style="border:4px double;" width="600" height="50">
			<tr>
				<th valign="top" align="left"> tipo de conta:</th>
			</tr>
			<tr>
				<td valign="top"> Conta: <br />
					<select class="select-accont" name="serie">
						<option> escolha o seu no registro</option>
						<optgroup label="escolha">
							<option> empresarial</option>
							<option> Artistica</option>
							<option> Usuario</option>
					</select>
			</tr>
		</table>
		<p align="center">
			<br />
			<label>
				<input class="button save" type="submit" name="Enviar" value="Salvar" />
			</label>

			<label>
				<input class="button clear" type="reset" name="limpar" value="Limpar Campos" />
			</label>
	</form>
</body>

<script src="../styles/main.js"></script>

</html>