<?php
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'index';


// header
require_once 'components/header.php';


// content
switch($page) {
    case('index'):
        require_once 'components/index.php';
        break;
    case('articles'):
        require_once 'components/articles.php';
        break;
    case('article'):
        require_once 'components/article.php';
        break;
    case('chat'):
        require_once 'components/chat.php';
        break;
    case('about_us'):
        require_once 'components/about_us.php';
        break;
    case('registration'):
        require_once 'components/registration.php';
        break;
    case('regsucces'):
        require_once 'components/regsucces.php';
        break;
    default:
        require_once 'components/404.php';
        break;
}

// footer
require_once 'components/footer.php';
