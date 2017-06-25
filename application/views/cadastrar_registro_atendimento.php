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
  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_registro_atendimento">
    <h1 class="w3-jumbo"><b>Registro de Atendimento</b></h1>
  </div>

  <div class="w3-container">
    <button class="w3-button w3-green" onclick="janelaCadastrarRegistroAtendimento()">Cadastrar Novo Registro Atendimento</button>
  </div>

  <!-- Pesquisa -->
  <div class="w3-container">

    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

     <?php echo form_open('Cadastrar_registro_atendimento/Pesquisar'); ?>

      <div class="w3-section">
        <label>Insira a data de abertura, descrição, observação, categoria, ou aluno.</label>
        <input class="w3-input w3-border" type="text" maxlength="64" name="qualquer_atributo">
      </div>
      <button  onlick="updateTableAluno" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Registro de Atendimento</button>

    </form>
  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>id</th>
      <th>Data de abertura</th>
      <th>Nome do Aluno</th>
      <th>Categoria</th>
      <th>Descrição</th>
      <th>Observação</th>
      <th>Operações</th>
    </tr>
  </thead>
  <?php if(isset($resultado)){foreach($resultado as $row) { ?>
    <tr>
        <td><?php echo $row->id_Registro;?></td>
        <td><?php echo $row->data_abertura;?></td>
        <td><?php echo $row->id_Pessoa;?></td>
        <td><?php echo $row->id_Categoria;?></td>
        <td><?php echo $row->descricao;?></td>
        <td><?php echo $row->observacao;?></td>
        <td>
          <button href="javascript:;" onclick="janelaEditarRegistroAtendimento(<?php echo $row->id_Pessoa ?>)"><i class="fa fa-pencil"></i></button>
          <!--
          <button href="javascript:;" onclick="janelaExcluirAluno(<?php #echo $row->id_Pessoa ?>)"><i class="fa fa-trash-o"></i></button>
          -->
        </td>
    </tr>
  <?php }} ?>
</table>
</div>

<div id="modalEditarRegistroAtendimento" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalEditarRegistroAtendimento').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Editar Registro de Atendimento</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <form role="form" method="post" action="<?php echo base_url('index.php/Cadastrar_registro_atendimento/salvar_edicao')?>" id="formulario_registro_atendimento">
        <div class="w3-section">
          <label for="nome">Data de abertura</label>
          <input type="text" maxlength="10" class="form-control" id="data_abertura" name="data_abertura">
        </div>
        <div class="w3-section">
          <label for="nome">Descrição</label>
          <input type="text" maxlength="1024" min="3" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="w3-section">
          <label for="nome">id_Categoria</label>
          <input type="text" maxlength="11" min="1" class="form-control" id="id_Categoria" name="id_Categoria">
        </div>
        <div class="w3-section">
          <label for="nome">id_Pessoa</label>
          <input type="text" maxlength="3" min="1" class="form-control" id="id_Pessoa" name="id_Pessoa">
        </div>
        <div class="w3-section">
          <label for="nome">Observação</label>
          <input type="text" maxlength="1024" class="form-control" id="observacao" name="observacao">
        </div>
        <input type="hidden" class="form-control" name="id_Registro" id="id_Registro">
        <button style="width: 49.5%" type="$('#formulario_registro_atendimento').submit()" class="w3-button w3-green w3-margin-bottom">Atualizar os dados do Registro de Atendimento</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalEditarRegistroAtendimento').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>



