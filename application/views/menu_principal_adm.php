<!DOCTYPE html>
<html>
<title>Núcleo Pedagogico</title>

<!-- Header commons/header -->
<?php $this->load->view('commons/header'); ?>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <?php $this->load->view('commons/menu_adm'); ?>
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-indigo w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-indigo w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Núcleo Pedagógico</b></h1>
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Sistema de atendimento.</b></h1>
    <hr style="width:50px;border:5px solid indigo" class="w3-round">
	<p>Bem-vindo admistrador, você pode cadastrar os funcionários do sistema do Núcleo Pedagógico</p>
  </div>


<!-- End page content -->
</div>

<!-- W3.CSS Container
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>
-->

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
