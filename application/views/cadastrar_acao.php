<!DOCTYPE html>
<html>
<title>Ação</title>

<!-- Header commons/header -->
<?php $this->load->view('commons/header'); ?>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <?php $this->load->view('commons/menu'); ?>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:40px" id="cadastro-acao">
    <h1 class="w3-jumbo"><b>Ação</b></h1>
  </div>

  <!-- Preenchimento dos Campos -->

<!--Opção de filtrar por CATEGORIA-->

<div class="w3-container">
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
    <p>Categoria </p>
<p>
  <?php echo form_open('Cadastrar_acao/categoria_selecionada'); ?>
 <select   onChange="this.form.submit()" class="w3-select w3-border" name="option_categoria" id="option_categoria" >

<!--selected=<?php if(isset($categoria_id)){echo $categoria_id;} ?> tentativa de deixar o nome fixado quando selecionado-->

    <option value="" disabled selected>Selecione a Categoria</option>
    <?php if(isset($categoria)){foreach($categoria as $row) { ?>
    <option value="<?php echo $row->id_Categoria ?>"><?php echo $row->nome ?></option>
  <?php }} ?>

  </select>
</form>
<!-- $filtro_categoria = document.getElementById("option_categoria").value;-->

</p>
<!-- End page content -->
</div>


<!--Dropdawn RA-->
  <div class="w3-container">

    <p>Registro de Atendimento</p>

<!-- Selecionar Registro de Atendimento por Dropdawn-->

<p>
 <select onChange="this.form.submit()" class="w3-select w3-border" name="option_RA" id="option_RA">
    <option value="" disabled selected>Selecione o Registro de Atendimento</option>
    <?php if(isset($r_atendimento)){foreach($r_atendimento as $row) { ?>
    <option value="<?php echo $row->id_Registro ?>"><?php echo $row->matricula.' - '.$row->nome_aluno.' - '.$row->nome_categoria.' - '.$row->data_formatada
    ?></option>
    <?php }} ?>

  </select>
</p>
<!-- End page content -->
</div>

<!--Dados-->

<div class="w3-container" >
 <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>Procedimento</th>
      <th>Ação</th>
      <th>Data</th>
    </tr>
  </thead>
  <?php if(isset($pesquisa)){foreach($pesquisa as $row) { ?>
    <tr>

        <td class="break"><?php echo $row->p_descricao;?></td>
        <td >             <?php echo $row->a_descricao;?></td>
        <td class="break"><?php echo $row->data_acao;?></td>
        <td>

          <button href="javascript:;" onclick="janelaEditarFuncionario(<?php echo $row->id_RegistroAcao ?>)"><i class="fa fa-pencil"></i></button>
          <button href="javascript:;" onclick="janelaExcluirAcao(<?php echo $row->id_RegistroAcao ?>)"><i class="fa fa-trash-o"></i></button>
        </td>
    </tr>
  <?php }} ?>
</table>
</div>

<div id="modalEditarAcao" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalEditarAcao').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Editar Ação</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_acao/salvar_edicao')?>" id="formulario_acao">
        <div class="w3-section">
          <label for="nome">Data</label>
          <input type="text" class="form-control" id="nome" maxlength="64" name="data" required autofocus>
        </div>
        <div class="w3-section">
          <label for="cpf">Descrição</label>
          <input type="text" pattern="\d{11}" title="Descrição mínima de 3 caracteres" maxlength="1024" minlength="3" class="form-control" id="descricao" name="descricao">
        </div>

        <input type="hidden" class="form-control" name="id_Acao" id="id_Acao">
        <button style="width: 49.5%" type="$('#formulario_acao').submit()" class="w3-button w3-green w3-margin-bottom">Atualizar Ação</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalEditarAcao').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalCadastrarAcao" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalCadastrarAcao').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Cadastrar Ação</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_acao/Cadastrar'); ?>
        <div class="w3-section">
          <label for="nome">Data</label>
          <input type="text" class="form-control" id="data" maxlength="8" name="data" required>
        </div>
        <div class="w3-section">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" maxlength="1024" minlength="3" name="descricao" required>
        </div>

        <button style="width: 49.5%" type="submit" class="w3-button w3-green w3-margin-bottom">Cadastrar Ação</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalCadastrarAcao').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalExcluirFuncionario" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red">
      <span onclick="document.getElementById('modalExcluirAcao').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Excluir Ação</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_acao/excluir')?>" id="formulario_acao_exclusao">
        <div class="w3-section">
          <p>Deseja realmente excluir a Ação <strong><span class="w3-xlarge" id="nome_exclusao"></span></strong></p>
        </div>
        <input type="hidden" class="form-control" name="id_Acao_exclusao" id="id_Acao_exclusao">
        <button style="width: 49.5%" type="$('#formulario_acao_exclusao').submit()" class="w3-button w3-red w3-margin-bottom">Confirmar Exclusão</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalExcluirAcao').style.display='none'" class="w3-button w3-gray w3-margin-bottom">Cancelar</button>
      </form>
   </div>
  </div>
</div>

<?php $this->load->view('commons/sucesso_cadastro'); ?>
<?php $this->load->view('commons/sucesso_edicao'); ?>
<?php $this->load->view('commons/sucesso_exclusao'); ?>

<!-- End page content -->
</div>


<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
