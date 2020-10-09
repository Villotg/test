<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Guigui">
        <meta name="keywords" content="Guigui, Modèle, HTML">
        <meta name="description" content="Modèle HTML de Guigui">
        <link rel="icon" type="image/png" href="images/icone.png" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
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
