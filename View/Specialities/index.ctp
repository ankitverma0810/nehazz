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
            <h2>What We Have<span class="border"></span></h2>
            <p><strong> What can you plan with Nehazz: </strong></p>
            <?php foreach($specialities as $speciality): ?>
                <div class="web-services-wrapper">
                    <a href="<?php echo $speciality['Speciality']['url']; ?>">
                        <?php echo $this->Html->image('/files/speciality/'.$speciality['Speciality']['filename'], array('width' => 103, 'height' => 103)); ?>
                        <h2><?php echo $speciality['Speciality']['title']; ?></h2>
                        <p><?php echo $speciality['Speciality']['description']; ?></p>
                        <div class="clear"></div>
                    </a>
                </div>
            <?php endforeach; ?>
            <?php echo $page['Page']['description']; ?>
            <div class="both"></div>
        </div>
    </div>
</section>