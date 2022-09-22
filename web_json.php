<?php


require_once 'db.php';

$ogrenciler=array();
$sorgu=$db->query("SELECT * FROM ogrenci",PDO::FETCH_ASSOC);


if($sorgu->rowCount()>0)
{
    foreach($sorgu as $satir)
    {
        $ogrenciler[]=array("adsoyad"=>$satir["adsoyad"],"tckimlik"=>$satir["tckimlik"],"adres"=>$satir["adres"]);
    }
}

header("Content-Type: application/json; CHARSET=UTF-8");
$json=json_encode($ogrenciler,JSON_UNESCAPED_UNICODE);
echo $json;
?>