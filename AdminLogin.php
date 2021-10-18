<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>
        Blood Bank Circle
  </title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <style>
      body{
        background-image: url("blood2.jpg");
        background-repeat: no-repeat;
        background-size: 1800px 800px;
      font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    /*==========================HEADER*/
nav.navbar-inverse{
	height:150px;
	position:fixed;
	width:100%;
	top:0;
	z-index:999;
}
/*===================================*/
.input-field{
	border: 5px groove #700007;
	border-radius: 10px;
	width: 25em;
	padding: .5em 2em 2em 2em;
	margin:1em 5em 5em 3em;
	height:25em;
	margin-left: 40%;
}
.reg-input-field{
	border: 5px groove #700007;
	border-radius: 10px;
	width: 25em;
	padding: .5em 2em 2em 2em;
	margin:1em 5em 5em 3em;
	height:90em;
	margin-left: 40%;
}
.profile-input-field{
	border: 5px groove #700007;
	border-radius: 10px;
	width: 25em;
	padding: .5em 2em 2em 2em;
	margin:1em 5em 5em 3em;
	height:55em;
	margin-left: 40%;
}
.myoutput{
	border: 3px groove #700007;
	border-radius: 10px;
	margin:7em 5em 0em 5em;
}
h3{
	text-align:center;
}
h2{
  color: #700007;
}
a:link {
  color: #700007;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: #700007;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: #700007;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

.header1 {
               padding: 10px;
               text-align: center;
               background: #700007;
               color: white;
               font-size: 20px;
               font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
               text-align: center;
               
            }
.btn btn-primarysubmitBtn{
  color: #700007;
}
  </style>
   <header>
        <div class = header1>
            <h1>BLOOD BANK CIRCLE</h1>
        </div>
    </header>
  </head>
  </head><br>
<div class="input-field">
        <h3>Admin Login</h3>
        <form method="post" action="#" >
          <br>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Username" required />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" style="width:20em;" placeholder="Enter your Password" required />
          </div><br>
          <div class="form-group">
          <input type="submit" VALUE="LOGIN"name="submit" class="btn btn-primary submitBtn" style="width:15.7em; margin:0;background-color :#700007;padding:9px; font-size:18px" /><br><br>
          </div>
          
        </form>
      </div>
      </html>
      <?php
      session_start();
      include 'connection.php';
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query=mysqli_query($db,"SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['user_id'];
if ($num_rows>0)
{
    ?>
    <script>
      document.location='update.php'
    </script>
    <?php
}
}
      ?>