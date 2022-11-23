
<?php
session_start();
if (!isset( $_SESSION['auth_id'])) {
header('location:../oops.php');
}
require_once('./db_connect.php');
$explode_path =explode('/',$_SERVER['PHP_SELF']);
$page_name=end($explode_path);

                    $id = $_SESSION['auth_id'];
                    $profile_pic_query = "SELECT profile_pic FROM admins WHERE id=$id";
                    $profile_pic_query_db = mysqli_query($db_connect,$profile_pic_query);
                    $demo_pic=mysqli_fetch_assoc($profile_pic_query_db);
                    $profile_pic=$demo_pic['profile_pic'];
                    
                    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/plugins/pace/pace.css" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <!-- Theme Styles -->
    <link href="./assets/css/main.min.css" rel="stylesheet">
    <link href="./assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="./upload_image/<?= $profile_pic?>"alt="">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?=$_SESSION['auth_name']?><br><span class="user-state-info"><?=$_SESSION['auth_email']?></span></span>
                    </a>
                </div>
                
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?=($page_name == 'home.php')?'active-page': ''?>">
                        <a href="dashboard/../home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?=($page_name == 'social_link.php')?'active-page': ''?>">
                        <a href="dashboard/../social_link.php" class="active"><i class="material-icons-two-tone">link</i>social links</a>
                    </li>
                    <li class="<?=($page_name == 'profile .php')?'active-page': ''?>">
                        <a href="dashboard/../profile.php" class="active"><i class="material-icons-two-tone">face</i>Profile</a>
                    </li>
                   
                   
                    <li>
                        <a href=""><i class="material-icons-two-tone">manage_accounts</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu ">
                            <li class="sub-menu <?=($page_name == '../service_add.php.php')?'active-page': ''?>">
                                <a href="dashboard/../service_add.php" target="_blank">Add service</a>
                            </li>
                            <li class="sub-menu <?=($page_name == 'service_list.php')?'active-page': ''?>">
                                <a  href="dashboard/../service_list.php" target="_blank">Service list</a>
                            </li>
                            </ul>
                <li>
                        <a href=""><i class="material-icons-two-tone">work</i>work<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu ">
                            <li class="sub-menu <?=($page_name == '../work_add.php.php')?'active-page': ''?>">
                                <a href="dashboard/../work_add.php" target="_blank">Add work</a>
                            </li>
                            <li class="sub-menu <?=($page_name == 'work_list.php')?'active-page': ''?>">
                                <a  href="dashboard/../work_list.php" target="_blank">work list</a>
                            </li>
                            </ul>
                           
                            <?php
                        if($page_name == 'add-education.php' || $page_name == 'education-list.php'):
                            ?>
                            class="active-page"
                            <?php
                            endif
                        ?> 
                        <a href="add-education.php"><i class="material-icons-two-tone">school</i>Education<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= $page_name == 'add-education.php' ? 'active': '' ?>" href="./education_add.php" >Add Education</a>
                            </li>
                            <li>
                                <a class="<?= $page_name == 'education-list.php' ? 'active': '' ?>" href="./education_list.php">Education List</a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link btn btn-info text-white" href="kufa/../../frontent/index.php" target="_blank">visit site </a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link btn btn-danger text-white" href="dashbord/../auth/logout.php">logout </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">