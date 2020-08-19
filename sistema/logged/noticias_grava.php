<? include "db_/db.php"; 

$titulo = $_GET["titulo"];
$data = $_GET["data"];
$fonte = $_GET["fonte"];
$url_foto = $_GET["url_foto"];
$url_fonte = $_GET["url_fonte"];
$id_noticia = $_GET["id_noticia"];

if($id_noticia == ""){
    $insert_noticia = $db_heroes->query("INSERT INTO noticia (TITULO, NOME_GERADOR, URL_FONTE, URL_IMG, DATA_POSTAGEM, ID_USER) VALUES ('" .$titulo. "','" .$fonte. "','" .$url_fonte. "','" .$url_foto. "','" .$data. "','" .$id_user. "')");

    if(!$insert_noticia){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_torneio = $db_heroes->query("UPDATE torneio SET NOME = ('".$NOME."'), TH = ('".$TH."'), INICIO_INSCRICAO = ('".$INICIO_INSC."'),  FINAL_INSCRICAO = ('".$FINAL_INSC."'), INICIO_CLASSIFICATORIA = ('".$CLASSIFICATORIA."'), INICIO_FASE_GRUPO = ('".$FASE_GRUPO."'), INICIO_SEMIFINAL = ('".$SEMIFINAL."'), DATA_FINAL = ('".$FINAL."'), ID_STATUS = ('".$ID_STATUS."'), ID_USER = ('" .$id_user."') WHERE ID_TORNEIO = ('".$ID_TORNEIO."')");

    if(!$update_torneio){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
