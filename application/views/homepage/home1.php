<!DOCTYPE html>
<html>
<head>
  <title>homepage</title>
  <?=link_tag('assets/css/Style2.css')?>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="bgimg">
    
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      
      <div class="container">
        <a href="" class="navbar-brand text-warning font-weight-bold">STARBUS</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="collapsenavbar">      
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <li class="nav-item">
              <a href="<?=base_url('userlogin/user_history') ?>" class="nav-link text-white">YOUR HISTORY</a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('userlogin/logout') ?>" class="button">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <div class="container text-center text-white headerset">
        <h2>Welcome to our site!</h2>
        <h1>IT'S NICE TO MEET YOU</h1>
        <a class="button1" style="vertical-align:middle" href="<?=base_url('user/book') ?>"><span>Book a Bus </span></a>
     </div>
  </div>
<!-- ..............data from common page............... -->

<!-- ................footer section.............. -->
	<footer class="footer">
		<h6 class="container text-right text-white">copyright &copy 2019 ,Design by Suvankar</h6>
	</footer>

</body>