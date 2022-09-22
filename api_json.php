<?php



$url = "http://localhost/service/web_json.php";

$json=file_get_contents($url);
$json=json_decode($json,true);
foreach($json as $ogrenci)
{
    foreach($ogrenci as $key=>$value)
    {
        echo $key.": ".$value."<br>";
    }
    echo "<hr>";
}

header("Content-Type: application/xml; CHARSET=UTF-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo "<ogrenciler>";
foreach($json as $ogrenci)
{
    echo "<ogrenci>";
    foreach($ogrenci as $key=>$value)
    {
        echo "<".$key.">".$value."</".$key.">";
    }
    echo "</ogrenci>";
}
echo "</ogrenciler>";


?>