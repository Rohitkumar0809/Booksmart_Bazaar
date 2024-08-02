<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = 'location:login.php';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmart Bazaar - about page </title>
    <link rel="stylesheet" href="css/user_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>

</head>

<body>
    <!-- navbar -->
    <?php include 'components/user_header.php'; ?>
    <!-- navbar -->

    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Reading is important. If you know how to read, <br> then the whole world opens up to you.</p>
            <span><a href="home.php">home</a><i class="fa-solid fa-arrow-right"></i>about us</span>
        </div>
    </div>
    <div class="chef">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>Rohit kumar</span>
                    <h1>Owner</h1>
                    <img src="Picture/sp.png">
                </div>
                <p>An Booksmart Bazaar is responsible for the seles of a variety of books , comics , biography , and other related bokks. This role involves experimenting with deals, services, and updation to sale best quelity books, innovative, and writer products. The Bookssmart Bazaar ensures that all products meet the company’s standards for quality, deals, and presentation.</p>
                <div class="flex-btn">
                    <a href="menu.php" class="btn">explore our menu</a>
                    <a href="menu.php" class="btn">visit our shop</a>
                </div>
            </div>
            <div class="box">
                <img src="Picture/owner.png" class="img">
            </div>
        </div>
    </div>

    <!-- chef section start -->

    <div class="story">
        <div class="heading">
            <h1>our story</h1>
            <img src="Picture/sp.png">
        </div>
        <p>Day and night, Maya painted with fervor,each stroke infused with her unwavering belief <br> in the power of art to inspire change.As her painting took shape, <br> so did her resolve to overcome adversity. She immersed herself in the local art community, <br> seeking mentorship from seasoned artists  who encouraged her to pursue her vision fearlessly.</p>
        <a href="menu.php" class="btn">our services</a>
    </div>
    <div class="container">
        <div class="box-container">
            <div class="img-box">
                <img src="Picture/about-man2.png">
            </div>
            <div class="box">
                <div class="heading">
                    <h1>Reading A Book To New Heights</h1>
                    <img src="Picture/sp.png">
                </div>
                <p>A book lying idle on a shelf is wasted ammunition. Like money, books must be kept in constant circulation... A book is not only a friend, it makes friends for you. When you have possessed a book with mind and spirit, you are enriched. But when you pass it on, you are enriched threefold.</p>
                <a href="" class="btn">learn more</a>
            </div>
        </div>
    </div>
    <!-- story section end -->


    <!-- team section start -->

    <div class="team">
        <div class="heading">
            <span>our team</span>
            <h1>Quality & passive with our services</h1>
            <img src="Picture/sp.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="Picture/lily-team.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Martine</h2>
                    <p>Software Developer</p>
                </div>
            </div>
            <div class="box">
                <img src="Picture/man-team1.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Abhay Singh</h2>
                    <p>Database Manager</p>
                </div>
            </div>
            <div class="box">
                <img src="Picture/man-team2.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Piyush Singh</h2>
                    <p>Backend Developer</p>
                </div>
            </div>
        </div>
    </div>

    <!-- team section end -->

    <!-- standers section start -->

    <div class="standers">
        <div class="detail">
            <div class="heading">
                <h1>our standers</h1>
                <img src="Picture/sp.png">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
        </div>
    </div>

    <!-- standers section end -->


    <!-- mission section start -->

    <div class="mission">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <h1>our mission</h1>
                    <img src="Picture/sp.png">
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="Picture/mission.jpg">
                    </div>
                    <div>
                        <h2>Biology Book</h2>
                        <p>Layers od shaped marshmallow candies -- bunnies, chicks, and simple flower --
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="Picture/b2.jpg">
                    </div>
                    <div>
                        <h2>Story telling book</h2>
                        <p>Layers od shaped marshmallow candies -- bunnies, chicks, and simple flower --
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="Picture/b3.jpg">
                    </div>
                    <div>
                        <h2>Comics books</h2>
                        <p>Layers od shaped marshmallow candies -- bunnies, chicks, and simple flower --
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="Picture/b4.jpg">
                    </div>
                    <div>
                        <h2>Mathmatics</h2>
                        <p>Layers od shaped marshmallow candies -- bunnies, chicks, and simple flower --
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="Picture/about-man2.png" class="img">
            </div>
        </div>
    </div>

    <!-- mission section end -->

    <!-- footer -->

    <?php
    include 'components/footer.php';
    ?>

    <!-- footer -->

    <!--jquery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--sweetalert cdn link--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link--->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>

    <!--jquery link--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>