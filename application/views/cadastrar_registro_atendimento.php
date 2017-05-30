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

<script>
function loadTableAlunos() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var i;
      var xmlDoc = this.responseXML;
      var table = "<thead> <tr class=\"w3-gray\">" \
                  +"<th>Matrícula</th>" \
                  +"<th>Nome</th>" \
                  +"<th>CPF</th>" \
                  +"<th>Curso</th>" \
                  +"<th>Período</th>" \
                  +"</tr> </thead>";
        <tr>
            <td><?php echo $row->matricula;?></td>
            <td><?php echo $row->nome;?></td>
            <td><?php echo $row->cpf;?></td>
            <td><?php echo $row->curso;?></td>
            <td><?php echo $row->periodo;?></td>
        </tr>
   
      var x = xmlDoc.getElementsByTagName("CD");
      for (i = 0; i <x.length; i++) { 
        table += "<tr><td>" +
        x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
        "</td></tr>";
      }
      document.getElementById("demo").innerHTML = table;
        }
      };
      xhttp.open("GET", "cd_catalog.xml", true);
      xhttp.send();
}
</script>

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

       <!-- Pesquisa -->
      <div class="w3-container">
        <hr style="width:50px; border:5px solid #3f51b5" class="w3-round">

         <?php echo form_open('Cadastrar_registro_atendimento/PesquisaAluno'); ?>

          <div class="w3-section">
            <label>Filtre Alunos por: Matrícula, Nome, CPF, Curso ou Período.</label>
            <input class="w3-input w3-border" type="text" maxlength="64" name="qualquer_atributo">
          </div>
          <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Aluno</button>

        </form>
      </div>

       <!-- Tentativa de fazer uma lista de Alunos para que o funcionário escolha a qual pertence o registro de atendimento -->
      <div class="w3-container">
      <table class="w3-table-all">
      <thead>
        <tr class="w3-gray">
          <th>Matrícula</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Curso</th>
          <th>Periodo</th>
        </tr>
      </thead>
      <?php if(isset($pesquisaAluno)){foreach($pesquisaAluno as $row) { ?>
        <tr>
            <td><?php echo $row->matricula;?></td>
            <td><?php echo $row->nome;?></td>
            <td><?php echo $row->cpf;?></td>
            <td><?php echo $row->curso;?></td>
            <td><?php echo $row->periodo;?></td>
        </tr>
      <?php }} ?>
      </table>
      </div>

      <div class="w3-container" style="margin-top:20px">
      <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <?php echo form_open('Cadastrar_registro_atendimento/Cadastrar'); ?>

       <div class="w3-section">
         <label>Descrição</label>
         <input class="w3-input w3-border" type="text" minlength="3" maxlength="1024" name="descricao" required>
       </div>
       <div class="w3-section">
         <label>id_Categoria</label>
         <input class="w3-input w3-border" type="text" minlength="1" name="id_Categoria" required>
       </div>
       <div class="w3-section">
         <label>Observação</label>
         <input class="w3-input w3-border" type="text" name="observacao">
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

</body>
</html>
