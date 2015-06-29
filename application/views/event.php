<?php include 'header.php'; ?>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <!--Container-->
    <div class="container">
      <div class="breadcrumb"><a href="index.html">Home</a> - News & Events <a href="<?php echo site_url()?>event/add" class="btn-right">Add News & Events</a></div>
      <div class="pager news">
        	<h1 class="page-title">News &amp; Events</h1>
            <div class="page-content">
            	<div class="panel-group" id="accordion">
  <?php foreach ($data as $row)  { ?>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapse<?php echo $row->id?>">
          <?php echo $row->title?>
        </a>
      </h4>
    </div>
    <div id="collapse<?php echo $row->id?>" class="panel-collapse collapse in">
      <div class="panel-body">
        <?php echo $row->comments?>
      </div>
    </div>
  </div>
  <?php } ?>
  
  
</div>
            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>