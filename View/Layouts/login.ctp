<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->Html->charset(); ?>    
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-4">
    <?php
        echo $this->Html->css( array( '/assets/css/font-icons/entypo/css/entypo.css', '/assets/css/font-icons/entypo/css/animation.css', '/assets/css/neon.css', '/assets/css/custom.css', '/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css' ) );
        echo $this->Html->script( array( '/assets/js/jquery-1.10.2.min.js', '/js/custom-jquery.js' ) );
    ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page-body login-page">
<div class="login-container">
  <?php echo $this->fetch('content'); ?> 
</div>
<?php
    echo $this->Html->css( array( '/assets/js/select2/select2-bootstrap.css', '/assets/js/select2/select2.css' ) );
    echo $this->Html->script( array( '/assets/js/gsap/main-gsap.js', '/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js', '/assets/js/bootstrap.min.js', '/assets/js/joinable.js', '/assets/js/resizeable.js', '/assets/js/neon-api.js', '/assets/js/jquery.dataTables.min.js', '/assets/js/dataTables.bootstrap.js', '/assets/js/select2/select2.min.js', '/assets/js/jquery.validate.min.js', '/assets/js/neon-custom.js', '/assets/js/neon-demo.js', '/assets/js/neon-login.js' ) );
?>
</body>
</html>