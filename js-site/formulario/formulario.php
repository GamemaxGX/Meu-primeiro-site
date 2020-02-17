<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulario</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="https://js-site02.000webhostapp.com//icon/form_icon.ico">
		<link rel="stylesheet" type="text/css" href="https://js-site02.000webhostapp.com//css/formulario.css">
		<script src="https://js-site02.000webhostapp.com//javascript/removeBanner.js"></script>
	</head>
		<body>
			<a href="https://js-site02.000webhostapp.com/">Voltar</a>
			<form name="form" method="POST" action="enviar-email.php">
				<h1>Contato</h1>

				<p class="form">
				<input type="text" name="nome" size="30" placeholder="Nome completo" required>
				</p>

				<p class="form">
					<input  type="email" name="email" size="30" placeholder="Seu email" required>	
				</p>

					<textarea name="mensagem" placeholder="deixe sua mensagem"></textarea>
				</p>

				<p class="enviar">
					<input type="submit" nome="enviar" value="enviar">
					<input type="reset" name="apagar" value="Apagar">			
				</p>
			</form>
		</body>
</html>
