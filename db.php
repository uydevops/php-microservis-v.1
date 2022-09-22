<?php

$db = new PDO('mysql:host=localhost;dbname=ogrenciler', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


 ?>