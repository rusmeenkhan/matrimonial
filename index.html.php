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
                        $(".login").click(function()
                          {
                            $("#login").modal();
                          });
                       });
                </script>
                <script>
                    $(document).ready(function()
                    {
                    $(".Register").click(function()
                        {
                        $("#Register").modal();
                      });
                   });
            </script>
                        <script>
                    $(document).ready(function()
                    {
                    $(".btn.btn-danger.btn-lg").click(function()
                        {
                        $("#search").modal();
                      });
                   });
            </script>
                    </script>
                        <script>
                    $(document).ready(function()
                    {
                    $(".btn.btn-primary.btn-lg").click(function()
                        {
                        $("#search").modal();
                      });
                   });
            </script>
                </script>
 
	</head>
	<body>
		<font face="verdana">
			<nav class="navbar navbar-inverse" style="background-color:#ef0707">
				<div class="container-fluid">
                    
					<ul class="nav navbar-nav navbar-left">
                        <a class="navbar-brand " href="index.php" style="color:white;float:">eMarriage.com</a>
						<li class="active"><a href="index.php"><font color="white">Home</font></a></li>
						<li><a href="#" class="login"><font color="white">Login</font></a></li>
						<li><a href="#" class="Register"><font color="white">Registration</font></a></li>
					</ul>
                </div>
			</nav>
		<div class="carousel slide" id="carousel" data-ride="carousel" style="margin-top:-20px;">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1" class="active"></li>
				<li data-target="#carousel" data-slide-to="2" class="active"></li>
                <li data-target="#carousel" data-slide-to="3" class="active"></li>
                <li data-target="#carousel" data-slide-to="4" class="active"></li>
			</ol>
			<div class="carousel-inner">
                <div class="item active">
					<img src="11.jpg" class="img-responsive" style="height:600px;width:100%">
                    <p class="carousel-caption" style="font-size:30px;color:black">Find the right choice....<a href="#" class="btn btn-danger btn-lg">Search Here</a>
				</div>
				<div class="item">
					<img src="3.jpg" class="img-responsive" style="height:600px;width:100%">
					<p class="carousel-caption" style="font-size:30px;color:white">Searching For a Life Partner?<a href="#" class="btn btn-primary btn-lg">Search Here</a>
				</div>
				<div class="item">
					<img src="6.jpg" class="img-responsive" style="height:600px;width:100%">
					<p class="carousel-caption" style="font-size:30px;color:#42f4eb">We match people which are made for each other<a href="#" class="btn btn-primary btn-lg">Search Here</a>
				</div>
                	<div class="item">
					<img src="5.jpg" class="img-responsive" style="height:600px;width:100%">
					<p class="carousel-caption" style="font-size:30px;color:#42f4eb">We match people which are made for each other<a href="#" class="btn btn-primary btn-lg">Search Here</a>
				</div>
                	<div class="item">
					<img src="10.jpg" class="img-responsive" style="height:600px;width:100%">
					<p class="carousel-caption" style="font-size:30px;color:#42f4eb">We match people which are made for each other<a href="#" class="btn btn-primary btn-lg">Search Here</a>
				</div>
			</div>
		</div>
		<div class="container-fluid">
<!------------------------------------------------------------Login block Begins---------------------------------------->            
			<div class="modal fade" id="login" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
                        <div class="modal-header" style="height:100px; background-color:#969494;color:#B8D6C7"><center><h2>Login Here </h2></center></div>
						<div class="modal-body" style="background-color:#e3f7e8">
							<form method="POST" action ="check.php">    
								Email <input type="email" name="Email" class="form-control" required><br>
								Password<input type="password" name="pass" class="form-control" required><br>
                                <center><input type="submit" class="btn btn-info btn-lg" value = "Sign In"></center><br>
							</form>
						</div>
                    </div>
					</div>
				</div>
			</div>
<!---------------------------Login block Ends------------------------------------------------------------------------------>
            <br>
<!----------------------------------Sign up block Begins--------------------------------------------------------------------------------------->   
            <div class="modal fade" id="Register" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="height:100px; background-color:#DD3902;color:#B8D6C7"><h2>Sign up</h2></div>
						<div class="modal-body" style="background-color:#fff9af">
							<form method = "POST" action = "insert.php">
                             <label>First Name</label>
                             <input type="text" name="fname" class="form-control" required><br>
                             <label>Last Name</label>
                             <input type="text" name="lname" class="form-control" required><br>
                             <label>DOB</label>
                               <input type="date" name="dob" class="form-control" required><br>
                             <b> <font color="#2b0e02" size="4px">Gender</font></b>
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
							</form>
						</div>
					</div>
				</div>
			</div>
<!----------------------------------Sign up block Ends------------------------------------------------------------------------------------------>
            <br>
<!----------------------------------Search block Begins here------------------------------------------------------------------------------------>
<div class="modal fade" id="search" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
                        <div class="modal-header" style="height:100px; background-color:#969494;color:#B8D6C7"><center><h2>Search</h2></center></div>
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
                                   </font>
                                        <input type="Submit" value="Let's Search" class="btn btn-default">
							</form>
						</div>
					</div>
				</div>
			</div>  
<!----------------------------------Search block Ends------------------------------------------------------------------------------------------>
            <br>
		</div>
        </font>
	</body>
</html>