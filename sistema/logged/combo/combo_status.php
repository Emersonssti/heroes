<?
 
$sql_status = "SELECT ID_STATUS, DESCRICAO FROM status_torneio ORDER BY DESCRICAO DESC";
foreach ($db_heroes->query($sql_status) as $result_status) {

?>
    <option <? if($result_status[0] == $status_){ echo 'selected';} ?> value="<? echo $result_status[0]; ?>"><? echo utf8_encode($result_status[1]); ?></option>

<? } ?>

