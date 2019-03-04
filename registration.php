<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />

<style>

*{margin:0px; padding:10px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
	border-radius: 20px;
}

/* Set a style for all buttons */
button {
   background-color: #4CAF50;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
button:hover {
	background-color:green;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #575c68;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 15px;
	border-radius: 50px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 400px;
    top: 20;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
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
<center><h1><font color="white">Current Course</font></h1></center>
<center>
<a href="student.php" target="_blank">
Home
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="document.getElementById('modal-wrapper').style.display='block'" >
<font color="white">Add</font></button>
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
			<th>Course Code</th>
            <th>Course Title</th>
            <th>Intake</th>
			<th>Section</th>
			<th>Option</th>
         </tr>
        <?php
			include "connect.php";
      if(isset($_SESSION['sess_ID']))
      {
      $i = "select code,title,intake,section from registration where ID= '".$_SESSION['sess_ID']."'";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
			<td align="center"><a href="Delete_Form.php? txtid=<?php echo $tr[0];?>">Delete</a></td>
        </tr>
        <?php
			}
    }
		?>

    </table>
	
	<div id="modal-wrapper" class="modal">

<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close Modal">&times;</span>
  
  <form class="modal-content animate" method="post" action="">
        
   

    <div class="container">
	  <center><font color ="white" size="5">Add Course</font></center>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Course Code</font>
      <input type="text" placeholder="Enter Course Code" name="code" /> 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Intake</font>
	   <input type="text" placeholder="Enter Intake" name="intk" /> 
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Section</font>
	    <input type="text" placeholder="Enter Section" name="sec" /> 

	<center> <button type="submit" name="add" style="width:150px;">Add</button> </center>
    </div>
    
  </form>
  
</div>
<script>
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
	<?php 
 if(isset($_POST['add']))
 {
	$id=$_SESSION['sess_ID'];
    $code = $_POST['code'];
    $intake = trim($_POST['intk']);
	$section = trim($_POST['sec']);
	
	if(empty($code))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
		
		$a = mysql_query("select pre from pre where sub= '".$code."'");
		$x = mysql_fetch_array($a);
		$d = $x['pre'];
		
		
		$b = mysql_query("select chk from com_course where code='".$d."'");
		$y = mysql_fetch_array($b);
		$e = $y['chk'];
	
	if($e==true)
	{
	 
	 $i=mysql_query("select semister,title,credit,faculty from registration where intake='".$intake."' and section = '".$section."'");
	 
	 $t=mysql_fetch_array($i);
		
	$j = mysql_query("insert into registration (id,semister,code,title,credit,faculty,intake,section) values ('".$id."','".$t[0]."','".$code."','".$t[1]."','".$t[2]."','".$t[3]."','".$intake."','".$section."')");

       	if($j==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=registration.php">';
        }
		}
	else{
			echo "<script>
alert('Prequisite is not complete');
</script>";
		
		}
		
		
        
        }
 }
	 
?> 
	
	
	
	
	
	
	
	
	
</body>
</html>
