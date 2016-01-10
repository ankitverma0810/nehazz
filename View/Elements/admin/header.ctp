<div class="row">
	<div class="col-md-6 col-sm-8 clearfix">
        <ul class="user-info pull-left pull-none-xsm">
            <li class="profile-info dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            		<?php echo $this->Html->image('thumb-1.png', array('class' => 'img-circle')); ?>
            		<?php echo $this->Html->user('email'); ?>
            	</a>
                <ul class="dropdown-menu">
                    <li class="caret"></li>                    
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'edit', $this->Html->user('id'))); ?>"><i class="entypo-user"></i>Edit Profile</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="col-md-6 col-sm-4 clearfix hidden-xs pull-right">
        <ul class="list-inline links-list pull-right">             
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>">Log Out <i class="entypo-logout right"></i></a></li>
        </ul>
    </div>
</div>
<hr />