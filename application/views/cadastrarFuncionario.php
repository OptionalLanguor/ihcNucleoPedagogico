<!DOCTYPE html>
<html>
<head>
<title>Cadastrar Funcionário</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Universidade Federal de Itajubá<br><h5><i>campus</i> Itabira</b></h5></h3>
  </div>
  <div class="w3-bar-block">
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menu Principal</a> 
    <a href="#funcionario" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Funcionarios</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Alunos</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Professores</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Atendimento</a> 
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
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
        <label>Email</label>
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
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Power by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">Ana Lu</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
