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
            <h2>Our Gallery<span class="border"></span></h2>
            <?php foreach($categories as $category): ?>
                <div class="gallery-thumbs">
                    <a href="<?php echo $this->Html->url(array('controller' => 'galleries', 'action' => 'view', 'category' => $category['Category']['id'])); ?>"><?php echo $this->Html->image('/files/categories/'.$category['Category']['filename'], array('width' => 206, 'height' => 206)).$category['Category']['title']; ?></a>
                </div>
            <?php endforeach; ?>
            <div class="both"></div>
        </div>
    </div>
</section>