<?php
include 'config.php';
?>
<html>
    <body>
    <head></head>
    <form name="add_record" action="insert_info.php" method="post">
    <table align="center">
        <caption style="color: gold"><center><b>ADD-INFORMATION-FORM</td></center></caption>
        <style>
            table, th, td{
                border: 1px solid green;
                border-collapse: collapse;
                border-left-style: dashed;
                border-right-style: dashed;
                border-top-style: solid;
                border-bottom-style: solid;
                border-left-color: red;
                border-right-color: red;
                //border-left-width: 2px;
                //border-right-width: 2px;
                border-width: 2px;
                
                
            }
            th, td{
                padding: 10px;
                text-align: left;
                color: white;
            }
            body
            {
                margin: 45px;
                padding-top: 20px;
                background-image: url("test.jpg");
            }
        </style>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Father Name:</th>
            <td><input type="text" name="fname"</td>
        </tr>
        <tr>
            <th>Mother Name:</th>
            <td><input type="text" name="mname"></td>
        </tr>
        <tr>
            <th>
                Birth-Date:
            </th>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <th>Last School:</th>
            <td><input type="text" name="lschool"></td>
        </tr>
        <tr>
            <th>Passed Class:</th>
            <td><input type="text" name="pclass"></td>
        </tr>
        <tr>
            <th>Percentage:</th>
            <td><input type="number" name="per"</td>
            
        </tr>
        <tr>
            <th>Phone:</th>
            <td><input type="number" name="pnumber"></td>
            
        </tr>
        <tr>
            <th>
                Mobile:
            </th>
            <td><input type="number" name="mnumber">
            </td>
        </tr>
        <tr>
            <th>
                Email:
            </th>
            <td>
                <input type="email" name="email">
            </td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>
                <input type="text" name="address">
            </td>
          
        </tr>
        <tr>
            <th>
                Pincode:
                
            </th>
            <td>
                <input type="number" name="pin">
            </td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" value="Add-Record"></center></td>
        </tr>
    </table>
</form>
</body>
</html>

