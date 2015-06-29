<?php include 'header.php'; ?>
<script>
//<![CDATA[ 
$(window).load(function(){
    $('.add_more').click(function() {
        var description = $('#description').val();
        $(".add-gallery ul").append('<li class="additional_image"><label>Event Image :</label><input type="file" id="image[]" name="image[]"><div class="remove"><a href="javascript:void(0);">X</a></div></li>');
    });

    $('.add-gallery ul').on('click', '.remove a', function() {
        $(this).closest('.additional_image').remove();
    });
});
</script>
<!--Container-->
<div class="container donor">
    <div class="logout">
        <h3>Add Gallery</h3> </div>
    <div class="adminform">
        <form name="eventFrm" method="post" action="" enctype="multipart/form-data">
            <p>
                <a href="javascript:void(0);" class="add_more">Add Gallerys</a>
            </p>
            <div class="add-gallery-main">
                <div class="add-gallery">
                    <ul>
                        <li><label>Event Name :</label> <input type="text" name="name" id="name"></li>
                        <li><label>Event Date :</label> <input type="text" name="date" id="date"></li>
                        <li><label>Event Image :</label> <input type="file" id="image[]" name="image[]"></li>
                    </ul>
                </div> 
                <div class="append_data"></div>
                <div class="buttons">
                    <input type="submit" value="Submit" id="submit" name="submit">
                    <input type="button" value="Cancel" id="cancel" name="cancel" onClick="location.href = '<?php echo site_url()."gallery"; ?>'">
                    
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>