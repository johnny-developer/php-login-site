<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link type=text/css rel="stylesheet" href="../assets/bootstrap.min.css" />
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
    
</head>
<body>

    <nav class="navbar" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <?php
                echo "".$_SESSION["nombre"]. " - ". $_SESSION["grupo"];
            ?>
        </a>
        <a class="navbar-brand" aria-current="page" href="session/logout.php">Cerrar session</a>
    </div>
    </nav>


    <div class="wrap">

        <header>
            <h1><?php site_name(); ?></h1>
            <nav class="menu">
                <?php nav_menu(); ?>
            </nav>
        </header>

        <article>
            <h2><?php page_title(); ?></h2>
            <?php page_content(); ?>
        </article>

        <footer>
            <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
        </footer>

    </div>
</body>
</html>