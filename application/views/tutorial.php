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
	<p>Nesta parte do Sistema é possível instanciar novos registros de atendimento conforme a sua demanda diária de uso. O atendimento tem os campos: data e hora do atendimento, atendente, observação, descrição, palavra-chave, categoria. Demais cadastros, como o de aluno, podem ser abertos durante o preenchimento do Cadastro de registros de atendimento para que informações pertinentes sejam adicionadas e relacionadas com o atendimento. </p>


  <!--
      <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Registro de Atendimento</button>
-->
  </div>

  <!-- Cadastrar aluno -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Aluno.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->



   <!--
     <img src="FluxogramaCadastrarAluno.png" class="w3-round" alt="Norway">
    <img src="index.png" alt="Fluxograma" style="width:1111px;height:624px;">
    -->
    <p>Esta página permite registrar os dados do(s) aluno(s) relacionado(s) com este registro. Para cada aluno devem ser registrado os seguintes dados: nome, registro acadêmico, cpf, email, curso, período e telefone.</p>

    <img src="<?php echo base_url('includes/imagens_view_tutorial/Aluno.png')?>" style="width:100%;height:100%;">

    <p> Para cadastrar, editar ou excluir um aluno, basta ir até a página, no menu lateral, clicando em Aluno. Na página cadastro de aluno pode-se procurar por alunos já cadastrados e editar seus dados ou excluir o aluno, ambas ações nos "Operações" vistas na última coluna da tabela. O botão com um lápis indica a edição dos dados do aluno. O botão com uma lixeira indica a exclusão daquele aluno.</p>

    <p>Para o cadastro de um novo aluno clique no botão verde "Cadastrar novo Aluno". Note que abre uma janela bem intuitiva. Preencha os campos: Registro Acadêmico, Nome, CPF, Curso, Periodo do Curso, Email, Telefone e Endereço e clique no botão verde "Cadastrar Novo Aluno" para efetuar o cadastro</p>
<!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Aluno.</button>
-->
  </div>


   <!-- Cadastrar professor -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Professor.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
    <p>O cadastro do professor deverá exigir que o usuário insira o SIAPE do professor e o nome do professor. </p>

     <img src="<?php echo base_url('includes/imagens_view_tutorial/Professor.png')?>" style="width:100%;height:100%;">
    <p>
    Para cadastrar um professor basta ir na menu lateral e clicar em "Professor" você sera direcionado para página de cadastro, edição e exclusão de professor.
    Ao abrir a página já são listados os professores cadastrados. Na página cadastro de professor pode-se procurar por professores já cadastrados e editar seus dados ou excluir o professor, ambas ações nos "Operações" vistas na última coluna da tabela. O botão com um lápis indica a edição dos dados do professor. O botão com uma lixeira indica a exclusão daquele professor.
    </p>

    <p>Para o cadastro de um novo professor clique no botão verde "Cadastrar Novo Professor". Note que abre uma janela bem intuitiva. Preencha os campos: Nome e Siape. Estes campos e clique no botão verde "Cadastrar Novo Professor" para efetuar o cadastro</p>

<!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Professor.</button>
-->
  </div>


  <!-- Cadastrar Disciplina -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Disciplina.</b></h1>
   <!-- <hr style="width:50px;border:5px solid indigo" class="w3-round"> -->
    <p>O cadastro de novas disciplinas será feito a partir da inserção do nome da
disciplina e sua sigla. Na inserção de uma disciplina é necessário informar os campos de Nome e sigla da disciplina </p>

<img src="<?php echo base_url('includes/imagens_view_tutorial/Disciplina.png')?>" style="width:100%;height:100%;">

 <p>
    Para cadastrar uma disciplina basta ir na menu lateral e clicar em "Disciplina" você sera direcionado para página de cadastro de disciplina.
    Ao abrir a página já são listados as disciplinas cadastradas. Na página cadastro de disciplina pode-se procurar por disciplinas já cadastrados e editar seus dados ou excluir uma disciplina, ambas ações nos "Operações" vistas na última coluna da tabela. O botão com um lápis indica a edição dos dados do disciplina. O botão com uma lixeira indica a exclusão daquela disciplina.
    </p>

    <p>Para o cadastro de uma nova disciplina clique no botão verde "Cadastrar Novo Disciplina". Note que abre uma janela bem intuitiva. Preencha os campos: Nome e SIGLA. Estes campos e clique no botão verde "Cadastrar Novo Professor" para efetuar o cadastro</p>

