<html>
    <head>
        <title>Adopt</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }
            body{
                display: inline-block;
                align-items: center;
                background-COLOR:yellow;
                justify-content: center;
                height:100vh;
            }
            .container{
                max-width:650px;
                padding:28px;
                margin:10px 28px;
                box-shadow: 0 15px 20px #ABB2B9;
                background-color: white;
            }
            h2{
                font-size: 26px;
                font-weight:  600;
                text-align:left;
                color:#2f4f4f;
                padding-bottom:8px;
                border-bottom: 1px solid silver;
            }
            .content{
                display:flex;
                flex-wrap:wrap;
                justify-content: space-between;
                padding: 20px 0;
            }
            .input-box{
                display: flex;
                flex-wrap: wrap;
                width:50%;
                padding-bottom:15px;
            }
            .input-box:nth-child(2n){
                justify-content:end;
            }
            .input-box label{
                width:95%;
                color:#2f4f4f;
                font-weight:bold;
                margin:5px 0;
            }
            .input-box input{
                height:40px;
                width:95%;
                padding:0 10px;
                border-radius: 5px;
                border:1px solid #ccc;
                outline:none;
            }
            .input-box input:is(:focus,:valid){
                box-shadow: 0 3px 6px rgba(0,0,0,0.2);
            }
            .button-container{
                margin: 15px 0;
            }
            .button-container input{
                width:100%;
                margin-top: 10px;
                padding:10px;
                display: block;
                font-size: 20px;
                color:#fff;
                border:none;
                border-radius:5px;
                background-color: #F33A6A;
            }
            .button-container input:hover{
                background-color: #f8bece;

            }
            @media(max-width:600px)
            {
                .container{
                    min-width:280px;
                }
                .content{
                    max-height:380px;
                    overflow:auto;
                }
                .input-box{
                    margin-bottom: 12px;
                    width:100%;
                }
                .input-box:nth-child(2n){
                    justify-content: space-between;
                }
                .cards{
                    min-width: 250px;
                }
                .desc{
                    min-width: 200px;
                }
            }
            .cards{
  
            width: 30%;
            
            margin:20px;
            display: inline-block;
            background-color:white;
            }
            .imag img{
            width: 100%;
            
            }
            .desc{
            text-align: center;
          
            }
            #ss{
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: black;
            padding: 5px;
            border-radius: 5px;
            color:white;
            }
            .hh{
                position: fixed;

                right: 0;

                top: 0;

                width: 260px;

                text-decoration: none;
                color:#F33A6A;
                font-weight: bold;

            }

    
        </style>
        

    </head>
    
    <body>
       
        <div class="container">
        <h2>Adopt Pet</h2>
            <form method="POST" action="">
            <div class="content">
                <div class="input-box">
                    <p>Select gender</p>
                    <select name="gender">
                        <option value="">Select option</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="input-box">
                    <p>Select category</p>
                    <select name="petcategory">
                        <option value="">Select option</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                    </select>
                </div>
                <div class="button-container">
                    <input type="submit" name="search" value="search">
                </div>
            </form><br><br>
            </div>
        </div>
            <?php
            error_reporting(E_ERROR | E_PARSE); 
            include 'connn.php';
                if(isset($_POST['search']))
                {
                    $gen=$_POST['gender'];
                    $petc=$_POST['petcategory'];
                    
                }
                $select="select * from insdata where gender='$gen' and petc='$petc'";
                $select_q=mysqli_query($conn,$select);
                $data=mysqli_num_rows($select_q);
                if($data)
                {
                    while($row=mysqli_fetch_array($select_q))
                    {
                        ?>
                        <div class="cards">
                            <div class="imag">
                                    <img src="images/<?php echo $row['petimg']?>">
                            </div>
                            <div class="desc">
                                <h3 style="font-family: serif;"><?php echo "name:".$row['name']?></h3><br>
                                <h3 style="font-family: serif;"><?php echo "age:".$row['age']?></h3><br>
                                <h3 style="font-family: serif;"><?php echo "gender:".$row['gender']?></h3><br>
                                <h3 style="font-family: serif;"><?php echo "description:".$row['descrip']?></h3>
                                <a href="form.php"><input type="button" id="ss" value="adopt"></a>
                                
                                
                            </div>
                
                        </div>
                        <?php
                    }
                    
                }
            ?>
           
            <a href="index.php" class="hh">Home</a>
                        
        
      
    </body>
</html>