

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
}
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=number], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  margin-top: 50px;
 
  background-color: #f2f2f2;
 
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body style="background-color:powderblue;">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">STARBUS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url()?>">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>We'd love to hear from you.</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="<?=base_url('assets/img/contact.jpg') ?>" style="width:100%">
    </div>
    <div class="column">
      <form action="https://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" onsubmit="return ValidateForm(this);" target="_top">
        <input name="skip_WhereToSend" type="hidden" value="subhasmanna1997@gmail.com" />
        <input name="skip_SnapHostID" type="hidden" value="Q682SFJ8L7PB" />
        <input name="skip_WhereToReturn" type="hidden" value="http://localhost/beta2/" />
        <input name="skip_Subject" type="hidden" value="Contact Us Form" />
        <input name="skip_ShowUsersIp" type="hidden" value="1" />
        <input name="skip_SendCopyToUser" type="hidden" value="1" />
        <script type="text/javascript">
        function ValidateForm(frm) {
        if (frm.Name.value == "") {alert('Name is required.');frm.Name.focus();return false;}
        if (frm.FromEmailAddress.value == "") {alert('Email address is required.');frm.FromEmailAddress.focus();return false;}
        if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.FromEmailAddress.focus();return false;}
        if (frm.Comments.value == "") {alert('Please enter comments or questions.');frm.Comments.focus();return false;}
        if (frm.skip_CaptchaCode.value == "") {alert('Enter web form code.');frm.skip_CaptchaCode.focus();return false;}
        return true; }
        function ReloadCaptchaImage(captchaImageId) {
        var obj = document.getElementById(captchaImageId);
        var src = '' + obj.src;
        obj.src = '';
        var date = new Date();
        var pos = src.indexOf('&rad=');
        if (pos >= 0) { src = src.substr(0, pos); }
        obj.src = src + '&rad=' + date.getTime();
        return false; }
        </script>        
         <label for="Name">Name</label>
        <input type="text" id="Name" name="Name" placeholder="Your name..">
        <label for="Name">Email</label>
        <input type="email" id="FromEmailAddress" name="FromEmailAddress" placeholder="Your Email">
        <label for="Name">Phone Number</label>
        <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Your Phone Number">
        <label for="Comments">Subject</label>
        <textarea id="Comments" name="Comments" placeholder="Write something.." style="height:170px"></textarea>
        <tr valign="top"><i>Enter The Captcha Code*:</i>
          <input name="skip_CaptchaCode" type="text" style="width:80px;" maxlength="6" />
          <a href="https://www.snaphost.com/captcha/ReadyForms/ContactUsForm.aspx"><img id="CaptchaImage" alt="Contact Us form" title="HTML code for Contact Us form"
          style="margin-left:20px;"
          src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=Q682SFJ8L7PB&ImgType=2" /></a> 
          <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');"><span style="font-size:12px;">reload image</span></a> </tr>
        <br>  </br>
        <input type="Submit" type="Submit" value="Submit">

      </form>
    </div>
  </div>
</div>

</body>
</html>