<!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Disciplina.</button>
-->
  </div>


  <!-- Cadastrar Palavra-Chave -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Palavra-Chave.</b></h1>

    <p>O usuário será capaz de inserir palavras chave. As palavras chave
serão usadas como parâmetros de pesquisa. Cada palavra chave deve conter
seu respectivo nome. </p>

<img src="<?php echo base_url('includes/imagens_view_tutorial/Palavra-chave.png')?>" style="width:100%;height:100%;">

    <p>Clique no menu lateral "Cadastrar Palavra-Chave". Após aberta a página Palavra Chave, preencha o campo: Palavra Chave com uma palavra chave e clique no botão verde "Cadastrar Palavra Chave" para efetuar o cadastro</p>

<!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Palavra-Chave.</button>
-->
  </div>

<!-- Cadastrar Funcionario -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Funcionário.</b></h1>

    <p>O usuário poderá efetuar a inserção de novos funcionários. Devem ser armazenados os seguintes dados para cada funcionário: nome, cpf, email, telefone, login e senha. </p>

    <img src="<?php echo base_url('includes/imagens_view_tutorial/Funcionario.png')?>" style="width:100%;height:100%;">

    <p> Para cadastrar, editar ou excluir um funcionário, basta ir até a página, no menu lateral, clicando em Funcionário. Na pagina cadastro de funcionário pode-se procurar por funcionário já cadastrados e editar seus dados ou excluir o funcionário, ambas ações nos "Operações" vistas na última coluna da tabela. O botão com um lápis indica a edição dos dados do funcionário. O botão com uma lixeira indica a exclusão daquele funcionário.</p>

    <p>Para o cadastro de um novo funcionário clique no botão verde "Cadastrar Novo Funcionário". Note que abre uma janela bem intuitiva. Preencha os campos: Nome, CPF, Email, Telefone e clique no botão verde "Cadastrar Novo Aluno" para efetuar o cadastro</p>
<!--

    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Funcionário.</button>

  </div>
-->
<!-- Cadastrar Categoria -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Categoria.</b></h1>

   <img src="<?php echo base_url('includes/imagens_view_tutorial/Categoria.png')?>" style="width:100%;height:100%;">

    <p>Clique no menu lateral "Categoria". Após aberta a página Categoria, preencha o campo: Nome com uma categoria e clique no botão azul "Criar Categoria" para efetuar o cadastro</p>


   <!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Categoria.</button>
-->
  </div>


  <!-- Cadastrar Procedimento -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Procedimento.</b></h1>

    <img src="<?php echo base_url('includes/imagens_view_tutorial/Procedimento.png')?>" style="width:100%;height:100%;">

   <p>Clique no menu lateral "Procedimento". Após aberta a página Cadastro de Procedimento, preencha o campo: Nome com uma procedimento e clique no botão azul "Criar Procedimento" para efetuar o cadastro</p>

<!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Procedimento.</button>
-->
  </div>

<!-- Cadastrar Anexo -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Cadastrar Anexo.</b></h1>

    <img src="<?php echo base_url('includes/imagens_view_tutorial/Anexo.png')?>" style="width:100%;height:100%;">

   <p>Clique no menu lateral "Anexo". Após aberta a página Cadastro de Anexo, Clique em browse e uma janela para a seleção do arquivo abrirá. Selecione o arquivo desejado(Extensão: .png .jpg .pdf .docx .doc) e clique cadastrar anexo.</p>

<!--
    <button type="submit" class="w3-button w3-block w3-padding-large w3-indigo w3-margin-bottom">Ir para a página Cadastrar Procedimento.</button>
-->
  </div>

 <div class="w3-container" id="services" style="margin-top:70px">
    
  </div>

  <!-- Contact
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Contato com o suporte.</b></h1>
    <hr style="width:50px;border:5px solid indigo" class="w3-round">
    <p>Caso ainda esteja com dúvida contate-nos</p>
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
-->
<!-- End page content -->
</div>

<!-- W3.CSS Container
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>
-->

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
