<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-color: yellow;
        background-attachment: fixed;
    }
    
    h1{
        text-align: center;
    }
    #bb{
        text-align: center;
        margin: 100px;
    }
    .b1{
     width: 150px;
     height: 50px;
     font-size: 15px;
     font-family: georgia;
    
    
     
     text-align: center;
     color:white;
     border-radius: 12px;
     background-color: #F33A6A;
     cursor:pointer;
     
    }
    #cc{
        display:block;
        margin: 150px;
        text-align: center;
    }
    .b2{
     width: 150px;
     height: 50px;
     font-size: 15px;
     font-family: georgia;
    
     color:white;
     border-radius: 12px;
     background-color: #F33A6A;
     cursor:pointer;
    }
    .hh{
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
   
    <h1>Admin Operations</h1>
    <div id="bb">
    <a href="insert.php"><button class="b1">Insert details</button></a>
    </div>
    <div id="cc">
    <a href="view.php"><button class="b2">Edit/delete details</button></a>
    </div>
    <a href="index.php" class="hh">Logout</a>
</body>
</html>