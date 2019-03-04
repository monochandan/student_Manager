<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#575c68" background="">
<div id="topbar">
    	<center><h1 style="color:white">Welcome to Add Form</h1>
    </div>
	<div id="form">
		<table>
        	<form method="post" action="">
			<tr>
                	<th>ID</th>
                    <td><input type="text" name="txtid" /></td>
                </tr>
            	<tr>
                	<th>Course Code</th>
                    <td><input type="text" name="txtcode" /></td>
                </tr>
                    <tr>
                	<th>Mid Term</th>
                    <td><input type="text" name="txtmid"  /></textarea></td>
                </tr>
                 <tr>
                	<th>Final</th>
                    <td><input type="text" name="txtfinal"  /></textarea></td>
                </tr>
				
				 <tr>
                	<th>Out of 30</th>
                    <td><input type="text" name="txtout"  /></textarea></td>
                </tr>
				
				<tr>
                	<th>Total</th>
                    <td><input type="text" name="txttotal"  /></textarea></td>
                </tr>
				
				<tr>
                	<th>Grade</th>
                    <td><input type="text" name="txtgrade"  /></textarea></td>
                </tr>
                <tr>
		
                    <td><input type="submit" name="cmdadd" value="Add" /></td>
                    <td><input type="reset" name="cmdreset" value="Clear"/></td>
                </tr>
        	</form>
        </table>
    	</div>
        <?php   
		if (isset($_POST['cmdadd'])) {
		 $id = $_POST['txtid'];
        $code = $_POST['txtcode'];
        $mid = trim($_POST['txtmid']);
        $final = trim($_POST['txtfinal']);
		$out = trim($_POST['txtout']);
		$total = trim($_POST['txttotal']);
		$grade = trim($_POST['txtgrade']);
        if(isset($_POST['cmdadd'])){
        if(empty($id) || empty($code))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
        $i = mysql_query("update registration set mid = '".$mid."',final ='".$final."',thirty='".$out."',total='".$total."',grade='".$grade."' where id='".$id."' and code='".$code."' ");
		$j = mysql_query("insert into com_course select id,semister,code,title,mid,final,thirty,total,grade from registration");
	   if($i==true || $j==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_result_faculty.php">';
        }
        
        }
    }		
			
		}	
	
    ?>
</body>
</html>