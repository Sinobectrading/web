<nav class="navbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="toggle-icon"></span>
            </button>

            <!-- Logo -->
            <div class="logo">
                <a class="logo-wrap" href="index.php">
                    <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                    <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                </a>
            </div>
            <!-- End Logo -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-collapse">
            <div class="menu-container">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item"><a 
                        <?php if (trim($_SERVER['PHP_SELF']) == "/web/index.php") {
                            echo 'class="nav-item-child nav-item-hover active"';} else {
                                echo 'class="nav-item-child nav-item-hover"';
                            } ?>
                        href="index.php">Home</a>
                    </li>
                   <!--  <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Pricing</a></li> -->
                    <li class="nav-item">
                        <a 
                        <?php if (trim($_SERVER['PHP_SELF']) == "/web/about.php") {
                            echo 'class="nav-item-child nav-item-hover active"';} else {
                                echo 'class="nav-item-child nav-item-hover"';
                            } ?> 
                        href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a 
                        <?php if (trim($_SERVER['PHP_SELF']) == "/web/products.php") {
                            echo 'class="nav-item-child nav-item-hover active"';} else {
                                echo 'class="nav-item-child nav-item-hover"';
                            } ?>
                        href="products.php">Products & Service</a>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li> -->
                    <li class="nav-item">
                        <a 
                        <?php if (trim($_SERVER['PHP_SELF']) == "/web/contact.php") {
                            echo 'class="nav-item-child nav-item-hover active"';} else {
                                echo 'class="nav-item-child nav-item-hover"';
                            } ?>
                        href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Navbar Collapse -->
    </div>
</nav>