
<?

$tag_vila =  '#'.$_GET["tag_vila"];
$cv_torneio =  $_GET["cv_torneio"];
// $tag_vila =  "#9VQ2LC9GL";


$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImUzZjcyMjNjLTkwMTktNDFjYy1iZjk3LTVkZmM4ZWIwMDVjNCIsImlhdCI6MTYwMzU4NjAxMywic3ViIjoiZGV2ZWxvcGVyLzE0YTdhZjExLTU0MzQtYTc0MC0wNWVjLTEzMmM5MmJjNmUyOSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIwMS4xMi43MC41MiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.soHycf4nhvvWkYdOa58h8I9K1icU430ZxeIlNGwnOB9zGpIlcp5QEcRQ9GEVDTA50ufrgZy7RiEoqLu84h1UGA";

$url = "https://api.clashofclans.com/v1/players/" . urlencode($tag_vila);

$ch = curl_init($url);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;

curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);

if (isset($data["reason"])) {

  echo 0;

}else{
    $th = $data["townHallLevel"];

    if($th != $cv_torneio){

      echo 1;
    }else{

      $th = $data["townHallLevel"];
      $nick = $data["name"];
      echo $th.'-'.$nick;

    }
  
}

?>
