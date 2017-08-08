<?php
    $id = $_GET['id'];
    // Executa a consulta
    $result=mysqli_query($conn,"SELECT * FROM visitante WHERE id='$id' LIMIT 1");
    $resultado=mysqli_fetch_assoc($result);

?>
      <div class="container">

      <div class="page-header">
        <h1>Editar Visitante</h1>

      </div>
      <div class="row espaco">
        <div class="pull-right">
          <a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'> <button type='button' class='btn btn-sm btn-info'> Listar</button></a>

          <a href='processa/processa_apagar_paciente.php?id=<?php echo $resultado['id'];?>'> <button type='button' class='btn btn-sm btn-danger'> Apagar</button></a>
          </div>
          </div>
          </br>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/processa_edit_visitante.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value ="<?php echo $resultado['nome']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome da Mae</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome_mae" placeholder="Nome da Mae" value ="<?php echo $resultado['nome_mae']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome do Pai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome_pai" placeholder="Nome do Pai" value ="<?php echo $resultado['nome_pai']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">RG</label>
    <div class="col-sm-4">
      <input type="text" class="form-control text-uppercase" name="rg" placeholder="RG" value ="<?php echo $resultado['rg']; ?>">
      </div>
      <label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-3">
      <input type="text" class="form-control text-uppercase" data-mask= "999-999-999-99" name="cpf" placeholder="CPF" value ="<?php echo $resultado['cpf']; ?>">
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sexo" placeholder="Sexo" value ="<?php echo $resultado['sexo']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Data de Nascimento</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" data-mask= "99/99/9999" name="data_nascimento" placeholder="Data de Nascimento" value ="<?php echo $resultado['data_nascimento']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email" value ="<?php echo $resultado['email']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="endereco" placeholder="Endereço" value ="<?php echo $resultado['endereco']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" placeholder="Telefone" value ="<?php echo $resultado['telefone']; ?>">
    </div>
  </div>
  <input type="hidden" name="id" value="<?php echo $resultado['id'];?>">

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
  </div>
</form>
        </div>
      </div>

    </div> <!-- /container -->
