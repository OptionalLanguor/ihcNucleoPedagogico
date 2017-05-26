<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px" >Close Menu</a>
<div class="w3-container">


<div class="w3-cell-row">
<div class="w3-container w3-cell">
<p>
<img src="<?php echo base_url('includes/imagens_pagina/logoUnifei.png')?>"style="width:40px;height:40px; ">
</p>
</div>

<div class="w3-container w3-cell">
<p>
<h1 class="w3-padding-28"><b>UNIFEI</b></h1>
</p>
</div>

</div>

  <h6 class="w3-padding-28"><b>Universidade Federal de Itajubá<br><h8><i>campus</i> Itabira</b></h8></h6>
</div>
<div class="w3-bar-block">

	<!--Tela Principal-->
	<a id="menu_principal" href="<?php echo site_url('Menu_principal') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)==""){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td >
		 <i class="fa fa-home"></i> Menu Principal
	</td>
	</table>
	</div>
	</a>

  <!--Deadline-->
  <a href="<?php echo site_url('Apresentar_deadline') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Apresentar_deadline"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
  <div style="height:100%;width:100%">
  <table>
  <td>
      <i class="fa fa-calendar"></i> Próximos Atendimentos
  </td>
  </table>
  </div>
  </a>

	<!--Registro de Atendimento-->
	<a href="<?php echo site_url('Cadastrar_registro_atendimento') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		<i class="fa fa-calendar-plus-o"></i> Registros de Atendimento
	</td>
	</table>
	</div>
	</a>

	<!--Aluno-->
	<a href="<?php echo site_url('Cadastrar_aluno') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_aluno"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		<i class="fa fa-graduation-cap"></i> Aluno
	</td>
	</table>
	</div>
	</a>

	<!--Professor-->
	<a href="<?php echo site_url('Cadastrar_professor') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_professor"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		<i class="fa fa-drivers-license-o"></i> Professor
	</td>
	</table>
	</div>
	</a>

	<!--Disciplina-->
	<a href="<?php echo site_url('Cadastrar_disciplina') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_disciplina"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
	    <i class="fa fa-pencil-square-o"></i> Disciplina
	</td>
	</table>
	</div>
	</a>

	<!--Palavra-Chave-->
	<a href="<?php echo site_url('Cadastrar_palavra_chave') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_palavra_chave"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		<i class="fa fa-key"></i> Palavra-Chave
	</td>
	</table>
	</div>
	</a>

	<!--Categoria-->
	<a href="<?php echo site_url('Cadastrar_categoria') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_categoria"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		 Categoria
	</td>
	</table>
	</div>
	</a>



	<!--Procedimento-->
	<a href="<?php echo site_url('Cadastrar_procedimento') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_procedimento"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		 Procedimento
	</td>
	</table>
	</div>
	</a>

<!--Norma-->
	<a href="<?php echo site_url('Norma') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Norma"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		<i class="fa fa-book" aria-hidden="true"></i> Norma
	</td>
	</table>
	</div>
	</a>

	<!--Tutorial-->
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

  <!--Cadastrar Anexo-->
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

  <!--Logout-->
   <a href="<?php echo site_url('Logout') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Logout"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
  <div style="height:100%;width:100%">
  <table>
  <td>
     <i class="fa fa-sign-out">
     </i> Sair
  </td>
  </table>
  </div>
  </a>


</div>
