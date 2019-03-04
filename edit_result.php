<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>

	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />

</head>

<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Edit Form</center></h1></div>    
	<center>
    <div class="box">
    	<?php
		$id = $_GET['id'];
		$code=$_GET['cod'];
		include ("connect.php");
		$i =mysql_query("select id,code,title,mid,final,thirty from registration where id='".$id."' and code = '".$code."'");
		
		if($tr=mysql_fetch_array($i))
		{
	?>
    <table><form method="post" action="">
    	<tr>
        	<th>ID:</th>
        	<td><input type="text" name="id" value="<?php echo $tr[0]; ?>"/></td>
        </tr>
        <tr>
        	<th>Code:</th>
        	<td><input type="text" name="code" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
		 <tr>
        	<th>Title:</th>
        	<td>
            	<input type="text" name="title" value="<?php echo $tr[2]; ?>" /></td>
            </td>
        </tr>
        <tr>
        	<th>Mid:</th>
        	<td>
            	<input type="text" name="mid" value="<?php echo $tr[3]; ?>" /></td>
            </td>
        </tr>
        <tr>
        	<th>Final:</th>
        	<td><input type="text" name="final" value="<?php echo $tr[4]; ?>" /></td>
        </tr>
        <tr>
        	<th>Thirty:</th>
        	<td><input type="text" name="thirty" value="<?php echo $tr[5];?>"/></td>
        </tr>
		
            <?php
				}
			?>
			<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            </td>
			
	</form></table>
	<br><br>
           
    </div>
    </center>
	<?php
	if(isset($_POST['cmdedit']))
	{
		$id=$_POST['id'];
		$code=$_POST['code'];
		$title=$_POST['title'];
		$mid=$_POST['mid'];
		$final=$_POST['final'];
		$thirty=$_POST['thirty'];
		$total=$mid+$final+$thirty;
		if($total>=80){$grade="A+";$point=4.00;}
		if($total<80 && $total>=75){$grade="A";$point=3.75;}
		if($total<75 && $total>=70){$grade="A-";$point=3.50;}
		if($total<70 && $total>=65){$grade="B+";$point=3.25;}
		if($total<65 && $total>=60){$grade="B";$point=3.00;}
		if($total<60 && $total>=55){$grade="B-";$point=2.75;}
		if($total<55 && $total>=50){$grade="C+";$point=2.50;}
		if($total<50 && $total>=45){$grade="C";$point=2.25;}
		if($total<45 && $total>=40){$grade="D";$point=2.00;}
		if($total<40){$grade="F";$point=0;}
		include "connect.php";
		$i=mysql_query("update registration set mid='".$mid."',final='".$final."',thirty='".$thirty."',total='".$total."',grade='".$grade."',point='".$point."' where id='".$id."' and code ='".$code."'");
		if($point==true)
		{
			$m=mysql_query("select semister from registration");
			$p=mysql_fetch_array($m);
			$x=$p['semister'];
			
			$n=mysql_query("select credit from registration where code='".$code."'");
			$q=mysql_fetch_array($n);
			$z=$q['credit'];
			
			$j=mysql_query("insert into com_course(id,semister,code,title,credit,mid,final,thirty,total,grade,point) values('".$id."','".$x."','".$code."','".$title."','".$z."','".$mid."','".$final."','".$thirty."','".$total."','".$grade."','".$point."')");
			
		}
	
	if($i==true || $j==true){
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_course.php">';
      }
	
	}	
	?>
	
	
	
</body>
</html>