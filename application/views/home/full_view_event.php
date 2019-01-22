<label  style="font-size: 22px; margin-top: 10px;   background-color: #661346; color: white; padding: 10px;" class="col-lg-12 col-md-12 col-sm-12 ">Event</label>
<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" style="border: 1px #CCC solid;  margin: 15px; padding: 6px;">
<?php 
if(!empty($result)){

?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" font-size: 22px;  color: #661346; margin-bottom: 10px;"><?php echo $result->event_hading?></div> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
    Date:<?php echo $result->event_date; ?>
    </div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php 
   echo  $string = $result->event;

      
                 ?>
    </div>
<?php }  else { ?>
    <h2>Have No Result</h2> 
           <?php  } ?>
</div>