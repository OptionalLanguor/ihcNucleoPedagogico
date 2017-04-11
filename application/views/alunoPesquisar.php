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
    <h1 class="w3-jumbo"><b>Cadastros dos Alunos</b></h1>
  </div>

  <!-- Pesquisa -->
  <div class="w3-container" id="pesquisa" >
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Pesquisa de Cadastro</b></h1>
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

     <?php echo form_open('Pesquisar_aluno/Pesquisar'); ?>
    

      <div class="w3-section">
        <label>Registro Acadêmico</label>
        <input class="w3-input w3-border" type="text" maxlength="10" name="RA" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Aluno</button>

    </form>

  </div>

  <!-- Dados -->
  <div class="w3-container" id="mostra" style="margin-top:20px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Dados atuais do aluno</b></h1>
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
      <div class="w3-section">
        <label>Nome</label>
        <label class="w3-input output"><?php if (isset($nome)) {echo $nome;} ?></label>
      </div>
      <div class="w3-section">
        <label>CPF</label>
        <label class="w3-input output"><?php if (isset($cpf)) {echo $cpf;} ?></label>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <label class="w3-input output"><?php if (isset($email)) {echo $email;} ?></label>
      </div>
      <div class="w3-section">
        <label>Endereço</label>
        <label class="w3-input output"><?php if (isset($endereco)) {echo $endereco;} ?></label>
      </div>
      <div class="w3-section">
        <label>Telefone</label>
        <label class="w3-input output"><?php if (isset($telefone)) {echo $telefone;} ?></label>
      </div>
      <div class="w3-section">
        <label>Curso</label>
        <label class="w3-input output"><?php if (isset($curso)) {echo $curso;} ?></label>
      </div>
      <div class="w3-section">
        <label>Periodo do Curso</label>
        <label class="w3-input output"><?php if (isset($periodo)) {echo $periodo;} ?></label>
      </div>
  </div>

<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
