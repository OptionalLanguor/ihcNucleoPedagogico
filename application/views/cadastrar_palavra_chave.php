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
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxlarge w3-text-indigo"><b>Cadastro de Palavras Chave</b></h1>
  </div>


  <!-- Preenchimento dos Campos -->
    <p>Insira a(s) palavra(s) chave(s) no campo abaixo. </p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-group">
        <label>Palavra Chave</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>

      <button type="submit" class="w3-button w3-block w3-indigo w3-margin-bottom">Cadastrar Palavra Chave</button>
    </form>
  </div>

<!-- End page content -->
</div>


<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
