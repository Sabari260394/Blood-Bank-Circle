<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>
      IT SourceCode
    </title>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <style>
      body{
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-image: url('blood10.jpg');
        background-repeat: no-repeat;
        background-size: 1500px 870px;
        
      }
      nav.navbar-inverse{
        height:100px;
        position:fixed;
        width:100%;
        top:0;
        z-index:999;
      }
      .input-field{
        border: 2px groove #700007;
        border-radius: 10px;
        width: 25em;
        padding: .5em 2em 2em 2em;
        margin:1em 5em 5em 3em;
        height:20em;
        margin-left: 40%;
      }
      .reg-input-field{
        border: 5px groove #700007;
        border-radius: 10px;
        width: 25em;
        padding: .5em 2em 2em 2em;
        margin:1em 5em 5em 3em;
        height:50.2em;
        margin-left: 40%;
      }
      .profile-input-field{
        border: 5px groove #700007;
        border-radius: 10px;
        width: 25em;
        padding: .5em 2em 2em 2em;
        margin:1em 5em 5em 3em;
        height:35em;
        margin-left: 40%;
      }
      .myoutput{
        border: 1px groove #700007;
        border-radius: 10px;
        margin:7em 5em 0em 5em;
      }
      h4{
        text-align:center;
        font-size: 21PX;
        font-weight: bolder;
      }

      .header1 {
        padding: 1px;
        text-align: center;
        background: #700007;
        color: white;
        font-size: 5px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;           
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
    </style>
    <header>
        <div class = header1>
            <h1>BLOOD BANK CIRCLE</h1>
        </div>
    </header>
  </head>
  <body>
    <div class="reg-input-field">
      <form method="post" action="#" >
          <h4> ALREADY DONOR </h4>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="user" style="width:20em;" required placeholder="Enter Name.."></textarea>
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter Age..">
        </div>
        <div class="form-group">
          <label>Blood Type</label>
          <input type="text" class="form-control" name="blood" style="width:20em;" required  placeholder="Enter Blood..">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter Address.."></textarea>
        </div>
        <div class="form-group">
          <label>Pincode</label>
          <input type="text" class="form-control" name="pincode" style="width:20em;" required  placeholder="Enter Pincode..">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" style="width:20em;" required  placeholder="Enter Phone..">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="Password" class="form-control" name="pass" style="width:20em;" required  placeholder="Enter Password..">
        </div>
        <div class="form-group">
          <label>Last Donate Date</label>
          <input type="date" class="form-control" name="lastdate" style="width:20em;" required >
        </div>
        <div class="form-group">
            <input type="submit" value="REGISTER" name="submit" class="btn btn-primary submitBtn" style="width:15.7em; margin:0;background-color :#700007;padding:8px; font-size:18px" />
        </div>
      </form>
    </div>
  </body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
$phone = $_POST['phone'];
$blood = $_POST['blood'];
$pincode = $_POST['pincode'];
$lastdate = $_POST['lastdate'];
$age = $_POST['age'];
$address = $_POST['address'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "INSERT INTO users
                (username, password,age,address,pincode,blood,phone,lastdate)
                VALUES ('".$user."','".$pass."','".$age."','".$address."','".$pincode."','".$blood."','".$phone."','".$lastdate."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
        <script type="text/javascript">
              alert("Thankyou for your Blood Donation !!");
              window.location = "Loginpage.php";
        </script>
      <?php
}
      ?>