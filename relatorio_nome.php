    
   <?php

        $resultado=mysqli_query($conn, "SELECT * FROM visitante ORDER BY 'id'");
        $linhas=mysqli_num_rows($resultado);
        
        
    ?>    
    
      <div class="container">
      <div class="page-header">
        <h1>Relatorio de Visita por Nome</h1>
      </div>

         <div class="row">
        <div class="col-md-12">
          <table class="table table-condensed table-hover" id="tabela_procurar">
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
                      <a href ='administrativo.php?link=13&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-primary'>Visualizar</button></a>
                      <?php
                  echo "</tr>";
              }
              ?>

              
            </tbody>
          </table>
        </div>
      </div>

    </div> <!-- /container -->


