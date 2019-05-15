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
                                                    <div class="col-sm-4" style="background-color:#a0cfe5;height:700px">
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
	  