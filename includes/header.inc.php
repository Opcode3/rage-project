<?php
$activePage = isset($GLOBALS["activePage"]) ? $GLOBALS["activePage"] : "home";
$path = "/rage";
?>
<header>
    <div class="thebar">
        <a href="/rage">
            <img src="./assets/images/logo-white.png" alt="" srcset="">
        </a>

        <button id="menuBurger">
            <i class=" fa fa-bars"></i>
            <span>Menu</span>
        </button>
    </div>
    <nav>
        <ul>
            <li> <a href="<?php echo $path . "/"; ?>" class="<?php echo $activePage == "home" ? "active" : ""; ?>">Home</a></li>
            <li> <a href="<?php echo $path . "/about-us.php"; ?>" class="<?php echo $activePage == "about" ? "active" : ""; ?>">What we are</a></li>
            <li> <a href="<?php echo $path . "/causes.php"; ?>" class="<?php echo $activePage == "cause" ? "active" : ""; ?>">Cause</a></li>
            <li> <a href="<?php echo $path . "/contact-us.php"; ?>" class="<?php echo $activePage == "contact" ? "active" : ""; ?>">Reach us</a></li>
        </ul>

        <div class="essential_button">
            <ul>
                <li> <a href="<?php echo $path . "/volunteer.php"; ?>" class="<?php echo $activePage == "volunteer" ? "active" : ""; ?>">Volunteer</a></li>
                <li> <a href="<?php echo $path . "/donate.php"; ?>" class="<?php echo $activePage == "donate" ? "active" : ""; ?>">Donate Now</a></li>
            </ul>
        </div>
    </nav>



</header>