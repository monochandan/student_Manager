<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
</script>
</head>
<body onload="startTime()">
<br>
<div align="right" id="txt"></div>
<br>
<center><font size="8" color="white">Student Information System</font></center>
<center><h1><font color="white">Faculty Information</font></h1></center>

	<div class="search">
	<form method="post" action="search_faculty.php">
    <select name="cbosearch">
    	<option>Name</option>
    	<option>Code</option>
    </select>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<table>
    	<tr>
            <th>Faculty Name</th>
            <th>Short Code</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Room Number</th>
    	</tr>
        <?php
			include "connect.php";
			$i = "select * from faculty";
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