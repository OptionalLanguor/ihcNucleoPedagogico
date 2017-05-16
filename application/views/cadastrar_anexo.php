<!DOCTYPE html>
<html>
<title>Cadastro de Anexo</title>

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

  <div class="w3-container" style="margin-top:40px" id="cadastro-palavra-chave">
    <h1 class="w3-jumbo"><b>Anexo</b></h1>
  </div>

  <!-- Preenchimento dos Campos -->

  <div class="w3-container">
    <p> Selecione o anexo a ser carregado: (Máximo 10 MB) </p>
    <!-- <?php echo form_open('cadastrar_anexo/Inserir'); ?> -->
<table class="w3-vertical-align:text-top;">
      <td valign="middle">
        <div class="w3-section" >
         <label class="w3-label w3-border w3-block w3-section w3-large" style="width: 300px;" type="text" name="nome" required>Nome do arquivo</label>
        </div>
      </td>
      <td valign="middle">
        <span style="display:inline-block; width: 10px;"></span>
      </td>
      <td valign="middle">
        <button type="submit" class="w3-button w3-block w3-section w3-indigo w3-margin-bottom w3-padding-small" style="width: 160px;" > Pesquisar </button>
      </td>
</table>
      <button type="submit" class="w3-button w3-block w3-green w3-margin-bottom w3-section" style="width: 470px;">Cadastrar Anexo</button>
    </form>
 </div>

<!-- End page content -->
</div>


<!--Scripts da paǵina
<?php $this->load->view('commons/scripts'); ?>
-->
</body>
</html>
