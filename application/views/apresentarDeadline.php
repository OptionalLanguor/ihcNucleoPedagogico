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
  <div class="w3-container" style="margin-top:40px" id="pesquisa_de_registro_atendimento">
    <h1 class="w3-jumbo"><b>Atendimentos com datas de entregas próximas </b></h1>
  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="w3-table-all">
  <thead>
    <tr class="w3-gray">
      <th>Data de abertura</th>
      <th>Hora de abertura</th>
      <th>Dias restantes</th>
      <th>Nome do Aluno</th>
      <th>Categoria</th>
    </tr>
  </thead>
  <?php if(isset($resultado)){foreach($resultado as $row) { ?>
    <tr>
        <td><?php echo $row->data_abertura;?></td>
        <td><?php echo $row->hora_abertura;?></td>
        <td><?php echo intval($row->dias_restantes);?></td>
        <td><?php echo $row->nome_aluno;?></td>
        <td><?php echo $row->nome_categoria;?></td>
    </tr>
    <tr>
        <td colspan="5">Observação: <?php echo $row->observacao;?></br>Descrição: <?php echo $row->descricao;?></td>
    </tr>
  <?php }} ?>
</table>
</div>


<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
