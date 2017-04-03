<!DOCTYPE html>
<html>
<title>Cadastro de Palavras Chave</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:25px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Universidade Federal de Itajubá<br><h5><i>campus</i> Itabira</b></h5></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menu Principal</a>
 
<a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Cadastro de Aluno</a>  
 <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Cadastro de Categoria</a> 
 <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Cadastro de Professor</a>      
 <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registros de Atendimento</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Fale Conosco</a>
  </div>
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
