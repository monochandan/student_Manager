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

<body bgcolor="#99CC66" background="Images/MyBackground.png">
<div id="topbar">
    	<center><h1 style="color:#939">Welcome to Add Form</h1>
    </div>
	
<div id="form">
		<table>
        	<form method="post" action="">
			
            	<tr>
                	<th>Course Code</th>
                    <td><input type="text" name="txtcode" /></td>
                </tr>
                    <tr>
                	<th>Course Name</th>
                    <td><input type="text" name="txtmid"  /></textarea></td>
                </tr>
                 <tr>
                	<th>Intake</th>
                    <td><input type="text" name="txtfinal"  /></textarea></td>
                </tr>
				
				 <tr>
                	<th>Section</th>
                    <td><input type="text" name="txtout"  /></textarea></td>
                </tr>
			
                <tr>
		
                    <td><input type="submit" name="cmdadd" value="Add" /></td>
                    <td><input type="reset" name="cmdreset" value="Clear"/></td>
                </tr>
        	</form>
        </table>
    	</div>
        <?php   
		if (isset($_POST['cmdadd'])) {
		$id=$_SESSION['sess_ID'];
        $code = $_POST['txtcode'];
        $name = trim($_POST['txtmid']);
        $intake = trim($_POST['txtfinal']);
		$section = trim($_POST['txtout']);
        if(empty($code))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
		
		$a = mysql_query("select pre from pre where sub= '".$code."'");
		$x = mysql_fetch_array($a);
		$d = $x['pre'];
		
		
		$b = mysql_query("select chk from com_course where code='".$d."'");
		$y = mysql_fetch_array($b);
		$e = $y['chk'];
	
	if($e==true)
	{
		
		$i = mysql_query("insert into registration (id,code,title,intake,section) values ('".$e."','".$code."','".$name."','".$intake."','".$section."')");

       	if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=registration.php">';
        }
		}
	else{
			echo"<center>Prerequisit is not complete</center>";
		
		}
		
		
        
        }
    		
		}
    ?>
</body>
</html>