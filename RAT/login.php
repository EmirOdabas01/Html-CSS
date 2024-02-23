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
        {
            $errors = array();
            $name = $_POST["Name"];
            $lastname = $_POST["LastName"];
            $password = $_POST["Password"];
            if(empty($name) OR empty($lastname) OR empty($password))
            {
                array_push($errors, "All fields are required");
            }
            if(strcmp($name,"emir"))
            {
                array_push($errors, "Last name or name is incorrect");
            }
            if(strcmp($lastname,"odabaş"))
            {
                array_push($errors, "Last name or name is incorrect");
            }
            if(strcmp($password,"1415"))
            {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger form-group'>$error</div>";
                }
            }
            else {
                $url = "records.php";
                header("Location: " . $url);
            }
        }  
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="LastName" placeholder="LastName">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </div>
        </form>
    </div>

</body>
</html>