<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php bloginfo('name');?>-<?php bloginfo('description');?></title>
        <meta name="author" content="Guigui">
        <meta name="keywords" content="Guigui, Modèle, HTML">
        <meta name="description" content="Modèle HTML de Guigui">
        <link rel="icon" type="image/png" href="images/icone.png" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/theme.css" />
        <?php wp_head();?>
    </head>
    <body>
        <header>
            <h1>TUTURE</h1>
            <nav id="menuprincipal">
                <?php wp_page_menu('show_home=1');?>
            </nav>
                <aside>
                    <?php get_sidebar();?>
                </aside>
        </header>

    </body>
</html>