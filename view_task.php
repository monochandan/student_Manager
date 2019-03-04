<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Task</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />

<style>
a:link, a:visited {
    background-color: #4CAF50;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: green;
}
</style>

</head>
<body>
<br>
<center><font size="8" color="white">Student Information System</font></center>
<center><h1><font color="white">Task Information</font></h1></center>
<center>
<a href="student.php" target="_blank">
Home
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="profile.php" target="_blank">
Profile
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="student_login.php" target="_blank">
Logout
</a>
</center>
	<br>
	<table>
    	<tr>
            <th>Type</th>
            <th>Department</th>
            <th>Intake</th>
            <th>Section</th>
            <th>Course</th>
			<th>Topic</th>
			<th>Date</th>

    	</tr>
        <?php
			include "connect.php";
			
			 if(isset($_SESSION['sess_ID']))
      {
			$a = mysql_query("select Department from user where ID= '".$_SESSION['sess_ID']."'");
			$x = mysql_fetch_array($a);
			$d = $x['Department'];
			
			$b = mysql_query("select distinct code,intake,section from registration where ID= '".$_SESSION['sess_ID']."'");
			while($r = mysql_fetch_array($b))
			{
			$q = "select * from task where dept='".$d."' and course='".$r[0]."' and intake='".$r[1]."' and section='".$r[2]."'";
			$h = mysql_query($q);
			while($tr=mysql_fetch_array($h))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
			<td><?php echo $tr[5]; ?></td>
			<td><?php echo $tr[6]; ?></td>
        </tr>
        <?php
			}
			}
	  }
		?>

    </table>
</body>
</html>
