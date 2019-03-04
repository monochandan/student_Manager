<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#99CC66" background="Images/MyBackground.png">
<div class="img"><img src="Images/auditoria.png" /></div>
<div id="topbar">
    	<center><h1 style="color:#939">Welcome to Add Form</h1>
    </div>
	
	<a class="page2" href="main.php" style="font-face:Khmer OS Battambang; font-size:20px;">HOME</a> &nbsp &nbsp &nbsp 
<a class="page2" href="dept.php" style="font-face:Khmer OS Battambang; font-size:20px;">GO BACK</a>
	
<div id="form">
		<table>
        	<form method="post" action="">
			<tr>
                	<th>Department</th>
                    <td><input type="text" name="txtid" /></td>
                </tr>
			<tr>
                	<th>Day</th>
                    <td><input type="text" name="txtday" /></td>
                </tr>
 	
                <tr>
            <td colspan="2" align="center">
            <input type="submit" name="cmddelete" value="Delete"/>
            </td>
        </tr>
        	</form>
        </table>
    	</div>
         <?php   
		if (isset($_POST['cmddelete'])) {
		$id = $_POST['txtid'];
        $day = $_POST['txtday'];
        if(isset($_POST['cmddelete'])){
        if(empty($id) || empty($day))
        {
            echo "<center>Sorry please input data</center>";
        }else{
        include "connect.php";
        $i = mysql_query("delete from student_routine where ID='".$id."' and day='".$day."'");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=student_routine.php">';
        }
        
        }
    }			
		}	
	
    ?>
</body>
</html>