<?php


$url = "http://localhost/service/web_json.php";
$xml=simplexml_load_file($url);
$json=json_encode(json_decode($url),true);
$json=json_decode($json,true);
$ogrenciler=$json["ogrenci"];
foreach($ogrenciler as $ogrenci)
{
    foreach($ogrenci as $key=>$value)
    {
        echo $key.": ".$value."<br>";
    }
    echo "<hr>";
}


Yiğit Tuğa

Adana /Çukurova 

01 T 0069
?>