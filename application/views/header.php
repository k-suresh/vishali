<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vishali Charitable Trust</title>
<?php
echo $assets['header_asset'];
?>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->




<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>


</head>

<body>
<div class="wapper">

	<!--Header Start-->
    <div class="header">
      <div class="logo"><a href="<?php echo $this->config->site_url()?>"><img src="<?php echo $this->config->site_url()?>assets/images/logo.pngg" alt=""></a></div>
      <div class="topright">
          <div class="socialmedia">
            <ul>
                <li><a href="<?php echo $this->config->site_url()?>assets/about.html" class="">About us</a></li>
                <li><a href="<?php echo $this->config->site_url()?>assets/contact.html" class="">Contact us</a></li>
                <li>|</li>
                <li>Connect with us: </li>
                <li><a href="#"><img src="<?php echo $this->config->site_url()?>assets/images/facebook.png" width="24" height="24"></a></li>
                <li><a href="#"><img src="<?php echo $this->config->site_url()?>assets/images/twitter.png" width="24" height="24"></a></li>
                <li><a href="#"><img src="<?php echo $this->config->site_url()?>assets/images/linkedin.png" width="24" height="24"></a></li>
            </ul>
          </div>
<?php
            $currentClass = $this->router->fetch_class();
            $currentMethod = $this->router->fetch_method();
?>
          <div class="topnav">
          	<ul>
                <li><a href="<?php echo $this->config->site_url()?>dashboard" class="<?php echo ($currentMethod =="index" && $currentClass =="dashboard") ? "active" :"";?>">Home</a></li>
                <li><a href="<?php echo $this->config->site_url()?>project" class="<?php echo ($currentMethod =="index" && $currentClass =="project") ? "active" :"";?>">Projects</a></li>
                <li><a href="<?php echo $this->config->site_url()?>beneficial/" class="<?php echo ($currentMethod =="index" && $currentClass =="beneficial") ? "active" :"";?>">Beneficiaries</a></li>
                <li><a href="<?php echo $this->config->site_url()?>donor" class="<?php echo ($currentMethod =="index" && $currentClass =="donor") ? "active" :"";?>">Donors</a></li>
                <li><a href="<?php echo $this->config->site_url()?>stories" class="<?php echo ($currentMethod =="index" && $currentClass =="stories") ? "active" :"";?>">Success Stories</a></li>
                <li><a href="<?php echo $this->config->site_url()?>event" class="<?php echo ($currentMethod =="index" && $currentClass =="event") ? "active" :"";?>">News & Events</a></li>
                <li><a href="<?php echo $this->config->site_url()?>gallery" class="<?php echo ($currentMethod =="index" && $currentClass =="gallery") ? "active" :"";?>">Gallery</a></li>
                <li><a href="#" class="">Downloads</a></li>
        	</ul>
          </div>
      </div>
    </div>
    
    <!--Banner Start-->
  <div class="banner">
    	<div class="bnr-content"></div>
        <div class="bnr-bg"><img src="<?php echo $this->config->site_url()?>assets/images/background2.jpgg" alt=""></div>
  </div> 