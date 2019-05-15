
                                          <head>
                                              <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                              <script src="js/bootstrap.min.js"></script>
                                      </head> 
  <?php  
   if(!isset($_COOKIE["login"]))
   {
	   header("location:index.php");
   }
   else
   { 
		 $Gender=$_POST["Gender"];
		 $religion=$_POST["religion"];
		 $mtounge=$_POST["mtounge"];
		 include("db.php");
		 $rs=mysql_query("select * from record where Gender='$Gender' AND religion='$religion' AND mtounge='$mtounge'");
		 while($r=mysql_fetch_array($rs))
		    {
			?>
	<center>	
	    first name:<?php echo $r[0];?><br>
        last name:<?php echo $r[1];?><br>
		dob:<?php echo $r[2];?><br>
        height:<?php echo $r[6];?><br>
		religion:<?php echo $r[4];?><br>
        Mother Tounge:<?php echo $r[5];?><br>
		Email:<?php echo $r[8];?><br>
		<br>
		<br>
		<br>
	</center>	
			<?php
			}

   }		
   ?>