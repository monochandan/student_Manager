<?php

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>

<style>
body {
	background:#575c68;
	background-repeat:no-repeat;	`
   background-size:cover;
   background-attachment:fixed;
   font: normal normal 12px Verdana, Geneva, Arial, Helvetica, sans-serif;
}

*{margin:0px; padding:5px; font-family:Helvetica, Arial, sans-serif;}

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
	padding-bottom: 0px;
	border-radius: 20px;
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
    animation: zoom 0.3s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

button {
    background-color: Transparent;
    color: white;
    padding: 10px 10px;
    margin: 8px 26px;
    border: 2px solid #c6bfc0;
    cursor: pointer;
	font-size:18px;
}
button:hover {
    opacity: 0.8;
	background-color:green;
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

table,td,tr{
	border-collapse:collapse;
	padding:0px;	
}
table{
	border:1px #000 solid;
	width:30%;	
	background:#FFF;
	height:auto;
	margin:auto;
	box-shadow:10px 10px 10px #000;
}

td{
	border:1px #000 solid ;	
}
</style>

</head>
<body>
<br>
<center><font size="8" color="White">Student Information System</font></center>
<center><h1><font color="white">Personal Information</font></h1></center>
<center>
<a href="student.php" target="_blank">
Home
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="student_login.php" target="_blank">
Logout
</a>
</center>
<br><br>
<table>
        <?php
			include "connect.php";		
      if(isset($_SESSION['sess_ID']))
      {
      $i = "select * from user where ID= '".$_SESSION['sess_ID']."' LIMIT 1";

			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
		?>   
           <tr>
               <td> <center><font size ="5"><strong>ID</strong> </font></center></td>
				<td><font size ="5"><?php echo $tr[0] ?></font></td>
		   </tr>
		   
		   <tr>
               <td><center><font size ="5"><strong>Name</strong> </center></font></td>
				<td><font size ="5"><?php echo $tr[1] ?></font></td>
		   </tr>
			
			<tr>
               <td><center><font size ="5"><strong>Department</strong></center> </font></td>
				<td><font size ="5"><?php echo $tr[2] ?></font></td>
		   </tr>
		   
		   <tr>
               <td>
			   <center>
			   <font size ="5"><strong>Intake</strong> </font>
			   </center>
			   </td>
				<td><font size ="5"><?php echo $tr[3] ?></font></td>
		   </tr>
			
			<tr>
               <td><center><font size ="5"><strong>Section</strong> </font><center></td>
				<td><font size ="5"><?php echo $tr[4] ?></font></td>
		   </tr>
		   
		   <tr>
		   
               <td>
			   <center>
			   <font size ="5"><strong>Email</strong> </font>
			    </center></td>  
			
				<td><font size ="5"><?php echo $tr[5] ?></font></td>
		  
		   </tr>
		   <tr>
		   
               <td>
			   <center>
			   <font size ="5"><strong>Phone</strong> </font>
			    </center></td>  
			
				<td><font size ="5"><?php echo $tr[6] ?></font></td>
		  
		   </tr>
		   
        <?php
			}
			}
		?>
    </table>
	
	<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:224px; margin-top:28px; margin-left:570px;">
<font color="white">Update Information</font></button>

<div id="modal-wrapper" class="modal">

<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close Modal">&times;</span>
  
  <form class="modal-content animate" method="post" action="">
        
   

    <div class="container">
	  <center><font color ="white" size="5">Update Information</font></center>
	  <?php
	  include "connect.php";
	  $i=mysql_query("select * from user where ID='".$_SESSION['sess_ID']."' LIMIT 1");
	  while($t=mysql_fetch_array($i))
	  {
	  ?>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">ID</font>
      <input type="text" placeholder="Enter ID" name="id" value ="<?php echo $t[0] ?>" /> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Name</font>
		 <input type="text" placeholder="Enter Name" name="name" value ="<?php echo $t[1] ?>" /> 
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Department</font>
      <input type="text" placeholder="Enter Department" name="dpt" value ="<?php echo $t[2] ?>" /> 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Intake</font>
	   <input type="text" placeholder="Enter Intake" name="intk" value ="<?php echo $t[3] ?>" /> 
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Section</font>
	    <input type="text" placeholder="Enter Section" name="sec" value ="<?php echo $t[4] ?>" />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Email</font>
		 <input type="text" placeholder="Enter Email" name="mail" value ="<?php echo $t[5] ?>" /> 
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <font color="white">Phone</font>
		  <input type="text" placeholder="Enter Phone" name="phn" value ="<?php echo $t[6] ?>" /> 

	<center> <button type="submit" name="add">Submit</button> </center>
    </div>
	<?php
	  }
	  ?>
    
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
	 $id=$_POST['id'];
	 $name=$_POST['name'];
	 $dpt=$_POST['dpt'];
	 $intk=$_POST['intk'];
	 $sec=$_POST['sec'];
	 $mail=$_POST['mail'];
	 $phn=$_POST['phn'];
	 
	 include "connect.php";
	 
	 $i=mysql_query("update user set ID='".$id."',Name='".$name."',Department='".$dpt."',Intake='".$intk."',Section='".$sec."',Email='".$mail."',Phone='".$phn."'");
		if($i==true)
		{
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile.php">';
		}
 }
	 
?> 
	
	
	
	
</body>
</html>
