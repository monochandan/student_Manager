<!DOCTYPE html>
<html >
<style>
body{
	margin:0;
	color:#6a6f8c;

	background:#575c68 no-repeat;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;

	position:relative;
	background:url(Images/back.jpg) no-repeat;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:30px 70px 50px 70px;
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>

<head>
  <meta charset="UTF-8">
  <title>Faculty Login</title>

</head>

<body>
<br><br><br><center><font color="white" size="6">Student Information System</font></center>
<br><br><center><font color="white" size="6">Faculty Login</font></center>
  <div class="login-wrap">

	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
<form action="signin_faculty.php" method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label"><b>Email</b></label>
					<input id="user" type="text" class="input" name="Email">
				</div>
				<div class="group">
					<label for="pass" class="label"><b>Password</b></label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">

					<input type="submit" name="signin" class="button" value="Sign In">

				</div>
				<div class="foot-lnk">
					<label for="tab-2"><font color="white">Don't have an account?</font></a>
				</div>

			</div>
</form>
			
			<form method="post" action="">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Name</label>
					<input id="user" name="txtid" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Phone Number</label>
					<input id="pass" name="txtphn" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass" name="txtmail" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="txtpass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" name="signup" class="button" value="Sign Up">
				</div>
				<div class="foot-lnk">
					<label for="tab-1"><font color="white">Already Member?</font></a>
				</div>

			</div>
			</form>
		</div>
	</div>
</div>

   <?php
		if (isset($_POST['signup'])) {
		$id = trim($_POST['txtid']);
		$phn = trim($_POST['txtphn']);
        $mail = trim($_POST['txtmail']);
        $pass = trim($_POST['txtpass']);

        if(isset($_POST['signup'])){
        if(empty($id) || empty($mail))
        {
            echo "<center>Sorry please input data</center>";
        }
		else{
        include "connect.php";
        $i = mysql_query("insert into faculty(name,pnumber,Email,password) values('".$id."','".$phn."','".$mail."','".$pass."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=faculty_login.php">';
        }

        }
    }

		}

    ?>
</body>
</html>
