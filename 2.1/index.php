<?php



include('user.class.php');
$user = new USER;
$user->checkCredentials();




if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // set proper default value if it was not set
    $page = 'home';
}

require_once('includes/main_header.php');

require_once('includes/main_topnav.php');

require_once('includes/page_'.$page.'.php');

require_once('includes/main_footer.php');

?>