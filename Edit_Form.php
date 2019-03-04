<?php
session_start();
?>
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
		
		include ("connect.php");
		
		if(isset($_SESSION['sess_ID']))
      {
      $i = "select id,code,title,mid,final,thirty,total,grade from registration where ID= '".$_SESSION['sess_ID']."'";
		$h= mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
	?>
    <table><form method="post" action="">
    	<tr>
        	<th>ID:</th>
        	<td><input type="text" name="txtid" value="<?php echo $tr[0]; ?>"/></td>
        </tr>
        <tr>
        	<th>Code:</th>
        	<td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>Title:</th>
        	<td>
            	<input type="text" name="txtgender" value="<?php echo $tr[2]; ?>" /></td>
            </td>
        </tr>
        <tr>
        	<th>Mid:</th>
        	<td><input type="text" name="txtdob" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Final:</th>
        	<td><textarea cols="16" rows="3" name="txtaddress"> <?php echo $tr[4];?> </textarea></td>
        </tr>
        <tr>
        	<th>Thirty:</th>
        	<td><input type="text" name="txtsubject" value="<?php echo $tr[5]; ?>" /></td>
        </tr>            
        <tr>
        	<th>Total:</th>
            <td><input type="text" name="txtdate" value="<?php echo $tr[6];?>"/></td>
        </tr>
		<tr>
        	<th>Grade:</th>
            <td><input type="text" name="txttotal" value="<?php echo $tr[7];?>"/></td>
        </tr>
            <?php
				}
				}
			?>
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            </td>
        </tr>
	</form></table>
    </div>
    </center>
    <?php
        include ("connect.php");
        $i = mysql_query("update registration set id='".$_POST['txtname']."', code='".$_POST['txtgender']."', title='".$_POST['txtdob']."', mid='".trim($_POST['txtaddress'])."', final='".$_POST['txtsubject']."', thirty='".$_POST['txtdate']."',thirty='".$_POST['txtdate']."' where ID= '".$_SESSION['sess_ID']."'");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile.php">';
        }
    ?>
</body>
</html>