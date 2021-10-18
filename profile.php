<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>
        Blood Bank Circle
    </title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
<style>
  body{
      font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
  /*==========================HEADER*/
nav.navbar-inverse{
	height:100px;
	position:fixed;
	width:100%;
	top:0;
	z-index:999;
}
/*===================================*/
.input-field{
	border: 2px groove #700007;
	border-radius: 10px;
	width: 25em;
	padding: .5em 2em 2em 2em;
	margin:1em 5em 5em 3em;
	height:48em;
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
	height:48em;
	margin-left: 40%;
}
.myoutput{
	border: 1px groove #700007;
	border-radius: 10px;
	margin:7em 5em 0em 5em;
}
h3{
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
            </style>
            <header>
        <div class = header1>
            <h1>BLOOD BANK CIRCLE</h1>
        </div>
    </header>
  </head>
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM users where user_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
<div class="profile-input-field">
        <h3>USER PROFILE</h3>
        <form method="post" action="#" >
        <div class="form-group">
            <label>username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" required placeholder="Enter your name" value="<?php echo $row['username']; ?>" required >
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['address']; ?>"></textarea>
          </div>
          <div class="form-group">
            <label>pincode</label>
            <input type="text" class="form-control" name="pincode" style="width:20em;" required  placeholder="Enter your Pincode" value="<?php echo $row['pincode']; ?>">
          </div>
          <div class="form-group">
            <label>blood</label>
            <input type="text" class="form-control" name="blood" style="width:20em;" required  placeholder="Enter your blood" value="<?php echo $row['blood']; ?>">
          </div>
          <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" name="phone" style="width:20em;" required  placeholder="Enter your phone" value="<?php echo $row['phone']; ?>">
          </div>
          <div class="form-group">
            <label>lastdate</label>
            <input type="date" class="form-control" name="lastdate" style="width:20em;" required  placeholder="Enter your Pincode" value="<?php echo $row['lastdate']; ?>">
          </div>
          <div class="form-group">
          <input type="submit" VALUE="UPDATE" name="submit" class="btn btn-primary submitBtn" style="width:15.7em; margin:0;background-color :#700007;padding:8px; font-size:18px" />
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $phone = $_POST['phone'];
$blood = $_POST['blood'];
$pincode = $_POST['pincode'];
$lastdate = $_POST['lastdate'];
$age = $_POST['age'];
$address = $_POST['address'];
$user = $_POST['user'];
      $query = "UPDATE users SET username = '$user',
                        age = '$age', address = '$address', blood = '$blood' , pincode = '$pincode' , lastdate = '$lastdate'  WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>  