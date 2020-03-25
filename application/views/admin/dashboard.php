<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- <link rel = "stylesheet" type = "text/css" href = "<?php //echo BASE_URL; ?>assets/css/mcq.css"> -->
	<link rel = "stylesheet" type = "text/css" href = "<?php echo BASE_URL; ?>css/navbar.css">

  <link rel="icon" href="<?= BASE_URL;?>images/logo.png" type="image/png" sizes="16x16">
</head>
<body>
	<div class="container">
  	<nav class="main-navigation">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="<?=BASE_URL?>route_to_admin">KnifeMaster Gaming</a>
        </div>
        <ul class="nav-list">
          <li class="nav-list-item">
            <a href="<?=BASE_URL?>admin" class="nav-link">Home</a>
          </li>
          <li class="nav-list-item">
          	<a href="<?=BASE_URL?>admin/logout" class="nav-link">Logout</a>
          </li>
        </ul>

      </nav>
      <?php
        if ($this->session->flashdata('message')) 
        {
        ?>
        <p class="alert alert-warning"><?= $this->session->flashdata('message') ?></p>
        <?php
          }
        ?>
    <div class="row">
      <div class="col-lg-4">
        
      </div>
    
      <div class="col-lg-4 text-center" style="margin-top: 100px">
        <h4>Room ID & Password Underdog's Scrim #1</h4>
        
        <form action="<?=BASE_URL?>admin/roomId1" method="post">
          <input type="text" name="roomId" class="form-control" placeholder="Enter Room Id" required><br>
          <input type="password" name="roomPass" class="form-control" placeholder="Enter Room Password" required><br>
          <input type="submit" name="submit" value="Send" class="btn btn-primary" style="width: 150px">
        </form>
        
      </div>

      <div class="col-lg-4">
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        
      </div>
    
      <div class="col-lg-4 text-center" style="margin-top: 100px">
        <form action="<?=BASE_URL?>admin/roomId2" method="POST">
          <input type="text" name="roomId" class="form-control" placeholder="Enter Room Id" required><br>
          <input type="password" name="roomPass" class="form-control" placeholder="Enter Room Password" required><br>
          <input type="submit" name="submit" value="Send" class="btn btn-primary" style="width: 150px">
        </form>
        
      </div>

      <div class="col-lg-4">
        
      </div>
    </div>
  </div>
  
</body>
</html>