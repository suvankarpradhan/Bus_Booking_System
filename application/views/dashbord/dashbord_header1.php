<!DOCTYPE html>
<html>
<head>
	<title>bus controller</title>
	<?=link_tag('assets/css/bootstrap.min.css')?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .container{
      margin-top: 50px;
    }
    .card{
      margin: 20px;
    }
    .fa{
      color: white;
      font-size:35px;
      transition: transform .2s; /* Animation */
    }
    .card-body h3{
      margin-left: 25px;
    }
    .fa:hover {
      transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    } 
  </style>
</head>
<body background="<?=base_url('assets/img/contact.jpg')?>">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">STARBUS ADMIN DASHBOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
   </ul>
      <a href="<?=base_url('Login/logout') ?>" class="btn btn-primary" role="button">Log out</a>
</nav>