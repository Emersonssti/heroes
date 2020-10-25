

//Valida Tag da vila
$("#tag_vila").blur(function () {
 
    var TAG_VILA_ = $("#tag_vila").val();
    var CV_TORNEIO = $("#cv").val();
    var TAG_VILA_SPLIT = TAG_VILA_.split("#");
    TAG_VILA = TAG_VILA_SPLIT[1];

$.ajax({ url: "valida_vila.php?tag_vila=" + TAG_VILA + "&cv_torneio=" + CV_TORNEIO, cache: false }).done(function (txtstatus) {

    var TAG_SPLIT = txtstatus.split("-");
    var CV_VALIDADO = TAG_SPLIT[0];
    var NICK = TAG_SPLIT[1];

  if(txtstatus == 0){
    swal('Erro!', 'Tag Inválida.', 'error');
    $("#tag_vila").val("");
  } else if(txtstatus == 1){
    swal('Erro!', TAG_VILA_+' Não corresponde a uma TAG de TH '+ CV_TORNEIO, 'error');  
      $("#tag_vila").val("");

  }else{
        $("#tag_vila").val(TAG_VILA+' - '+NICK);
        $('#tag_vila').prop('disabled', true);

  }
  


    })
    
});

//Salva Inscrição
$("#salvar_inscricao").click(function () {

    var ID_TORNEIO = $("#id_torneio").val();
    var TAG_VILA_ = $("#tag_vila").val();
    var TAG_VILA_SPLIT = TAG_VILA_.split("-");
    var TAG_VILA = TAG_VILA_SPLIT[0];
    var NOME_VILA = TAG_VILA_SPLIT[1];
    var NOME = $("#nome").val();
    var EMAIL = $("#email").val();
    var DISCORD = $("#nome_discord").val();
    var TWITTER = $("#twitter").val();
    var DATA_NASCIMENTO = $("#data_nascimento").val();

    $.ajax({ url: "grava_inscricao.php?id_torneio=" + ID_TORNEIO + "&nome=" + NOME + "&tag_vila=" + TAG_VILA + "&nome_vila=" + NOME_VILA + "&email=" + EMAIL + "&nome_discord=" + DISCORD + "&data_nascimento=" + DATA_NASCIMENTO + "&twitter=" + TWITTER, cache: false }).done(function (txtstatus) {

      if(txtstatus.trim() == 0){
        alert('Email duplicado');
      }
      if(txtstatus.trim() == 0){
        alert('Vila ja cadastrada');
      }

    })

})