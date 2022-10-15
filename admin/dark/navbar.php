<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img height="50px" src="../../<?=$_SESSION["user_sekil"]?>" alt="user-img"
                        alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?=$_SESSION["user_adsoyad"]?>
                        <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="profile.php" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <a href="logout.php" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>
            
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
            <li> <a href="index.php" class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Admin
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="admin-add.php">Admin add</a></li>
                        <li><a href="admin-list.php">Admin List</a></li>
                    </ul>
                </li>
                <li> <a href="index.php" class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Settings
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="settings.php">Settings </a></li>
                        <li><a href="about-us.php">About</a></li>
                    </ul>
                </li>
                <li> <a href="index.php" class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Portfolio
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="portfolio-kat.php">Portfolio Category </a></li>
                        <li><a href="portfolio-kat-siyahi.php">Portfolio Category List </a></li>
                        <li><a href="portfolio-add.php">Portfolio Add </a></li>
                        <li><a href="portfolio-siyahi.php">Portfolio List </a></li>
                    </ul>
                </li>
                <li> <a href="index.php" class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Blog
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="blog-kat.php">Blog Category </a></li>
                        <li><a href="blog-kat-siyahi.php">Blog Category List </a></li>
                        <li><a href="blog-add.php">Blog Add </a></li>
                        <li><a href="blog-siyahi.php">Blog List </a></li>
                    </ul>
                </li>
                <li> <a href="index.php" class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Team
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="team-add.php">Team Add </a></li>
                        <li><a href="team-siyahi.php">Team List </a></li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->