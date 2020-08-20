
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
    var DESCRICAO = $('#torneio_descricao').val();
    var URL_IMG = $('#torneio_url_img').val();
    var STATUS = $('#torneio_status').val();
   
    $.ajax({ url:'torneio_grava.php?nome=' + NOME + '&th=' + TH + '&inicio_insc=' + INICIO_INSC + '&final_insc=' + FINAL_INSC+ '&classificatoria=' + CLASSIFICATORIA+ '&fase_grupo=' + FASE_GRUPO + '&semifinal=' + SEMIFINAL + '&final=' + FINAL + '&status=' + STATUS + '&id_torneio=' + ID_TORNEIO + '&descricao=' + DESCRICAO + '&url_img=' + URL_IMG, cache: false }).done(function (txtstatus) {
 
    
        alert(txtstatus);
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

    var ID_NOTICIA = id;

    $.ajax({ url: 'noticias_excluir.php?id_noticia=' + ID_NOTICIA, cache: false }).done(function (txtinativa) {


        if (txtinativa == 1) {

            swal("Erro ao deletar o registro, por favor, contate o Suporte!", '', 'error');


        } else {
            $("#tr_noticia_" + ID_NOTICIA).fadeOut();
        }
    });
}
     