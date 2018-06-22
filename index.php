<?php 
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
        nav a, .nav_list .nav_list_item:hover:after, .language li {
          color: '.$color.' !important;
          
        }
        .nav_list .nav_list_item a::after {
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