<div id="modalCadastrarRegistroAtendimento" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('modalCadastrarRegistroAtendimento').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Cadastrar novo Registro de Atendimento</h2>
    </header>

       <!--
       <div class="w3-section">
         <label>Data de Abertura</label>
         <input class="w3-input w3-border" type="text" name="data_abertura" required>
       </div>
       -->

       <!-- Pesquisa do Aluno-->
      <div class="w3-container">
        <hr style="width:50px; border:5px solid #3f51b5" class="w3-round">

         <?php echo form_open('Cadastrar_registro_atendimento/PesquisaAluno'); ?>

          <div class="w3-section">
            <label>Digite a Matrícula do Aluno.</label>
            <input class="w3-input w3-border" type="text" maxlength="64" name="matricula_aluno">
          </div>
       <input class="w3-input w3-border" type="hidden" id="id_Categoria" name="id_Categoria" value="<?php if(isset($pesquisaCategoria->id_Categoria)){ echo $pesquisaCategoria->id_Categoria; }?>">
          <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Aluno</button>
        </form>
      </div>
      <div id="infoAluno" class="w3-container">
        <table class="w3-table-all" >
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
            </tr>
          </thead>
          <td>              <?php if(isset($pesquisaAluno->id_Pessoa)){echo $pesquisaAluno->id_Pessoa;}?></td>
          <td>              <?php if(isset($pesquisaAluno->matricula)){echo $pesquisaAluno->matricula;}?></td>
          <td class="break"><?php if(isset($pesquisaAluno->nome)){echo $pesquisaAluno->nome;}?></td>
          <td>              <?php if(isset($pesquisaAluno->cpf)){echo $pesquisaAluno->cpf;}?></td>
          <td>              <?php if(isset($pesquisaAluno->curso)){echo $pesquisaAluno->curso;}?></td>
          <td>              <?php if(isset($pesquisaAluno->periodo)){echo $pesquisaAluno->periodo;}?></td>
          <td class="break"><?php if(isset($pesquisaAluno->email)){echo $pesquisaAluno->email;}?></td>
          <td>              <?php if(isset($pesquisaAluno->telefone)){echo $pesquisaAluno->telefone;}?></td>
          <td class="break"><?php if(isset($pesquisaAluno->endereco)){echo $pesquisaAluno->endereco;}?></td>
        </table>
      </div>


       <!-- Pesquisa da Categoria-->
      <div class="w3-container">
        <hr style="width:50px; border:5px solid #3f51b5" class="w3-round">

         <?php echo form_open('Cadastrar_registro_atendimento/PesquisaCategoria'); ?>

          <div class="w3-section">
            <label>Digite a Categoria.</label>
            <input class="w3-input w3-border" type="text" maxlength="64" name="nome_categoria">
          </div>
       <input class="w3-input w3-border" type="hidden" id="id_Pessoa" name="id_Pessoa" value="<?php if(isset($pesquisaAluno->id_Pessoa)){ echo $pesquisaAluno->id_Pessoa; }?>">
          <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar Categoria</button>

        </form>
      </div>
      <div id="infoCategoria" class="w3-container">
        <table class="w3-table-all" >
          <thead>
            <tr class="w3-gray">
              <th>ID</th>
              <th>Categoria</th>
            </tr>
          </thead>
          <td>              <?php if(isset($pesquisaCategoria->id_Categoria)){echo $pesquisaCategoria->id_Categoria;}?></td>
          <td class="break"><?php if(isset($pesquisaCategoria->nome)){echo $pesquisaCategoria->nome;}?></td>
        </table>
      </div>


      <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_registro_atendimento/Cadastrar'); ?>

       <input class="w3-input w3-border" type="hidden" id="id_Pessoa_Registro" name="id_Pessoa_Registro" value="<?php if(isset($pesquisaAluno->id_Pessoa)){ echo $pesquisaAluno->id_Pessoa; }?>">
       <input class="w3-input w3-border" type="hidden" id="id_Categoria_Registro" name="id_Categoria_Registro" value="<?php if(isset($pesquisaCategoria->id_Categoria)){ echo $pesquisaCategoria->id_Categoria; }?>">
       <div class="w3-section">
         <label>Descrição</label>
         <textarea class="w3-input w3-border" name="descricao" maxlength="1024" cols="40" rows="4" required></textarea>
       </div>
       <div class="w3-section">
         <label>Observação</label>
         <textarea class="w3-input w3-border" name="observacao" maxlength="1024" cols="40" rows="4" required></textarea>
       </div>
        <button style="width: 49.5%" type="submit" class="w3-button w3-green w3-margin-bottom">Cadastrar novo Registro de Atendimento</button>
        <button style="width: 49.5%" type ="button" onclick="document.getElementById('modalCadastrarRegistroAtendimento').style.display='none'" class="w3-button w3-red w3-margin-bottom">Cancelar</button>
      </form>
    </div>
  </div>
</div>
<!--
<div id="modalExcluirAluno" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red">
      <span onclick="document.getElementById('modalExcluirAluno').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>Excluir Aluno</h2>
    </header>
    <div class="w3-container" style="margin-top:20px">
      <form role="form" method="post" action="<?php #echo base_url('index.php/Cadastrar_aluno/excluir')?>" id="formulario_aluno_exclusao">
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
-->
<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>


<script type="text/javascript">
    var isOpen = "<?php if(isset($isOpen)){Print(true);}else{Print(false);} ?>";
    if(isOpen)
      janelaCadastrarRegistroAtendimento();

</script>

</body>
</html>
