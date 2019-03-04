<?php
session_start();

$code = $_GET['txtid'];
include "connect.php";

$i = mysql_query("delete from registration where id='".$_SESSION['sess_ID']."' and code ='".$code."'");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=registration.php">';
        }


?>

