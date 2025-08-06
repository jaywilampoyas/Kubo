<?php 
session_start();
if(isset($_SESSION["email"])){
  header("location:index.php");
}

include("navbar.php");
include("tenant-engine.php");

 ?>
 <style type="text/css">
  body{
    background-color: #e8e4c9;
  }
  .btn{
        color: white;
        background-color: green;
    }
    .btn:hover{
        color: black;
        background-color: lightgreen;
    }
</style>

<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Tenant Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <center><input type="submit" id="submit" name="tenant_login" class="btn btn-primary btn-block" value="Login"></center>
  </form>
</div>