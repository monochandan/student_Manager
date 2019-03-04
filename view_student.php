<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>
<body>
<br>
<center><font size="8" color="green">Student Information System</font></center>
<center><h1><font color="green">Student Information</font></h1></center>

	<div class="search">
	<form method="post" action="searchidandname.php">
    <select name="cbosearch">
    	<option>ID</option>
    	<option>Name</option>
    </select>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<table>
    	<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Intake</th>
            <th>Section</th>
			<th>Email</th>
			<th>Phone</th>
    	</tr>
        <?php
			include "connect.php";
			$i = "select * from user";
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
        </tr>
        <?php
			}
		?>
		
    </table>
</body>
</html>