<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  .cont{
    border:2px solid black;
    width: 40%;
    display: flex;
    margin: auto;
    margin-top: 200px;
    padding: 20px;
  }
   </style>

</head>

<body>

<table>
        <tr>
            <th>
           Name
            </th>  
            <th>
           Password
            </th>
            <th>
           Phone
            </th>
            <th>
           Email
            </th> 
            <th>
                EDit</th>   
        </tr>

<?php
include("conn.php");

$sqli="SELECT * FROM admindb";
$res=mysqli_query($con,$sqli);
while($row=mysqli_fetch_array($res))
{
    echo "
    <tr>
    <td>{$row['Name']}</td>
    <td>{$row['Password']}</td>
    <td>{$row['Phone']}</td>
    <td>{$row['Email']}</td>
    <td><a href=\"delete1.php?id={$row['Phone']}\" name=\"delete\"><button>Delete</button></a></td>
    <td><a href=\"edit2.php?id={$row['Phone']}\" name=\"edit\"><button>edit</button></a></td>
    </tr>
    
    ";
}
?>
        
    </table>
</body>
</html>