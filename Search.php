 <?php  
          if(!isset($_COOKIE["login"]))
               {
                   header("location:index.php");
               }
           else
               { 
                     $Email=$_COOKIE["login"];
                ?>
        <head>
                      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                      <script src="js/bootstrap.min.js"></script>
        </head>
        <Body bgcolor="#aee2ca">
             <center>
             <div class="container-fluid">
                    <div class="col-sm-4" style="background-color:#a0cfe5;height:550px">
                        <u>   <h3> <a href="profile.php">View My Profile</a> </h3> </u>
                               <h2>Find the right match for you</h2>
                                  <font  size="4px" face="Verdana">
                                     <form method=POST action="display.php">
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
                                   </font>
                                        <input type="Submit" value="Let's Search" class="btn btn-default">
                                      </form>
                      </div>
                 </div>
               </center>
          </Body>
  <?php
   }
   ?>