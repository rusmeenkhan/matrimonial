  <head>
		      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
              <script src="js/bootstrap.min.js"></script>
              <script src="js/jquery.js"></script>
  </head>
<Body> 
          <form method="POST" action="insert.php">
                     
                          <div class="row">
                                <div class="col-md-4" >
                                     <img src="4.jpg" width="500px";height="700px">
                                </div>   
                                  <div class="col-md-4" >
                                     <img src="3.png" width="500px";height="700px">
                                </div> 
                         <div class="col-sm-4" style="background-color:#a0cfe5">
                             <center>   <h1> Registration</h1> </center>
                             <label>First Name</label>
                             <input type="text" name="fname" class="form-control" required><br>
                             <label>Last Name</label>
                             <input type="text" name="lname" class="form-control" required><br>
                             <label>DOB</label>
                               <input type="date" name="dob" class="form-control" required><br>
                             <b> <font color="#2b0e02" size="5px">Gender</font></b>
                                  <input type="radio" name="Gender" value="Male" checked=checked>Male
                                  <input type="radio" name="Gender" value="Female">Female<br>
                             <label> Religion</label>
                                  <select name="religion" class="form-control" required>
                                         <option name="Hindu">Hindu</option>
                                         <option name="Muslim">Muslim</option>
                                         <option name="Sikh">Sikh</option>
                                         <option name="Budhist">Budhist</option>
                                  </select><br>
                             <label> Mother Tounge</label>
                                  <select name="mtounge" class="form-control" required>
                                         <option name="Hindi">Hindi</option>
                                         <option name="Rajasthani">Rajasthani</option>
                                         <option name="punjabi">Punjabi</option>
                                         <option name="marathi">marathi</option>
                                         <option name="Gujrati">Gujrati</option>
                                         <option name="Urdu">Urdu</option>
                                  </select><br>

                             <label>Height</label>
                                  <select name="height" class="form-control" required>
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
                                  </select>	<br>				 
                            Mobile<input type="mobile" name="mob" class="form-control" required><br>
                            Email<input type="Email" name="Email" class="form-control" required><br>
                            Password<input type="password" name="pass" class="form-control" required><br> 		
                             <center> <input type="Submit" value="Sign Up" class="btn btn-primary">	</center>
                              </div>   
                         </div>   
           </form>
  </Body> 