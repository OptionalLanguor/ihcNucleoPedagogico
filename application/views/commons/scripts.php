<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

$(function(){
  $('#formulario_professor').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação
        //document.location.href = document.location.href;
        document.getElementById('modalEditarProfessor').style.display='none';
        janelaEdicaoSucesso();

      }
    }
  });
});
$(function(){
  $('#formulario_professor_exclusao').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        //document.location.href = base_url +"index.php/Cadastrar_professor/Pesquisar";
        document.getElementById('modalExcluirProfessor').style.display='none';
        janelaExclusaoSucesso();

      }
    }
  });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////
$(function(){
  $('#formulario_disciplina').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = document.location.href;

      }
    }
  });
});
$(function(){
  $('#formulario_disciplina_exclusao').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = base_url +"index.php/Cadastrar_disciplina/Pesquisar";

      }
    }
  });
});

function carregaDadosDisciplinaJSon(id_Disciplina){
    $.post(base_url +'/index.php/Cadastrar_disciplina/dados_disciplina', {
      id_Disciplina: id_Disciplina
    }, function (data){
      $('#nome').val(data.nome);
      $('#sigla').val(data.sigla);
      $('#nome_exclusao').val(data.nome);
      $('#id_Disciplina_exclusao').val(data.id_Disciplina);
      $('#id_Disciplina').val(data.id_Disciplina);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente.
    }, 'json');
  }

  function janelaEditarDisciplina(id_Disciplina){
    if(id_Disciplina!=null)
    {
      carregaDadosDisciplinaJSon(id_Disciplina);
    }
    document.getElementById("modalEditarDisciplina").style.display = "block";
  }

  function janelaCadastrarDisciplina(){

    document.getElementById("modalCadastrarDisciplina").style.display = "block";
  }

  function janelaExcluirDisciplina(id_Disciplina){
    if(id_Disciplina!=null)
    {
      carregaDadosDisciplinaJSon(id_Disciplina);
    }

    document.getElementById("modalExcluirDisciplina").style.display = "block";
  }



//////////////////////////////////////////////////////////////////////////////////////////////////////
$(function(){
  $('#formulario_aluno').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = document.location.href;

      }
    }
  });
});

//Aqui eu seto uma variável javascript com o base_url do CodeIgniter, para usar nas funções do post.
  var base_url = "<?php echo base_url() ?>";
  /*
   *	Esta função serve para preencher os campos do cliente na janela flutuante
   * usando jSon.
   */
  function carregaDadosProfessorJSon(id_Professor){
    $.post(base_url +'/index.php/Cadastrar_professor/dados_professor', {
      id_Professor: id_Professor
    }, function (data){
      $('#nome').val(data.nome);
      $('#nome_exclusao').text(data.nome);
      $('#siape').val(data.siape);
      $('#id_Professor').val(data.id_Professor);
      $('#id_Professor_exclusao').val(data.id_Professor);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente.
    }, 'json');
  }

  function janelaEditarProfessor(id_Professor){
    if(id_Professor!=null)
    {
      carregaDadosProfessorJSon(id_Professor);
    }
    document.getElementById("modalEditarProfessor").style.display = "block";
  }

  function janelaExcluirProfessor(id_Professor){
    if(id_Professor!=null)
    {
      carregaDadosProfessorJSon(id_Professor);
    }

    document.getElementById("modalExcluirProfessor").style.display = "block";
  }

  function janelaCadastrarProfessor(){
    document.getElementById("modalCadastrarProfessor").style.display = "block";
  }

  function carregaDadosAlunoJSon(id_Pessoa){
    $.post(base_url +'/index.php/Cadastrar_aluno/dados_aluno', {
      id_Pessoa: id_Pessoa
    }, function (data){
      $('#nome').val(data.nome);
      $('#cpf').val(data.cpf);
      $('#email').val(data.email);
      $('#endereco').val(data.endereco);
      $('#telefone').val(data.telefone);
      $('#matricula').val(data.matricula);
      $('#curso').val(data.curso);
      $('#periodo').val(data.periodo);
      $('#id_Pessoa').val(data.id_Pessoa);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente.
    }, 'json');
  }

  function janelaEditarAluno(id_Pessoa){
    if(id_Pessoa!=null)
    {
      carregaDadosAlunoJSon(id_Pessoa);
    }
    //antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal


    document.getElementById("modalEditarAluno").style.display = "block";
  }

  function janelaCadastrarAluno(){
    document.getElementById("modalCadastrarAluno").style.display = "block";
  }

