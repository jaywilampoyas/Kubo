<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/welcomelogo.jpg");

  /* Full height */
  height: 60%; 

  /* Center and scale the image nicely */
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}

.search {
  display: inline-block;
  position: relative;
  top: -2vh;
  left: 9vh;
}

.search input[type="text"] {
  width: 1000px;
  padding: 10px;
  border: none;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search button[type="submit"] {
  background-color: green;
  border: none;
  color: white;
  cursor: pointer;
  padding: 7.5px 20px;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  position: absolute;
  top: -0.1vh;
  left: 127.5vh;
  transition: .9s ease;
}

.search button[type="submit"]:hover {
  transform: scale(1.1);
  color: black;
  background-color: #32cd32;
}
.form-control{
  position: absolute;
}
</style>

<div class="bg"></div><br>
<div class="container active-cyan-4 mb-4 inline">
	<form method="POST" action="search-property.php">
    <div class="search">
  <input class="form-control" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search">
  <button type="submit">Go</button>
  </div>
  </form>
</div>
<br><br>
<?php 

include("property-list.php");

 ?>
 <br><br>