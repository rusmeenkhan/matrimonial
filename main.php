 <?php  
          if(!isset($_COOKIE["login"]))
               {
                   header("location:index.php?you are not login");
               }
           else
               { 
                     $Email=$_COOKIE["login"];
    ?>
<html>
	<head>
            <link rel="stylesheet" href="bootstrap.min.css">

            <!-- jQuery library -->		
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <script>
                    $(document).ready(function()
                    {
                    $(".Search").click(function()
                        {
                        $("#Search").modal();
                      });
                   });
            </script>
            <script>
                       $(document).ready(function()
                        {
                        $(".view_profile").click(function()
                          {
                            $("#view_profile").modal();
                          });
                       });
                </script>
                <script>
                    $(document).ready(function()
                    {
                    $(".Edit_profile").click(function()
                        {
                        $("#Edit_profile").modal();
                      });
                   });
            </script>
                        <script>
                    $(document).ready(function()
                    {
                    $(".change_password").click(function()
                        {
                        $("#change_password").modal();
                      });
                   });
            </script>
	</head>
	<body>
		<font face="verdana">
			<nav class="navbar navbar-inverse" style="background-color:#ef0707">
				<div class="container-fluid">
				    <a class="navbar-brand navbar-right" href="Search.php" style="color:white;float:">eMarriage.com</a>
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="Search.php"><font color="white">Home</font></a></li>
                        <li><a href="#" class="Search"><font color="white">Search</font></a></li>
						<li><a href="#" class="view_profile"><font color="white">view profile</font></a></li>
						<li><a href="#" class="Edit_profile"><font color="white">Edit profile</font></a></li>
                        <li><a href="#" class="change_password"><font color="white">change password</font></a></li>
                        <li><a href="logout.php" class="logout"><font color="white">logout</font></a></li>
					</ul>
			</nav>
		        </div>
		<div class="carousel slide" id="carousel" data-ride="carousel" style="margin-top:-20px;">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1" class="active"></li>
				<li data-target="#carousel" data-slide-to="2" class="active"></li>
                <li data-target="#carousel" data-slide-to="3" class="active"></li>
                <li data-target="#carousel" data-slide-to="4" class="active"></li>
			</ol>

		</div>
            <div class="container-fluid">
 <!----------------------------------Search block Begins here---------------------------------------------------------------------------------->
<div class="modal fade" id="Search" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
                        <div class="modal-header" style="height:100px; background-color:#969494;color:#B8D6C7"><center><h2>Search</h2>enter></div>
						<div class="modal-body" style="background-color:#e3f7e8">
							<form method="POST" action ="display.php">    
                                       <label> Profile for</label>
                                        <select name="Gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><br>
                                         <label>Religion</label>
                                        <select name="religion" class="form-control">
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="sikh">sikh</option>
                                                   <option value="Budhhist">Budhhist</option>
                                        </select><br>
                                         <label>  Mother Tounge </label>
                                        <select name="mtounge" class="form-control">
                                                  <option value="Hindi">Hindi</option>
                                                  <option value="Rajasthani">Rajasthani</option>
                                                  <option value="punjabi">punjabi</option>
                                                  <option value="Gujrati">Gujrati</option>
                                                  <option value="Marathi">Marathi</option>
                                                  <option value="Urdu">Urdu</option>
                                        </select><br>
                                   
                                        <input type="Submit" value="Let's Search" class="btn btn-default">
							</form>
						</div>
					</div>
				</div>
			</div>  
<!----------------------------------Search block Ends------------------------------------------------------------------------------------------>
            <br>
<!------------------------------------------------------------Login block Begins---------------------------------------->            
			<div class="modal fade" id="view_profile" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
                        <div class="modal-header" style="height:100px; background-color:#969494;color:#B8D6C7"><center><h2>MY Profile </h2></center></div>
						<div class="modal-body" style="background-color:#e3f7e8">
                            	
			
<!---------------------------Login block Ends---------------------------------------------------------------------------->
                            <br>
 <!---------------------------View Profile block Ends---------------------------------------------------------------------------->
    <?php
           }
    ?>
       <?Php
              if(!isset($_COOKIE["login"]))
                      {
                       header("location:index.php");
                      }
              else
                     {
                           $Email=$_COOKIE["login"];
                           include("db.php");
                           $rs=mysql_query("select * from record where Email='$Email'");
                           if($r=mysql_fetch_array($rs))
                               {
                               ?>
							   <center>
                                              first name:<?php echo $r[0];?><br>
                                              last name:<?php echo $r[1];?><br>
                                              Dob:<?php echo $r[2];?><br>
                                              Gender:<?php echo $r[3];?><br>
                                              religion:<?php echo $r[4];?><br>
                                               mother tounge:<?php echo $r[5];?><br>
                                               height:<?php echo $r[6];?><br>
                                                Mobile:<?php echo $r[7];?><br>
                                              Email:<?php echo $r[8];?><br>
											  </center>
											  			</div>
            </div>
			</div>
				</div>
<!---------------------------View Profile block Ends---------------------------------------------------------------------------->
                <br>
<!---------------------------Edit Profile block Ends---------------------------------------------------------------------------->                
        <div class="modal fade" id="Edit_profile" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
                        <div class="modal-header" style="height:100px; background-color:#969494;color:#B8D6C7"><center><h2>Edit Profile </h2></center></div>
						<div class="modal-body" style="background-color:#e3f7e8">
                             <?php
                   if(!isset($_COOKIE["login"]))
                         {
                                      header("location:index.php");
                          }
                      else
                         {
                                      $Email=$_COOKIE["login"];
                                      include("db.php");
                                      $rs=mysql_query("select * from record where Email='$Email'");
                                      if($r=mysql_fetch_array($rs))
                                         {
             ?>
                                          <body>
                                                  <center>
                                                        <div class="container-fluid">
                                                            <div class="col-sm-12" style="background-color:#a0cfe5;height:700px">
                                                                 <form method="post" action="update.php">
                                                                         First name<input type="text" name="fname" class="form-control" value='<?php echo $r[0];?>'><br>
                                                                         Last name<input type="text" name="lname"  class="form-control" value='<?php echo $r[1];?>'><br>
                                                                         Dob<input type="date" name="dob" class="form-control" value='<?php echo $r[2];?>'><br>
                                                                         Gender
                                                                         <select name="Gender" class="form-control" required>
                                                                           <option name="<?php echo $r[3];?>"><?php echo $r[3];?></option>
                                                                           <option value="Male">male</option>
                                                                             <option value="Female">Female</option>
                                                                         </select><br>
                                                                         Religion
                                                                     <select type="religion" name="religion" class="form-control" value='<?php echo $r[4];?>'><br>
                                                                         <option name="<?php echo $r[4];?>"><?php echo $r[4];?></option>
                                                                         <option name="Hindu">Hindu</option>
                                                                         <option name="Muslim">Muslim</option>
                                                                         <option name="Sikh">Sikh</option>
                                                                         <option name="Budhist">Budhist</option>
                                                                     </select>
                                                                      Mother tounge
                                                                     <select name="mtounge" name="mtounge" class="form-control" value='<?php echo $r[5];?>'><br>
                                                                         <option name="<?php echo $r[5];?>"><?php echo $r[5];?></option>
                                                                         <option name="Hindi">Hindi</option>
                                                                         <option name="Rajasthani">Rajasthani</option>
                                                                         <option name="punjabi">Punjabi</option>
                                                                         <option name="marathi">marathi</option>
                                                                         <option name="Gujrati">Gujrati</option>
                                                                         <option name="Urdu">Urdu</option>
                                                                    </select><br>
                                                                         height
                                                                         <select name="height" class="form-control" required>
                                                                                         <option name="<?php echo $r[6];?>"><?php echo $r[6];?></option>
                                                                                         <option name="5 feet 0 inch">5 feet 0 inch</option>
                                                                                         <option name="5 feet 1 inch">5 feet 1 inch</option>
                                                                                         <option name="5 feet 2 inch">5 feet 2 inch</option>
                                                                                         <option name="5 feet 3 inch">5 feet 3 inch</option>
                                                                                         <option name="5 feet 4 inch">5 feet 4 inch</option>
                                                                                         <option name="5 feet 5 inch">5 feet 5 inch</option>
                                                                                         <option name="5 feet 6 inch">5 feet 6 inch</option>
                                                                                         <option name="5 feet 7 inch">5 feet 7 inch</option>
                                                                                         <option name="5 feet 8 inch">5 feet 8 inch</option>
                                                                                         <option name="5 feet 9 inch">5 feet 9 inch</option>
                                                                                         <option name="5 feet 10 inch">5 feet 10 inch</option>
                                                                         </select>
                                                                        <br>
                                                                         Mobile<input type="text" name="mob" class="form-control" value='<?php echo $r[7];?>'><br>
                                                                                 <input type="submit" name="update" value="update" class="btn btn-primary">
                                                                 </form>
                                                            </div>   
                                                          
                                                      </div>    
                                         </center>  
                                </body>
   <?php
		                       }	
                              else 
                                {
                                    header("location:index.php");
                                 }
         }
    ?>	  
	                         </div>
                    </div>
            </div>
                </div>
<!---------------------------Edit Profile block Ends---------------------------------------------------------------------------->  
                            <br>
 <!---------------------------Change Password block Begins---------------------------------------------------------------------------->  
                            <br>
         <div class="modal fade" id="change_password" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
                        <div class="modal-header" style="height:500px; background-color:#969494;color:#B8D6C7"><center><h2>Change Password</h2>
                             <?php
                                  if(!isset($_COOKIE["login"]))
                                  {
                                  header("location:index.php");
                                  }
                                  else
                                  {
                                   ?>
                                   <form method="POST" action="password.php">
                                   Current Password<input type="password" name="pass" class="form-control"><br>
                                   New Password<input type="password" name="np" class="form-control"><br>
                                   Retype Password<input type="password" name="rp" class="form-control"><br>
                                   <input type="submit" class="btn btn-primary btn-lg">
                                   </form>
                                   <?php
                                  }
                                  ?>
                            </center>
                        </div>
                    </div>
             </div>
                            </div>
 
  <!---------------------------Change Password block Ends---------------------------------------------------------------------------->  
                        				</div>
										</font>
											    </body>
												</html>
  <?php
   }
					 }
   ?>