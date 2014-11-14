<?php
include 'config.php';
$id=$_GET['id'];
$sql_u="SELECT * FROM student WHERE id=$id";
$query_u=  mysqli_query($con,$sql_u);
$row_u=mysqli_fetch_array($query_u);
?>
<html>
    <body>
        <form action="submit.php" name="update_form" method="post">
            <table align="center">
                <caption><center> Student Info Update Form</center>
                </caption>
                <tr><th>Name:</th>
                    <td> <input type="text" name="name" value="<?php echo $row_u['name'];?>"></td>
                </tr>
                
            </table>
            
        </form>
    </body>
</html>