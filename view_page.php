<?php
include 'components/connect.php';


if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

$pid = $_GET['pid'];

include 'components/add_wishlist.php';
include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmart Bazaar - product details page </title>
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
            <h1>product details</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Recusandae debitis voluptates iusto saepe
                sit amet commodi at,<br> praesentium eligendi aliquid odio dignissimos aspernatur natus in iste minima,
                voluptas beatae deserunt?</p>
            <span><a href="home.php">home</a><i class="fa-solid fa-arrow-right"></i>product details</span>
        </div>
    </div>
    <section class="view_page">
        <div class="heading">
            <h1>product details</h1>
            <img src="Picture/sp.png">
        </div>
        <?php
        if (isset($_GET['pid'])) {
            $pid = $_GET['pid'];
            $select_product = $conn->prepare("SELECT * FROM products WHERE id =?");
            $select_product->execute([$pid]);

            if ($select_product->rowCount() > 0) {
                while ($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)) {

        ?>
                    <form action="" method="post" class="box" style="display: flex;">
                        <div class="img-box">
                            <img src="uploaded_files/<?= $fetch_product['image']; ?>">
                        </div>
                        <div class="detail">
                            <?php if ($fetch_product['stock'] > 9) { ?>
                                <span class="stock" style="color: green;">In stock</span>
                            <?php } elseif ($fetch_product['stock'] == 0) { ?>
                                <span class="stock" style="color: red;">out of stock</span>
                            <?php } else { ?>
                                <span class="stock" style="color: red;">Hurry Only <?= $fetch_product['stock']; ?>left</span>
                            <?php } ?>
                            <p class="price">$<?= $fetch_product['price']; ?>/-</p>
                            <div class="name"><?= $fetch_product['name']; ?></div>
                            <p class="product-detail"><?= $fetch_product['product_detail']; ?></p>
                            <input type="hidden" name="product_id" value="<?= $fetch_product['id']; ?>">
                            <div class="button">
                                <button type="submit" name="add_to_wishlist" class="btn">
                                    add to wishlist <i class="fa-regular fa-heart"></i>
                                </button>
                                <input type="hidden" name="qty" value="1" min="0" class="quantity">
                                <button type="submit" name="add_to_cart" class="btn">
                                    add to cart<i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>

                    </form>

        <?php
                }
            }
        }
        ?>
    </section>
    <div class="products">
        <div class="heading">
            <h1>similar products</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro ipsa nostrum molestiae odio
                repudiandae placeat neque unde dolorum error.</p>
            <img src="Picture/sp.png">
        </div>
        <?php include 'components/shop.php' ?>
    </div>


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