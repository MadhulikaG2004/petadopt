<?php
include 'connn.php';
$id=$_GET['id'];
$select="select * from insdata where petid='$id'";
$select_q=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($select_q);

?>
<html>
    <head>
    <title>Edit Details</title>
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
                <h2>Edit data</h1>
                <div class="content">
                    <div class="input-box">
                        <label for="locid">Location Id</label>
                        <input type="number" name="locid" placeholder="locationid" value="<?php echo $fetch['locid']?>">
                    </div>
                    <div class="input-box">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="name" value="<?php echo $fetch['name']?>">
                    </div>
                    <div class="input-box">
                        <label for="age">Age</label>
                        <input type="integer" name="age" placeholder="age" value="<?php echo $fetch['age']?>">
                    </div>
                    <div class="input-box">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" placeholder="gender" value="<?php echo $fetch['gender']?>">
                    </div>
                    <div class="input-box">
                        <label for="petimg">Pet Image</label>
                        <input type="file" name="petimg" placeholder="petimg" >
                        <br>
                    
                        <img src="images/<?php echo $fetch['petimg']?>" width="70px">
                        <br>
                    </div>
                    <div class="input-box">
                        <label for="descrip">Description</label>
                        <input type="text" name="descrip" placeholder="description" value="<?php echo $fetch['descrip']?>"></input><br>
                    </div>
                    <div class="input-box">
                        <label for="petc">Pet Category</label>
                        <input type="text" name="petc" placeholder="pet category" value="<?php echo $fetch['petc']?>">
                    </div>
                </div>
                <div class="button-container">
                    <input type="submit" name="update_btn" value="Update">
                </div>
            </form>
            
          </div>
          <a href="index.php">Logout</a>
        
    </body>


</html>
<?php
    if(isset($_POST['update_btn'])){
        $loc=$_POST['locid'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gen=$_POST['gender'];
        $image=$_FILES['petimg']['name'];
        $tmp_name=$_FILES['petimg']['tmp_name'];
        $destination="images/".$image;
        $descrip=$_POST['descrip'];
        $petc=$_POST['petc'];
        if($image!="")
        {
            move_uploaded_file($tmp_name,$destination);
            $update="update insdata set locid='$loc',name='$name',age='$age',gender='$gen',petimg='$image',descrip='$descrip',petc='$petc' where petid='$id'";
            $update_q=mysqli_query($conn,$update);
            header('location:view.php');
        }
        else
        {
            $update="update insdata set locid='$loc',name='$name',age='$age',gender='$gen',descrip='$descrip',petc='$petc' where petid='$id'";
            $update_q=mysqli_query($conn,$update);
            header('location:view.php');
        }
    }
?>