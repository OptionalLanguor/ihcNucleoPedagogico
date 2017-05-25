<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px" >Close Menu</a>
<div class="w3-container">

<p>
<img src="<?php echo base_url('includes/imagens_pagina/logoUnifei.png')?>" style="width:40px;height:40px;" align=left>
<h1 class="w3-padding-28"><b>UNIFEI</b></h1>
</p>

  <h6 class="w3-padding-28"><b>Universidade Federal de Itajubá<br><h8><i>campus</i> Itabira</b></h8></h6>
</div>
<div class="w3-bar-block">

	<!--Tela Principal-->
	<table>
	<td>
  		<a id="menu_principal" href="<?php echo base_url() ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)==""){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-home"></i> Menu Principal</a>
	</td>
	</table>
	<!--Registro de Atendimento-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_registro_atendimento') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-calendar-plus-o"></i> Registros de Atendimento</a>
	</td>
	</table>
	<!--Aluno-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_aluno') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-graduation-cap"></i> Aluno</a>
	</td>
	</table>
	<!--Professor-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_professor') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-drivers-license-o"></i> Professor</a>
	</td>
	</table>
  <!--Disciplina-->
  <table>
  <td>
      <a href="<?php echo site_url('Cadastrar_disciplina') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_disciplina"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-pencil-square-o"></i> Disciplina</a>
  </td>
  </table>
	<!--Palavra-Chave-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_palavra_chave') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_palavra_chave"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-key"></i> Palavra-Chave</a>
	</td>
	</table>
	<!--Funcionario-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_funcionario') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_funcionario"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-user-circle-o"></i> Funcionario</a>
	</td>
	</table>
	<!--Categoria-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_categoria') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_categoria"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"> Categoria</a>
	</td>
	</table>
	<!--Procedimento-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_procedimento') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_procedimento"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"> Procedimento</a>
	</td>
	</table>

<!--Norma-->
	<table>
	<td>
  		<a href="<?php echo site_url('Norma') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Norma"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-book" aria-hidden="true">
  		</i> Norma</a>
	</td>
	</table>

	<!--Tutorial-->
	<table>
	<td>
  		<a href="<?php echo site_url('Tutorial') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Tutorial"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-question-circle">
  		</i> Tutorial</a>
	</td>
	</table>


	<!--Deadline-->
	<table>
	<td>
  		<a href="<?php echo site_url('Apresentar_deadline') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Apresentar_deadline"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-question-circle">
  		</i> Deadline</a>
	</td>
	</table>


  <!--Cadastrar Anexo-->
  <table>
  <td>
      <a href="<?php echo site_url('Cadastrar_anexo') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_anexo"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-paperclip">
      </i> Anexo</a>
  </td>
  </table>


</div>
