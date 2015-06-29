<?php include 'header.php'; ?>
<script type="text/javascript">
$(document).ready(function ($) {
	// delegate calls to data-toggle="lightbox"
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			always_show_close: true
		});
	});
});
</script>
<!--Container-->
    <div class="container">
	  <div class="breadcrumb"><a href="index.html">Home</a> - Gallery <a href="<?php echo site_url();?>gallery/add" class="btn-right">Add Gallery</a></div>
      <div class="pager gallery">
        <h1 class="page-title">Gallery</h1>
        <div class="page-content">
            <?php foreach($data as $row) { ?>
              <div class="row">
                  <div class="col-lg-12">
                      <h4><?php echo $row->name?></h4>
                  </div>
                  <?php
                  $images = explode("**", $row->event_images);
                  foreach($images as $img) {
                  ?>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="<?php echo site_url()."assets/uploads/".$img;?>" data-toggle="lightbox" data-gallery="multiimages">
                            <img src="<?php echo site_url()."assets/uploads/".$img;?>" class="img-responsive" alt="">
                      </a>
                  </div>
                  <?php } ?>
              </div>
            <?php } ?>
          </div>

        </div>
    </div>

<?php include 'footer.php'; ?>