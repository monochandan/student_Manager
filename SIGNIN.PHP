<?php
   session_start();
	 if(isset($_POST['signin'])){
	 

	 if(!empty($_POST['ID']) && !empty($_POST['Password'])){
	 			$ID = $_POST['ID'];
	 			$Password = $_POST['Password'];

	 			$con=@mysql_connect("localhost", "root", "") or die(@mysql_error());
	 			$db=@mysql_select_db('information system') or die(@mysql_error());

	 			$query= @mysql_query("SELECT * from user where ID='".$ID."' and Password='".$Password."'");

	 			$numrows=@mysql_num_rows($query);

	 			if($numrows !=0)
	 			{
	 				while($row=@mysql_fetch_assoc($query))
	 				{
	 					$dbID=$row['ID'];
	 					$dbPassword=$row['Password'];
	 				}
	 				if($ID == $dbID && $Password == $dbPassword)
	 				{

	 					
						$_SESSION['sess_ID']=$ID;
						header("Location: student.php");

	 			}
	 		}
	 			else{
	 							echo "<script>alert('Invalid username or password')</script>";
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=student_login.php">';
	 						}
	 			}

	 			else {
	 						echo "<script>alert('All fields are required.')</script>";
              echo '<META HTTP-EQUIV="Refresh" Content="0; URL=student_login.php">';
	 					}

	 		}
			?>
