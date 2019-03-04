<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library</title>
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
<center><h1><font color="green">Library Information</font></h1></center>
<center>
<a href="add_library.php" target="_blank">
Add
</a>
</center>
<br>


	<table>
    	<tr>
            <th>Student ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Issue Date</th>
            <th>Return Date</th>
    	</tr>
        <?php
			include "connect.php";
			$i = "select * from library";
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
        </tr>
        <?php
			}
		?>

    </table>
</body>
</html>
