<header id="header">
    <div class="wrap">
        <div class="main">
            <ul id="navigation">
                <?php $count = 0; ?>
                <?php foreach($menus as $menu): ?>
                    <?php if($count == 3) { ?>
                        <li class="center">
                            <a id="logo" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">
                                <h1><?php echo $this->Html->image('logo.png'); ?></h1>
                                <span class="label rotate"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <li><a href="<?php echo $this->Html->url(array('controller' => $menu['Menu']['controller'], 'action' => $menu['Menu']['action'])); ?>"><?php echo $menu['Menu']['title']; ?></a>
                        <?php if(is_array($menu['childs'])) { ?>
                            <ul>
                                <?php foreach($menu['childs'] as $value): ?>
                                    <li><a href="<?php echo $this->Html->url(array('controller' => $value['Menu']['controller'], 'action' => $value['Menu']['action'])); ?>"><?php echo $value['Menu']['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php } ?>
                    </li>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="after"></div>
</header>