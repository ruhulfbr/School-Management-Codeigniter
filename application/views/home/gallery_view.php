<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gallery/Easy/css/photoGallery.css">

<div  id="photoGallery-container"  class="col-md-12  col-lg-12">
            <?php 
foreach ($resultt as  $photoInfo) {
?>
<img class="photoGallery" data-src="<?php echo  base_url().$photoInfo->photo_name; ?>" src="<?php echo  base_url().$photoInfo->photo_name; ?>" style="height: 200px;  margin-bottom: 10px; "  data-desc="Image Caption1">
<?php } ?>
</div>
<!--<script src="<?php echo base_url(); ?>gallery/Easy/jquery-1.11.3.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>gallery/Easy/js/photoGallery.js"></script>
<script type="text/javascript">
	$(function(){
		var photoGallery = new PhotoGallery();
	});
</script>



















