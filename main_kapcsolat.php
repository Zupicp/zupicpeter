<?php
// kapcsol�d�s az adatb�zishoz
$kapcsolat = mysql_connect("127.0.0.1", "zupicpeter", "Pepeandalex1");
if (!$kapcsolat) die("Nem siker�lt kapcsol�dni az adatb�zishoz!");
mysql_select_db("zupicpeter", $kapcsolat) or die("Nem siker�lt kiv�lasztani az adatb�zist!");
?>