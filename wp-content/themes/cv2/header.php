<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  </head>
<body>
    <!-- Pour ceux qui utlisent SASS n'oubliez pas le point d'exclamation pour garder vos commentaires: /*! Sinon SASS mangent vos commentaires et Wordpress ne verra pas votre thème... -->
    <header>
        <nav id="menu">
            <ul>
                <li><a href="<?php echo get_page_link(36) ?> " >Competence</a></li>
                <li><a href="<?php echo get_page_link(38) ?>">Formation</a></li>
                <li><a href="<?php echo get_page_link(40) ?>">loisirs</a></li>
            </ul>
        </nav>
    </header>
