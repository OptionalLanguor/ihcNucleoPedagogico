<!DOCTYPE html>
<html>
<title>Núcleo Pedagogico</title>

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
  <span>Núcleo Pedagógico - Norma</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Registro de Atendimento -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Norma</b></h1>
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Normas da Unifei</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
	<p>Nesta parte do Sistema é visualizar  as normas da Unifei,abrindo a norma desejada nos tópipos abaixo. </p>

</div>
 
<!--
  <li><a href="http://docs.google.com/gview?url=http://www.oproximomovimento.com.br/PDFs/Constelacao_Sistemica.pdf&embedded=true" target="_blank">Constelação Sistêmica</a></li>
-->
<div class="w3-main" style="margin-left:340px;margin-right:340px">
<!--

<button action="https://www.unifei.edu.br/conselhos/cepead/normas"type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom"  >Ir para site da Unifei com todas as normas</button>

<form action="https://www.unifei.edu.br/conselhos/cepead/normas" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">
    <input type="submit" value="Ir para site da Unifei com todas as normas" />
</form>

-->
 </div>

 <div class="w3-container" style="margin-top:80px" id="showcase">
</p>
<p>
Norma de Graduação atualizada - CEPEAd em PDF - Unifei
</p>
<li><a href="https://www.unifei.edu.br/file/25694/download?token=GteQRiVR">Norma em PDF</a></li>
</p>

<p>
<p>
Norma para programas de formação em graduação - Unifei  
</p>
<li><a href="https://unifei.edu.br/files/25-03-2015%20-%20NORMA%20PARA%20PROGRAMAS%20DE%20FORMA%C3%87%C3%83O%20EM%20GRADUA%C3%87%C3%83O.pdf" target="_blank">Norma em PDF</a></li>
</p>

<p>
</p>
Norma para mobilidade internacional para cursos de graduação - Unifei
<p>
<li><a href="https://www.unifei.edu.br/files/NORMA-DE-MOBILIDADE-INTERNACIONAL-CURSOS%20DE%20GRADUA%C3%87%C3%83O.pdf" target="_blank">Norma em PDF</a></li>

</p>
REGIMENTO DISCIPLINAR DO CORPO DISCENTE DA UNIFEI 
<p>
<li><a href="https://www.unifei.edu.br/file/25693/download?token=BUbBowYQ" target="_blank">Regimento em PDF</a></li>

  

</div>

 
 

    

 
</div>

<!-- W3.CSS Container
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>
-->

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
