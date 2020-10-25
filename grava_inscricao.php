<? include "db_/db.php"; 


$id_torneio =  $_GET["id_torneio"];
$nome =  utf8_decode($_GET["nome"]);
$tag_vila =  $_GET["tag_vila"];
$email =  $_GET["email"];
$nome_discord =  $_GET["nome_discord"];
$twitter =  $_GET["twitter"];
$data_nascimento = $_GET["data_nascimento"];

$valida_email = $db_heroes->prepare("SELECT count(*) FROM inscricao WHERE ID_TORNEIO = '".$id_torneio."'  AND EMAIL = '".$email."' ");
$valida_email->execute();
$rowvalida_email = $valida_email->fetch(PDO::FETCH_NUM);

$valida_vila = $db_heroes->prepare("SELECT count(*) FROM inscricao WHERE ID_TORNEIO = '".$id_torneio."'  AND TAG_VILA = '".$tag_vila."' ");
$valida_vila->execute();
$rowvalida_vila = $valida_vila->fetch(PDO::FETCH_NUM);

if($rowvalida_email[0] > 0){
    echo 0;

} if else($rowvalida_vila[0] > 0){
    echo 1;
}

else{
    $insert_inscricao = $db_heroes->query("INSERT INTO inscricao (ID_TORNEIO, NOME, TAG_VILA, EMAIL, DISCORD, TWITTER, DATA_NASCIMENTO) VALUES ('" . $id_torneio . "','" . $nome."', '" . $tag_vila."', '" . $email."', '" . $nome_discord."', '" . $twitter."', '" . $data_nascimento ."')");

}


?>