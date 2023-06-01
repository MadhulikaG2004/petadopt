<html>
    <head>
        <style>
             .mess{
            position: fixed;
            top: 10px;
            left: 600px;
            width: 200px;
          
            justify-content: center;
            }
            .alert {
                padding: 20px;
                margin: 0 auto;
                
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
</html>
<?php
    error_reporting(E_ERROR | E_PARSE); 
    include 'connn.php';
    if(isset($_POST['insert_btn']))
    {   
        $loc=$_POST['locid'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gen=$_POST['gender'];
        $image=$_FILES['petimg']['name'];
        $tmp_name=$_FILES['petimg']['tmp_name'];
        $destination="images/".$image;
        move_uploaded_file($tmp_name,$destination);
        $descrip=$_POST['descrip'];
        $petc=$_POST['petc'];
        $insert="insert into insdata(locid,name,age,gender,petimg,descrip,petc) values('$loc','$name','$age','$gen','$image','$descrip','$petc')";
        $insert_q=mysqli_query($conn,$insert);
        if($insert_q)
        {
?>
            <div class="mess">
                <div class="alert" style="background-color: green;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Data inserted successfully!</strong> 
                </div>
            </div>
 <?php          
        }
        
        else{
           
?>
             <div class="mess">
                <div class="alert" style="background-color: #f44336;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Data is not inserted successfully!</strong> 
                </div>
            </div>
<?php

        }
    }
?>