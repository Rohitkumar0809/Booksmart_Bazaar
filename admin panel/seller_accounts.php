<?php
include '../components/connect.php';
if (isset($_COOKIE['seller_id'])) {
    $seller_id = $_COOKIE['seller_id'];
} else {
    $seller_id = '';
    header('location:login.php');
}

//delete message from databse

if(isset($_POST['delete_msg'])){
    $delete_id = $_POST['delete_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

    $verify_delete = $conn->prepare("SELECT * FROM `message` WHERE id = ? ");
    $verify_delete->execute([$delete_id]);

    if($verify_delete->rowCount() > 0){
        $delete_msg = $conn->prepare("DELETE FROM `message` WHERE id = ? ");
        $delete_msg->execute([$delete_id]);

        $success_msg[] = 'message deleted successfully!';
    }else{
        $warning_msg[] = 'message already deleted!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmart Bazaar - sellers register page</title>
    <link rel="stylesheet" href="../css/admin_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="main-container">
        <?php include '../components/admin_header.php' ?>


        <!-- Second lecture part-->

        <section class="user-container">
            <div class="heading">
                <h1>register sellers</h1>
                <img src="../Picture/sp.png">
            </div>
            <div class="box-container">
            <?php
                
                $select_sellers = $conn->prepare("SELECT * FROM `sellers` ");
                $select_sellers->execute();
                if ($select_sellers->rowCount() > 0) {
                    while ($fetch_sellers = $select_sellers->fetch(PDO::FETCH_ASSOC)) {
                        $seller_id = $fetch_sellers['id'];
                ?>
                <div class="box">
                   <img src="../uploaded_files/<?= $fetch_sellers['image']; ?>" >
                   <p>seller id : <span><?= $seller_id; ?></span></p>
                   <p>seller name : <span><?= $fetch_sellers['name']; ?></span></p>
                   <p>seller email : <span><?= $fetch_sellers['email']; ?></span></p>
                  
                </div>    
                
                <?php
                        }

                    }else{
                        echo '
                        
                        <div class="empty">
                               <p>no sellers yet! </p>                        
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