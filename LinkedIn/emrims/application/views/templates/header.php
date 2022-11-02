<html>
    <head>
        <title>emrims</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
        <link rel="stylesheet" href= "<?php echo base_url(); ?>assets/css/style.css">
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    </head>
    <body>
    <nav class="navbar navbar-default">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> -->
    <span class="navbar-toggler-icon"></span>
    <!-- </button> -->
      <div class="container" >
    
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">EMRIMS</a>
        </div>

        <div id="navbar">
          <!-- <ul class="navbar-nav mr-auto"> -->
           <ul class="nav navbar-nav"> 
            <!-- <li class="nav-item active"> -->
              <li class="nav-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="nav-item"><a href="<?php echo base_url(); ?>about">About</a></li>
              <li class="nav-item"><a href="<?php echo base_url(); ?>posts">Posts</a></li>
              <li class="nav-item"><a href="<?php echo base_url(); ?>categories">Categories</a></li>
              
          </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if(!$this->session->userdata('log_in')): ?>
          <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
          <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
        <?php endif;?>

        <?php if($this->session->userdata('log_in')): ?>
          <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
          <li><a href="<?php echo base_url(); ?>categories/create_categories">Create Category</a></li>
          <li><a href="<?php echo base_url(); ?>users/logout">Log Out</a></li>
        <?php endif;?>
        </ul>
        </div>
        </div>
    </nav>

    <div class="container">
      <!-- flash message -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif ;?>
    
      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('login_fail')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_fail').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('user_logged_out')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_out').'</p>'; ?>
      <?php endif ;?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif ;?>