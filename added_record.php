<html>
    <head></head>
    <title>School-Managment-system</title>
    <body bgcolor="red">
        
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

echo $name;
echo $fname;
echo $mname;
echo $dob;
echo $lschool;
echo $pclass;
echo $per;
echo $pnumber;
echo $mnumber;
echo $address;
echo $pin;

if(mysqli_connect_error())
    
{
echo 'failed to connect with database' . mysqli_connect_error();

}
$sql="INSERT INTO student"."(name,fname,mname,dob,lschool,pclass,percetange,pnumber,mnumber,address,pincode)"."VALUES('$name','$fname', '$mname', '$dob','$lschool','$pclass','$per','$pnumber','$mnumber','$address','$pin')";
if(!mysqli_query($con, $sql)) 
{
    die('error:'.mysqli_error($con));
    
}

else 
{
    echo '1 Record has been added';
    
    

}
?>
</body></html>