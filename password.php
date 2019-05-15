   <?php  
   if(!isset($_COOKIE["login"]))
   {
	   header("location:index.php");
   }
   else
   { 
		 $Email=$_COOKIE["login"];
		 if(empty($_POST["pass"])||empty($_POST["np"])||empty($_POST["rp"]))
		  {
			header("location:changepassword.php?all feild required");
		  }
		  else  
		  {
			 include("db.php");
             $pass=$_POST["pass"];			 
             $np=$_POST["np"];	  
             $rp=$_POST["rp"];	   
			 if($np==$rp)
			   {
				   $rs=mysql_query("select * from record where Email='$Email'");
				   if($r=mysql_fetch_array($rs))
				     {
							  if($r["pass"]==$pass)
							   {
								   mysql_query("update record set pass='$np' where Email='$Email'");
								   header("location:main.php?success=1");
							   } 
							   else  
							   {
								header("location:password.php?invalid pass");
							   }
					 }
                    else 
					{
                     header("location:logout.php");

					}
			   }
             else
			 {
			   header("location:password.php?mismatch");
			  
			 }				 
					   
			   }
   }
?>   