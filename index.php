<!DOCTYPE html>
<html>
<head>
	<title>Login facebook</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>	
			</div><!-- logo -->

			<form method="post" class="form-login"/>
				<div class="form-element">
					<p>E-mail ou telefone</p>
					<input type="email">
				</div><!-- form-element -->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password">
				</div><!-- form-element -->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar">
				</div><!-- form-element -->
			</form><!-- form-login -->
			<div class="clear"></div>
		</div><!-- center -->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="imagens/img1.png">
			</div>

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será!</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text">
					</div><!-- w50 -->
					<div class="w50">
						<input placeholder="Sobrenome" type="text">
					</div><!-- w50 -->
					<div class="w100">
						<input placeholder="Email" type="email">
					</div><!-- w100 -->
					<div class="w100">
						<input placeholder="Senha" type="password">
					</div><!-- w100 -->

					<div class="w100">
						<h2>Data de Nascimento:</h2>
						<select name="nasc-dia" class="nasc">
							<?php
								for($i=1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nasc-mes" class="nasc">
							<option value="0">Janeiro</option>
							<option value="1">Fevereiro</option>
							<option value="2">Março</option>
							<option value="3">Abril</option>
							<option value="4">Maio</option>
							<option value="5">Junho</option>
							<option value="6">Julho</option>
							<option value="7">Agosto</option>
							<option value="8">Setembro</option>
							<option value="9">Outubro</option>
							<option value="10">Novembro</option>
							<option value="11">Dezembro</option>
						</select>
						<select name="nasc-ano" class="nasc">
							<?php
								for($i=1960; $i <= 2020; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div>
					</div><!-- w100 -->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" name="sexo" value="masculino"><h2>Masculino</h2>
						</div><!-- input-radio -->
						<div class="input-radio">
							<input type="radio" name="sexo" value="feminino">
							<h2>Feminino</h2>
						</div><!-- input-radio -->
						<div class="clear"></div>
					</div><!-- w100 -->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar">
					</div><!-- w100 -->

					<div class="clear"></div>
				</form><!-- criar-conta -->
			</div><!-- abrir-conta -->

			<div class="clear"></div>
		</div><!-- center -->
	</section><!-- main -->

	<section class="linguas">
		<div class="center">
			<a class="lingua-selecionada" href="#">Português (BR)</a>
			<a href="#">English (US)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
		</div><!-- center -->
		<div style="border:0; padding-top: 10px;" class="center">
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
			<a href="#">Algum link</a>
		</div><!-- center -->
	</section><!-- linguas -->

</body>
</html>