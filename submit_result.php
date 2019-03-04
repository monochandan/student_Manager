<?php
 include "connect.php";
        $i = mysql_query("insert into com_course select id,semister,code,title,mid,final,thirty,total,grade from registration");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_result_faculty.php">';
        }
?>