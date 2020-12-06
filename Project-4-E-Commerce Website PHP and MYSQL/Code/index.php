<?php
if(!isset($_SESSION)) 
    {
    session_start();
}
?>
<?php include_once ('inc/connection.php') ?>
<?php include ('inc/header.php') ?>\




    <!-- Home slider -->
    <section class="p-0 effect-cls ">
        <div class="slide-1 home-slider">
            <div>
                <div class="home text-center p-center">
                    <img src="./images/home-banner/41.jpg" alt="" class="bg-img blur-up lazyload">
                </div>
            </div>
            <div>
                <div class="home text-center p-center">
                    <img src="./images/home-banner/42.jpg" alt="" class="bg-img blur-up lazyload">
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->

        <!-- category section -->
        <section class="pb-0  banner-text-white ratio_45">
        <div class="title1  section-t-space">
            <h2 class="title-inner1">category</h2>
        </div>
        <div class="container">
        <div class="row partition2">
        <?php
            // Pull categories name from database and link it to products page based on selected category.
                $query = "SELECT * FROM categories";
                $result = mysqli_query($conn, $query);
                while ($row =  mysqli_fetch_assoc($result)) {
                        echo 
                        "<div class='col-md-6'>
                        <a href='category-page.php?id={$row['category_id']}'>
                        <div class='collection-banner'>
                            <div class='img-part'>
                                <img src='./admin/{$row['cat_image']}' class='img-fluid bg-img blur-up lazyload'
                                alt=''>
                            </div>
                            <div class='contain-banner'>
                                <div>
                                    <h2 class='text-danger'>{$row['name']}</h2>
                                    <h2 class='text-white'>save 10%</h2>
                                </div>
                            </div>
                        </div>
                        </a>
                </div>";
                }
?>
        </div>
        </div>
    </section>

            </div>
        </div>
    </section>
    <!-- category section end -->


<!-- Product tab slider -->
<div class="title1  section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">top collection</h2>
    </div>
    <section class="game-product ratio_asos pt-0">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">

                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class=" no-slider five-product row">
                                 <?php
                                        // add dynamic products
                                        $sql  = "SELECT * FROM products";
                                        $products = mysqli_query($conn, $sql);
                                        while ($pro = mysqli_fetch_assoc($products)) {
                                        echo "
                                        <div class='product-box'>
                                    <div class='img-wrapper'>
                                        <div class='front'>
                                            <a href='product-page.php?id={$pro['pro_id']}'><img
                                                src='./admin/{$pro['pro_photo']}'
                                            class='img-fluid bg-img blur-up lazyload' alt=''></a>
                                        </div>
                                        <div class='add-button text-white' data-toggle='modal' data-target='#addtocart'><a href='cart.php?id={$pro['category_id']}&cart_id={$pro['pro_id']}'>add to
                                            cart</a></div>
                                    </div>
                                    <div class='product-detail'>
                                        <a href='product-page.php?id={$pro['pro_id']}'>
                                        <h6>{$pro['pro_name']}</h6>
                                        </a>
                                        <h4>{$pro['pro_price']}</h4>
                                    </div>
                                    </div>" ;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->
        <!-- timer banner start -->
        <section class="game-banner">
        <div class="container">
            <div class="row banner-timer">
                <div class="col-md-6">
                    <div class="banner-text">
                        <h2>Save <span>30% off</span> Digital Watch</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="timer-box">
                        <div class="timer">
                            <p id="demo"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- timer banner end-->
    <!-- Parallax section start -->
    <section class="p-0 game-parallax effect-cls ">
        <div class="full-banner parallax text-center p-center text-center">
            <img src="./images/parallax/20.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>2020</h2>
                            <h3>Loading games</h3>
                            <h4>special offer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax section end -->

<?php include_once ('inc/footer.php'); ?>