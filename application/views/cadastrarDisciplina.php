<!DOCTYPE html>
<html>
<title>Sistema do Núcleo Pedagógico</title>

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
<div class="w3-main" style="margin-left:340px;width: 70%">

  <!-- Header -->
  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_disciplina">
    <h1 class="w3-jumbo"><b>Disciplina</b></h1>
  </div>

  <div class="w3-container">
    <button class="w3-button w3-green" onclick="janelaCadastrarDisciplina()">Cadastrar Nova Disciplina</button>
  </div>
  <!-- Pesquisa -->
  <div class="w3-container">

    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

     <?php echo form_open('Cadastrar_disciplina/Pesquisar'); ?>

      <div class="w3-section">
        <label>Nome ou Sigla</label>
        <input class="w3-input w3-border" type="text" maxlength="10" name="Nome_ou_Sigla" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados da Disciplina</button>

    </form>

  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>id</th>
      <th>Sigla</th>
      <th>Nome</th>
      <th>Operações</th>
    </tr>
  </thead>
  <?php if(isset($resultado)){foreach($resultado as $row) { ?>
    <tr>
        <td><?php echo $row->id_Disciplina;?></td>
        <td><?php echo $row->sigla;?></td>
        <td><?php echo $row->nome;?></td>
        <td>
          <button href="javascript:;" onclick="janelaEditarDisciplina(<?php echo $row->id_Disciplina ?>)"><i class="fa fa-pencil"></i></button>
          <button href="javascript:;" onclick="janelaExcluirDisciplina(<?php echo $row->id_Disciplina ?>)"><i class="fa fa-trash-o"></i></button>
        </td>
    </tr>
  <?php }} ?>
</table>
</div>

<div id="modalEditarDisciplina" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalEditarDisciplina').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Editar Disciplina</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_disciplina/salvar_edicao')?>" id="formulario_disciplina">
        <div class="w3-section">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="w3-section">
          <label for="sigla">SIGLA</label>
          <input type="text" class="form-control" id="sigla" name="sigla">
        </div>
        <input type="hidden" class="form-control" name="id_Disciplina" id="id_Disciplina">
        <button style="width: 49.5%" type="$('#formulario_disciplina').submit()" class="w3-button w3-green w3-margin-bottom">Atualizar os dados da Disciplina</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalEditarDisciplina').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalCadastrarDisciplina" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalCadastrarDisciplina').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Cadastrar Disciplina</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_disciplina/Cadastrar'); ?>
       <div class="w3-section">
         <label>Nome</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="Nome" required>
       </div>
       <div class="w3-section">
         <label>Sigla</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="Sigla" required>
       </div>
        <button style="width: 49.5%" type="submit" class="w3-button w3-green w3-margin-bottom">Cadastrar Nova Disciplina</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalCadastrarDisciplina').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalExcluirDisciplina" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red">
      <span onclick="document.getElementById('modalExcluirDisciplina').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Excluir Disciplina</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_disciplina/excluir')?>" id="formulario_disciplina_exclusao">
        <div class="w3-section">
          <p>Deseja realmente excluir o cadastro de <strong><span class="w3-xlarge" id="nome_exclusao"></span></strong></p>
        </div>
        <input type="hidden" class="form-control" name="id_Disciplina_exclusao" id="id_Disciplina_exclusao">
        <button style="width: 49.5%" type="$('#formulario_disciplina_exclusao').submit()" class="w3-button w3-red w3-margin-bottom">Confirmar Exclusão</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalExcluirDisciplina').style.display='none'" class="w3-button w3-gray w3-margin-bottom">Cancelar</button>
      </form>
   </div>
  </div>
</div>

<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
