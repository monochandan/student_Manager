<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Routine</title>
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
<center><h1><font color="white">Class Routine</font></h1></center>
<center>
<a href="student.php" target="_blank">
Home
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Add_Routine.php" target="_blank">
Add
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="student_routine_delete.php" target="_blank">
Delete
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
			<th>ID</th>
            <th>Day</th>
            <th>08:30 AM to 09:30 AM</th>
            <th>09:35 AM to 10:35 AM</th>
            <th>10:40 AM to 11:40 AM</th>
            <th>11:45 AM to 12:45 PM</th>
			<th>01:15 PM to 02:15 PM</th>
			<th>02:20 PM to 03:20 PM</th>
			<th>03:25 PM to 04:25 PM</th>
			<th>04:30 PM to 05:30 PM</th>
    	</tr>
        <?php
			include "connect.php";
      if(isset($_SESSION['sess_ID']))
      {
      $i = "select * from student_routine where ID= '".$_SESSION['sess_ID']."'";
			$h = mysql_query($i);
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
			<td><?php echo $tr[7]; ?></td>
			<td><?php echo $tr[8]; ?></td>
			<td><?php echo $tr[9]; ?></td>

        </tr>
        <?php
			}
    }
		?>

    </table>
</body>
</html>
