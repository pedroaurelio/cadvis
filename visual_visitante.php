<?php
    $id = $_GET['id'];
    // Executa a consulta
    $result=mysqli_query($conn,"SELECT * FROM visitante WHERE id='$id' LIMIT 1");
    $resultado=mysqli_fetch_assoc($result);
 
?>
    <div class="container">
       
      
      <div class="page-header">
        <h1>Visualizar Paciente</h1>
      </div>
      <div class="row">
        <div class="pull-right">
          <a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'> <button type='button' class='btn btn-sm btn-info'> Listar</button></a>

          <a href='administrativo.php?link=4&id=<?php echo $resultado['id']; ?>'> <button type='button' class='btn btn-sm btn-warning'> Editar</button></a>

          <a href='processa/processa_apagar_paciente.php?id=<?php echo $resultado['id'];?>'> <button type='button' class='btn btn-sm btn-danger'> Apagar</button></a>
          </div>
        </div>

      <div class="row">

        <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>ID:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['id']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Nome:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['nome']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Nome da Mae: </b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['nome_mae']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Nome do Pai:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['nome_pai']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>RG:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['rg']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>CPF:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['cpf']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Sexo:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['sexo']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Nascimento:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['data_nascimento']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Email:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['email']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Endereço:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['endereco']; ?>
          </div>
          </div>

          <div class="col-md-12">
          <div class="col-sm-3 col-md-2">
              <b>Telefone:</b> 
          </div>
          <div class="col-sm-9 col-md-10">
            <?php echo $resultado['telefone']; ?>
          </div>
          </div>


        </div>
      </div>

</div> <!-- /container -->