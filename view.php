<html>
    <head>
        <style>
            body{
                background-color: yellow;

            }
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
        <a href="index.php" class="hh">Logout</a>
    </body>
</html>
<?php
include 'connn.php';
$select="select * from insdata";
$select_q=mysqli_query($conn,$select);
$data=mysqli_num_rows($select_q);
?>
<table border="1px" cellspacing="0" cellpadding="10px">
    <tr>
        <th>location id</th>
        <th>name</th>
        <th>age</th>
        <th>gender</th>
        <th>pet img</th>
        <th>description</th>
        <th>pet category</th>
        <th colspan="2">operations</th>
    </tr>
<?php
if($data)
{
    while($row=mysqli_fetch_array($select_q))
    {
        ?>
        <tr>
            <td><?php echo $row['locid']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['age']?></td>
            <td><?php echo $row['gender']?></td>
            <td><img src="images/<?php echo $row['petimg']?>" width="80px"></td>
            <td><?php echo $row['descrip']?></td>
            <td><?php echo $row['petc']?></td>
            <td><a href="edit.php?id=<?php echo $row['petid']?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['petid']?>">Delete</a></td>
        </tr>
<?php
    }
}
else
{
    ?>
    <div class="mess">
                <div class="alert" style="background-color: green;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>No record found</strong> 
                </div>
    </div>
    <?php
}
?>
</table>

