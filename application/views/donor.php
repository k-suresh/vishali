<?php include 'header.php'; ?>

<!--Container-->
<div class="container beneficiaries">
    <div class="breadcrumb"><a href="<?php echo site_url();?>">Home</a> - Donar <a href="<?php echo site_url();?>donor/add" class="btn-right">Add Donor</a></div>
    <div class="adminform">        
            <div class="benef-search"><label>Search Name Starting with</label> <select name="" size="1">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                    <option>G</option>
                    <option>H</option>
                    <option>I</option>
                    <option>J</option>
                    <option>K</option>
                    <option>L</option>
                    <option>M</option>
                    <option>N</option>
                    <option>O</option>
                    <option>P</option>
                    <option>Q</option>
                    <option>R</option>
                    <option>S</option>
                    <option>T</option>
                    <option>U</option>
                    <option>V</option>
                    <option>W</option>
                    <option>X</option>
                    <option>Y</option>
                    <option>Z</option>
                </select></div>
             <?php foreach($data as $row) { ?>
            <div class="benef-box">
                <div class="benef-img"><img src="<?php echo site_url()."assets/uploads/".$row->image;?>" class="img-responsive" alt=""></div>
                <div class="benef-details">
                    <h5><?php echo $row->name?></h5>
                    <ul>
                        <li><label>Company Name:</label> <?php echo $row->company?></li>
                        <li><label>Profession:</label> <?php echo $row->profession?></li>
                        <li><label>Email Id:</label> <?php echo $row->email?></li>
                        <li><label>Address:</label> <?php echo $row->address?></li>
                        <li><label>Phone:</label> <?php echo $row->phone?></li>
                    </ul>
                </div>
                <div class="benef-action">
                    <ul>
                        <li><input onclick="<?php echo site_url();?>donor/add" type="button" value="View Beneficiarie Details"></li>
                        <li><input onclick="<?php echo site_url();?>donor/add" type="button" value="Performance Report"></li>
                        <li><input onclick="<?php echo site_url();?>donor/add" type="button" value="Expense Report"></li>
                        <li><input onclick="<?php echo site_url();?>donor/add" type="button" value="Update Donar"></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
    </div>
</div>

<?php include 'footer.php'; ?>