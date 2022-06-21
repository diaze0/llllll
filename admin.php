<?php
include('database.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
</head>
<body>

    <form method="post">
        <table class="table">
          <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NOM</th>
                <th scope="col">ADRESS</th>
                <th scope="col">CONTACT</th>
                <th scope="col">MESSAGE</th>
                <th>delet</th>
                </tr>
          </thead>
          <tbody>
              <tr>
    <?php
       if(isset($_GET['ID_delete'])){
        $id = $_GET["ID_delete"];
        $delete = "DELETE FROM `users` WHERE `S.no`=$id";
        $resultdelet = mysqli_query($conn,$delete);
     if ($resultdelet) {
      echo "
       $id deleted";
     }
    }
                   $sql= "SELECT * FROM `users`";
                $result=mysqli_query($conn,$sql);

        foreach ($result as $row){
?>
      <td><?php echo $row['S.no'];?></td>
      <td><?php echo $row['Email'];?></td>
      <td><?php echo $row['Username'];?></td>
      <td><?php echo $row['Address'];?></td>
      <td><?php echo $row['Contact'];?></td>
      <td><?php echo $row['Message'];?></td>
      <td><form action="admin.php" method="POST">
      <input type="hidden" name="name" value="">
                      <a   href="admin.php?ID_delete=<?php echo $row["S.no"]; ?>"onClick="return confirm('Are you sure you want to delete?')"> <i class="bx bx-trash icon 2x btn" style="font-size:20px;"></i></a>
      </form></td>
    </tr>
    <?php } ?>
    </tbody>
   </table> 
       </form>

</body>  
</html>
