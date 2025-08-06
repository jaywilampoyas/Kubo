<?php 
session_start();
if(isset($_SESSION["email"])){
  header("location:index.php");
}
include("navbar.php");

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
    <section class="containerhowtoregister sign-in-form-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 sign-up" style="text-align: center;">
                    <h3 style="font-weight: bold;">How do you want to Register?</h3><hr>
                    <p>If you want to register as a tenant click on tenant register button otherwise click on owner register button.</p><br><br>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='tenant-register.php'" style="width:200px;">Tenant Register</button>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='owner-register.php'" style="width:200px;">Owner Register</button>
                </div>
                
            </div>
        </div>
    </section>