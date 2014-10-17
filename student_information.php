<?php 
include 'config.php';
$sql="SELECT name,fname,mname,lschool,percetange FROM student WHERE id=1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
echo $row[0];

                                              
?>
<html>
    <head></head>
    <title>Student-Information</title>
    <body>
        <p align="center"><font size="6" color="red">Student Information</font></p>
        <table border="2">
            <tr>
                <td>S.NO:</td>
                <td colspan="4">Name</td>
                <td colspan="4">Father Name</td>
                <td colspan="4">Mather Name</td>
                <td colspan="4">Last school</td>
                <td colspan="4">Percentage</td>
            </tr>
            <tr>
                <td>1:</td>
                <td colspan="4"> <?php echo $row['0']; ?></td>
                <td colspan="4"> <?php echo $row['1']; ?></td>
                <td colspan="4"> <?php echo $row['2']; ?></td>
                <td colspan="4"> <?php echo $row['3']; ?></td>
                <td colspan="4"> <?php echo $row['4']; ?></td>
                
            </tr>
        </table>
    </body>
    
</html>