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
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_registro_atendimento">
    <h1 class="w3-jumbo"><b>Nucleo Pedagógico</b></h1></br>
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Funções do Sistema</b></h1>
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">
  </div>


<table class="table-metro">
  <tr>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Apresentar_deadline') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Apresentar_deadline"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-calendar"></i> Próximos Atendimentos
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_registro_atendimento') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-calendar-plus-o"></i> Registros de Atendimento
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_aluno') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_aluno"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-graduation-cap"></i> Aluno
          </td>
          </table>
          </div>
          </a>
    </td>
  </tr>
  <tr>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_professor') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_professor"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-drivers-license-o"></i> Professor
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_disciplina') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_disciplina"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-pencil-square-o"></i> Disciplina
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_palavra_chave') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_palavra_chave"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-key"></i> Palavra-Chave
          </td>
          </table>
          </div>
          </a>
    </td>
  </tr>
  <tr>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_categoria') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_categoria"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
               Categoria
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
          <a href="<?php echo site_url('Cadastrar_acao') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_acao"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
               Ação
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_procedimento') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_procedimento"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
               Procedimento
          </td>
          </table>
          </div>
          </a>
    </td>
  </tr>
  <tr>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Norma') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Norma"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-book" aria-hidden="true"></i> Norma
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Tutorial') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Tutorial"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
              <i class="fa fa-question-circle">
              </i> Tutorial
          </td>
          </table>
          </div>
          </a>
    </td>
    <td class="td-metro td-blue">
              <a href="<?php echo site_url('Cadastrar_anexo') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_anexo"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
          <div style="height:100%;width:100%">
          <table>
          <td>
             <i class="fa fa-paperclip">
              </i> Anexo
          </td>
          </table>
          </div>
          </a>
    </td>
  </tr>
</table>


<!-- End page content -->
</div>

<!-- W3.CSS Container
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>
-->

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
