<?php
include '../components/connect.php';
if (isset($_COOKIE['seller_id'])) {
    $seller_id = $_COOKIE['seller_id'];
} else {
    $seller_id = '';
    header('location:login.php');
}

//update order from databse

if(isset($_POST['update_order'])){
    $order_id = $_POST['order_id'];
    $order_id = filter_var($order_id, FILTER_SANITIZE_STRING);

    $update_payment = $_post['update_payment'];
    $update_payment = filter_var($update_payment, FILTER_SANITIZE_STRING);

    $update_pay = $conn->prepare("UPDATE `orders` SET payment_status = ? WHERE id = ? ");
    $update_pay->execute([$update_payment, $order_id]);
    $success_msg[] = 'order payment status update';
}

  // ....delete order from database.......

  if(isset($_POST['delete_order'])){
    $delete_id = $_POST['order_id'];
    $delete_id = filter_var($delete_id , FILTER_SANITIZE_STRING);

    $verify_delete = $conn->prepare("SELECT * FROM `orders` WHERE id = ?");
    $verify_delete->execute([$delete_id]);

    if($verify_delete->rowCount() > 0){
        $delete_order = $conn->prepare("DELETE FROM `orders` WHERE id = ?");
        $delete_order->execute([$delete_id]);
        $success_msg[] = 'order deleted!';
    }else{
        $warning_msg[] = 'order already deleted!';
    }
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmart Bazaar - Admin_order</title>
    <link rel="stylesheet" href="../css/admin_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="main-container">
        <?php include '../components/admin_header.php' ?>


        <!-- Second lecture part-->

        <section class="order-container">
            <div class="heading">
                <h1>total order placed</h1>
                <img src="../Picture/sp.png">
            </div>
            <div class="box-container">
            <?php
                
                $select_order = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ? ");
                $select_order->execute([$seller_id]);
                if ($select_order->rowCount() > 0) {
                    while ($fetch_order = $select_order->fetch(PDO::FETCH_ASSOC)) {

                ?>
                <div class="box">
                    <div class="status" style="color: <?php if($fetch_order['status']== 'in progress')
                        {echo "limegreen";}else{echo "red";} ?>;"><?= $fetch_order['status']; ?></div>
                    
                    <div class="details">
                    <p>user name : <span><?= $fetch_order['name'] ?></span></p>
                    <p>user id :  <span><?= $fetch_order['user_id'] ?></span></p>
                    <p>placed on : <span><?= $fetch_order['dates'] ?></span></p>
                    <p>user number : <span><?= $fetch_order['number'] ?></span></p>
                    <p>user email : <span><?= $fetch_order['email'] ?></span></p>
                    <p>tatal price : <span><?= $fetch_order['price'] ?></span></p>
                    <p>payment method : <span><?= $fetch_order['method'] ?></span></p>
                    <p>user address : <span><?= $fetch_order['address'] ?></span></p>
                    </div>

                    <form action="" method="post">
                        <input type="hidden" name="order_id" value="<?= $fetch_order['id']; ?>">
                        <select name="update_payment" class="box" style="width: 90%;">
                            <option disabled selected><?= $fetch_order['payment_status']; ?></option>
                            <option value="pending">pending</option>
                            <option value="order deliverd">order deliverd</option>
                        </select>
                        <div class="flext-btn">
                        <input type="submit" name="update_order" value="update payment" class="btn">
                        <input type="submit" name="delete_order" value="delete order" class="btn"
                          onclick="return confirm('Delete this order');">
                        </div>
                    </form>

                </div>    
                
                <?php
                        }

                    }else{
                        echo '
                        
                        <div class="empty">
                               <p>no ordered placed yet!</p>                        
                        </div>
                        
                        ';
                    }
                ?>
            </div>
        </section>

    </div>









    <!--sweetalert cdn link--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link--->
    <script src="../js/admin_script.js"></script>

    <?php include '../components/alert.php'; ?>

</body>

</html>