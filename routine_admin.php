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
<center><font size="8" color="green">Student Information System</font></center>
<center><h1><font color="green">Class Routine</font></h1></center>

<div class="search">
	<form method="post" action="search_routine.php">
    <select name="cbosearch">
    	<option>Intake</option>
    </select>
	<input type="text" name="txtsearch" size="3" />
	<select name="cbosearch">
    	<option>Section</option>
    </select>
	<input type="text" name="txtsection" size="3" /> <input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>

<center>
<a href="add_routine_admin.php" target="_blank">
Add
</a>
</center>
	<br>	
<br>	
	<table>
    	<tr>
		<th>Department</th>
			<th>Intake</th>
			<th>Section</th>
            <th>Day</th>
            <th>08:30 to 09:30</th>
            <th>09:35 to 10:35</th>
            <th>10:40 to 11:40</th>
            <th>11:45 to 12:45</th>
			<th>01:15 to 02:15</th>
			<th>02:20 to 03:20</th>
			<th>03:25 to 04:25</th>
			<th>04:30 to 05:30</th>

    	</tr>
        <?php
			include "connect.php";
		
			$q = "select * from dep_routine";

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
			<td><?php echo $tr[7]; ?></td>
			<td><?php echo $tr[8]; ?></td>
			<td><?php echo $tr[9]; ?></td>
			<td><?php echo $tr[10]; ?></td>
			<td><?php echo $tr[11]; ?></td>
        </tr>
        <?php
			}
			
		?>

    </table>
</body>
</html>
