<?php
      @ob_start();
      session_start();
      include 'connection.php';
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query=mysqli_query($db,"SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['user_id'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('HI welcome' );
      document.location='profile.php'
    </script>
    <?php
}
}
      ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>  
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <style>
      body{
        background-image: url("blood4.jpg");
        background-repeat: no-repeat;
        background-size: 1200px 850px;
          font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      .apple{
        padding: 10px;
        text-align: center;
        background: #700007;
        color: white;
        font-size: 20px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;         
        }
      nav.navbar-inverse{
        height:150px;
        position:fixed;
        width:100%;
        top:0;
        z-index:999;
      }
      .input-field{
        border: 5px groove #700007;
        border-radius: 10px;
        width: 25em;
        padding: .5em 2em 2em 2em;
        margin:1em 5em 5em 3em;
        height:28em;
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
        height:45em;
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
        color: #ffffff;
        background-color: transparent;
        text-decoration: none;
      }
      a:visited {
        color: #ffffff;
        background-color: transparent;
        text-decoration: none;
      }
      a:hover {
        color: #ffffff;
        background-color: transparent;
        text-decoration: none;
      }
      a:active {
        color: #ffffff;
        background-color: transparent;
        text-decoration: none;
      }
      .button {
        text-decoration: none;
        border-radius: 4px;
        background-color: #700007;
        border: none;
        color: #ffffff;
        text-align: center;
        font-size: 18px;
        padding: 9px;
        width: 130px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }
      </style>
  </head>
  <div class = apple>
            <h1>BLOOD BANK CIRCLE</h1>
        </div><br>
<body>
<div class="input-field">

        <h3>USER LOGIN</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Username" required />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" style="width:20em;" placeholder="Enter your Password" required />
          </div><br>
          <div class="form-group">
          <input type="submit" value="LOGIN" name="submit" class="btn btn-primary submitBtn" style="width:15.7em; margin:0;background-color :#700007;padding:9px; font-size:18px" /><br><br>
            <center>
            <button class="button"><span><a href="Popup_Page.php">REGISTER</a> </span></button>
            <button class="button"><span><a href="AdminLogin.php">ADMIN</a> </span></button>
          </center>
          </div>
          
        </form>
      </div>
</body>

      </html>
   