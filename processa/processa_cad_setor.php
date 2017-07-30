<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$nome = $_POST["nome"];

$query=mysqli_query($conn,"INSERT INTO setor (nome, created) VALUES ('$nome', NOW())");
?>
<!DOCTYPE html>
<html lan="pt-br">
	<head>
		<meta charset="utf-8">
		</head>

		<body>
			<?php
			if(mysqli_affected_rows($conn))
				{
			echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=7'>
					<script type=\"text/javascript\">
						alert(\"Categoria de Produto cadastrado com Sucesso.\");
					</script>
				 ";
				}
					else
			{
				 	echo "
				 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=2'>
					<script type=\"text/javascript\">
						alert(\"Categoria de Produto nao foi Cadastrado com Sucesso.\");
					</script>

				 	";
			}
				?>
		</body>
</html>
