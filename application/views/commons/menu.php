<style type="text/css">
.boton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:10px;
	-moz-border-radius-topleft:10px;
	border-top-left-radius:10px;
	-webkit-border-top-right-radius:10px;
	-moz-border-radius-topright:10px;
	border-top-right-radius:10px;
	-webkit-border-bottom-right-radius:10px;
	-moz-border-radius-bottomright:10px;
	border-bottom-right-radius:10px;
	-webkit-border-bottom-left-radius:10px;
	-moz-border-radius-bottomleft:10px;
	border-bottom-left-radius:10px;
	text-indent:0;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:arial;
	font-size:18px;
	font-weight:normal;
	font-style:normal;
	height:40px;
	line-height:40px;
	width:270px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #ffffff;
}
.boton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.boton:active {
	position:relative;
	top:1px;
}</style>

<style>
body {
    background-image: url('../includes/imagens_pagina/predio1.png');
  
}
</style>

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
  		<a id="menu_principal" href="<?php echo base_url() ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)==""){echo "boton";}else{echo "boton";}?>"><i class="fa fa-home"></i> Menu Principal</a>
	</td>
	</table>
	<!--Registro de Atendimento-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_registro_atendimento') ?>" onclick="w3_close()" class="boton"><i class="fa fa-calendar-plus-o"></i> Registros de Atendimento</a>
	</td>
	</table>
	<!--Aluno-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_aluno') ?>" onclick="w3_close()" class="boton"><i class="fa fa-graduation-cap"></i> Aluno</a>
	</td>
	</table>
	<!--Professor-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_professor') ?>" onclick="w3_close()" class="boton"><i class="fa fa-drivers-license-o"></i> Professor</a>
	</td>
	</table>
  <!--Disciplina-->
  <table>
  <td>
      <a href="<?php echo site_url('Cadastrar_disciplina') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_disciplina"){echo "boton";}else{echo "boton";}?>"><i class="fa fa-pencil-square-o"></i> Disciplina</a>
  </td>
  </table>
	<!--Palavra-Chave-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_palavra_chave') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_palavra_chave"){echo "boton";}else{echo "boton";}?>"><i class="fa fa-key"></i> Palavra-Chave</a>
	</td>
	</table>
	<!--Funcionario-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_funcionario') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_funcionario"){echo "boton";}else{echo "boton";}?>"><i class="fa fa-user-circle-o"></i> Funcionario</a>
	</td>
	</table>
	<!--Categoria-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_categoria') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_categoria"){echo "boton";}else{echo "boton";}?>"> Categoria</a>
	</td>
	</table>
	<!--Procedimento-->
	<table>
	<td>
  		<a href="<?php echo site_url('Cadastrar_procedimento') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_procedimento"){echo "boton";}else{echo "boton";}?>"> Procedimento</a>
	</td>
	</table>

<!--Norma-->
	<table>
	<td>
  		<a href="<?php echo site_url('Norma') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Norma"){echo "boton";}else{echo "boton";}?>"><i class="fa fa-book" aria-hidden="true">
  		</i> Norma</a>
	</td>
	</table>

	<!--Tutorial-->
	<table>
	<td>
  		<a href="<?php echo site_url('Tutorial') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Tutorial"){echo "boton";}else{echo "boton";}?>"><i class="fa fa-question-circle">
  		</i> Tutorial</a>
	</td>
	</table>




  <!--Cadastrar Anexo-->
  <table>
  <td>
      <a href="<?php echo site_url('Cadastrar_anexo') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_anexo"){echo "boton";}else{echo "boton";}?>"><i class="fa fa-paperclip">
      </i> Anexo</a>
  </td>
  </table>


</div>
