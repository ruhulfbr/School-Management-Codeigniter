
<?php 
  $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
        $this->db->where ( 'type','Teacher' );
        $resultSet = $this->db->get ();
      $t_result=$resultSet->result();

?>
 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Teachers
              
                </h1>
<!--                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Pricing Table</li>
                </ol>-->
            </div>
        </div>
<?php
foreach ($t_result as $tInfo){
?>
  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 0px; ">
  <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center"  style="border:1px #661346 solid; height: 300px; ">
                    <div class="panel-heading"  style="background-color: #661346">
                        <h3 class="panel-title"><?php echo  $tInfo->type ?> Photo</h3>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo base_url().$tInfo->teacher_img;?>" class="img-circle " width="150px" height="180px;">
                      </div>
                    
                </div>
            </div>
  <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="padding: 0px; ">
                <div class="panel panel-default text-center"  style="padding: 0px; border:1px #661346 solid">
                    <div class="panel-heading" style="background-color: #661346">
                        <h3 class="panel-title" style="color: white"><?php echo  $tInfo->type ?> Information</h3>
                    </div>
                    <div class="panel-body">
                      <ul class="list-group">
                        <li class="list-group-item"><strong>Name: </strong>  <?php echo $tInfo->full_name;?></li>
                        <li class="list-group-item"><strong>Designation: </strong> <?php echo $tInfo->designation;?></li>
                        <li class="list-group-item"><strong>Email: </strong> <?php echo $tInfo->email;?></li>
                        <li class="list-group-item"><strong>Mobile No: </strong> <?php echo $tInfo->mobile_no;?></li>
                        <li class="list-group-item"><strong>Subject: </strong> <?php echo $tInfo->objectives;?></li>
                     </ul>
                    </div>
                    

                </div>
            </div>
            </div>


<!--<a href="<?php echo  base_url()?>home/teacher_view/<?php echo $tInfo->id;?>">
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $tInfo->type; ?></h3>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo base_url().$tInfo->teacher_img;?>" class="img-circle " width="120px" height="120px;">
                        <hr>
                        Name:<?php echo $tInfo->full_name; ?>
                    </div>
                  
                </div>
            </div>
            </a>-->
<?php } ?>
