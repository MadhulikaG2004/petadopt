
<!DOCTYPE html>
<html>
    <head>
        <title>insert data</title>
       
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <style>
            a{
                color:#F336A6;
                font-size: 16px;
                font-weight: bold;
                position: fixed;

                right: 0;

                top: 0;

                width: 260px;

                text-decoration: none;
                

              
            }
            
        </style>
       
    </head>
    <body>
        
          <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2>Add data</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="locid">Location id</label>
                        <input type="number" name="locid" placeholder="locationid" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="name">Name</label>
                
                        <input type="text" name="name" placeholder="name" required>
                    </div>
                    <div class="input-box">
                        <label for="age">Age</label>
                        <input type="integer" name="age" placeholder="age" required>
                    </div>
                    <div class="input-box">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" placeholder="gender" required>
                    </div>
                    <div class="input-box">
                        <label for="petimg">Pet Image</label>
                        <input type="file" name="petimg" placeholder="petimg" required>
                    </div>
                    <div class="input-box">
                        <label for="descrip">Description</label>
                        <input type="text" name="descrip" placeholder="description" required></input><br>
                    </div>
                    <div class="input-box">
                        <label for="petc">Pet Category</label>
                        <input type="text" name="petc" placeholder="pet category" required>
                    </div>
                </div>
                <div class="button-container">
                    <input type="submit" name="insert_btn" value="Insert">
                </div>
            </form>
            
          </div>
        </div>
        <a href="index.php">Logout</a>
            <?php include 'ins1.php';
            ?>
        
       
    </body>
</html>
