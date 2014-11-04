<?php
include 'config.php';
$i=0;
$list="SELECT * FROM student";
$res=mysqli_query($con,$list); ?>
<style>
    body{
        background-image: url("test1.jpg");
        margin: 45px;
    }
    
</style>

<body>
<table align="center" >
    <p id="date"></p>
    <button type="button" onclick="document.getElementById('date').innerHTML=Date()"></button>
<caption style="color: red">
    <center> STUDENT INFORMATION</center>
</caption>
    <tr><td id="radd" onclick="redirect()" colspan="2">ADD</td></tr>
    <script>
        //var adds=document.getElementById('radd');
        function redirect()
        {
            document.getElementById("radd").innerHTML=window.location.assign("added_record.php")
        }
        
       
    </script>
    <tr>
        <td>S.No</td>
        <td id="asort" onclick="alsort()">Name</td>
        <td>Father Name</td>
        <td>Mother Name</td>
        <td>Last School</td>
        <td>Percentage</td>
        <td>Phone-Number</td>
        <td>Mobile-number</td>
        <td>Edit/delete</td>
    </tr>
<?php
while($row=mysqli_fetch_array($res)) :?>

    <tr>
    <style>
        table, th, td {
            border: 2px turquoise;
            border-collapse: collapse;
            border-top-style: dotted;
            border-right-style: solid;
            border-left-style: solid;
            border-bottom-style: dotted;
            
        }
        th, td {
            padding: 10px;
        }
       
        </style>
             <td><?php
             echo $i;
             $i++;?></td>
             <td><?php echo $row['name'];?></td>
             <td><?php echo $row['fname'];?></td>
             <td><?php echo $row['mname'];?></td>
             <td><?php echo $row['lschool'];?></td>
             <td><?php echo $row['percetange'];?></td>
             <td><?php echo $row['pnumber'];?></td>
             <td><?php echo $row['mnumber'];?></td>
             <td><a href="student_edit.php?id=<?php echo $row['id'];?>">X</a></td>
             </tr>
<?php         endwhile;?>
</body>
