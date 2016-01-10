<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $page_title; ?></title>
        <?php echo $this->Html->meta('keywords', $meta_keywords); ?>
        <?php echo $this->Html->meta('description', $meta_description); ?>
        <?php echo $this->Html->css(array('todal', 'godal', 'modal', 'hodal', 'normalize', 'style', 'media', 'fonts', 'jquery-owl-carousel/owl.carousel', 'jquery-loading/component', '/engine1/style')); ?>
        <?php echo $this->Html->script(array('/engine1/jquery', 'main')); ?>
        	<script>App.start();</script>
    </head>
    <body>
        <div id="wrapper">
            <?php
                echo $this->element('header');
                echo $this->Session->flash();
                echo $this->fetch('content');
            ?>
        </div>
        <?php echo $this->element('footer'); ?>
    </body>
</html>