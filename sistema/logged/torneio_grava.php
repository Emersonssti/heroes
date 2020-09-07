<? include "db_/db.php"; 

$NOME = strtoupper($_GET["nome"]);
$TH = strtoupper($_GET["th"]);
$INICIO_INSC = $_GET["inicio_insc"];
$FINAL_INSC = $_GET["final_insc"];
$CLASSIFICATORIA = $_GET["classificatoria"];
$FASE_GRUPO = $_GET["fase_grupo"];
$SEMIFINAL = $_GET["semifinal"];
$FINAL = $_GET["final"];
$ID_STATUS = $_GET["status"];
$ID_TORNEIO = $_GET["id_torneio"];
$DESCRICAO = $_GET["descricao"];
$URL_IMG = $_GET["url_img"];
$primeiro = $_GET["primeiro"];
$segundo = $_GET["segundo"];
$terceiro = $_GET["terceiro"];

if($ID_TORNEIO == ""){
    $insert_torneio = $db_heroes->query("INSERT INTO torneio (NOME, TH, INICIO_INSCRICAO, FINAL_INSCRICAO, INICIO_CLASSIFICATORIA, INICIO_FASE_GRUPO, INICIO_SEMIFINAL, DATA_FINAL, ID_STATUS, DESCRICAO, URL_IMG, ID_USER, PRIMEIRO, SEGUNDO, TERCEIRO) VALUES ('" .$NOME. "','" .$TH. "','" .$INICIO_INSC. "','" .$FINAL_INSC. "','" .$CLASSIFICATORIA. "','" .$FASE_GRUPO. "','" .$SEMIFINAL. "','" .$FINAL. "','" .$ID_STATUS. "','" .$DESCRICAO. "', '" .$URL_IMG."','" .$id_user. "','" .$primeiro. "','" .$segundo. "','" .$terceiro. "')");

    if(!$insert_torneio){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_torneio = $db_heroes->query("UPDATE torneio SET NOME = ('".$NOME."'), TH = ('".$TH."'), INICIO_INSCRICAO = ('".$INICIO_INSC."'),  FINAL_INSCRICAO = ('".$FINAL_INSC."'), INICIO_CLASSIFICATORIA = ('".$CLASSIFICATORIA."'), INICIO_FASE_GRUPO = ('".$FASE_GRUPO."'), INICIO_SEMIFINAL = ('".$SEMIFINAL."'), DATA_FINAL = ('".$FINAL."'), ID_STATUS = ('".$ID_STATUS."'), DESCRICAO = ('".$DESCRICAO."'), ID_USER = ('" .$id_user."'), URL_IMG = ('" .$URL_IMG."'), PRIMEIRO = ('" .$primeiro."'), SEGUNDO = ('" .$segundo."'), TERCEIRO = ('" .$terceiro."')  WHERE ID_TORNEIO = ('".$ID_TORNEIO."')");

    if(!$update_torneio){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
