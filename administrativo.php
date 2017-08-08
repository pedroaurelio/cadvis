<?php
  session_start();
  require_once("seguranca.php");
  require_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SISTEMA CONTROLE DE VISITAS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.min.css" rel= "stylesheet" media= "screen" >

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
        require_once("menu_admin.php");


        $pag[1] = "bem_vindo.php";
        $pag[2] = "procurar.php";
        $pag[3] = "cad_visitante.php";
        $pag[4] = "edit_visitante.php";
        $pag[5] = "visual_visitante.php";
        $pag[6] = "cad_setor.php";
        $pag[7] = "listar_setor.php";
        $pag[8] = "visual_setor.php";
        $pag[9] = "edit_setor.php";
        $pag[10] = "psicologa.php";
        $pag[11] = "cad_visita.php";
        $pag[12] = "relatorio_nome.php";
        $pag[13] = "relatorio_n.php";
        $pag[14] = "relatorio_dia.php";
        $pag[15] = "relatorio_d.php";


     if(isset($_GET['link'])){
      $link = $_GET['link'];

         if(file_exists($pag[$link])){
           include $pag[$link];
            }else{
              include('bem-vindo.php');
             }
           }else{
            include('bem-vindo.php');
         }


    ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src= "js/jasny-bootstrap.min.js" > </script>
    <script src= "js/jquery.consultar-cep.min.js"></script>
    <script>

      $('#cep').consultarCep({

        evento:        'blur',
        focarAposPara: '#numero',
        mensagem: '<i class="fa fa-spin fa-spinner"></i>',
        classMensagem: 'label label-default',
        campos: {
          logradouro:  '#endereco',
          bairro:      '#bairro',
          localidade:  '#cidade',
          uf:          '#uf'
        }
      });

    </script>

    <script src= "js/jasny-bootstrap.min.js" > </script>


<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script>
          $(document).ready(function(){
          $('#tabela_procurar').DataTable({
          "pagingType": "full_numbers",
                    "language": {
                        "url": "js/br.txt"
                    }
               });
           });

     </script>


    <script src="js/angular.min.js"></script>
    <script src="js/webcam.js"></script>

  </body>
</html>
