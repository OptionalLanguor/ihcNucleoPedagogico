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
  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_aluno">
    <h1 class="w3-jumbo"><b>Aluno</b></h1>
  </div>

  <div class="w3-container">
    <button class="w3-button w3-green" onclick="janelaCadastrarAluno()">Cadastrar Novo Aluno</button>
  </div>
  <!-- Pesquisa -->
  <div class="w3-container">

    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

     <?php echo form_open('Cadastrar_aluno/Pesquisar'); ?>

      <div class="w3-section">
        <label>RA, Nome, CPF, Curso ou Periodo</label>
        <input class="w3-input w3-border" type="text" maxlength="64" name="qualquer_atributo">
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Aluno</button>

    </form>

  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>id</th>
      <th>RA</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Curso</th>
      <th>Periodo</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Endereco</th>
      <th>Operações</th>
    </tr>
  </thead>
  <?php if(isset($resultado)){foreach($resultado as $row) { ?>
    <tr>
        <td><?php echo $row->id_Pessoa;?></td>
        <td><?php echo $row->matricula;?></td>
        <td><?php echo $row->nome;?></td>
        <td><?php echo $row->cpf;?></td>
        <td><?php echo $row->curso;?></td>
        <td><?php echo $row->periodo;?></td>
        <td><?php echo $row->email;?></td>
        <td><?php echo $row->telefone;?></td>
        <td><?php echo $row->endereco;?></td>
        <td>
          <button href="javascript:;" onclick="janelaEditarAluno(<?php echo $row->id_Pessoa ?>)"><i class="fa fa-pencil"></i></button>
          <button href="javascript:;" onclick="janelaExcluirAluno(<?php echo $row->id_Pessoa ?>)"><i class="fa fa-trash-o"></i></button>
        </td>
    </tr>
  <?php }} ?>
</table>
</div>

<div id="modalEditarAluno" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalEditarAluno').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Editar Aluno</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_aluno/salvar_edicao')?>" id="formulario_aluno">
        <div class="w3-section">
          <label for="nome">Registro Acadêmico</label>
          <input type="text" maxlength="10" class="form-control" id="matricula" name="matricula">
        </div>
        <div class="w3-section">
          <label for="nome">Nome</label>
          <input type="text" maxlength="64" class="form-control" id="nome" name="nome">
        </div>
        <div class="w3-section">
          <label for="nome">CPF</label>
          <input type="text" maxlength="11" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="w3-section">
          <label for="nome">Curso</label>
          <input type="text" maxlength="3" class="form-control" id="curso" name="curso">
        </div>
        <div class="w3-section">
          <label for="nome">Periodo do Curso</label>
          <input type="number" maxlength="2" min="1" max="10" class="form-control" id="periodo" name="periodo">
        </div>
        <div class="w3-section">
          <label for="nome">Email</label>
          <input type="email" maxlength="64" class="form-control" id="email" name="email">
        </div>
        <div class="w3-section">
          <label for="nome">Telefone</label>
          <input type="text" maxlength="16" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="w3-section">
          <label for="nome">Endereco</label>
          <input type="text" maxlength="64" class="form-control" id="endereco" name="endereco">
        </div>
        <input type="hidden" class="form-control" name="id_Pessoa" id="id_Pessoa">
        <button style="width: 49.5%" type="$('#formulario_aluno').submit()" class="w3-button w3-green w3-margin-bottom">Atualizar os dados do Aluno</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalEditarAluno').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>

    </div>
  </div>
</div>

<div id="modalCadastrarAluno" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalCadastrarAluno').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Cadastrar Aluno</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_aluno/Cadastrar'); ?>
       <div class="w3-section">
         <label>Registro Acadêmico</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="RA" required>
       </div>
       <div class="w3-section">
         <label>Nome</label>
         <input class="w3-input w3-border" type="text" maxlength="64" name="Nome" required>
       </div>
       <div class="w3-section">
         <label>CPF</label>
         <input class="w3-input w3-border" type="text" pattern="\d{11}" title="Digite um CPF no formato: xxxxxxxxxxx" maxlength="11" name="CPF" required>
       </div>
       <div class="w3-section">
         <label>Curso</label>
         <input class="w3-input w3-border" type="text" maxlength="3" name="Curso" required>
       </div>
       <div class="w3-section">
         <label>Periodo do Curso</label>
         <input class="w3-input w3-border" type="number" min="1" max="10" name="Periodo" required>
       </div>
       <div class="w3-section">
         <label>Email</label>
         <input class="w3-input w3-border" type="email" maxlength="64" name="Email" required>
       </div>
       <div class="w3-section">
         <label>Telefone</label>
         <input class="w3-input w3-border" type="text" maxlength="16" name="Telefone" required>
       </div>
       <div class="w3-section">
         <label>Endereco</label>
         <input class="w3-input w3-border" type="text" maxlength="64" name="Endereco" required>
       </div>
        <button style="width: 49.5%" type="submit" class="w3-button w3-green w3-margin-bottom">Cadastrar Novo Aluno</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalCadastrarAluno').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalExcluirAluno" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red">
      <span onclick="document.getElementById('modalExcluirAluno').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Excluir Aluno</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_aluno/excluir')?>" id="formulario_aluno_exclusao">
        <div class="w3-section">
          <p>Deseja realmente excluir o cadastro de <strong><span class="w3-xlarge" id="nome_exclusao"></span></strong></p>
        </div>
        <input type="hidden" class="form-control" name="id_Pessoa_exclusao" id="id_Pessoa_exclusao">
        <button style="width: 49.5%" type="$('#formulario_aluno_exclusao').submit()" class="w3-button w3-red w3-margin-bottom">Confirmar Exclusão</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalExcluirAluno').style.display='none'" class="w3-button w3-gray w3-margin-bottom">Cancelar</button>
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
