<?

$sql_torneio = $db_heroes->prepare("SELECT NOME, TH, INICIO_INSCRICAO, FINAL_INSCRICAO, INICIO_CLASSIFICATORIA, INICIO_FASE_GRUPO, INICIO_SEMIFINAL, DATA_FINAL, ID_STATUS, DESCRICAO, URL_IMG FROM torneio WHERE ID_TORNEIO = '" . addslashes($_GET["id_classificatoria"]) . "' ");
$sql_torneio->execute();
$row_torneio = $sql_torneio->fetch(PDO::FETCH_NUM);

if(!$row_torneio){
  $nome = "";
  $th = "";
  $inicio_inscricao = "";
  $status_ = "";
  $torneio_ = "";
}else{
  $id_classificatoria = $_GET["id_classificatoria"];
  $nome = $row_torneio[0];
  $th = $row_torneio[1];
  $torneio_ = $row_torneio[2];

}

// $fabricante = '<option value="' . $rowfabricante[0] . '">' . utf8_encode($rowfabricante[1]) . '</option>';
?>