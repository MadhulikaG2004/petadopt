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
            a{
                color:#F336A6;
                text-decoration: none;
            }
        </style>
    </head>
</html>
<?php
error_reporting(E_ERROR | E_PARSE); 
include 'connn.php';
if(isset($_POST['insbtn']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $num=$_POST['num'];
    $address=$_POST['address'];
    $exp=$_POST['exp'];
    $child=$_POST['child'];
    $house=$_POST['house'];
    $pname=$_POST['pname'];
    $page=$_POST['page'];
    $insert="insert into userdetails(name,age,gender,num,address,exp,child,house,pname,page) values('$name','$age','$gender','$num','$address','$exp','$child','$house','$pname','$page')";
    $insert_q=mysqli_query($conn,$insert);
    if($insert_q)
    {
?>
        <div class="mess">
            <div class="alert" style="background-color: green;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Data submitted successfully!</strong> 
            </div>
        </div>
<?php          
    }
}
$select="select * from userdetails";
$select_q=mysqli_query($conn,$select);
$data=mysqli_num_rows($select_q);

if($data)
{
    while($row=mysqli_fetch_array($select_q))
    {
        

        if($name==$row['name'] && $num==$row['num'])
        {
           ?>
           
           <a href="select.php?id=<?php echo $row['pname'];?> ">Report</a>
           <?php



        }
    }
}
?>