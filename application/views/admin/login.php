<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo BASE_URL ?>css/loginSignup.css">

	<link rel="icon" href="<?= BASE_URL;?>images/logo.png" type="image/png" sizes="16x16">

</head>
<body>

	<div class="wrapper fadeInDown">
	  <div id="formContent">
	    <!-- Tabs Titles -->

	    <!-- Icon -->
	    <div class="fadeIn first">
	      <img src="<?php echo BASE_URL ?>images/user.png" id="icon" alt="User Icon"  style="height: 80px;width: 80px" />
	    </div>
	    <?php
	    	if ($this->session->flashdata('message')) 
	    	{
	    ?>
	    <p class="alert alert-danger"><?= $this->session->flashdata('message') ?></p>
	    <?php
	    	}
	    ?>
	    <!-- Login Form -->
	    <form action="<?=BASE_URL?>route_to_admin/login" method="POST">
	      <input type="text" id="login" class="fadeIn second" name="userName" placeholder="Enter UserName" required>
	      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter Password" required>
	      <input type="submit" class="fadeIn fourth" value="Log In">
	    </form>

	    <!-- Remind Passowrd -->
	    

	  </div>
	</div>

</body>
</html>