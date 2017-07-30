    
   <?php
        $filtro = isset ($_POST['filtro'])?$_POST['filtro']:'';

        $resultado=mysqli_query($conn, "SELECT * FROM pacientes WHERE nome LIKE '%$filtro%' or data_nascimento LIKE '%$filtro%' ORDER BY 'id'");
        $linhas=mysqli_num_rows($resultado);
        
        
        
    ?>    
      <div class="container">
      <div class="page-header">
        <h1>Lista de Pacientes</h1>
      </div>


        <div class="row">
                <div class="col-md-12">
                <form class="form-horizontal" method="post" action="">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="filtro" placeholder="Nome Paciente ou Data de Nascimento">
            </div>
            </div>

            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" value="buscar" class="btn btn-primary">Procurar</button>
            </div>
          </div>


      <div class="row">
        <div class="pull-right">
          <a href='administrativo.php?link=3'><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
          </div>
          </div>
      

      <div class="row">
        <div class="col-md-12">
          <table class="table table-condensed table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome Mae</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($linhas = mysqli_fetch_array($resultado)){
                  echo "<tr>";
                      echo "<td>".$linhas['id']."</td>";
                      echo "<td>".$linhas['nome']."</td>";
                      echo "<td>".$linhas['nome_mae']."</td>";
                      echo "<td>".$linhas['data_nascimento']."</td>";
                      ?> 
                      <td> 
                      <a href ='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-primary'>Visualizar</button></a>

                      <a href ='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-warning'>Editar</button></a>
                      
                      <a href ='processa/processa_apagar_paciente.php?id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-xs btn-danger'>Apagar</button></a>
                      <a href ='processa/processa_apagar_paciente.php?id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-xs btn-danger'>Entrevistar</button></a>
                      

                      <?php
                  echo "</tr>";
              }
              ?>

              
            </tbody>
          </table>
        </div>
      </div>

    </div> <!-- /container -->


