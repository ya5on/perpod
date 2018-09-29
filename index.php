<?php
    include "core/langconfig.php";
    include "includes/nav.php";
 ?>

<?php 
    
    if (isset ($_GET['page'])) {
        
        $page = $_GET["page"];
        $filename = "includes/" . $page . '.php';

        switch ($page) {
    case "about":
        $color = "#000";
        break;
    case "carrier":
        $color = "#000";
        break;
    case "contacts":
        $color = "#000";
        break;
    default:
        $color = "#fff";
}
 
        echo '<style>
        nav a, .menu li:hover:after,  .language li a, .nav__link--minus::after, .nav__link--plus::after {
          color: '.$color.' !important;
          
        }
        .menu li a::after, .menu-icon__bar, .menu-icon__bar::before, .menu-icon__bar::after {
            background-color: '.$color.' !important;
        }
        </style>';

        if (file_exists($filename)) {
            include $filename;
        }else{
            include 'includes/home.php';
        }

    }else{
        include 'includes/home.php';
    }
 ?>

<?php 
    include "includes/footer.php";
 ?> 