///////////////////////////////////////FUNCIONARIO///////////////////////////////////
$(function(){
  $('#formulario_funcionario').ajaxForm({
    success: function(data) {
      if (data == 1) {

        document.location.href = document.location.href;

      }
    }
  });
});
$(function(){
  $('#formulario_funcionario_exclusao').ajaxForm({
    success: function(data) {
      if (data == 1) {
        document.location.href = base_url +"index.php/Cadastrar_funcionario/Pesquisar";

      }
    }
  });
});


  function carregaDadosFuncionarioJSon(id_Funcionario){
    $.post(base_url +'/index.php/Cadastrar_funcionario/dados_funcionario', {
      id_Funcionario: id_Funcionario
    }, function (data){
      $('#id_Funcionario').val(data.id_Funcionario);
      $('#id_Funcionario_exclusao').val(data.id_Funcionario);
      $('#nome').val(data.nome);
      $('#nome_exclusao').text(data.nome);
      $('#login').val(data.login);
      $('#login_exclusao').text(data.login);
      $('#senha').val(data.senha);
      $('#senha_exclusao').text(data.senha);
      $('#email').val(data.email);
      $('#email_exclusao').text(data.email);
      $('#cpf').val(data.cpf);
      $('#cpf_exclusao').text(data.cpf);
      $('#telefone').val(data.telefone);
      $('#tefefone_exclusao').val(data.telefone);
    }, 'json');
  }

  function janelaEditarFuncionario(id_Funcionario){
    if(id_Funcionario!=null)
    {
      carregaDadosFuncionarioJSon(id_Funcionario);
    }
    document.getElementById("modalEditarFuncionario").style.display = "block";
  }

  function janelaExcluirFuncionario(id_Funcionario){
    if(id_Funcionario!=null)
    {
      carregaDadosFuncionarioJSon(id_Funcionario);
    }

    document.getElementById("modalExcluirFuncionario").style.display = "block";
  }

  function janelaCadastrarFuncionario(){
    document.getElementById("modalCadastrarFuncionario").style.display = "block";
  }


  function atualizaPagina(){
      document.location.href = document.location.href;
  }

  function janelaCadastroSucesso(){
    document.getElementById("sucesso_cadastro").style.display = "block";
  }

  function janelaEdicaoSucesso(){
    document.getElementById("sucesso_edicao").style.display = "block";
  }
  function janelaExclusaoSucesso(){
    document.getElementById("sucesso_exclusao").style.display = "block";
  }

  //Abrir janela de sucesso no cadastro professor
  <?php  if (isset($sucesso_cadastro)) {
    echo 'janelaCadastroSucesso();';
  }
  ?>


////////////////////////////////////REGISTRO DE ATENDIMENTO///////////////////////////////////////

$(function(){
  $('#formulario_relatorio_atendimento').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = document.location.href;

      }
    }
  });
});


  function carregaDadosRegistroAtendimentoJSon(id_Registro){
    $.post(base_url +'/index.php/Cadastrar_registro_atendimento/dados_registro_atendimento', {
      id_Registro: id_Registro
    }, function (data){
      $('#data_abertura').val(data.data_abertura);
      $('#descricao').val(data.descricao);
      $('#id_Categoria').val(data.id_Categoria);
      $('#id_Pessoa').val(data.id_Pessoa);
      $('#id_Registro').val(data.id_Registro);
      $('#observacao').val(data.observacao);

      }, 'json');
  }

  function janelaEditarRegistroAtendimento(id_Registro){
    if(id_Registro!=null)
    {
      carregaDadosRegistroAtendimentoJSon(id_Registro);
    }
    //antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal


    document.getElementById("modalEditarRegistroAtendimento").style.display = "block";
  }

  function janelaCadastrarRegistroAtendimento(){
    document.getElementById("modalCadastrarRegistroAtendimento").style.display = "block";
  }

////////////////////////////////////FINAL RELATORIO DE ATENDIMENTO///////////////////////////////////////
</script>
