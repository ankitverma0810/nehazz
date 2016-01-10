<!-- Start VisualLightBox.com HEAD section -->
<?php echo $this->Html->css(array('/vlb_files1/vlightbox1', '/vlb_files1/visuallightbox')); ?>
<?php echo $this->Html->script(array('/vlb_engine/jquery.min', '/vlb_engine/visuallightbox')); ?>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,300,700|Open+Sans:400,700|Ubuntu:400,700' rel='stylesheet' type='text/css'>

<section id="saransh">
    <div class="banner-wrap">
        <?php echo $this->Html->image('/files/pages/'.$page['Page']['filename'], array('width' => 1350)); ?>
        <span class="pattern"></span>
        <div class="main-text" >
            <?php echo $this->Html->image('lespalon.png'); ?>
        </div>
    </div>
</section>

<section id="services">
    <div class="gray">
        <div class="wrap">
            <h2 >Our Gallery<span class="border"></span></h2>
            <!-- Start VisualLightBox.com BODY section id=1 -->
            <div id="vlightbox1">
                <?php foreach($galleries as $gallery): ?>
                    <a class="vlightbox1" href="<?php echo $this->webroot.'files/gallery/'.$gallery['Gallery']['filename']; ?>" title="">
                        <?php echo $this->Html->image('/files/gallery/'.$gallery['Gallery']['thumbnail'], array('width' => 210, 'height' => 150)); ?>
                    </a>
                <?php endforeach; ?>
                <span class="vlb"><a href="http://visuallightbox.com">lightbox2 show text</a>by VisualLightBox.com v6.1</span>
            </div>
            <?php echo $this->Html->script(array('/vlb_engine/vlbdata1')); ?>
            <!-- End VisualLightBox.com BODY section -->
            <div class="both"></div>
        </div>
    </div>
</section>