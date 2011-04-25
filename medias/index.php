<?php
//error_reporting(0);
$params=array("org","firstname","lastname","position","city","country","email","cell","work","type","place","audience","website","lang","region","area","consider");

foreach($params as $k) {
  if (!$_GET[$k]) {
    header("Location: http://213.251.145.96/media.html");
    exit();
  }
}

foreach($params as $k)  {
  $req.=$k."=".urlencode($_GET[$k])."&";
}
$req.="ip"."=".urlencode($_SERVER["X-Forwarded-For"]);

$f=@fopen("http://91.194.60.63/articles/2010/go2.php?".$req,"rb");
while ($s=@fgets($f,1024)) { }
@fclose($f);

echo "<h1>Form OK</h1><p>Your mirror informations has been sent, thanks a lot!</p>";

?>