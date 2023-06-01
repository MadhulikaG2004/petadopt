<html>
    <head>
        <title>User details</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <style>
            .hh{
                position: fixed;

                right: 0;

                top: 0;

                width: 260px;

                text-decoration: none;
                color:#F336A6;
                font-weight: bold;

              }
        </style>
        
    </head>
    
    <body>
        
         <div class="container">
            <form method="POST" action="">
                <h1>User details for adoption process</h1>
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
                        <label for="exp">Experience</label>
                        <input type="text" placeholder="Experience in pet nurturing" name="exp" required>
                    </div>
                    <div class="input-box">
                        <label for="child">Number of children</label>
                        <input type="number" placeholder="number of children in your house" name="child" required>
                    </div>
                    <div class="input-box">
                        <label for="name">House</label>
                        <input type="text" placeholder="own house or rental house" name="house" required>
                    </div>
                    <div class="input-box">
                            <label for="name">Pet name</label>
                            <input type="text" placeholder="pet name" name="pname" required>
                    </div>
                    <div class="input-box">
                        <label for="name">Pet age</label>
                        <input type="text" placeholder="pet age" name="page" required>
                    </div>
                    
                    
                </div>
                
                
                    
               
    
                <div class="button-container">
                    <input type="submit" name="insbtn" value="Submit" >
                </div>
            </form>
            
            <?php
                include 'insuser.php';
            ?>
            
         </div>
         
    </body>
</html>