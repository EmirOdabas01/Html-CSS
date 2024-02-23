<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAT</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
        
</head>

<body>
   
    <header class="header">
        <a href="" class="logo"> <img src="https://thumbs.dreamstime.com/b/illustration-gym-rat-dumbbell-138725342.jpg"
                class="lgpctr" alt="">RAT</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="aboutus.html">About Us</a>
            <a href="contact.html">Contact</a>
            <a href="register.php">Registration</a>
            <a href="login.php">Log in</a>
        </nav>
    </header>
    <div class="container">
        <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">DateofBirth</th>
      <th scope="col">Gender</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $sql = "SELECT * FROM records ";
    $final = mysqli_query($link, $sql);
    while($row = mysqli_fetch_assoc($final))
    {
        ?>
          <tr>
      <th> <?php echo $row['id']?></th>
      <th> <?php echo $row['first_name']?></th>
      <th> <?php echo $row['email']?></th>
      <th> <?php echo $row['phone']?></th>
      <th> <?php echo $row['dateofbirth']?></th>
      <th> <?php echo $row['gender']?></th>
      <th> <?php echo $row['messagee']?></th>
      <td>
        <a href="update.php?id=<?php echo $row['id']?>" class="link-dark"> <i class="fas fa-pen-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class="fas fa-trash fs-5 me-3"></i></a>
      </td>
    </tr>
        <?php
    }
    ?>
  
    
  </tbody>
</table>
<a href="index.php" class="btn btn-dark mb-3">log off</a>
    </div>
    
</body>

</html>