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
    <h1 class="w3-jumbo"><b>Próximos Atendimentos</b></h1></br>
    <h1 class="w3-xxlarge"><b>Atendimentos com data de término no mês seguinte.</b></h1>
  </div>

  <!-- Dados -->
  <div class="w3-container">
  <table class="tabela">

  <?php if(isset($resultado)){foreach($resultado as $row) { ?>

    <tr class="linha">
        <td class="coluna" width="18%">Categoria: <?php echo $row->nome_categoria;?></br>Nome do Aluno: <?php echo $row->nome_aluno;?></td>
        <td class="coluna" width="14%"><?php echo $row->dias_restantes_texto;?></td>
        <td class="coluna" width="18%">Data da abertura: <?php echo $row->data_abertura;?></br>Hora da abertura: <?php echo $row->hora_abertura;?></td>
        <td class="coluna break" width="60%">Descrição: <?php echo $row->descricao;?></br>Observação: <?php echo $row->observacao;?></td>
    </tr>
    <tr class="separador"><td colspan="4"></td></tr>

  <?php }} ?>
</table>
</div>


<!-- End page content -->
</div>

<!--Scripts da paǵina -->
<?php $this->load->view('commons/scripts'); ?>

</body>
</html>
