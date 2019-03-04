<?php


include "connect.php";

$a=mysql_query("select sum(credit*point) from test");
$h=mysql_fetch_array($a);

echo $h[0];

$b=mysql_query("select sum(credit) from test");
$i=mysql_fetch_array($b);

echo $i[0];
echo"<br>";

$x = number_format((float)($h[0]/$i[0]), 2, '.', '');

  

echo $x;


?>