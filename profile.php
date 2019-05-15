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
                                      <head>
                                              <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                              <script src="js/bootstrap.min.js"></script>
                                      </head>   

                                       <body> 
                                            <center>
                                               <div class="container-fluid">
                                                     <div class="col-sm-4" style="background-color:#eaebf2;height:550px">
                                                         <u>  <h3>My Profile</h3> </u>
                                                            first name:<?php echo $r[0];?><br>
                                                            last name:<?php echo $r[1];?><br>
                                                            Dob:<?php echo $r[2];?><br>
                                                            Gender:<?php echo $r[3];?><br>
                                                            religion:<?php echo $r[4];?><br>
                                                            mother tounge:<?php echo $r[5];?><br>
                                                            height:<?php echo $r[6];?><br>
                                                            Mobile:<?php echo $r[7];?><br>
                                                            Email:<?php echo $r[8];?><br>
                                                         <pre>  <b>  <u>  <a href='edit.php'>Edit Profile</a> </u> </b>   </pre>
                                                         <pre> <b>  <u>  <a href='changepassword.php'>change password</a></u> </b> </pre>
                                                         <pre>  <b>  <u><a href='logout.php'>Logout</a></u> </b> </pre>
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