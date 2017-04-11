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
  <div class="w3-container" style="margin-top:40px" id="novoaluno">
    <h1 class="w3-jumbo"><b>Cadastros dos Alunos</b></h1>
  </div>

  <!-- Insercao -->
  <div class="w3-container" id="criacao" >
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Dados do Novo aluno</b></h1>
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

    <?php echo form_open('Cadastrar_aluno/Cadastrar'); ?>

    <?php
        if (isset($result_msg)) {
          if($success){
            echo "<div class='w3-container w3-center w3-green'>";
          }
          else{
            echo "<div class='w3-container w3-center w3-red'>";
          }
          echo $result_msg;
          echo "</div>";
          $result_msg=NULL;
        }
      ?>
      <div class="w3-section">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" maxlength="64" name="Nome" required>
      </div>
      <div class="w3-section">
        <label>CPF (11 dígitos)</label>
        <input class="w3-input w3-border" type="text" placeholder="XXXXXXXXXXX" maxlength="11" name="CPF" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" maxlength="64" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Endereço</label>
        <input class="w3-input w3-border" type="text" maxlength="64" name="Endereco" required>
      </div>
      <div class="w3-section">
        <label>Telefone</label>
        <input class="w3-input w3-border" type="text" maxlength="16" name="Telefone" required>
      </div>
      <div class="w3-section">
        <label>Registro Acadêmico</label>
        <input class="w3-input w3-border" type="text" maxlength="10" name="RA" required>
      </div>
      <div class="w3-section">
        <label>Curso</label>
        <input class="w3-input w3-border" type="text" maxlength="3" name="Curso" required>
      </div>
      <div class="w3-section">
        <label>Periodo do Curso</label>
        <input class="w3-input w3-border" type="number" maxlength="2" min="1" max="10" name="Periodo" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Armazenar cadastro do Aluno</button>
    </form>






  </div>

<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
