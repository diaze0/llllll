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
    
</head>
<body>
    
    <form method="post">
    <div class="container">
<div class="card text-center">
  
  <div class="card-body">
    <h5 class="card-title">ADMIN

</h5>
<div class="mb-3">
    
    <input type="text" name="nom"  class="form-control"  placeholder="Username*">
    
  </div>
  <div class="mb-3">
   
    <input type="password" name="passwrd" class="form-control"  placeholder="Mot de passe*">
  </div>
  

  <?php if(isset($_POST['login']))
  {
    
    $username=$_POST['nom'];
    $password=$_POST['passwrd'];
    $query=mysqli_query($conn,"SELECT nom, passwrd FROM admine WHERE (nom='$username' AND passwrd='$password' )");
    $result=mysqli_fetch_array($query);
    if($result>0){

// $_SESSION['s_admin']=$result['ID'];
// $_SESSION['S_nom']=$result['nom'];
   
header('location:admin.php');
     
    
    }
    else{
   echo "<script>alert('Détails Invalides');</script>";
    }
   }
     
?>
  <button type="submit" name="login" class="btn">Se connecter</a></button>
 
  </div>

</div>
</div>
</form>
</body>
</html>