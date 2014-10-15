<?php
include 'config.php';

$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$lschool=$_POST['lschool'];
$pclass=$_POST['pclass'];
$per=$_POST['per'];
     
$pnumber=$_POST['pnumber'];
$mnumber=$_POST['mnumber'];
$address=$_POST['address'];
$pin=$_POST['pincode'];

if (!isset($_post['submit']))
{
    
    if(mysqli_connect_error())
    {
        echo 'Failed to connect to database' . mysqli_connect_error();
    }
    else
    {
    $sql= "INSERT INTO student" ."(name, fname, mname, dob, lschool, pclass , percentage, phonenumber, mobilenumber, address, pincode )". "VALUES ('$name','$fname', '$mname','$dob','$lschool','$pclass','$per','$pnumber','$mnumber','$address','$pin' )";
    if(!mysqli_query($con, $sql))
    {
        die('error.'.mysqli_error($con));
    }
    echo 'record has been added';
}

}
?>