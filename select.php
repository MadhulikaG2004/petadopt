<?php
include 'connn.php';
$id=$_GET['id'];
$select="select * from userdetails where pname='$id'";
$select_q=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($select_q);
$delete="delete from insdata where name='$id'";
$delete_q=mysqli_query($conn,$delete);
?>
<html>
    <head>
        <title>User details</title>
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
                  display:flex;
                  align-items: center;
                  background-color:#F33A6A;
                  justify-content: center;
                  height:100vh;
              }
              .container{
                  max-width:650px;
                  padding:28px;
                  margin:0 28px;
                  box-shadow: 0 15px 20px #ABB2B9;
                  background-color: yellow;
              }
              h1{
                  font-size: 26px;
                  font-weight:  600;
                  text-align:center;
                  color:black;
                  padding-bottom:8px;
                  border-bottom: 1px solid black;
              }
              .content{
                  display:flex;
                  flex-wrap:wrap;
                  justify-content: space-between;
                  padding: 20px 0;
                  
              }
              p{
                font-size: medium;
                font-weight: bold;
              }
              .hh{
                position: fixed;

                right: 0;

                top: 0;

                width: 260px;

                text-decoration: none;
                color:yellow;
                font-weight: bold;

              }

        </style>
    </head>
    
    <body>
      
        <div class="container">
          <h1>Report</h1>
          <div class="content">
            <p><?php echo "Name:".$fetch['name']?></p>
          </div>
          <div class="content">
            <p><?php echo "Age:".$fetch['age']?></p>
          </div>
          <div class="content">
            <p><?php echo "Address:".$fetch['address']?></p>
          </div>
          <div class="content">
            <p><?php echo "Contact :".$fetch['num']?></p>
          </div><div class="content">
            <p><?php echo "Pet name:".$fetch['pname']?></p>
          </div>
          <div class="content">
            <p><?php echo "Pet age:".$fetch['page']?></p>
          </div>
          <div class="content">
            <p style="color:green;font-weight:bold;"><?php echo "Adopted successfully!"?></p><br>
            <p style="color:green;font-weight:bold;"><?php echo "For further details contact us."?></p>
          </div>
        </div>
      
        <a href="index.php" class="hh">Home</a>
    </<body>
