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

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = document.location.href;

      }
    }
  });
});
$(function(){
  $('#formulario_professor_exclusao').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = base_url +"index.php/Cadastrar_professor/Pesquisar";

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


////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
$(function(){
  $('#formulario_aluno_exclusao').ajaxForm({
    success: function(data) {
      if (data == 1) {

        //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
        document.location.href = base_url +"index.php/Cadastrar_aluno/Pesquisar";

      }
    }
  });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
      $('#nome_exclusao').text(data.nome);
      $('#cpf').val(data.cpf);
      $('#email').val(data.email);
      $('#endereco').val(data.endereco);
      $('#telefone').val(data.telefone);
      $('#matricula').val(data.matricula);
      $('#curso').val(data.curso);
      $('#periodo').val(data.periodo);
      $('#id_Pessoa').val(data.id_Pessoa);
      $('#id_Pessoa_exclusao').val(data.id_Pessoa);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente.
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

  function janelaExcluirAluno(id_Pessoa){
    if(id_Pessoa!=null)
    {
      carregaDadosAlunoJSon(id_Pessoa);
    }

    document.getElementById("modalExcluirAluno").style.display = "block";
  }

  function janelaCadastrarAluno(){
    document.getElementById("modalCadastrarAluno").style.display = "block";
  }

</script>
