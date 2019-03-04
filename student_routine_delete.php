     <?php 
	 session_start();

		$id = $_SESSION['sess_ID'];
        include "connect.php";
        $i = mysql_query("delete from student_routine where ID='".$id."'");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=student_routine.php">';
        }
    ?>
