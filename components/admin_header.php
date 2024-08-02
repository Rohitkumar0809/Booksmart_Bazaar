<header style="box-shadow: 0px 5px 10px 0px #aaa;
    background-color:#F4F8EE;">
    <div class="logo">
        <img src="../Picture/book_logo.png" width="100" >
    </div>
    <div class="right">
        <div class="bx fa-solid fa-user" id="user-btn"></div>
        <div class="toggle-btn" ><i class="bx fa-solid fa-bars"></i></div>
    </div>
    <div class="profile-detail">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM sellers WHERE  id = ?");
            $select_profile->execute([$seller_id]);

            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

            ?>
            <div class="profile">
                <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100" style="border-radius: 50%;" >
                <p><?= $fetch_profile['name']; ?></p>
                <div class="flex-btn">
                    <a href="profile.php" class="btn">profile</a>
                    <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="btn">logout</a>
                </div>
            </div>
           <?php } ?>        
    </div>
</header>
<div class="sidebar-container">
<div class="sidebar">
<?php
    $select_profile = $conn->prepare("SELECT * FROM sellers WHERE  id = ?");
    $select_profile->execute([$seller_id]);

    if ($select_profile->rowCount() > 0) {
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="profile">
        <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100" height="100">
        <p><?= $fetch_profile['name']; ?></p>
    </div>
<?php } ?> 
<h5>menu</h5>
<div class="navbar">
    <ul>
        <li><a href="dashboard.php"><i class="fa-solid fa-house"></i>dashboard</a></li>
        <li><a href="add_products.php"><i class="fa-solid fa-bag-shopping"></i>add product</a></li>
        <li><a href="view_product.php"><i class="fa-solid fa-bars"></i>view product</a></li>
        <li><a href="user_accounts.php"><i class="fa-solid fa-user"></i>account</a></li>
        <li><a href="../components/admin_logout.php" onclick="return confirm('logout from this website');"><i class="fa-solid fa-right-from-bracket"></i></i>logout</a></li>
    </ul>
</div>
<h5>find us</h5>
<div class="social-links">
<i class="fa-brands fa-square-facebook"></i>
<i class="fa-brands fa-square-instagram"></i>
<i class="fa-brands fa-linkedin"></i>
<i class="fa-brands fa-square-twitter"></i>
<i class="fa-brands fa-pinterest"></i>
</div>
</div>
</div>

<!--jquery link--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
