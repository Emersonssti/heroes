<?
session_start();

 if($_SESSION['id_user'] == ""){ ?>
    <script>window.parent.location.assign("https://torneioheroes.com/sistema/");</script>
 <? } 

$db_confi= new PDO('mysql:host=localhost;dbname=tornei30_config', "root", ""); 
$db_heroes= new PDO('mysql:host=localhost;dbname=tornei30_heroes', "root", ""); 

$id_user = $_SESSION['id_user'];
$nome_user = $_SESSION['nome_user'];
?>