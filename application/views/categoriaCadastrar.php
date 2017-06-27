<!DOCTYPE html>
<html>
<title>Sistema do Núcleo Pedagógico</title>

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
<div class="w3-main" style="margin-left:340px;width: 70%">

  <!-- Header -->
  <div class="w3-container" style="margin-top:40px" id="novoaluno">
    <h1 class="w3-jumbo"><b>Cadastro de Categoria</b></h1>
  </div>

  <!-- Insercao -->
  <div class="w3-container" id="criacao" >
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Criação de nova Categoria</b></h1>
    <hr style="width:50px;border:5px solid #3f51b5" class="w3-round">

    <?php echo form_open('Cadastrar_categoria/Cadastrar'); ?>

    <?php
        if (isset($sucesso_msg)) {
          echo "<div class='w3-container w3-center w3-green'>";
          echo $sucesso_msg;
          echo "</div>";
        }
      ?>
      <div class="w3-section">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="Nome" required>
      </div>
      <div class="w3-section">
        <label>Quantidade máxima de dias entre atendimento e dia de entrega: </label>
        <input class="w3-input w3-border" type="number" maxlength="3" min="1"  name="prazo_deadline" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Criar Categoria</button>
    </form>
  </div>

<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
