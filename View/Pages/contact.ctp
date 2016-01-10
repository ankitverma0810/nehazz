<section id="saransh">
    <div class="banner-wrap">
        <?php echo $this->Html->image('/files/pages/'.$page['Page']['filename'], array('width' => 1350)); ?>
        <span class="pattern"></span>
        <div class="main-text" >
            <?php echo $this->Html->image('lespalon.png'); ?>
        </div>
    </div>
</section>

<section id="content">
    <div class="main1">
        <div class="container_12">
            <article class="grid_4">
                <?php echo $page['Page']['description']; ?>
                <div class="clear"></div>
            </article>
            <article class="grid_8">
                <div class="page5-box1">
                    <h2>Get <span>in Touch</span></h2>
                    <?php echo $this->Form->create('Contact', array('id' => 'form1')); ?>
                        <fieldset>
                            <label class="name">
                                <?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'placeholder' => 'Name:')); ?>
                            </label>

                            <label class="email">
                                <?php echo $this->Form->input('email', array('label' => false, 'div' => false, 'placeholder' => 'E-mail:')); ?>
                            </label>

                            <label class="phone">
                                <?php echo $this->Form->input('phone', array('label' => false, 'div' => false, 'placeholder' => 'Phone:')); ?>
                            </label>

                            <label class="message">
                                <?php echo $this->Form->input('message', array('label' => false, 'div' => false, 'placeholder' => 'Message:', 'type' => 'textarea')); ?>
                            </label>
                            
                            <div class="clear"></div>
                            <div class="link-form">
                                <input type="submit" value="submit" class="button2" />
                            </div>
                        </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </article>
        </div>
    </div>
</section>