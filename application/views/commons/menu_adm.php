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
	<a id="menu_principal_adm" href="<?php echo site_url('Menu_principal') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)==""){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td >
		 <i class="fa fa-home"></i> Menu Principal
	</td>
	</table>
	</div>
	</a>

	<!--Funcionario-->
	<a href="<?php echo site_url('Cadastrar_funcionario') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_funcionario"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">
	<div style="height:100%;width:100%">
	<table>
	<td>
  		<i class="fa fa-user-circle-o"></i> Funcionario
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
