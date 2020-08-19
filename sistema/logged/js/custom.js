
/////////////////
$("#sair").click(function(){


       $.ajax({url: "config/sair.php?sair=1",cache: false}).done(function(txtstatus) {
          
        if(txtstatus == 0){
            location.replace("../index.php");
        }
        
       });
    });  


    /////////////////
$("#gravar_torneio").click(function(){
    var ID_TORNEIO = $('#id_torneio').val();
    var NOME = $('#torneio_nome').val();
    var TH = $('#torneio_th').val();
    var INICIO_INSC = $('#torneio_inicio_insc').val();
    var FINAL_INSC = $('#torneio_final_insc').val();
    var CLASSIFICATORIA = $('#torneio_classificatoria').val();
    var FASE_GRUPO = $('#torneio_fase_grupo').val();
    var SEMIFINAL = $('#torneio_semifinal').val();
    var FINAL = $('#torneio_final').val();
    var STATUS = $('#torneio_status').val();
   
    $.ajax({ url:'torneio_grava.php?nome=' + NOME + '&th=' + TH + '&inicio_insc=' + INICIO_INSC + '&final_insc=' + FINAL_INSC+ '&classificatoria=' + CLASSIFICATORIA+ '&fase_grupo=' + FASE_GRUPO + '&semifinal=' + SEMIFINAL + '&final=' + FINAL + '&status=' + STATUS + '&id_torneio=' + ID_TORNEIO, cache: false }).done(function (txtstatus) {
 
    
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Torneio criado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/torneio_list.php");
        },delay);

       }else if( txtstatus == 2){
        swal("Registro Alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/torneio_list.php");
        },delay);
       }
       
   
    })
 });  

///////////////// Grava Notícia
$("#gravar_noticia").click(function(){
    var ID_NOTICIA = $('#id_noticia').val();

    var TITULO = $('#titulo').val();
    var DATA = $('#data').val();
    var FONTE = $('#fonte').val();
    var URL_FOTO = $('#url_foto').val();
    var URL_FONTE = $('#url_fonte').val();
   
    $.ajax({ url:'noticias_grava.php?titulo=' + TITULO + '&data=' + DATA + '&fonte=' + FONTE + '&url_foto=' + URL_FOTO+ '&url_fonte=' + URL_FONTE + '&id_noticia=' + ID_NOTICIA, cache: false }).done(function (txtstatus) {
 
    
       if(txtstatus == 0){
        swal("Não foi possível salvar os dados, contate o suporte", '', 'error');

       }else if( txtstatus == 1){

        swal("Notícia criada com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/noticias_list.php");
        },delay);

       }else if( txtstatus == 2){
        swal("Registro Alterado com sucesso!");
        var delay=2000; //1 seconds
        setTimeout(function(){
            location.replace("../logged/noticias_list.php");
        },delay);
       }
       
   
    })
 });  
 
 //Excluir Noticia
 function Excluir_Noticia(id) {
     alert('teste');
    // var ID_MANU_IMOVEL = $("#id_manu_imovel").val();
    // var IdMaterial = id;
    // var originurl = window.location.origin;

    // //TRATA VALOR TOTAL PARA INSERIR NO BANCO (STRING PARA FLOAT)
    // var VALOR_TOTAL = $("#tdlistmavlr_total_" + IdMaterial).html();
    // var VALOR_TOTAL_ = parseFloat(VALOR_TOTAL.split(".").join("").replace(",", "."));

    // var TOTAL_ATUAL = $("#somamanutencao").html();
    // var TOTAL_ATUAL_ = parseFloat(TOTAL_ATUAL.split(".").join("").replace(",", "."));

    // $.ajax({ url: originurl + "/sistema/logged/modulos/cad-manutencao-bem-imovel/deletar_material.php?id_material=" + IdMaterial, cache: false }).done(function (txtinativa) {

    //     if (txtinativa == 1) {
    //         $("#trmaterial_" + IdMaterial).fadeOut();

    //         var SOMA_TOTAL = (TOTAL_ATUAL_ - VALOR_TOTAL_);
    //         SOMA_TOTAL = SOMA_TOTAL.toLocaleString('pt-br', { minimumFractionDigits: 4, maximumFractionDigits: 4 });
    //         $("#somamanutencao").html(SOMA_TOTAL);

    //     } else {
    //         swal("Erro ao deletar o registro, por favor, contate o Suporte!", '', 'error');
    //     }
    // });
}
     