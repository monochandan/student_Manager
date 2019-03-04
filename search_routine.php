<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
	<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>

<body>
<center><h1>Search Result</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<table>
		<tr>
            <th>Intake</th>
			<th>Section</th>
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
	
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		$section = $_POST['txtsection'];
		include('connect.php');
	?>
    <?php
	 
	 if(isset($_SESSION['sess_ID']))
      {
			$a = mysql_query("select Department from user where ID= '".$_SESSION['sess_ID']."'");
			$x = mysql_fetch_array($a);
			$d = $x['Department'];
	 
			$id = mysql_query("SELECT * FROM dep_routine WHERE dept ='".$d."' and intake like '".$search."%' and section like '".$section."%'");
			while($di=mysql_fetch_array($id))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
                <td><?php echo $di[3]; ?></td>
                <td><?php echo $di[4]; ?></td>
				<td><?php echo $di[5]; ?></td>
				<td><?php echo $di[6]; ?></td>
				<td><?php echo $di[7]; ?></td>
				<td><?php echo $di[8]; ?></td>
				<td><?php echo $di[9]; ?></td>
				<td><?php echo $di[10]; ?></td>
			</tr>
            <?php
		}
	  }
		?>
					
</table>
</body>
</html>