<?php                
include 'config.php';
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$lschool=$_POST['lschool'];
$class= $_POST['pclass'];
$per=$_POST['per'];
$pnumber=$_POST['pnumber'];
$mnumber=$_POST['mnumber'];
$email=$_POST['email'];
$address=$_POST['address'];
$pin=$_POST['pin'];

$add="INSERT INTO student (name,fname, mname,dob,lschool,pclass,percetange,pnumber, mnumber, address, pincode,email) VALUES ('$name', '$fname', '$mname', '$dob','$lschool','$class','$per','$pnumber', '$mnumber','$address','$pin','$email')";
$query=mysqli_query($con,$add);
?>
<style>
    table{
        border: 2px blue;
        border-collapse: collapse;
        border-style: dotted;
        
        
        
    }
    th td{
        padding: 10px;
        column-span: "10";
    }
    body{
        margin: 60px;
    }
    tr{
        max-width: 43px;
    }   
</style>
<form name="insert" method="post" action="list.php">
    <table align="center"> 
        <tr>
            <th><input type=button name="info" onclick="location.href='list.php';" value="Student-Info"></th>
            <td></td>
            <th><input type="button" name="add" onclick="location.href='added_record.php';" value="Add-Info"></th>
        </tr>
        
    </table>
    
</form>
