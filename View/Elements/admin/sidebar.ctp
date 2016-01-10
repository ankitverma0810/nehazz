<div class="sidebar-menu">
    <header class="logo-env">
        <div class="logo">
            <a href="#">
                <?php echo $this->Html->image('/assets/images/logo.png'); ?>
            </a>
        </div>
    </header>

    <ul id="main-menu" class="">
        <li class="opened <?php if($this->params->controller == 'dashboard') echo 'active'; ?>">
            <a href="<?php echo $this->Html->url(array('controller' => 'dashboard', 'action' => 'index')); ?>"><i class="entypo-gauge"></i><span>Dashboard</span></a>
        </li>

        <li <?php if($this->params->controller == 'Menus') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Menus</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Menus', 'action' => 'index')); ?>"><span>List Menus</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Menus', 'action' => 'add')); ?>"><span>Add Menu</span></a></li>
            </ul>
        </li>

        <li <?php if($this->params->controller == 'Pages') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Pages</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Pages', 'action' => 'index')); ?>"><span>List Pages</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Pages', 'action' => 'add')); ?>"><span>Add Page</span></a></li>
            </ul>
        </li>

        <li <?php if($this->params->controller == 'Banners') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Banners</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Banners', 'action' => 'index')); ?>"><span>List Banners</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Banners', 'action' => 'add')); ?>"><span>Add Banner</span></a></li>
            </ul>
        </li>

        <li <?php if($this->params->controller == 'Categories') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Gallery Category</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Categories', 'action' => 'index')); ?>"><span>List Categories</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Categories', 'action' => 'add')); ?>"><span>Add Category</span></a></li>
            </ul>
        </li>

        <li <?php if($this->params->controller == 'Galleries') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Gallery</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Galleries', 'action' => 'index')); ?>"><span>List Images</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Galleries', 'action' => 'add')); ?>"><span>Add Image</span></a></li>
            </ul>
        </li>

        <li <?php if($this->params->controller == 'Specialities') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Specialities</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Specialities', 'action' => 'index')); ?>"><span>List Specialities</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Specialities', 'action' => 'add')); ?>"><span>Add Speciality</span></a></li>
            </ul>
        </li>

        <li <?php if($this->params->controller == 'Testimonials') echo "class='opened'"; ?>>
            <a href="#"><i class="entypo-layout"></i><span>Testimonials</span></a>
            <ul>
                <li <?php if($this->params->action == 'admin_index') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Testimonials', 'action' => 'index')); ?>"><span>List Testimonials</span></a></li>

                <li <?php if($this->params->action == 'admin_add') echo "class='active'"; ?>><a href="<?php echo $this->Html->url(array('controller' => 'Testimonials', 'action' => 'add')); ?>"><span>Add Testimonial</span></a></li>
            </ul>
        </li>        
    </ul>
</div>