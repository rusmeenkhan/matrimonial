   <?php
if(empty($_POST["fname"])||empty($_POST["lname"])||empty($_POST["dob"])||empty($_POST["Gender"])||empty($_POST["religion"])||empty($_POST["mtounge"])||empty($_POST["height"])||empty($_POST["mob"])||empty($_POST["Email"])||empty($_POST["pass"]))
      {  
       header("location:Register.php?err=1");
      }
   else
      {
	  include("db.php");
      $fname=$_POST["fname"];
      $lname=$_POST["lname"];
	  $dob=$_POST["dob"];
	  $Gender=$_POST["Gender"];
      $religion=$_POST["religion"];
	  $mtounge=$_POST["mtounge"];
      $height=$_POST["height"];
	  $mob=$_POST["mob"];
	  $Email=$_POST["Email"];
      $pass=$_POST["pass"];
	  mysql_query("insert into record  values('$fname','$lname','$dob','$Gender','$religion','$mtounge','$height','$mob','$Email','$pass')");
      setCookie("login",$Email,time()+3600);
	  header("location:search.php");
	  }
	  ?>
	  

	  