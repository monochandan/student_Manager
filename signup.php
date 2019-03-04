<?php
		if (isset($_POST['signup'])) {
		$id = trim($_POST['txtid']);
		$name = trim($_POST['txtname']);
		$dept = trim($_POST['txtdept']);
		$intake = trim($_POST['txtintake']);
		$section = trim($_POST['txtsection']);
        $mail = trim($_POST['txtmail']);
		$phone = trim($_POST['txtphone']);
        $pass = trim($_POST['txtpass']);
        if(isset($_POST['signup'])){
        if(empty($id) || empty($mail))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
        $i = mysql_query("insert into user values('".$id."','".$name."','".$dept."','".$intake."','".$section."','".$mail."','".$phone."','".$pass."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=student_login.php">';
        }

        }
    }
		}

    ?>
