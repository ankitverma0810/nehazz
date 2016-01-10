<div class="login-header login-caret">
    <div class="login-content">
      <a href="#" class="logo"><?php echo $this->Html->image('/assets/images/logo.png'); ?></a>
      <p class="description">
      	<?php
			if($this->Session->check('Message')){
				echo $this->Session->flash();
			}
		?>
      </p>
      <!-- progress bar indicator -->
      <div class="login-progressbar-indicator">
        <h3>43%</h3>
        <span>logging in...</span>
      </div>
    </div>
</div>
  
<div class="login-progressbar">
  <div></div>
</div>
  
<div class="login-form">
  <div class="login-content">
    <form method="post" role="form" id="UserChangePasswordForm" action="change_password">
        <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="entypo-mail"></i>
          </div>
          <input type="hidden" id="UserId" value="<?php echo $this->request->data['User']['id']; ?>" name="data[User][id]">
          <input type="password" class="form-control required" name="data[User][password]" id="UserPassword" placeholder="Change Password" autocomplete="off" required="required" />
        </div>
        </div>
      
        <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-login">
          Change Password
          <i class="entypo-login"></i>
        </button>
        </div>
    </form>
  </div>
</div>