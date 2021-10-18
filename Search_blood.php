<html>
    <head>
        <style>
            body{
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            table {
                border-collapse: collapse;
                table-layout: fixed;
            }
            td, th {
                border: 2px solid #700007;
                padding: 0.4rem;
                width: 170px;
                font-size: 15px;
                table-layout: fixed;
                text-align: left;
                font-weight: bold;
            }
            .header {
               padding: 2px;
               text-align: center;
               background: #700007;
               color: white;
               font-size: 20px;
               font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
               
            }
            .container{
                padding: 20px;
            }
            :focus{
                outline: none;
            }

            .col-3{
	            float: left; 
	            width: 27%; 
	            margin: 10px 38%; 
	            position: relative;
	        } 
            input[type="text"]{
	            font: 15px/24px "Lato", Arial, sans-serif; 
	            color: #333; 
	            width: 100%; 
	            box-sizing: border-box; 
	            letter-spacing: 1px;
	        }
            .effect-1{
                border: 0; 
                padding: 8px 0; 
                border-bottom: 1px solid #700007;
            }
            .effect-1 ~ .focus-border{
                position: absolute; 
                bottom: 0; 
                left: 0; 
                width: 0; 
                height: 2px; 
                background-color: #700007; 
                transition: 0.4s;
            }
            .effect-1:focus ~ .focus-border{
                width: 100%; 
                transition: 0.4s;
            }
            .myButton {
	            box-shadow: 0px 0px 0px 2px #700007;
	            background:linear-gradient(to bottom, #700007 1%, #700007 100%);
	            background-color:#700007;
	            border-radius:20px;
	            border:3px solid #700007;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:19px;
                padding: 15px 37px;
                text-decoration:none;
                text-shadow:0px 1px 0px #283966;
            }
            .myButton:hover {
                background:linear-gradient(to bottom, #700007 0%, #700007 30%);
                background-color:#476e9e;
            }
            .myButton:active {
                position:relative;
                top:1px;
            }
        </style>
    </head>
        <header>
            <div class = header>
                <h1>BLOOD BANK CIRCLE</h1>
            </div>
        </header>
    <body>
        <center>
            <div class="container">
                <form action="" method="POST">
                    <div class="row">
                        <div class="container">
                            <div class="col-3">
                                <input class="effect-1" type="text" name="pincode" placeholder="Enter Pincode.. ">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                    </div></br>
                    <div class="row">
                        <div class="container">
                            <div class="col-3">
                                <input class="effect-1" type="text" name="blood" placeholder="Enter Blood Type..">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                    <br><br><br>    
                    <input type="submit" name="search" class="myButton" value="SEARCH" />
                </form>
        </center>
        <center>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>BLOOD TYPE</th>
                    <th>ADDRESS</th>
                    <th>PINCODE</th>
                    <th>PHONE NO</th>
                    <th>LAST DONATE DATE</th>
                </tr><br>
                <?php

                    $con = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($con,'mydb');
                    $userpincode = false;
                    if(isset($_POST['search'])){
                        
                        $pincode = $_POST['pincode'];
                        $blood = $_POST['blood'];

                        $query = "SELECT `username`, `age`, `blood`, `address`, `pincode`, `phone`, `lastdate` FROM `users` WHERE pincode = '$pincode' OR blood = '$blood' ";
                        
                        $query_run = mysqli_query($con,$query);

                        while($row = mysqli_fetch_array($query_run)){
                ?>

                <tr>
                    <td><?php echo $row['username']; ?> </td>
                    <td><?php echo $row['age']; ?> </td>
                    <td><?php echo $row['blood']; ?> </td>
                    <td><?php echo $row['address']; ?> </td>
                    <td><?php echo $row['pincode']; ?> </td>
                    <td><?php echo $row['phone']; ?> </td>
                    <td><?php echo $row['lastdate']; ?> </td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                
            </table>
        </center>
    </body>
</html>