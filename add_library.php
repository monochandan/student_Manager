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
	
	<a class="page2" href="student.php" style="font-face:Khmer OS Battambang; font-size:20px;">HOME</a> &nbsp &nbsp &nbsp 
	
<div id="form">
		<table>
        	<form method="post" action="">
			<tr>
                	<th>Student ID</th>
                    <td><input type="text" name="txtid" /></td>
                </tr>
            	<tr>
                	<th>Book Name</th>
                    <td><input type="text" name="txtday" /></td>
                </tr>
                <tr>
                	<th>Author Name</th>
                    <td><input type="text" name="txtcode" /></td>
                </tr>
                    <tr>
                	<th>Issue Date</th>
                    <td><input type="text" name="txtnumber"  /></textarea></td>
                </tr>
                 <tr>
                	<th>Return Date</th>
                    <td><input type="text" name="txtmail"  /></textarea></td>
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
		$id = $_POST['txtid'];
        $name = $_POST['txtday'];
        $code = trim($_POST['txtcode']);
        $number = trim($_POST['txtnumber']);
        $mail = trim($_POST['txtmail']);
        if(isset($_POST['cmdadd'])){
        if(empty($name) || empty($code))
        {
            echo "<center>Sorry please input data</center>";
        }else{
        include "connect.php";
		
		$i = mysql_query("insert into library values('".$id."','".$name."','".$code."','".$number."','".$mail."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_library_admin.php">';
        }
		
		
		
		
		
        
        
        }
    }		
			
		}	
	
    ?>
</body>
</html>