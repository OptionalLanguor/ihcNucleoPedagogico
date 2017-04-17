<!DOCTYPE html>
<html>
<title>Cadastro de Palavras Chave</title>

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

  <div class="w3-container" style="margin-top:40px" id="cadastro-palavra-chave">
    <h1 class="w3-jumbo"><b>Palavra Chave</b></h1>
  </div>

  <!-- Preenchimento dos Campos -->

  <div class="w3-container">
    <p>Insira a palavra chave no campo abaixo. </p>
    <?php echo form_open('Cadastrar_palavra_chave/Inserir'); ?>
      <div class="w3-section">
        <label>Palavra Chave</label>
      </div>

      <div class="w3-section" >
        <input class="w3-input w3-border" style="width: 300px;" type="text" pattern=".{3,16}" required title="3 caracteres mínimos" maxlength="16" name="nome" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-green w3-margin-bottom w3-section" style="width: 300px;">Cadastrar Palavra Chave</button>
    </form>
  </div>

<!-- End page content -->
</div>


<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
