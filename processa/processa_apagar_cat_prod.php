<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET["id"];
$query = "DELETE FROM categorias WHERE id = $id";

$resultado=mysqli_query($conn,$query);


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
						alert(\"Categoria de produto Apagado com Sucesso.\");
					</script>
				 ";
				}
					else
			{
				 	echo "
				 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=7'>
					<script type=\"text/javascript\">
						alert(\"Categoria de produto nao foi Apagado com Sucesso.\");
					</script>

				 	";
			}
				?>
		</body>
</html>

