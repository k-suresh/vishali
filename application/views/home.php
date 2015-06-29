<?php include 'header.php';   ?>
    <!--Container-->
    <div class="container">
    	<div class="row margB20">
        	<div class="col-md-6 widget">
            	<h2 class="widget-title">Welcome to Vishali Charitable Trust</h2>
                <div class="widget-content">Vishali is a non-profitable, non-government organization created for supporting underpriveleged students education.  It was founded by a group of friends who share a common vision and believe a small gesture from their side can make a difference in the lives of many children who deserve proper education.</div>
            </div>
            <div class="col-md-6 widget">
            	<h2 class="widget-title">Our Mission</h2>
                <div class="widget-content">Vishali is a complete voluntary organization. All of our volunteers are unpaid. All funds collected by Vishali go towards students educational expenses and grassroot efforts.</div>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-6 widget">
            	<h2 class="widget-title">News & Events</h2>
                <div class="widget-content">30 Active Students and 19 Active Projects for AY 2011-12
Vishali to Support SSS Krupa Home for Orphans and Oasis Charitable Trust for Orphans Member Update Document for AY2010-11 due in November.</div>
            </div>
            <div class="col-md-6 widget">
            	<h2 class="widget-title">Download</h2>
                <div class="widget-content">
                	<ul class="pdf">
                   	  <li>Beneficiary Application</li>
                      <li>Performance Report</li>
                      <li>Project Expense Report </li>
                	</ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="get-login">
    	<div class="get"><span>Get Involved</span><br> Donate Now!</div>
        <div class="login">
        	<ul>
            	<li><h2>Members Login</h2></li>
                <li><input name="" type="text" placeholder="User ID"> <input name="" type="password" placeholder="Password"> <!--<input name="" type="submit" value="Login"> --><input type=button onClick="parent.location='projects.html'" value='Login'></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Forgot Password?</a></li>
            </ul>
        </div>
    </div>
    
    <div class="pager gallery gallery-home">
      <h2 class="widget-title">Events Gallery <a href="gallery.html">More...</a></h2>
      <div class="page-content">
        <div class="row">            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/1b.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/1.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/2b.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/2.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/3b.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/3.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/4.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/5.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/5.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/6.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/6.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/7.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo $this->config->site_url()?>assets/images/gallery/8.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs"><img src="<?php echo $this->config->site_url()?>assets/images/gallery/8.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>
           
        </div>

        </div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change your Password?</h4>
      </div>
      <div class="modal-body">
        <p><input name="" type="text" placeholder="Enter your email address"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Send password</button>
      </div>
    </div>
  </div>
</div>    
<?php include 'footer.php'; ?>
    

