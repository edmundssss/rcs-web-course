<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Blog!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    
    <link rel="stylesheet" href="css/main.css">
   
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="index.php?page=index">
                        <img src="https://www.miningfoundationsw.org/Resources/Pictures/Logos/2014%20Sponsors/Empire%20Southwesst%20ColorLockup.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item <?php echo $page == 'index' ? 'active' : ''; ?>">
                            <a href="index.php?page=index">Home</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'articles' ? 'active' : ''; ?>">
                            <a href="index.php?page=articles">Articles</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'chat' ? 'active' : ''; ?>">
                            <a href="index.php?page=chat">Chat</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'registration' ? 'active' : ''; ?>">
                            <a href="index.php?page=registration">Register</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'about_us' ? 'active' : ''; ?>">
                            <a href="index.php?page=about_us">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>