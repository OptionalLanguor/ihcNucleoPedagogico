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
      $('#siape').val(data.siape);
      $('#id_Professor').val(data.id_Professor);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente.
    }, 'json');
  }

  function janelaEditarProfessor(id_Professor){
    if(id_Professor!=null)
    {
      carregaDadosProfessorJSon(id_Professor);
    }
    //antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal


    document.getElementById("modalEditarProfessor").style.display = "block";
  }

  function janelaCadastrarProfessor(){
    document.getElementById("modalCadastrarProfessor").style.display = "block";
  }

</script>
