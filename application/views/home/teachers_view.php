 <!-- Content Row -->
        <!-- <div class="row"> -->
        <!--     <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Basic</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>19<sup>99</sup></span>
                        <span class="period">per month</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>1</strong> User</li>
                        <li class="list-group-item"><strong>5</strong> Projects</li>
                        <li class="list-group-item"><strong>Unlimited</strong> Email Accounts</li>
                        <li class="list-group-item"><strong>10GB</strong> Disk Space</li>
                        <li class="list-group-item"><strong>100GB</strong> Monthly Bandwidth</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
             </div> -->
            <div class="col-md-4">
                <div class="panel panel-primary text-center"  style="border:1px #661346 solid ">
                    <div class="panel-heading"  style="background-color: #661346">
                        <h3 class="panel-title"><?php echo  $resultt->type ?> Photo</h3>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo base_url().$resultt->teacher_img;?>" class="img-circle " width="150px" height="180px;">
                       <!--<img src="<?php echo base_url();?>logo/mr.jpg" class="img-circle">-->
 

                    </div>
                    
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="padding: 0px; ">
                <div class="panel panel-default text-center"  style="padding: 0px; border:1px #661346 solid">
                    <div class="panel-heading" style="background-color: #661346">
                        <h3 class="panel-title"><?php echo  $resultt->type ?> Information</h3>
                    </div>
                    <div class="panel-body">
                      <ul class="list-group">
                        <li class="list-group-item"><strong>Name: </strong>  <?php echo $resultt->full_name;?></li>
                        <li class="list-group-item"><strong>Designation: </strong> <?php echo $resultt->designation;?></li>
                        <li class="list-group-item"><strong>Email: </strong> <?php echo $resultt->email;?></li>
                        <li class="list-group-item"><strong>Mobile No: </strong> <?php echo $resultt->mobile_no;?></li>
                        
                       
                    </ul>
                    </div>
                    

                </div>
            </div>
        <!-- </div> -->
        <!-- /.row -->