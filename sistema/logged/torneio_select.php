<?

$sql_torneio = $db_heroes->prepare("SELECT NOME, TH, INICIO_INSCRICAO, FINAL_INSCRICAO, INICIO_CLASSIFICATORIA, INICIO_FASE_GRUPO, INICIO_SEMIFINAL, DATA_FINAL, ID_STATUS, DESCRICAO, URL_IMG FROM torneio WHERE ID_TORNEIO = '" . addslashes($_GET["id_torneio"]) . "' ");
$sql_torneio->execute();
$row_torneio = $sql_torneio->fetch(PDO::FETCH_NUM);

if(!$row_torneio){
  $nome = "";
  $th = "";
  $inicio_inscricao = "";
  $final_inscricao = "";
  $classificatoria = "";
  $fase_grupo = "";
  $semifinal = "";
  $final = "";
  $status_ = "";
  $id_torneio = "";
  $descricao = "";
  $url_img = "";
}else{
  $nome = $row_torneio[0];
  $th = $row_torneio[1];
  $inicio_inscricao = $row_torneio[2];
  $final_inscricao = $row_torneio[3];
  $classificatoria = $row_torneio[4];
  $fase_grupo = $row_torneio[5];
  $semifinal = $row_torneio[6];
  $final = $row_torneio[7];
  $status_ = $row_torneio[8];
  $descricao = $row_torneio[9];
  $url_img = $row_torneio[10];
  $id_torneio = $_GET["id_torneio"];
}

// $fabricante = '<option value="' . $rowfabricante[0] . '">' . utf8_encode($rowfabricante[1]) . '</option>';
?>