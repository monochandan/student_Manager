<?php
			session_start();
			if(isset($_POST['signin'])){

			if(!empty($_POST['Email']) && !empty($_POST['password'])){
					 $Email = $_POST['Email'];
					 $password = $_POST['password'];

					 $con=@mysql_connect("localhost", "root", "") or die(@mysql_error());
					 $db=@mysql_select_db('information system') or die(@mysql_error());

					 $query= @mysql_query("SELECT * from faculty where Email='".$Email."' and password='".$password."'");

					 $numrows=@mysql_num_rows($query);

					 if($numrows !=0)
					 {
						 while($row=@mysql_fetch_assoc($query))
						 {
							 $dbEmail=$row['Email'];
							 $dbpassword=$row['password'];
						 }
						 if($Email == $dbEmail && $password == $dbpassword)
						 {
							 $_SESSION['sess_mail']=$Email;

							 header("Location: faculty.php");

					 }
				 }
					 else{
									 echo "<script>alert('Invalid username or password')</script>";
									 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=faculty_login.php">';
								 }
					 }

					 else {
								 echo "<script>alert('All fields are required.')</script>";
								 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=faculty_login.php">';
							 }

				 }
				 ?>
