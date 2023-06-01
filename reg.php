<html>
    <head>
        <title>User details</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <style>
        a,p{
                color:#F336A6;
                text-decoration: none;
            }
        </style>
        
    </head>
    
    <body>
        
         <div class="container">
            <form method="POST" action="">
                <h1>User registration</h1>
                <div class="content">
                    <div class="input-box">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="input-box">
                        <label for="age">Age</label>
                        <input type="number" placeholder="Age" name="age" required>
                    </div>
                    <div class="input-box">
                        <label for="gender">Gender</label>
                        <input type="text" placeholder="Gender" name="gender" required>
                    </div>
                    <div class="input-box">
                        <label for="num">Number</label>
                        <input type="number" placeholder="Contact Number" name="num" required>
                    </div>
                    <div class="input-box">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address" required>
                    </div>
                    <div class="input-box">
                        <label for="exp">Password</label>
                        <input type="password" placeholder="Enter new password" name="exp" required>
                    </div>
                    <div class="input-box">
                        <label for="child">Username</label>
                        <input type="text" placeholder="Enter username" name="child" required>
                    </div>
                    
                    
                    
                </div>
                
                
                    
               
    
                <div class="button-container">
                    <input type="submit" name="insbtn" value="Submit">
                </div>
            </form>
            <?php
                include 'insuser1.php';
            ?>
            <p>Already have an account?</p>
            <a href="ulog.php">Login</a>
            
         </div>
         
    </body>
</html>