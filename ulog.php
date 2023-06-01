<html>
    <head>
        <title>User login</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <style>
            .mess{
            position: fixed;
            top: 20px;
            left: 600px;
            width: 200px;
          
            justify-content: center;
            }
            .alert {
                padding: 20px;
                margin: 0 auto;
                background-color: #f44336;
                color: white;
            }

            .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }

            .closebtn:hover {
            color: black;
            }
            
        </style>
    </head>
    
    <body>
        
         <div class="container">
                <form action="" method="post">
                    <h2>Login form</h2>
                    <div class="content">
                        <div class="input-box">
                            <label for="uname">User Name</label>
                            <input type="text" name="uname" placeholder="Enter the user name">
                        </div>
                        <div class="input-box">
                            <label for="passs">Password</label>
                            <input type="password" name="pass" placeholder="Enter the password">
                        </div>
                    </div>
                    <div class="button-container">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
         </div>
        
        
    </body>
</html>
<?php
  error_reporting(E_ERROR | E_PARSE); 
   include 'connn.php';
   $sql = "SELECT * FROM userreg";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $uname=$_POST['uname'];
   $pass=$_POST['pass'];
  
   if(isset($_POST['submit'])){
    if($uname==$row["uname"]){
        if($pass==$row["passs"]){ 
?>
            <script>window.location.href = "adopt.php";</script>
<?php
        }
        else{
?>
            
            <div class="mess">
                <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Invalid password!</strong> 
                </div>
            </div>
<?php

        }
    }
    
   
    else{
?>
    <div class="mess">
        <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Invalid username!</strong> 
        </div>
    </div>
<?php
    }
}

?>
