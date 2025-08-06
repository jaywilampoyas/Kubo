<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  body{
    background-color: #e8e4c9;
    overflow-x: hidden;
  }
  .container-owner{
  background-color: #32cd32;
  position: absolute;
  top: -0.1vh;
  left: -0.1vh;
  width: 206.8vh;
}
.nav-item{
  font-family: cursive;
  font-size: 2vh;
  font-weight: bold;
}
.nav-link{
  color: black;
}
.nav{
  position: absolute;
  left: 10vh;
}
</style>
<head>
  <title>RentHouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color: #e3f2fd;">
  <div class="container-owner">
  <a class="navbar-header" href="owner-index.php">
    <img src="../images/logo3.png" alt="logo" style="height:50px;">
  </a>
  
  <!-- Links -->
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="owner-index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.facebook.com/groups/917183626630424">Contact Us</a>
    </li>
  </ul>
<ul class="nav navbar-nav navbar-right">
      <?php 
if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){

  echo '<li><a href="../logout.php" style="color:black; postion:abolute; left:185vh; font-weight:bold; font-family:cursive;">Logout</a></li>';
}
 
else {?>

      <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>

      <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

    <?php } ?>

    </ul>
  </div>
</nav>

</body>
</html>
