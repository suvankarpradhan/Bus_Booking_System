<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Testimonials</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
html{
	scroll-behavior: smooth;
}
body {
	font-family: "Open Sans", sans-serif;
}
.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #dfe3e8;
		border-radius: 0;
	}
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	font-weight: bold;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #8fbc54;
	left: 0;
	right: 0;
	bottom: -10px;
}
.col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #7AA641;
}
.carousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.bgimg{
	background-image:url('../assets/img/about.jpg');
	background-attachment: fixed;
	background-size: 100% 100%;
	width: 100%;
	height: 400px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#">STAR<b>BUS</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="<?=base_url()?>" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#about" class="nav-link">About</a></li>			
			</li>
		</ul>		
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-center m-auto">
			<h2>Our Amazing Team</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="<?=base_url('assets/img/gallery/team/subhas.jpg') ?>" alt=""></div>
						<p class="testimonial">Ongoing student of PG 2nd semester, department of Computer Science, he is a fun loving person. He is also interested in coding. Moreover, he work in his own interested area.</p>
						<p class="overview"><b>Subhas Manna</b>, Media Analyst</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="<?=base_url('assets/img/gallery/team/suva.jpg') ?>" alt=""></div>
						<p class="testimonial">Ongoing student of PG 2nd semester, department of Computer Science. He has special interest in coding. In this particular topic, he is managing his own interested area.</p>
						<p class="overview"><b>Suvankar Pradhan</b>, Web Developer</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="<?=base_url('assets/img/gallery/team/sandip.jpg') ?>" alt=""></div>
						<p class="testimonial">Ongoing student of PG 2nd semester, department of Computer Science, he is a serious person. He is interested in theory topic. He also help in project.</p>
						<p class="overview"><b>Sandip Pal</b>, Seo Analyst</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="<?=base_url('assets/img/gallery/team/suchi.jpg') ?>" alt=""></div>
						<p class="testimonial">Ongoing student of PG 2nd semester, department of Computer Science, she is also contributing with all of them.</p>
						<p class="overview"><b>Suchismita Pradhan</b>, Query Analyst</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>

<section class="bg-light bgimg" id="about">
	<h2 class="text-center" style="padding-top: 30px;color: white;">About Us</h2>
	<h5 class="text-primary text-center a" style="padding: 30px;color: white;line-height: 1.6;font-size: 17px;">
	Now days ,to get in touch with customer around world wide websites are considered as much </br>more important tool for communication .website is much helpful for a company to keep records</br> and place advertisement etc.web developing plays an important role in a company services.</br> In short website is  an ease for customers and company too.</br>
		Our group presenting a project on bus management system (as per the department-required topic).</br> Four member of the groups are – Suvankar Pradhan, Subhas Manna, Sandip Pal and Suchismita Pradhan.

	</h5>
</section>
</body>
</html> 