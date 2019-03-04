<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result</title>
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
<center><h1><font color="white">Result Information</font></h1></center>
<br>
<br>
	<table>
    	<tr>
            <th>ID</th>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Mid Term</th>
            <th>Final</th>
			<th>Out of 30</th>
			<th>Total</th>
			<th>Grade</th>
			<th>Option</th>
			
    	</tr>
        <?php
		
		$code = $_GET['code'];
		
			include "connect.php";
			
			$p=mysql_query("select code from faculty where Email='".$_SESSION['sess_mail']."'");
			$q=mysql_fetch_array($p);
			$x=$q['code'];
			
			
			
			$i = "select id,code,title,mid,final,thirty,total,grade from registration where code='".$code."' and faculty='".$x."'";
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
			 <td align="center"><a href="edit_result.php?id=<?php echo $tr[0];?>&cod=<?php echo $code;?>">Edit</a></td> 
        </tr>
        <?php
			}
			
		?>
		
    </table>
</body>
</html>