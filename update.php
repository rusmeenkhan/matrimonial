     <?php
	    if(!isset($_COOKIE["login"]))
        {
	       header("location:index.php?timeout");
	    }
		else
		{
			 if(empty($_POST["fname"])||empty($_POST["lname"])||empty($_POST["dob"])||empty($_POST["Gender"])||empty($_POST["religion"])||empty($_POST["mtounge"])||empty($_POST["height"])||empty($_POST["mob"]))
				 {
				 header("location:edit.php?all feild required");
				 }
			 else
				 {
				  $Email=$_COOKIE["login"];
				  $fname=$_POST["fname"];
				  $lname=$_POST["lname"];
				  $dob=$_POST["dob"];
				  $Gender=$_POST["Gender"];
				  $religion=$_POST["religion"];
				  $mtounge=$_POST["mtounge"];
				  $height=$_POST["height"];
				  $mob=$_POST["mob"];
				  include("db.php");
				  mysql_query("update record set fname='$fname',lname='$lname',dob='$dob',Gender='$Gender',religion='$religion',mtounge='$mtounge',height='$height',mob='$mob' where Email='$Email'");
				  header("location:main.php?updated");
				 }
	    }			 
				 ?>
		  