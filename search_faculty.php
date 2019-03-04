<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search by ID</title>
	<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>

<body>
<center><h1>Search Result</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<table>
		<tr>
            <th>Faculty Name</th>
            <th>Short Code</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Room Number</th>
           
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		include('connect.php');
	?>
    <?php
		if($cbo=="Name")
		{
			$id = mysql_query("SELECT * FROM faculty WHERE name like '".$search."%'");
	?>

    <?php
		while($di=mysql_fetch_array($id))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
                <td><?php echo $di[3]; ?></td>
                <td><?php echo $di[4]; ?></td>
			</tr>
            <?php
		}
		}
		else if($cbo=="Code")
		{
			$na = mysql_query("SELECT * FROM faculty WHERE code like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
                <td><?php echo $an[3]; ?></td>
                <td><?php echo $an[4]; ?></td>
			</tr>
            <?php
				}
			?>  
     <?php
		}
     ?>
					
</table>
</body>
</html>