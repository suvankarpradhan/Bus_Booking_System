<!DOCTYPE html>
<html>
<head>
  <title>homepage</title>
    <style>
      html {
        scroll-behavior: smooth;
      }
      .bgimg{
        background-image:url('assets/img/img1.jpg');
        background-attachment: fixed;
        background-size: 100% 100%;
        width: 100%;
        height: 660px;
      }
      .headerset{
        padding-top: 240px;
        box-sizing: border-box;
      }
      .headerset h2{
        font-size: 42px;

      }
      .headerset h1{
        font-size: 82px;
        font-weight: bold;
      }
      .button {
        display: inline-block;
        border-radius: 15px;
        background-color: #f45110;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 20px;
        padding: 14px;
        width: 250px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }

      /*................loginbutton............*/
      .dropbtn {
        background-color: Tomato;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }

      .dropdown {
        padding-top: 6px;
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        border-radius: 5px;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: green;
        padding: 12px 16px;
         border-radius: 5px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {background-color: green;
      color: white}

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown:hover .dropbtn {
        background-color: #3e8e41;
      }

      /*.......................our services...................*/
      .ourservices{
        padding: 100px 0px 60px;
        height: 900px;
      }
      .ourservices h1{
        font-size: 50px;
        font-weight: bold;
      }
      .ourservices h2{
        font-style: italic;
        font-weight: bold;
        font-size: 30px;
      }
      .rowsetting{
        margin: 80px 0px !important;
      }
      .imgsetting{
        border-radius: 50%;
        height: 100px;
        width: 100px;
      }
      .fa-handshake-o,.fa-bed,.fa-video-camera,.fa-wifi,.fa-pagelines,.fa-plug{
        margin-top: 25px;
        margin-left: 2px;
      }
      .rowsetting p{
        padding: 10px;
        color: #6c757d!important;
      }
      /*.................gallery.............*/
      .gallery{
        height: 1100px;
        width: 100%;
        padding: 100px 0px 50px;
      }
      .gallery h1{
        font-size: 50px;
        font-weight: bold;
      }
      .card{
        margin: 20px;
        transition: transform .2s; /* Animation */
      }
      .card:hover {
        transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
      }
      /*......................noti_offer...............*/
      .noti_offer{
        height: 800px;
        padding: 100px 0px 60px;
        width: 100%;
        background-image:url('assets/img/notification.jpg');
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      .noti_offer h1{
        color: white;
        font-size: 50px;
        font-weight: bold;
      }
      .table1{
        table-layout: fixed;
        border-collapse: collapse;
        width: 100%;
        margin-top: 50px;
        height:300px;
      }
      .table1 th{
        padding: 5px 5px 5px;
        font-size: 20px;
        font-family: Helvetica;
        background: rgb(128,0,64,0.8);
        color: #fff;
        position: sticky;
      }
      .table1 td{
        padding: 5px 5px 5px;
        font-size: 15px;
        background: rgb(248, 145, 69, 0.3);
        color: rgb(255,255,0);
        text-align: left;
      }
      .table1 tbody{

        display:block;
        width: auto;
        overflow: auto;
        height: 300px;
      }
      /*.............................footer..................*/
      .footer{
        background-image: url('assets/img/teambg.jpg');
        height: 50px;
      }
      .footer h6{
        line-height: 50px;
      }


      /*//////////////resposive/////////////*/

      @media(min-width: 992px){

        .headerset h2{
          font-size: 35px;
        }
        .headerset h1{
          font-size: 72px;
          font-weight: bold;
        }
        .noti_offer{
          height: 700px;
        }
        .noti_offer h1{
          font-size: 45px;
        }
        .gallery{
          height: 1000px;
        }
      }

      @media(min-width: 768px) and (max-width: 991px){

        .headerset h2{
          font-size: 30px;
        }
        .headerset h1{
          font-size: 65px;
          font-weight: bold;
        }
        .ourservices{
          height: 1000px;
        }
        .noti_offer{
          height: 700px;
        }
        .noti_offer h1{
          font-size: 45px;
        }
        .card{
          margin: 2px;
        }
      }

      @media(min-width: 575px)  and (max-width: 767px){

        .headerset h2{
          font-size: 28px;
        }
        .headerset h1{
          font-size: 55px;
          font-weight: bold;
        }
        .ourservices{
          height: 1200px;
        }
        .gallery{
          height: 2800px;
        }
        .noti_offer{
          height: 1200px;
        }
      }

      @media(min-width: 460px) and (max-width: 574px){

        .headerset h2{
          font-size: 22px;
        }
        .headerset h1{
          font-size: 42px;
          font-weight: bold;
        }
        .ourservices{
          height: 1900px;
        }
        .gallery{
          height: 2700px;
        }
        .gallery h1{
          font-size: 45px;
        }
        .noti_offer{
          height: 1200px;
        }
        .noti_offer h1{
          font-size: 50px;
        }
      }

      @media(max-width: 479px){

        .headerset h2{
          font-size: 22px;
        }
        .headerset h1{
          font-size: 42px;
          font-weight: bold;
        }
        .ourservices{
          height: 1900px;
        }
        .gallery{
          height: 2400px;
        }
        .gallery h1{
          font-size: 45px;
        }
        .noti_offer{
          height: 1200px;
        }
        .noti_offer h1{
          font-size: 50px;
        }
      }
    </style>

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
              <a href="#services" class="nav-link text-white">SERVICES</a>
            </li>
            <li class="nav-item">
              <a href="#noti&offer" class="nav-link text-white">NOTIFICATION</a>
            </li>
            <li class="nav-item">
              <a href="#gallery" class="nav-link text-white">GALLERY</a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('homecontrol/about_us')?>" class="nav-link text-white">TEAM</a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('homecontrol/contact_us')?>" class="nav-link text-white">CONTACT</a>
            </li>
            <div class="dropdown">
              <button class="dropbtn btn-sm">LOG IN</button>
                <div class="dropdown-content">
                <a href="<?=base_url('userlogin') ?>">User</a>
                <a href="<?=base_url('Login') ?>">Admin</a>
                </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>

    	<div class="container text-center text-white headerset">
			<h2>Welcome to our site!</h2>
			<h1>IT'S NICE TO MEET YOU</h1>
			<a class="button" style="vertical-align:middle" href="<?=base_url('homecontrol/user_reg') ?>"><span>Sign up </span></a>
		</div>
  </div>

<!-- ..............data from common page............... -->
<?php include('commonhome.php'); ?>

<!-- ................footer section.............. -->
	<footer class="footer">
		<h6 class="container text-right text-white">copyright &copy 2019 ,Design by Suvankar</h6>
	</footer>

</body>
</html>