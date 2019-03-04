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
                	<th>Semester</th>
                    <td><input type="text" name="txtsem" /></td>
                </tr>
			<tr>
                	<th>ID</th>
                    <td><input type="text" name="txtid" /></td>
                </tr>
                <tr>
                	<th>Name</th>
                    <td><input type="text" name="txtname" /></td>
                </tr>
                    <tr>
                	<th>CGPA</th>
                    <td><input type="text" name="txtmid"  /></textarea></td>
                </tr>
                 <tr>
                	<th>SGPA</th>
                    <td><input type="text" name="txtfinal"  /></textarea></td>
                </tr>
				
				 <tr>
                	<th>Subject 1</th>
                    <td><input type="text" name="txt1"  /></textarea></td>
                </tr>
				
					<tr>
                	<th>Subject 2</th>
                    <td><input type="text" name="txt2"  /></textarea></td>
                </tr>
				 <tr>
                	<th>Subject 3</th>
                    <td><input type="text" name="txt3"  /></textarea></td>
                </tr>
				<tr>
                	<th>Subject 4</th>
                    <td><input type="text" name="txt4"  /></textarea></td>
                </tr>
				<tr>
                	<th>Subject 5</th>
                    <td><input type="text" name="txt5"  /></textarea></td>
                </tr>
				<tr>
                	<th>Subject 6</th>
                    <td><input type="text" name="txt6"  /></textarea></td>
                </tr>
				<tr>
                	<th>Subject 7</th>
                    <td><input type="text" name="txt7"  /></textarea></td>
                </tr>
				<tr>
                	<th>Subject 8</th>
                    <td><input type="text" name="txt8"  /></textarea></td>
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
		$sem= $_POST['txtsem'];
		 $id = $_POST['txtid'];
        $name = trim($_POST['txtname']);
        $mid = trim($_POST['txtmid']);
        $final = trim($_POST['txtfinal']);
		$s1 = trim($_POST['txt1']);
			$s2 = trim($_POST['txt2']);
				$s3 = trim($_POST['txt3']);
					$s4 = trim($_POST['txt4']);
						$s5 = trim($_POST['txt5']);
							$s6 = trim($_POST['txt6']);
								$s7 = trim($_POST['txt7']);
									$s8 = trim($_POST['txt8']);
        if(isset($_POST['cmdadd'])){
        if(empty($sem) || empty($id))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
        $i = mysql_query("insert into semister_result values('".$sem."','".$id."','".$name."','".$mid."','".$final."','".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$s7."','".$s8."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_semester_result_admin.php">';
        }
        
        }
    }		
			
		}	
	
    ?>
</body>
</html>