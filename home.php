<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmart Bazaar - home page </title>
    <link rel="stylesheet" href="css/user_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <!-- Slider section start -->

    <div class="slider-container">
        <div class="silder">
            <div class="slideBox active">
                <div class="textBox">
                    <h1>If you don’t like to read, <br> you haven’t found the right book</h1>
                    <a href="menu.php" class="btn">Buy now</a>
                </div>
                <div class="imgBox">
                    <img src="picture/about-bg.jpg">
                </div>
            </div>
            <div class="slideBox">
                <div class="textBox">
                    <h1>Books are mirrors: You only see in them <br> what you already have inside you</h1>
                    <a href="menu.php" class="btn">Buy now</a>
                </div>
                <div class="imgBox">
                    <img src="picture/slider-bg5.jpg">
                </div>
            </div>
            <div class="slideBox">
                <div class="textBox">
                    <h1>If you don’t like to read, <br> you haven’t found the right book</h1>
                    <a href="menu.php" class="btn">Buy now</a>
                </div>
                <div class="imgBox">
                    <img src="picture/slider-bg6.jpg">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="fa-solid fa-arrow-right"></i></li>
            <li onclick="prevSlide();" class="prev"><i class="fa-solid fa-arrow-left"></i></li>
        </ul>
    </div>

    <!-- slider section end -->
    <!-- Service section start -->
    <div class="service">
        <div class="box-container">
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" class="img1">
                        <img src="image/services (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (2).png" class="img1">
                        <img src="image/services (3).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>payment</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (5).png" class="img1">
                        <img src="image/services (6).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>support</h4>
                    <span>24*7</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (7).png" class="img1">
                        <img src="image/services (8).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>gift service</h4>
                    <span>support gift service</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/service.png" class="img1">
                        <img src="image/service (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>returns</h4>
                    <span>24*7 free return</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" class="img1">
                        <img src="image/services (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!-- service item box -->
        </div>

    </div>
    <!-- Service section end -->
    <div class="categories">
        <div class="heading">
            <h1>categories features</h1>
            <img src="Picture/sp.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="picture/science.jpg">
                <a href="menu.php" class="btn">Sceince</a>
            </div>
            <div class="box">
                <img src="picture/math.jpg">
                <a href="menu.php" class="btn">Mathmatics</a>
            </div>
            <div class="box">
                <img src="picture/lit.jpg">
                <a href="menu.php" class="btn">Literature</a>
            </div>
            <div class="box">
                <img src="picture/bio.jpg">
                <a href="menu.php" class="btn">Biography</a>
            </div>
        </div>
    </div>

    <!-- menu section start -->

    <img src="picture/sale-banner.jpg" height="300px" class="menu-banner">

    <!-- menu section end -->

    <!-- taste section start -->

    <div class="taste">
        <div class="heading">
            <span>Mostly Demanded Catagories</span>
            <h1>buy any book @ get discounts</h1>
            <img src="Picture/sp.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="picture/biology.jpg">
                <div class="detail">
                    <h2>Sceince Book</h2>
                    <h1>Biology</h1>
                </div>
            </div>
            <div class="box">
                <img src="picture/physics.jpg">
                <div class="detail" style="color: #fff;">
                    <h2>Sceince Book</h2>
                    <h1>Physics</h1>
                </div>
            </div>
            <div class="box">
                <img src="picture/chemistry.jpg">
                <div class="detail">
                    <h2>Sceince Book</h2>
                    <h1>Chemistry</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- contanier section start -->

    <div class="ice-container">
        <div class="overlay">

        </div>
        <div class="detail">
            <h1>Books are a uniquely portable magic</h1>
            <p>It wasn't until I started reading and found books they wouldn't <br> let us read in school that I discovered you could be <br> insane and happy and have a good life without being <br> like everybody else
            </p>
            <a href="menu.php" class="btn">Shop now</a>
        </div>
    </div>
    <!-- container section end -->

    <!-- tester2 section start -->
    <div class="taste2">
        <div class="t-banner">
            <div class="overlay"></div>
            <div class="detail">
                <h1>find your Books</h1>
                <p>If you don’t like to read, you haven’t found the right book</p>
                <a href="menu.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="box-overlay"></div>
                <img src="picture/bio-exp.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>Biology</h1>
                    <p>find your books</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="Picture/chem-exp.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>chemistry</h1>
                    <p>find your books</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="Picture/phy-exp.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>physics</h1>
                    <p>find your books</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="Picture/biog-exp.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>biography</h1>
                    <p>find your books</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="Picture/lit-exp.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>literature</h1>
                    <p>find your books</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="Picture/com-exp.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>comics</h1>
                    <p>find your books</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- tester2 section end -->
    <!-- flavour section start -->

    <div class="flavour">
        <div class="box-container">
            <img src="Picture/boy-read2.jpg">
            <div class="detail">
                <h1>Hot Deal ! Sale Up To <span>20% off</span></h1>
                <p>expired</p>
                <a href="menu.php" class="btn">shop now</a>
            </div>
        </div>
    </div>

    <!-- flavour section end -->

    <!-- usage section start -->

    <div class="usage">
        <div class="heading">
            <h1>why book are important</h1>
            <img src="Picture/sp.png">
        </div>
        <div class="row">
            <div class="box-container">
                <div class="box">
                    <!-- <img src="Picture/sticker.jpeg"> -->
                    <div class="detail">
                        <h3>Jeanette Winterson</h3>
                        <p>"Books and doors are the same thing. You open them, and you go through into another world for future gifts."</p>
                    </div>
                </div>
                <div class="box">
                    <!-- <img src="image/icon0.avif"> -->
                    <div class="detail">
                        <h3>David Sedaris</h3>
                        <p>"A good would take me out of myself and then stuff me back in, outsized, now, and uneasy with the fit."</p>
                    </div>
                </div>
                <div class="box">
                    <!-- <img src="image/icon1.avif"> -->
                    <div class="detail">
                        <h3>Nick Hornby</h3>
                        <p>"Books are, let's face it, better than everything else. If we played Cultural Fantasy Boxing League, and made books go fifteen rounds in the ring against the best that any other art form had to offer, then books would win pretty much every time." </p>
                    </div>
                </div>
            </div>
            <!-- <img src="image/sub-banner.png" class="divider"> -->

            <div class="box-container">
                <div class="box">
                    <!-- <img src="image/icon2.avif"> -->
                    <div class="detail">
                        <h3>Susan Sontag</h3>
                        <p>"Read a lot. Expect something big, something exalting or deepening from a book. No book is worth reading that isn't worth re-reading."</p>
                    </div>
                </div>
                <div class="box">
                    <!-- <img src="image/icon3.avif"> -->
                    <div class="detail">
                        <h3>Laurie Anderson</h3>
                        <p>"Literature is the safe and traditional vehicle through which we learn about the world and pass on values from to the next. Books save lives." </p>
                    </div>
                </div>
                <div class="box">
                    <!-- <img src="image/icon4.avif"> -->
                    <div class="detail">
                        <h3>Eudora Welty</h3>
                        <p>"Both reading and writing are experiences – lifelong – in the course of which we who encounter words used in certain ways are persuaded by them to be brought mind and heart within the presence, the power, of the imagination." </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- pride section start -->

    <div class="pride">
        <div class="detail">
            <h1>We Pride Ourselves On <br> Exceptional Books.</h1>
            <p>Reading is escape, and the opposite of escape; <br> it's a way to make contact with reality <br>after a day of making things up, and it's a way <br> of making contact with someone else's <br>imagination after a day that's all too real.</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>

    <!-- pride section end -->

    <!-- footer -->

    <?php
    include 'components/footer.php';
    ?>

    <!-- footer -->

    <!-- usage section end -->

















    <!--jquery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--sweetalert cdn link--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link--->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>

</html>