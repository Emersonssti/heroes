<? include "db_/db.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Heroes Tournaments</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans:700,400%7CRaleway:400,800,900" rel="stylesheet" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="css/library/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="dev-assets/preloader-default.css" rel="stylesheet" type="text/css" />
    <link href="dev-assets/demo-switcher.css" rel="stylesheet" type="text/css" />
    
</head>

<body>

	<div class="preloader-wrapper" id="preloader">
    <div class="motion-line dark-big"></div>
    <div class="motion-line yellow-big"></div>
    <div class="motion-line dark-small"></div>
    <div class="motion-line yellow-normal"></div>
    <div class="motion-line yellow-small1"></div>
    <div class="motion-line yellow-small2"></div>
</div>

    

    <!--MAIN MENU WRAP BEGIN-->
<div class="main-menu-wrap sticky-menu">
    <div class="container">
        <a href="#" class="custom-logo-link"><img src="images/logo.png" style="width:90px; height:100px" alt="logo" class="custom-logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="team-menu">
                <ul class="main-menu nav">
                    <li class="active">
                        <a href="index.php"><span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Sobre</span></a>
                    </li>
                    <li><a href="noticias.php"><span>Notícias</span></a></li>
                    <li>
                        <a href="#"><span>Torneios</span></a>
                        <ul>
                            <li><a href="#"><span>Em Breve</span></a></li>
                            <li><a href="#"><span>Em Andamento</span></a></li>
                            <li><a href="#"><span>Encerrado</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span>Assista</span></a></li>
                    <li><a href="#"><span>Comunidade</span></a></li>
              
                </ul>
            </div>       
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->