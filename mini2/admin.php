<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
     body{
      background: #000;
      padding:20px;
    } 
    table{
      border:2px solid white;
    }
    </style>
  </head>

  <body>
   <div class="container">
   <a href="signupact.php"><button type="button" class="btn btn-info">Create New User</button></a>
    <table class="table table-hover table-dark table-striped-columns">
  <thead>
    <tr>
      <th>Email</th>
      <th >Password</th>
      <th >Name</th>
      <th >Phone Nnmber</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <hr>
  <tbody>
    <?php
     $sql="select * from regi";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res))
     {
        echo "<tr>" ;
        echo "    <td>{$row['Email']}</td>" ;
        echo "   <td>{$row['Password']}</td>" ;
        echo "    <td>{$row['Name']}</td>" ;
        echo "   <td>{$row['Phone']}</td>" ;
      
       
        // echo "   <td><a class='btn btn-success' name='edit' href='edit.php?id={$row[Email]}'>Edit</a>
        // <a class='btn btn-danger' name='delete' href='delete.php?id={$row[Name]}'>Delete</a></td>" ;
    
        // echo "</tr>";
        echo " <td> <a class=\"edit btn btn-success\" href=\"edit.php?id={$row['Phone']}\">Edit</a> </td>" ;
        echo "   <td> <a class=\"delete btn btn-danger\" href=\"delete.php?id={$row['Phone']}\">Delete</a> </td>" ;
    
        echo "</tr>";
    
      }

    ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>