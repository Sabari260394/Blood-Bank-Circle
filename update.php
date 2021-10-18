<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"mydb");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Delete employee data
    </title>
    <style>
      body{
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      .header {
        padding: 3px;
        text-align: center;
        background: #700007;
        color: white;
        font-size: 19px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;       
      }
      table {
        border-collapse:collapse;
        margin-left: auto;
        margin-right: auto;
      }
      td, th {
        border: 2px solid #700007;
        padding: 0.4rem;
        width: 170px;
        font-size: 15px;
        table-layout: fixed;
        font-weight: bold;
        text-align: left;
      }
      h2{
          text-align: center;
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
        padding: 7px;
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
  <header>
        <div class = header>
            <h1>BLOOD BANK CIRCLE</h1>
        </div>
  </header>
  <body>
    <h2> ADMIN TABLE</h2>
    <table>
      <tr>
        <td>NAME</td>
        <td>AGE</td>
        <td>BLOOD</td>
        <td>ADDRESS</td>
        <td>PINCODE</td>
        <td>PHONENO</td>
        <td>LAST DONATE DATE</td>
        <td>ACTION</td>
        <td>ACTION</td>
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      if($i%2==0)
      $classname="even";
      else
      $classname="odd";
      ?>
      <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td><?php echo $row["blood"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["pincode"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["lastdate"]; ?></td>
        <td><button class="button"><span><a href="update-process.php?id=<?php echo $row["user_id"]; ?>">Update</a></td></span></button>
        <td><button class="button"><span><a href="update-process.php?id=<?php echo $row["user_id"]; ?>">Update</a></td></span></button>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table>
  </body>
</html>