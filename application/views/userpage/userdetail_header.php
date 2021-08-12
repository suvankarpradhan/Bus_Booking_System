<!DOCTYPE html>
<html>
<head>
  <title>User login</title>
  <?=link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">STARBUS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('homecontrol/home1') ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('userlogin/user_history1') ?>">Your History</a>
      </li>
    </ul>
      <a href="<?=base_url('userlogin/logout') ?>" class="btn btn-outline-info" role="button">Log out</a>
  </nav>
