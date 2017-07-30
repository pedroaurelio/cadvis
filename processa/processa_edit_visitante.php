<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$nome_mae = $_POST["nome_mae"];
$nome_pai = $_POST["nome_pai"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$data_nascimento = $_POST["data_nascimento"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$query=mysqli_query($conn,"UPDATE visitante set nome ='$nome' ,  nome_mae ='$nome_mae' , nome_pai ='$nome_pai' , rg = '$rg', cpf = '$cpf', sexo ='$sexo' , data_nascimento ='$data_nascimento' , email ='$email' , endereco ='$endereco' , telefone ='$telefone' WHERE id='$id' ");
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
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=2'>
					<script type=\"text/javascript\">
						alert(\"Usuario Editado com Sucesso.\");
					</script>
				 ";
				}
					else
			{
				 	echo "
				 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=2'>
					<script type=\"text/javascript\">
						alert(\"Usuario nao foi Editado com Sucesso.\");
					</script>

				 	";
			}
				?>
		</body>
</html>
