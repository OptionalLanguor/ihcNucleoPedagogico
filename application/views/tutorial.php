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
  <span>Núcleo Pedagógico - Tutorial</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Registro de Atendimento -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Tutoriais</b></h1>
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Registro de Atendimento.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
	<p>Nesta parte do Sistema é possível instanciar novos registros de atendimento conforme a sua demanda diária de uso. O atendimento tem os campos: data e hora do atendimento, atendente, observação, descrição, palavra-chave, categoria. Demais cadastros, como o de aluno, podem ser abertos durante o preenchimento do Cadastro de registros de atendimento para que informações pertinentes sejam adicionadas e relacionadas com o atendimento.</p>
  
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Registro de Atendimento</button>

  </div>

  <!-- Cadastrar aluno -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Aluno.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
    <p>Esta página permite registrar os dados do(s) aluno(s) relacionado(s) com este registro. Para cada aluno devem ser registrado os seguintes dados: nome, registro acadêmico, cpf, email, curso, período e telefone.</p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Aluno.</button>

  </div>


   <!-- Cadastrar professor -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Professor.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
    <p>O cadastro do professor deverá exigir que o usuário insira o SIAPE do professor e o nome do professor. Assim como o cadastro do aluno. </p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Professor.</button>

  </div>


  <!-- Cadastrar Disciplina -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Disciplina.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
    <p>O cadastro de novas disciplinas será feito a partir da inserção do nome da
disciplina e sua sigla. Na inserção de uma disciplina é necessário informar os campos de Nome e sigla da disciplina </p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Disciplina.</button>

  </div>


  <!-- Cadastrar Palavra-Chave -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Palavra-Chave.</b></h1>
   
    <p>O usuário será capaz de inserir palavras chave. As palavras chave
serão usadas como parâmetros de pesquisa. Cada palavra chave deve conter
seu respectivo nome. </p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Palavra-Chave.</button>

  </div>

<!-- Cadastrar Funcionario -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Funcionário.</b></h1>
   
    <p>O usuário poderá efetuar a inserção de novos funcionários. Devem ser armazenados os seguintes dados para cada funcionário: nome, cpf, email, telefone, login e senha. </p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Funcionário.</button>

  </div>

<!-- Cadastrar Categoria -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Categoria.</b></h1>
   
    <p>Permite inserir novas categorias no sistema. Cada registro de atendimento terá vinculado a si uma categoria apenas. Novas categorias poderão surgir ao longo do tempo, portanto o programa deve ser capaz de efetuar a inserção de categorias. As categorias tem os seguintes dados: nome e data de criação.. </p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Categoria.</button>

  </div>


  <!-- Cadastrar Procedimento -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Procedimento.</b></h1>
   
    <p>O procedimento deve ser cadastrado durante a criação da categoria. O
funcionário deverá inserir em um campo de texto a descrição do respectivo
procedimento. </p>
    
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Procedimento.</button>

  </div>

 

    

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Contato com o suporte.</b></h1>
    <hr style="width:50px;border:5px solid indigo" class="w3-round">
    <p>Caso ainda esteja com duvida contatenos</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-group">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-group">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-group">
        <label>Dúvida</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar</button>
    </form>
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
