<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
    header('location:login.php');
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmart Bazaar - user order page </title>
    <link rel="stylesheet" href="css/user_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>my orders</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Recusandae debitis voluptates iusto saepe
                sit amet commodi at,<br> praesentium eligendi aliquid odio dignissimos aspernatur natus in iste minima,
                voluptas beatae deserunt?</p>
            <span><a href="home.php">home</a><i class="fa-solid fa-arrow-right"></i>my orders</span>
        </div>
    </div>
    <div class="orders">
        <div class="heading">
            <h1>my orders</h1>
            <img src="Picture/sp.png">
        </div>
        <div class="box-container">
            <?php
            $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ? ORDER BY dates DESC");
            $select_orders->execute([$user_id]);

            if ($select_orders->rowCount() > 0) {
                while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                    $product_id = $fetch_orders['product_id'];

                    $select_products = $conn->prepare("SELECT * FROM products WHERE id =?");
                    $select_products->execute([$product_id]);

                    if ($select_products->rowCount() > 0) {
                        while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {

            ?>
                            <div class="box" <?php if ($fetch_orders['status'] == 'canceled') {
                                                    echo 'style = "border:2px solid red"';
                                                } ?>>
                                <a href="view_order.php?get_id=<?= $fetch_orders['id']; ?>">
                                    <img src="uploaded_files/<?= $fetch_products['image'] ?>" class="image">
                                    <p class="date"> <i class="fa-regular fa-calendar-days"></i> <?= $fetch_orders['dates']; ?></p>
                                    <div class="content">
                                        <img src="image/shape-19.png" class="shap">
                                        <div class="row">
                                            <h3 class="name"><?= $fetch_products['name']; ?></h3>
                                            <p>Price : $<?= $fetch_products['price']; ?>/-</p>
                                            <p class="status" style="color: <?php if ($fetch_orders['status'] == 'delivered') {
                                                                                echo "green";
                                                                            } elseif ($fetch_orders['status'] == 'canceled') {
                                                                                echo "red";
                                                                            } else {
                                                                                echo "orange";
                                                                            } ?>">
                                                <?= $fetch_orders['status']; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
            <?php
                        }
                    }
                }
            } else {
                echo '<p class="empty">no order take placed yet</p>';
            }
            ?>
        </div>
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