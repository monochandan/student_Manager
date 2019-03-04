<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#575c68" background="">
<div id="topbar">
    	<center><h1 style="color:white">Add Your Routine</h1>
    </div>

	
<div id="form">
		<table>
        	<form method="post" action="">
            	<tr>
                	<th>Day</th>
                    <td><input type="text" name="txtday" /></td>
                </tr>
                <tr>
                	<th>08:30 AM to 09:30 AM</th>
                    <td><input type="text" name="txtcode" /></td>
                </tr>
                    <tr>
                	<th>09:35 AM to 10:35 AM</th>
                    <td><input type="text" name="txtnumber"  /></textarea></td>
                </tr>
                 <tr>
                	<th>10:40 AM to 11:40 AM</th>
                    <td><input type="text" name="txtmail"  /></textarea></td>
                </tr>
				
				 <tr>
                	<th>11:45 AM to 12:45 PM</th>
                    <td><input type="text" name="txtroom"  /></textarea></td>
                </tr>
				
				<tr>
                	<th>01:15 PM to 02:15 PM</th>
                    <td><input type="text" name="txtroom1"  /></textarea></td>
                </tr>
				<tr>
                	<th>02:20 PM to 03:20 PM</th>
                    <td><input type="text" name="txtroom2"  /></textarea></td>
                </tr>
				<tr>
                	<th>03:25 PM to 04:25 PM</th>
                    <td><input type="text" name="txtroom3"  /></textarea></td>
                </tr>
				<tr>
                	<th>04:30 PM to 05:30 PM</th>
                    <td><input type="text" name="txtroom4"  /></textarea></td>
                </tr>
                <tr>
                    <td> <center><input type="submit" name="cmdadd" value="Add" /></center></td>
                </tr>
        	</form>
        </table>
    	</div>
        <?php 
		include "connect.php";
		
		$p=mysql_query("select code from faculty where Email='".$_SESSION['sess_mail']."'");
		$q=mysql_fetch_array($p);
		$x=$q['code'];
		
		if (isset($_POST['cmdadd'])) {
        $day = $_POST['txtday'];
        $code = trim($_POST['txtcode']);
        $number = trim($_POST['txtnumber']);
        $mail = trim($_POST['txtmail']);
		$room = trim($_POST['txtroom']);
		$room1 = trim($_POST['txtroom1']);
		$room2 = trim($_POST['txtroom2']);
		$room3 = trim($_POST['txtroom3']);
		$room4 = trim($_POST['txtroom4']);
   
        if(empty($day) || empty($code))
        {
            echo "<center>Sorry please input data</center>";
        }else{
        include "connect.php";
        $i = mysql_query("insert into faculty_routine values('".$x."','".$day."','".$code."','".$number."','".$mail."','".$room."','".$room1."','".$room2."','".$room3."','".$room4."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_faculty_routine.php">';
        }
        
        }
    }			
	
    ?>
</body>
</html>