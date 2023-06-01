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
   
    $insert="insert into userreg(name,age,gender,phone,address,passs,uname) values('$name','$age','$gender','$num','$address','$exp','$child')";
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