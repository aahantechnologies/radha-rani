<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="select * from Product where id=$id";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$cat = $row['category_name'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Radha Rani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/shopProduct.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- exo font family link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <!-- css animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- owl caurousel links -->
    <link rel="stylesheet" href="assets/OwlCarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2/dist/assets/owl.theme.default.min.css">
    <!-- zoom image plugin -->
    <link rel="stylesheet" href="assets/zoomplugin/css/image-zoom.css">
    <!-- <link rel="stylesheet" href="assets/zoomplugin/css/style.css"> -->

</head>

<body>
    <!-- header include here -->
    <div w3-include-html="header.html"></div>
    <!-- header include here -->
    <div class="shopDisplaySection mt-5 mb-4">
        <div class="container-fluid customLR_padding pt-2">
            <div class="row">
                <div class="col-md-2 smallNavigation position-relative display_none_tab_mobile">
                    <div class="unstyled-list text-center">
                        <!--<div><a href="#Img1"><img src="assets/images/banner/image1.jpeg" alt="" class="w-50"></a>-->
                         <div><a href="#Img1"><img src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image']; ?>" alt="" class="w-50"></a>
                        </div>
                        <div><a href="#Img2"><img src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image1']; ?>" alt="" class="w-50"></a>
                        </div>
                        <div><a href="#Img3"><img src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image2']; ?>" alt="" class="w-50"></a>
                        </div>
                        <div><a href="#Img4"><img src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image']; ?>" alt="" class="w-50"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 bigNavigation2">
                    <ul class="unstyled-list display_none_tab_mobile myOnspotList">
                        <li id="Img1"><img class="imageZoomExtraPlus" src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image']; ?>" alt=""
                                class="w-100"></li>
                        <li id="Img2"><img class="imageZoomExtraPlus" src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image1']; ?>" alt=""
                                class="w-100 "></li>
                        <li id="Img3"><img class="imageZoomExtraPlus" src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image2']; ?>" alt=""
                                class="w-100"></li>
                        <li id="Img4"><img class="imageZoomExtraPlus" src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image']; ?>" alt=""
                                class="w-100"></li>
                    </ul>
                    <div class="owl-carousel owl-theme display_block_desktop">
                        <div class="item">
                            <div class="">
                                <img src="assets/images/banner/image1.jpeg" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <img src="assets/images/banner/image2.jpeg" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <img src="assets/images/banner/image3.jpeg" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <img src="assets/images/banner/image4.jpeg" class="w-100 h-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 description_product pl-5">

                    <div class="row">
                        <div class="col-md-12">
                            <!--<h3>Beautiful Long Suit with Plazo </h3>-->
                            <h3><?php echo $row['Title']; ?></h3>
                            <p class="priceProduct text-danger">Rs.<?php echo $row['Price']; ?></p>
                        </div>
                        <div class="col-md-12 mt-4">
                            <h5>Size</h5>
                            <ul class="mt-4">
                                <!--<li><a href="#" class="btn btn-outline-dark">S</a></li>-->
                                <!--<li><a href="#" class="btn btn-outline-dark">M</a></li>-->
                                <!--<li><a href="#" class="btn btn-outline-dark">L</a></li>-->
                                <!--<li><a href="#" class="btn btn-outline-dark">XL</a></li>-->
                                <!--<li><a href="#" class="btn btn-outline-dark">XXL</a></li>-->
                                <!--<li><a href="#" class="btn btn-outline-dark">XXXL</a></li>-->
                                <li><a href="#" class="btn btn-outline-dark"><?php echo $row['Sizes']; ?></a></li>
                            </ul>

                        </div>
                        <div class="col-md-12 mt-4">
                            <button class="btn btn-outline-info buttonFullSize"><i
                                    class="fa fa-shopping-bag mr-3"></i>ADD
                                TO
                                CART</button>
                            <button class="btn btn-danger buttonFullSize"><i class="fa fa-heart mr-3"></i>ADD TO
                                WISHLIST</button>
                        </div>
                        <div class="col-md-12 mt-4">
                            <h5>Material</h5>
                            <p class="paragraphProduct"><?php echo $row['Material']; ?></p>
                            <h5>Color</h5>
                            <p class="paragraphProduct"><?php echo $row['Color']; ?></p>
                            <h5>Washcare</h5>
                            <p class="paragraphProduct"><?php echo $row['Washcare']; ?></p>
                            <h5>Disclaimer</h5>
                            <p class="paragraphProduct">
                                <?php echo $row['Disclaimer']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- new arrival section start   -->
    <div class="pt-5 newArrivalSection newArrivalSectionbackground pb-5">
        <div class="container">
            <div class="row m-0 pb-4">
                <div class="col-md-12 text-center">
                    <p class="headingSpring">
                        <span>
                            Related Products
                        </span>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel-newArrival" class="carousel slide" data-ride="carousel" data-interval="0">

                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                        <?php
                                                        
                                            $query="select * from Product where category_name='$cat'  LIMIT 4"; 
                                            $res=mysqli_query($con,$query);         
                                            while($row=mysqli_fetch_array($res)){        
                                        ?>
                                    <div class="col-sm-3 col-md-3 col-6">
                                        <div class="item-container position-relative">
                                            <!--<img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                            <!--    class="w-100 h-80">-->
                                                <img src="http://aahantechnologies.com/RaadhaRaniDesigns/Admin/<?php echo $row['image']; ?>" alt="" class="w-100 h-100 image-sec">
                                                <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">
                                            <div class="item-description text-center pt-3">
                                                <p class="product-name mb-1"><?php echo $row['category_name']; ?></p>
                                                <p class="product-price"><?php echo $row['Price']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                        <?php               
                                                  
                                            }
                                        ?>
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-3 col-md-3 col-6">-->
                                    <!--    <div class="item-container position-relative">-->
                                    <!--        <img src="assets/images/photo-1597983073512-90bd150e19f6.jpg" alt=""-->
                                    <!--            class="w-100 h-80">-->
                                    <!--        <img src="assets/images/hearticon_20x.webp" class="heartImg" alt="">-->
                                    <!--        <div class="item-description text-center pt-3">-->
                                    <!--            <p class="product-name mb-1">enfkjkwnfkbrgh</p>-->
                                    <!--            <p class="product-price">30001</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev navigation" href="#myCarousel-newArrival" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next navigation" href="#myCarousel-newArrival" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-12 text-center mt-4 mb-4">
                    <button class="btn btn-danger rounded-0" onclick="location.href = 'new-arrivals.html'">VIEW ALL NEW
                        PRODUCTS</button>
                </div> -->
            </div>
        </div>

    </div>
    <!-- new arrival section end  -->
    <!-- footer end -->
    <div w3-include-html="footer.html"></div>
    <!-- bootstrap 4 js -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="assets/OwlCarousel2/dist/owl.carousel.min.js"></script>
    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /* Loop through a collection of all HTML elements: */
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i]; /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("w3-include-html");
                if (file) {
                    /* Make an HTTP request using the attribute
                                   value as the file name: */
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4) {
                            if (this.status == 200) {
                                elmnt.innerHTML = this.responseText;
                            }
                            if (this.status == 404) {
                                elmnt.innerHTML = "Page not found.";
                            }
                            /* Remove the attribute, and call this
                                           function once more: */
                            elmnt.removeAttribute("w3-include-html");
                            includeHTML();
                        }
                    }
                    xhttp.open("GET",
                        file, true);
                    xhttp.send(); /* Exit the function: */
                    return;
                }
            }
        }
        $(document).ready(function () {
            includeHTML();
        });
        $('.owl-carousel').owlCarousel({
            rtl: true,
            loop: true,
            margin: 10,
            nav: true,
            // navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        $('.carousel').on('touchstart', function (event) {
            const xClick = event.originalEvent.touches[0].pageX;
            $(this).one('touchmove', function (event) {
                const xMove = event.originalEvent.touches[0].pageX;
                const sensitivityInPx = 5;

                if (Math.floor(xClick - xMove) > sensitivityInPx) {
                    $(this).carousel('next');
                } else if (Math.floor(xClick - xMove) < -sensitivityInPx) {
                    $(this).carousel('prev');
                }
            });
            $(this).on('touchend', function () {
                $(this).off('touchmove');
            });
        });
    </script>
    <script src="assets/zoomplugin/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/zoomplugin/js/image-zoom.js" type="text/javascript"></script>
    <script>
        var $ = jQuery.noConflict();
        $(document).ready(function () {
            var zoomImagePlus = $('.imageZoomExtraPlus');
           
            zoomImagePlus.each(function () {
                $(this).imageZoom();
            });

        });
    </script>
</body>

</html>