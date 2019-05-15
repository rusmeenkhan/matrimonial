  <?php
  if(!isset($_COOKIE["login"]))
  {
  header("location:index.php");
  }
  else
  {
   ?>
   <form method="post" action="password.php">
   Current Password<input type="password" name="pass"><br>
   New Password<input type="password" name="np"><br>
   Retype Password<input type="password" name="rp"><br>
   <input type="submit">
   </form>
   <?php
  }
  ?>