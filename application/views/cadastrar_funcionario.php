<!DOCTYPE html>
<html>
<title>Cadastrar Funcionário</title>

<!-- Header commons/header -->
<?php $this->load->view('commons/header'); ?>

<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <?php $this->load->view('commons/menu'); ?>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-indigo w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-indigo w3-margin-right" onclick="w3_open()">☰</a>
  <span>Núcleo Pegagogico</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

 <div class="w3-container" id="funcionario" style="margin-top:75px">
 <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Funcionário</b></h1>

    <hr style="width:50px;border:5px indigo" class="w3-round">

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Funcionário - tela de cadastro -->


    <form action="/action_page.php" target="_blank">
      <div class="w3-group">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>

     <div class="w3-group">
        <label>CPF</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>

      <div class="w3-group">
        <label>E-mail</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>

      <div class="w3-group">
        <label>Telefone</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>

     <div class="w3-group">
        <label>Login</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>

     <div class="w3-group">
        <label>Senha</label>
        <input class="w3-input w3-border" type="password" name="Message" required>
      </div>



      <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Cadastrar</button>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-white w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"></div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
