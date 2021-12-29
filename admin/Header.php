      
// <?php
// if(empty($_SESSION)) // if the session not yet started
//   session_start();

// if(!isset($_SESSION['username'])) { //if not yet logged in
//   header("Location: Login.php");// send to login page
//   exit;
// }
// ?>
         <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <div style="color:#e5486d;font-size: 3.6em;">Raadharani</div>
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
         <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                           
                             <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                           
                           
                          
                         <!--<img style=" border-radius: 50%;width: 45px;margin-left: 15px" src="assets/img/logo.jpg">-->
                          <!--<img style=" width: 120px;height:45px;margin-left: 30px" src="assets/img/radharani_logo transperent.png">-->
                          
                           <a href="db-default.html" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <p  style="color:#e5486d;font-size: 1.6em;margin-left: 15px;">Raadharani</p>
                                </div>
                                <div class="brand-image brand-small">
                                    <small style="color:#e5486d;">Raadharani</small>
                                </div>
                            </a>
                          
                        </div>
                        <!-- End Logo -->
                    </div>
                    <!-- End Topbar -->
                        
                </nav>
            </header>
            <!-- End Header -->