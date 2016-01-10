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
    <form method="post" role="form" id="UserForgotPasswordForm" action="forgot_password">        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="entypo-mail"></i>
          </div>
          <input type="text" class="form-control required" name="data[User][email]" id="UserEmail" maxlength="60" placeholder="Email" autocomplete="off" required="required" />
        </div>
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-login">
          Submit
          <i class="entypo-login"></i>
        </button>
      </div>
      <a href="login">Login</a>
    </form>
  </div>
</div>