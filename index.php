<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> <!-- ajusta tela pra qualquer app -->
	<title>Tela de login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		#tamanho{
			width: 350px;
			-webkit-box-shadow: 10px 10px 11px 0px rgba(135,135,135,1);
			-moz-box-shadow: 10px 10px 11px 0px rgba(135,135,135,1);
			box-shadow: 10px 10px 11px 0px rgba(135,135,135,1);
		}
	</style>
</head>
<body>

	<div class="container" id="tamanho" style="margin-top: 100px; border-radius:15px; border: 2px solid #f3f3f3">
		<div style="padding: 10px">
		<center>
			<img src="imagem/cadeado.png" width="125px" height="125">
		</center>
		<form>
			<div class="form-group">
				<label>Usuário</label>
				<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off"required>
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input type="password" name="usuario" class="form-control" placeholder="Senha" autocomplete="off" required>
			</div>
		</form>
		<div style="text-align: right;">
			<button type="submit" class="btn btn -sm btn-success">Entrar</button>
		</div>

	</div>
</div>


<div style="margin-top: 10px">
<center>
	<small> Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui </a></small>
</center>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>