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
  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_professor">
    <h1 class="w3-jumbo"><b>Professor</b></h1>
  </div>

  <div class="w3-container">
    <button class="w3-button w3-green" onclick="janelaCadastrarProfessor()">Cadastrar Novo Professor</button>
  </div>
  <!-- Pesquisa -->
  <div class="w3-container">

    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

     <?php echo form_open('Cadastrar_professor/Pesquisar'); ?>

      <div class="w3-section">
        <label>Nome ou SIAPE</label>
        <input class="w3-input w3-border" type="text" maxlength="10" name="Nome_ou_Siape">
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Professor</button>

    </form>

  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>id</th>
      <th>Siape</th>
      <th>Nome</th>
      <th>Operações</th>
    </tr>
  </thead>
  <?php if(isset($resultado)){foreach($resultado as $row) { ?>
    <tr>
        <td><?php echo $row->id_Professor;?></td>
        <td><?php echo $row->siape;?></td>
        <td><?php echo $row->nome;?></td>
        <td>
          <button href="javascript:;" onclick="janelaEditarProfessor(<?php echo $row->id_Professor ?>)"><i class="fa fa-pencil"></i></button>
          <button href="javascript:;" onclick="janelaExcluirProfessor(<?php echo $row->id_Professor ?>)"><i class="fa fa-trash-o"></i></button>
        </td>
    </tr>
  <?php }} ?>
</table>
</div>

<div id="modalEditarProfessor" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalEditarProfessor').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Editar Professor</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_professor/salvar_edicao')?>" id="formulario_professor">
        <div class="w3-section">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="w3-section">
          <label for="siape">SIAPE</label>
          <input type="text" class="form-control" id="siape" name="siape">
        </div>
        <input type="hidden" class="form-control" name="id_Professor" id="id_Professor">
        <button style="width: 49.5%" type="$('#formulario_professor').submit()" class="w3-button w3-green w3-margin-bottom">Atualizar os dados do Professor</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalEditarProfessor').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalCadastrarProfessor" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalCadastrarProfessor').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Cadastrar Professor</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_professor/Cadastrar'); ?>
       <div class="w3-section">
         <label>Nome</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="Nome" required>
       </div>
       <div class="w3-section">
         <label>Siape</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="Siape" required>
       </div>
        <button style="width: 49.5%" type="submit" class="w3-button w3-green w3-margin-bottom">Cadastrar Novo Professor</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalCadastrarProfessor').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalExcluirProfessor" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red">
      <span onclick="document.getElementById('modalExcluirProfessor').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Excluir Professor</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_professor/excluir')?>" id="formulario_professor_exclusao">
        <div class="w3-section">
          <p>Deseja realmente excluir o cadastro de <strong><span class="w3-xlarge" id="nome_exclusao"></span></strong></p>
        </div>
        <input type="hidden" class="form-control" name="id_Professor_exclusao" id="id_Professor_exclusao">
        <button style="width: 49.5%" type="$('#formulario_professor_exclusao').submit()" class="w3-button w3-red w3-margin-bottom">Confirmar Exclusão</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalExcluirProfessor').style.display='none'" class="w3-button w3-gray w3-margin-bottom">Cancelar</button>
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
