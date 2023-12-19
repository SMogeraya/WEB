<?php
echo "hii";
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,tr{
          border:2px solid black;
        }
        </style>

</head>
<body>
    <table>
        <tr >
        <th>Email</th>
        <th>Pass</th>
            <th>Name</th>
            
            <th>Phone</th>
            
            <th>EDit</th>
        </tr>
        <?php
    $query="select * from admindb";
    $res=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($res)){
    echo"
    <tr>
    <td>{$row['Email']}</td>
    <td>{$row['Password']}</td>
    <td>{$row['Name']}</td>
    <td>{$row['Phone']}</td>
    <td><a href=\"edit.php?id={$row['Phone']}\" name='edit'><button>Edit</button></a>
    <a href=\"delete.php?id={$row['Phone']}\" name='delete'><button>Delete</button></a>
    </td>
    </tr>
    ";
   } ?>

        

</table>
</body>
</html>