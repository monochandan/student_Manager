<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#99CC66" background="Images/MyBackground.png">
<div id="topbar">
    	<center><h1 style="color:#939">Add Routine</h1>
    </div>
<div id="form">
		<table>
        	<form method="post" action="">
            	
				<tr>
                	<th>Department:</th>
                    <td><select name = "txtdept">
					<option>Dept</option>
						<option>CSE</option>
						<option>EEE</option>
						<option>BBA</option>
						<option>LLB</option>
						<option>Economics</option>
						<option>English</option>
						<option>Textile</option>
					</td>
                	<th>Intake:</th>
                    <td><input type="text" name="txtintake" /></td>
					</tr>
					<tr>
                	<th>Section:</th>
                    <td><select name = "txtsection">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</td>
                	<th>Day:</th>
                    <td><select name = "txtday">
						<option>Sat</option>
						<option>Sun</option>
						<option>Mon</option>
						<option>Tues</option>
						<option>Wed</option>
						<option>Thurs</option>
					</td>
                </tr>
				
				<tr>
                	<th>8.30 - 9.30:</th>
                    <td><input type="text" name="txtcourse1" placeholder="Type Course" /></td>
					<td><input type="text" name="txtclass1" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty1" placeholder="Type Faculty" /></td>
                    
                </tr>
				
				<tr>
                	<th>9.35 - 10.35:</th>
                    <td><input type="text" name="txtcourse2" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass2" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty2" placeholder="Type Faculty" /></td>
                </tr>
				
				<tr>
                	<th>10.40 - 11.40:</th>
                    <td><input type="text" name="txtcourse3" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass3" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty3" placeholder="Type Faculty" /></td>
                </tr>
				
				<tr>
                	<th>11.45 - 12.45:</th>
                    <td><input type="text" name="txtcourse4" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass4" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty4" placeholder="Type Faculty" /></td>
                </tr>
				
				<tr>
                	<th>1.15 - 2.15:</th>
                    <td><input type="text" name="txtcourse5" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass5" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty5" placeholder="Type Faculty" /></td>
                </tr>
				
				<tr>
                	<th>2.20 - 3.20:</th>
                    <td><input type="text" name="txtcourse6" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass6" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty6" placeholder="Type Faculty" /></td>
                </tr>
				
				<tr>
                	<th>3.25 - 4.25:</th>
                    <td><input type="text" name="txtcourse7" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass7" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty7" placeholder="Type Faculty" /></td>
                </tr>
				
				<tr>
                	<th>4.30 - 5.30:</th>
                    <td><input type="text" name="txtcourse8" placeholder="Type Course" /></td>
                    <td><input type="text" name="txtclass8" placeholder="Type Room" /></td>
					<td><input type="text" name="txtfaculty8" placeholder="Type Faculty" /></td>
                </tr>	
				<tr>
				<center>
		    <td><input type="submit" class="button" name="cmdadd" value="Add" /></td></center>
				</tr>
        	</form>
			
        </table>
		<br>
		
    	</div>
        <?php
		if(isset($_POST['cmdadd'])){
		$dept = $_POST['txtdept'];
        $intake = $_POST['txtintake'];
        $section = $_POST['txtsection'];
		$day = $_POST['txtday'];
        $course1 = trim($_POST['txtcourse1']);
        $class1 = trim($_POST['txtclass1']);
		$faculty1 = trim($_POST['txtfaculty1']);
		
		$one = $course1 . "  " . $class1 ."  " . $faculty1;
		
		$course2 = trim($_POST['txtcourse2']);
        $class2 = trim($_POST['txtclass2']);
		$faculty2 = trim($_POST['txtfaculty2']);
		
		$two = $course2 . "  " . $class2 . "  " . $faculty2;
		
		$course3 = trim($_POST['txtcourse3']);
        $class3 = trim($_POST['txtclass3']);
		$faculty3 = trim($_POST['txtfaculty3']);
		
		$three = $course3 . "  " . $class3 . "  " . $faculty3;
		
		$course4 = trim($_POST['txtcourse4']);
        $class4 = trim($_POST['txtclass4']);
		$faculty4 = trim($_POST['txtfaculty4']);
		
		$four = $course4 . "  " . $class4 . "  " . $faculty4;
		
		$course5 = trim($_POST['txtcourse5']);
        $class5 = trim($_POST['txtclass5']);
		$faculty5 = trim($_POST['txtfaculty5']);
		
		$five = $course5 . "  " . $class5 . "  " . $faculty5;
		
		$course6 = trim($_POST['txtcourse6']);
        $class6 = trim($_POST['txtclass6']);
		$faculty6 = trim($_POST['txtfaculty6']);
		
		$six = $course6 . "  " . $class6 . "  " . $faculty6;
		
		$course7 = trim($_POST['txtcourse7']);
        $class7 = trim($_POST['txtclass7']);
		$faculty7 = trim($_POST['txtfaculty7']);
		
		$seven = $course7 . "  " . $class7 . "  " . $faculty7;
		
		$course8 = trim($_POST['txtcourse8']);
        $class8 = trim($_POST['txtclass8']);
		$faculty8 = trim($_POST['txtfaculty8']);
		
		$eight = $course8 . "  " . $class8 . "  " . $faculty8;
        
        if(empty($dept))
        {
            echo "<center>Sorry please input data</center>";
        }else{
        include "connect.php";
        $i = mysql_query("insert into dep_routine values('".$dept."','".$intake."','".$section."','".$day."','".$one."','".$two."','".$three."','".$four."','".$five."','".$six."','".$seven."','".$eight."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=routine_admin.php">';
        }
        }
    }
    ?>
</body>
</html>