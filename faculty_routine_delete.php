     <?php 
	 session_start();

        include "connect.php";
		
		$p=mysql_query("select code from faculty where Email='".$_SESSION['sess_mail']."'");
		$q=mysql_fetch_array($p);
		$x=$q['code'];
      
	  $i = mysql_query("delete from faculty_routine where faculty='".$x."'");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_faculty_routine.php">';
        }
    ?>
