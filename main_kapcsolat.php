<?php
// kapcsolódás az adatbázishoz
$kapcsolat = mysql_connect("127.0.0.1", "zupicpeter", "Pepeandalex1");
if (!$kapcsolat) die("Nem sikerült kapcsolódni az adatbázishoz!");
mysql_select_db("zupicpeter", $kapcsolat) or die("Nem sikerült kiválasztani az adatbázist!");
?>