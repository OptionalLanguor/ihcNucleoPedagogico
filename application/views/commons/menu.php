<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
<div class="w3-container">
  <h3 class="w3-padding-64"><b>Universidade Federal de Itajubá<br><h5><i>campus</i> Itabira</b></h5></h3>
</div>
<div class="w3-bar-block">
  <a id="menu_principal" href="<?php echo base_url() ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)==""){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-home"></i> Menu Principal</a>
  <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-calendar-plus-o"></i> Registros de Atendimento</a>
  <a id="aluno" href="<?php echo site_url('Cadastrar_aluno') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_aluno"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-user-o"></i> Cadastrar Aluno</a>
  <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-drivers-license-o"></i> Cadastrar Professor</a>
  <a href="<?php echo site_url('Cadastrar_palavra_chave') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_palavra_chave"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>"><i class="fa fa-key"></i> Cadastrar Palavra-Chave</a>
  <a href="<?php echo site_url('Cadastrar_funcionario') ?>" onclick="w3_close()" class="<?php if($this->uri->segment(1)=="Cadastrar_funcionario"){echo "w3-bar-item w3-button w3-white";}else{echo "w3-bar-item w3-button w3-hover-white";}?>">Cadastrar Funcionario</a>
</div>
