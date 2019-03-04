<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#575c68" background="">
<div id="topbar">
    	<center><h1 style="color:white">Welcome to Add Form</h1>
    </div>	
<div id="form">
		<table>
        	<form method="post" action="">
			<tr>
                	<th>Type</th>
                    <td><input type="text" name="txttype" /></td>
                </tr>
            	<tr>
                	<th>Department</th>
                    <td><input type="text" name="txtdept" /></td>
                </tr>
                <tr>
                	<th>Intake</th>
                    <td><input type="text" name="txtintake" /></td>
                </tr>
                    <tr>
                	<th>Section</th>
                    <td><input type="text" name="txtsection"  /></textarea></td>
                </tr>
                 <tr>
                	<th>Course</th>
                    <td><input type="text" name="txtcourse"  /></textarea></td>
                </tr>
				
				 <tr>
                	<th>Topic</th>
                    <td><input type="text" name="txttopic"  /></textarea></td>
                </tr>
				
				<tr>
                	<th>Date</th>
                    <td><input type="text" name="txtdate"  /></textarea></td>
                </tr>
				<tr>
                	<th>Faculty</th>
                    <td><input type="text" name="txtfaculty"  /></textarea></td>
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
		$type = $_POST['txttype'];
        $dept = $_POST['txtdept'];
        $intake = trim($_POST['txtintake']);
        $section = trim($_POST['txtsection']);
        $course = trim($_POST['txtcourse']);
		$topic = trim($_POST['txttopic']);
		$date = trim($_POST['txtdate']);
		$faculty = trim($_POST['txtfaculty']);
        if(isset($_POST['cmdadd'])){
        if(empty($type) || empty($dept))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
        $i = mysql_query("insert into task values('".$type."','".$dept."','".$intake."','".$section."','".$course."','".$topic."','".$date."','".$faculty."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_task_faculty.php">';
        }
        
        }
    }		
			
		}	
	
    ?>
</body>
</html>