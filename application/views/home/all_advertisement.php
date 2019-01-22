<label  style="font-size: 22px; margin-top: 10px; background-color: #661346; color: white; padding: 10px;" class="col-lg-12 col-md-12 col-sm-12 ">All Advertisement</label>
<?php foreach ($result as $eInfo){ ?>
<a href="<?php echo base_url(); ?>home/view_one_advertisement/<?php echo $eInfo->advertisement_id; ?>" style="text-decoration: none">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="border: 1px #CCC solid;  margin: 15px; padding: 6px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" font-size: 22px;  color: #661346; margin-bottom: 10px;"><?php echo $eInfo->advertisement_hading?></div> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  <samp class="glyphicon glyphicon-time"></samp>
    Date:<?php echo $eInfo->advertisement_date; ?>
    </div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php 
    $string = $eInfo->advertisement;
$words = array_slice(explode(' ', $string), 0,100);
echo $output = implode(' ', $words);
      
                 ?>
    </div>
</div>
    </a>

<?php } ?>