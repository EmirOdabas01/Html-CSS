<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAT</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    
    <div class="container" style="text-align: center; margin-top: 2vw; margin-bottom:2vw;">
        <h1>
            Welcome to Our Gym <br>
            <?php
     require_once "createdb.php";
    require_once "createtb.php";

     ?>
        </h1>

    </div>
    <picture class="container-fluid px-0 position-relative d-block d-flex justify-content-center"
        style="height:49vw; margin-bottom: 0;">
        <img class="img-fluid position-absolute" style="height: 48vw;"
            src="https://images.pond5.com/attractive-girl-running-treadmill-gym-footage-087122044_prevstill.jpeg"
            alt="">
    </picture>
    <div style="min-height: 20vw; min-width: none; text-align: center;">
        <h1 style="font-size: 30px; text-shadow: 5px 5px chocolate; color: white;"> EVERYTHING YOU ARE <br> LOOKING FOR
            <br> ABOUT WELL-BEING AND SPORTS <br>IS HERE!
        </h1>
        <p style="font-size: 15px; font-family: monospace;">
            Take your sports experience to the next level with innovative technologies and trendy sports equipment! <br>
            Train with expert trainers and achieve top-level performance. <br>
            Mars Athletic is always with you for the healthy and fit life of your dreams,<br> in a club environment or
            outdoors.
        </p>
    </div>
    <div class="col-6 text-center">  <h1 style="padding-left: 10px;"> <strong>Clean and Safety</strong></h1></div>
    <div class="container " style="height: auto;">
        <hr>
        <div class="row">
            <div class="col-6"><img src="https://www.eronservices.co.uk/uploads/pages/1671515015.jpg"
                    style="height: 25vw;" alt=""></div>
            <div class="col-6">
                <p style="font-family: cursive;">
                    Clean Living Hub: Your Gateway to a Healthy Lifestyle!
                    At our fitness center, your health and comfort are always our top priorities. We're here to provide
                    you with a workout experience in an environment that adheres to the highest cleanliness and hygiene
                    standards. In our modern facility, every nook and cranny is meticulously cleaned and disinfected.
                    <br>
                    <br>
                    Our experienced cleaning team conducts daily inspections, ensuring that gym equipment and the entire
                    facility are sterilized and cleaned. Our ventilation system is optimized to provide a constant flow
                    of fresh air. Shower areas and changing rooms undergo regular, thorough cleanings.
                    <br>
                    <br>
                    We take pride in welcoming you to a healthy and hygienic environment. As Clean Living Hub, we offer
                    you the opportunity to engage in physical activities in a clean setting. Remember, a clean workout
                    space is essential for a healthy lifestyle! Join us now and let's enjoy the benefits of a clean and
                    healthy life together!
                </p>
            </div>
        </div>
        <hr>
        <div class="col-6 text-center">  <h1 style="padding-left: 10px;"> <strong>New Equipments</strong></h1></div>
        <br>
        <div class="row">
            <div class="col-6"><img src="https://sparkmembership.com/wp-content/uploads/2022/08/gym-equipments-1.png"
                    style="height: 32vw; width: 38vw;" alt=""></div>
            <div class="col-6">
                <p style="font-family: cursive;">
                    Embark on a fitness journey like never before at our gym, where the cornerstone of your success lies
                    in our cutting-edge equipment. We pride ourselves on offering an extensive array of state-of-the-art
                    machines that cater to a diverse range of fitness needs.
                    <br>
                    <br>
                    Experience the future of cardiovascular workouts with our technologically advanced machines,
                    ensuring not only effectiveness but also an enjoyable exercise session. Our strength training
                    section is thoughtfully curated to accommodate everyone, from beginners to seasoned fitness
                    enthusiasts, targeting specific muscle groups for a comprehensive and balanced approach to strength
                    building.
                    <br>
                    <br>
                    Dive into the world of functional training in our dedicated area, complete with versatile gear that
                    opens the door to dynamic and engaging workouts. From meticulously maintained free weights to
                    precision-engineered resistance machines, each piece of equipment guarantees a smooth and secure
                    environment. Join us on this transformative fitness journey, where our exceptional equipment becomes
                    your partner in achieving health and wellness goals. Your path to a healthier, stronger you starts
                    right here!"
                </p>
            </div>
            
        </div>
        <hr>
    
    </div>
    <footer class="container-fluid bg-dark py-5" style="height: 450px; " >
        <h3 class="text-white text-center"> Follow us</h3>
        <nav class="row text-center my-5">
            <div class="col"> <a href=""><img src="https://cdn.supercell.com/supercell.com/220613070047/all/themes/supercell/img/18/some_youtube.png" alt=""></a></div>
            <div class="col"> <a href=""><img src="https://cdn.supercell.com/supercell.com/220613070047/all/themes/supercell/img/18/some_facebook.png" alt=""></a></div>
            <div class="col"> <a href=""><img src="https://cdn.supercell.com/supercell.com/220613070047/all/themes/supercell/img/18/some_instagram.png" alt=""></a></div>
            <div class="col"> <a href=""><img src="https://cdn.supercell.com/supercell.com/220613070047/all/themes/supercell/img/18/some_twitter.png" alt=""></a></div>
            <div class="col"> <a href=""><img src="https://cdn.supercell.com/supercell.com/220613070047/all/themes/supercell/img/18/some_linkedin.png" alt=""></a></div>
        </nav>  
        <ul class="text-white mx-5 p-5">
            <li><a class="navitem" href="aboutus.html">About Us</a></li>
            <li><a  class="navitem" href="contact.html">Contact Us</a></li>
            <li><a  class="navitem" href="register.php">Registration</a></li>
            <li><a class="navitem"  href="login.php">Login</a></li>
            <li>Emir Odabaş B2205.010164</li>
        </ul>
    </footer>
</body>

</html>