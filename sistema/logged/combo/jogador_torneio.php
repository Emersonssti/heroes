<option value=""></option>
<?

$sql_torneio = "SELECT 
torneio_inscricoes.ID_JOGADOR,
torneio_inscricoes.ID_VILA, 
jogador.NOME,
vila.NOME_VILA
FROM torneio_inscricoes 
INNER JOIN jogador ON jogador.ID_JOGADOR = torneio_inscricoes.ID_JOGADOR
INNER JOIN vila ON vila.ID_VILA = torneio_inscricoes.ID_VILA
WHERE torneio_inscricoes.ID_TORNEIO IN (".$id_torneio.")";
foreach ($db_heroes->query($sql_torneio) as $result_torneio) {

?>
    <option value="<? echo $result_torneio[0]; ?>"><? echo $result_torneio[2]; ?> - <? echo $result_torneio[3]; ?></option>

<? } ?>

