<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"mydb");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set user_id='" . $_POST['id'] . "', username='" . $_POST['username'] . "', age='" . $_POST['age'] . "',blood='" . $_POST['blood'] ."' , address='" . $_POST['address'] . "' ,pincode='" . $_POST['pincode'] . "', phone='" . $_POST['phone'] ."', lastdate='" . $_POST['lastdate'] ."' WHERE user_id='" . $_POST['id'] . "'");
?>
	<script type="text/javascript">
		window.location = "update.php";
	</script>
<?php
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE user_id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
	<head>
		<title>
			Update Employee Data
		</title>
		<link rel="stylesheet" href="libs/css/bootstrap.min.css">
		<style>
			body{
      			font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
				height:10em;
				margin-left: 40%;
				font-weight: bold;
			}
			.reg-input-field{
				border: 5px groove #700007;
				border-radius: 10px;
				width: 25em;
				padding: .5em 2em 2em 2em;
				margin:1em 5em 5em 3em;
				height:49em;
				margin-left: 40%;
				font-weight: bold;
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
				font-weight: bold;
			}

    		.header {
               padding: 5px;
               text-align: center;
               background: #700007;
               color: white;
               font-size: 20px;
               font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
               
            }
		</style>
	</head>
	<header>
			<div class = header>
				<h1>BLOOD BANK CIRCLE</h1>
			</div>
	</header>
	<body>
		<div class="reg-input-field">
			<form name="frmUser" method="post" action="">
				<div>
					<?php 
						if(isset($message)) { echo $message; } 
					?>
				</div>
					<h4>ADMIN UPDATE</h4>
					<div class="form-group">
						User ID
						<input type="hidden" name="userid" class="form-control"  value="<?php echo $row['userid']; ?>">
						<input type="text" name="id" class="form-control"  value="<?php echo $row['user_id']; ?>">
					</div>
					<div class="form-group">
						Name
						<input type="text" name="username" class="form-control"  value="<?php echo $row['username']; ?>">
					</div>
					<div class="form-group">
						Age
						<input type="text" name="age" class="form-control"  value="<?php echo $row['age']; ?>">
					</div>
					<div class="form-group">
						Blood Type
						<input type="text" name="blood" class="form-control"  value="<?php echo $row['blood']; ?>">
					</div>
					<div class="form-group">
						Address 
						<input type="text" name="address" class="form-control"  value="<?php echo $row['address']; ?>">
					</div>
					<div class="form-group">
						Pincode
						<input type="text" name="pincode" class="form-control"  value="<?php echo $row['pincode']; ?>">
					</div>
					<div class="form-group">
						Phone
						<input type="text" name="phone" class="form-control"  value="<?php echo $row['phone']; ?>">
					</div>
					<div class="form-group">
						Last Donate Date 
						<input type="date" name="lastdate" class="form-control"  value="<?php echo $row['lastdate']; ?>">
					</div></br>
					<div class="form-group">
						<input type="submit" VALUE="UPDATE" name="submit" class="btn btn-primary submitBtn" style="width:15.7em; margin:0;background-color :#700007;padding:8px; font-size:18px" />
					</div>
			</form>
		</div>
    </body>
</html>