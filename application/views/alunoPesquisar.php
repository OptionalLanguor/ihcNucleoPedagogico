<!DOCTYPE html>
<html>
<title>Sistema do Núcleo Pedagógico</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.output{color: grey;}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Universidade</b></br><b>Federal de Itajubá</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="menu_principal.php"  class="w3-bar-item w3-button w3-hover-white">Paginal Inicial</a> 
    <a href="alunoPesquisar.php" class="w3-bar-item w3-button w3-hover-white">Pesquisar Aluno</a> 
    <a href="alunoCadastrar.php" class="w3-bar-item w3-button w3-hover-white">Cadastrar Aluno</a> 
    <a href="alunoEditar.php" class="w3-bar-item w3-button w3-hover-white">Editar Aluno</a> 
  </div>
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
    <form action="/acoes.php" target="_blank">
      <div class="w3-section">
        <label>Registro Acadêmico</label>
        <input class="w3-input w3-border" type="number" name="RA" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Buscar dados do Aluno</button>
    </form>
  </div>

  <!-- Dados -->
  <div class="w3-container" id="mostra" style="margin-top:20px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Dados atuais do aluno</b></h1>
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
    <form action="/acoes.php" target="_blank">
      <div class="w3-section">
        <label>Nome</label>
        <label class="w3-input output">resultado do banco</label>
      </div>
      <div class="w3-section">
        <label>CPF</label>
        <label class="w3-input output">resultado do banco</label>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <label class="w3-input output">resultado do banco</label>
      </div>
      <div class="w3-section">
        <label>Telefone</label>
        <label class="w3-input output">resultado do banco</label>
      </div>
      <div class="w3-section">
        <label>Curso</label>
        <label class="w3-input output">resultado do banco</label>
      </div>
      <div class="w3-section">
        <label>Periodo do Curso</label>
        <label class="w3-input output">resultado do banco</label>
      </div>
    </form>  
  </div>

<!-- End page content -->
</div>

</body>
</html>
