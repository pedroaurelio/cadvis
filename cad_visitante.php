
    <div class="container">

      <div class="page-header">
        <h1>Cadastrar Visitante</h1>

      </div>
      <div class="row espaco">
        <div class="pull-right">
          <a href='administrativo.php?link=2'> <button type='button' class='btn btn-sm btn-info'> Listar</button></a><br></br>
         </div>

          <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/processa_cad_visitante.php">


         <div ng-app="myapp" ng-controller="mainController">
    <div class="alert alert-error ng-scope" ng-show="webcamError" style="">
    <label for="inputEmail3" class="col-sm-2 control-label"></label>
<span>Webcam could not be started. Did you give access to it?</span>
</div>
    <webcam channel="channel"
        on-streaming="onSuccess()"
        on-error="onError(err)"
        on-stream="onStream(stream)"></webcam>
        <label for="inputEmail3" class="col-sm-2 control-label"></label>
    <button ng-click="makeSnapshot()">take picture</button>
    <canvas id="snapshot" width="150" height="150"></canvas>
</div>

</br>
</br>


  <div class="form-group has-feedback">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" name="nome" placeholder="Nome Completo">
      <span class="form-control-feedback" aria-hidden="true"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome da Mae</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" name="nome_mae" placeholder="Nome da Mae">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome do Pai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" name="nome_pai" placeholder="Nome do Pai">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">RG</label>
    <div class="col-sm-4">
      <input type="text" class="form-control text-uppercase" name="rg" placeholder="RG">
      </div>
      <label for="inputEmail3" class="col-sm-1 control-label">CPF</label>
      <div class="col-sm-3">
      <input type="text" class="form-control text-uppercase" data-mask= "999-999-999-99" name="cpf" placeholder="CPF">
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Empresa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" name="empresa" placeholder="Nome da Empresa">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sexo" placeholder="Sexo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Data de Nascimento</label>
    <div class="col-sm-10">
      <input type= "text" class= "form-control" name= "data_nascimento" data-mask= "99/99/9999" placeholder="Data de Nascimento">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Endereço</label>
    <div class="col-md-10">        

      <form class="well well-sm">              
        <div class="row">
          <div class="col-md-2">
            <label for="cep">CEP
            <div class="form-group">
              <div class="input-group">

                <input id="cep" name="cep" type="text" value="76801356" class="form-control input-sm" maxlength="8">

                <div class="input-group-btn">
                  <button autofocus id="consultar-cep" type="button" class="btn btn-sm glyphicon glyphicon-search btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>              
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="endereco">Endereço</label>
              <input type="text" id="endereco" name="endereco" class="form-control input-sm">
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <label for="numero">Número</label>
              <input type="text" class="form-control input-sm" name="numero" id="numero">
            </div>
          </div>        
          <div class="col-md-2">
            <div class="form-group">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control input-sm" name="bairro" id="bairro">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control input-sm" name="cidade" id="cidade">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">              
              <label for="uf">UF</label>
                <select class="form-control input-sm" id="uf" name="uf"><option value="AC">Acre</option><option value="AL">Alagoas</option><option value="AP">Amapá</option><option value="AM">Amazonas</option><option value="BA">Bahia</option><option value="CE">Ceará</option><option value="DF">Distrito Federal</option><option value="ES">Espírito Santo</option><option value="GO">Goiás</option><option value="MA">Maranhão</option><option value="MT">Mato Grosso</option><option value="MS">Mato Grosso do Sul</option><option value="MG">Minas Gerais</option><option value="PA">Pará</option><option value="PB">Paraíba</option><option value="PR">Paraná</option><option value="PE">Pernambuco</option><option value="PI">Piauí</option><option value="RJ">Rio de Janeiro</option><option value="RN">Rio Grande do Norte</option><option value="RS">Rio Grande do Sul</option><option value="RO">Rondônia</option><option value="RR">Roraima</option><option value="SC">Santa Catarina</option><option value="SP">São Paulo</option><option value="SE">Sergipe</option><option value="TO">Tocantins</option></select>
            </div>
          </div>                
        </div>
        </label>
       </div>
       </div>


      
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" data-mask= "(99)9999-9999" placeholder="Telefone">
    </div>
  </div>
  
  <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>

</form>
        </div>
      </div>

    </div> <!-- /container -->