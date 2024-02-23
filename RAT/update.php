<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAT</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
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
    <div class="container mycontainer">
        <?php
        if(isset($_POST["submit"])) 
        {  $id = $_GET['id'];
            $errors = array();
            $fullName = $_POST["Name"];
            $email = $_POST["E-mail"];
            $date = $_POST["DateofBirth"];
            $number = $_POST["PhoneNumber"];
            $message = $_POST["Message"];
            if(!isset($_POST['Gender'])){ 
                array_push($errors,"No radio buttons were checked."); 
            } 
            else {
                $gender = $_POST["Gender"];
            }
            $flag = 1;
            if(empty($fullName) OR empty($email) OR empty($date) OR empty($number) OR empty($message) OR empty($gender))
            {
                array_push($errors, "All fields are required");
            }
            if( !empty($email) and !filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                array_push($errors, "e-mail is not valid");
            }
            if(strlen($number) < 10  AND !empty($number))
            {
                array_push($errors, "Number is too short");
            }
            if(!empty($number) AND $number[0] != '0')
            {
                array_push($errors, "Number must start with zero");
            }
            if(count($errors) > 0 )
            {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger form-group'>$error</div>";
                }
            }
            else {
                include "connection.php";
               $id = $_GET['id'];
                    
               $sql = "UPDATE 'records' SET 'first_name' = '$fullName','email' = '$email' ,'dateofbirth' =  '$date', 'phone' =  '$number',
               'messagee' =  '$message', 'gender' =  '$gender' WHERE 'id'='$id'";
               
                mysqli_query($link, $sql);
                mysqli_close($link);
             echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Your transaction was completed successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

            }
        }  
        
        ?>
        <?php
        include "connection.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM records WHERE id = $id LIMIT 1";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="Name" value="<?php echo $row['first_name'] ?> ">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="E-mail" value="<?php echo $row['email'] ?> ">
            </div>
            <div class="form-group">
                <label for="date">Date of Birth</label>
                <input type="date" class="form-control" name="DateofBirth" value="<?php echo $row['dateofbirth'] ?> ">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="PhoneNumber" value="<?php echo $row['phone'] ?> " pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
            </div>

            <div class="form-group">
                <label for="Message">Personal Message</label>
              <textarea name="Message" id="Message" cols="35" rows="6" value="<?php echo $row['messagee'] ?> "></textarea>
            </div>
            <div class="form-radio">
                 <input type="radio" id="Male" name="Gender"  value="Male" <?php echo ($row['gender']=='Male')?"checked":"";?>>
             <label for="Male">Male</label><br>
             <input type="radio" id="Female" name="Gender" value="Female"<?php echo ($row['gender']=='Female')?"checked":"";?>>
             <label for="Female">Female</label><br>
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" name="submit">
            </div>
        </form>
    </div>
   

</body>
</html>