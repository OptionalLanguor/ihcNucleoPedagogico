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
  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_funcionario">
    <h1 class="w3-jumbo"><b>Funcionario</b></h1>
  </div>

  <div class="w3-container">
    <button class="w3-button w3-green" onclick="janelaCadastrarfuncionario()">Cadastrar Novo Funcionario</button>
  </div>
  <!-- Pesquisa -->
  <div class="w3-container">

    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

     <?php echo form_open('Cadastrar_funcionario/Pesquisar'); ?>

      <div class="w3-section">
        <label>Nome ou CPF ou e-mail ou login</label>
        <input class="w3-input w3-border" type="text" maxlength="10" name="variavel_pesquisa">
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Funcionario</button>

    </form>

  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>id_Funcionario</th>
      <th>Nome</th>
      <th>cpf</th>
      <th>telefone</th>
      <th>email</th>
      <th>Operações</th>
    </tr>
  </thead>
  <?php if(isset($resultado)){foreach($resultado as $row) { ?>
    <tr>
        <td><?php echo $row->id_Funcionario;?></td>
        <td><?php echo $row->nome;?></td>
        <td><?php echo $row->cpf;?></td>
        <td><?php echo $row->login;?></td>
        <td><?php echo $row->telefone;?></td>
        <td>
          <button href="javascript:;" onclick="janelaEditarFuncionario(<?php echo $row->id_Funcionario ?>)"><i class="fa fa-pencil"></i></button>
          <button href="javascript:;" onclick="janelaExcluirFuncionario(<?php echo $row->id_Funcionario ?>)"><i class="fa fa-trash-o"></i></button>
        </td>
    </tr>
  <?php }} ?>
</table>
</div>

<div id="modalEditarFuncionario" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalEditarFuncionario').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Editar Funcionario</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_funcionario/salvar_edicao')?>" id="formulario_funcionario">
        <div class="w3-section">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="w3-section">
          <label for="siape">cpf</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="w3-section">
          <label for="nome">Login</label>
          <input type="text" class="form-control" id="login" name="login">
        </div>
        <input type="hidden" class="form-control" name="id_Funcionario" id="id_Funcionario">
        <button style="width: 49.5%" type="$('#formulario_funcionario').submit()" class="w3-button w3-green w3-margin-bottom">Atualizar os dados do Funcionario</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalEditarFuncionario').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalCadastrarfuncionario" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalCadastrarfuncionario').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Cadastrar Funcionario</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_funcionario/Cadastrar'); ?>
       <div class="w3-section">
         <label>Nome</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="Nome" required>
       </div>
       <div class="w3-section">
         <label>Siape</label>
         <input class="w3-input w3-border" type="text" maxlength="10" name="Siape" required>
       </div>
        <button style="width: 49.5%" type="submit" class="w3-button w3-green w3-margin-bottom">Cadastrar Novo Funcionario</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalCadastrarfuncionario').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>

<div id="modalExcluirFuncionario" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red">
      <span onclick="document.getElementById('modalExcluirFuncionario').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Excluir Funcionario</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_funcionario/excluir')?>" id="formulario_funcionario_exclusao">
        <div class="w3-section">
          <p>Deseja realmente excluir o cadastro de <strong><span class="w3-xlarge" id="nome_exclusao"></span></strong></p>
        </div>
        <input type="hidden" class="form-control" name="id_Funcionario_exclusao" id="id_Funcionario_exclusao">
        <button style="width: 49.5%" type="$('#formulario_funcionario_exclusao').submit()" class="w3-button w3-red w3-margin-bottom">Confirmar Exclusão</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalExcluirFuncionario').style.display='none'" class="w3-button w3-gray w3-margin-bottom">Cancelar</button>
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
