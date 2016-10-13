<!-- app/Resources/views/base.html.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="<?php echo $view['assets']->getUrl('bundles/framework/css/body.css') ?>" rel="stylesheet" />
        <title><?php $view['slots']->output('title', 'Test Application') ?></title>
    </head>
    <body>
    <img src="<?php echo $view['assets']->getUrl('bundles/framework/images/logo_symfony.png') ?>" alt="Symfony!" />
    <div id="sidebar">
        <?php echo $view->render('partials/sidebar.html.php') ?>
    </div>
    <div id="content">
        <?php $view['slots']->output('body') ?>
    </div>
    </body>
</html>