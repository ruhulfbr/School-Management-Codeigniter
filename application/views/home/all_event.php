<label  style="font-size: 22px; margin-top: 10px;  background-color: #661346; color: white; padding: 10px;" class="col-lg-12 col-md-12 col-sm-12 ">All Event</label>
<?php foreach ($result as $eInfo){ ?>
<a href="<?php echo base_url(); ?>home/view_advertisement/<?php echo $eInfo->event_id; ?>" style="text-decoration: none">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="border: 1px #CCC solid;  margin: 15px; padding: 6px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" font-size: 22px;  color: #661346; margin-bottom: 10px;"><?php echo $eInfo->event_hading?></div> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
    Date:<?php echo $eInfo->event_date; ?>
    </div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php 
    $string = $eInfo->event;
$words = array_slice(explode(' ', $string), 0,100);
echo $output = implode(' ', $words);
      
                 ?>
    </div>
</div>
    </a>

<?php } ?>