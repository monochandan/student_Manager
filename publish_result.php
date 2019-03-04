<html>
<head>
</head>
<body>
<?php
            include "connect.php";
			$a=mysql_query("select semister from registration");
			$b=mysql_fetch_array($a);
			$c=$b['semister'];
			
			
			$i = "select id from registration group by id having count(*) >1";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
				$i = mysql_query("insert into result (id,semester) values ('".$tr[0]."','".$c."')");
			
					$j ="select code,grade from registration where id='".$tr[0]."'";
					$x=mysql_query($j);
					$w=0;
					while($tm=mysql_fetch_array($x))
					{
						
						++$w;
						if($w==1)
						{
							
							$s=mysql_query("update result set s1='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
							
						}
						if($w==2)
						{
							$s=mysql_query("update result set s2='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}
						
						if($w==3)
						{
							
							$s=mysql_query("update result set s3='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}
						
						if($w==4)
						{
							
							$s=mysql_query("update result set s4='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}
						if($w==5)
						{
					
							$s=mysql_query("update result set s5='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}
						
						if($w==6)
						{
							
							$s=mysql_query("update result set s6='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}
						if($w==7)
						{
							$s=mysql_query("update result set s7='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}
						if($w==8)
						{
							$s=mysql_query("update result set s8='".$tm[0]."  ".$tm[1]."' where id='".$tr[0]."'");
						}		
					}
					
				$m=mysql_query("select sum(credit*point) from registration where id ='".$tr[0]."'");
				$n=mysql_fetch_array($m);
				
				$p=mysql_query("select sum(credit) from registration where id ='".$tr[0]."'");
				$q=mysql_fetch_array($p);
				
				$k=number_format((float)($n[0]/$q[0]), 2, '.', '');
				
				$z=mysql_query("update result set sgpa='".$k."' where id = '".$tr[0]."'");
				
				
				
				$e=mysql_query("select sum(credit*point) from com_course where id ='".$tr[0]."'");
				$f=mysql_fetch_array($e);
				
				$g=mysql_query("select sum(credit) from com_course where id ='".$tr[0]."'");
				$h=mysql_fetch_array($g);
				
				$t=number_format((float)($f[0]/$h[0]), 2, '.', '');
				
				$v=mysql_query("update result set cgpa='".$t."' where id = '".$tr[0]."'");
				
				
				if($z==true || $v==true)
				{
					 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_semister_result_admin.php">';
				}
					
			}
			
			


?>
</body>
</html>