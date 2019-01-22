<!--<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>tmp/css/table.css" />  RESET 
<style type="text/css">
table.nostyle th, dl.nostyle dt {color:#303030 !important;}
th{
    cursor: row-resize
}
.va-top {vertical-align:top !important;}
.va-middle {vertical-align:middle !important;}
.va-bottom {vertical-align:bottom !important;}
.input-text {width:145px;}    
</style>  
-->
<label style="margin-top: 10px;"><h3>Search Student Information</h3></label>
<form action="<?php echo base_url(); ?>home/search_student_info" method="post" enctype="multipart/form-data">
  
          
  <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>

            <table class="nostyle table table-striped table-bordered" style="margin-top: 20px; margin-bottom: 20px;" align="center">
                <tr>
                    <td style="text-align: right;font-size: 20px;">Student ID:</td>
                    <td>
                        <input type="text"  name="student_id" required="1" class="form-control">
                      
                    </td>
                    <td style="text-align: right;font-size: 20px;">Select Class</td>
                    <td>
                        <select name="class" required="1" class="input-text form-control"  onchange="showsubject(this.value)">
                        <option value="">---Select Class---</option>
                       
                        <option value="1">Class One</option>
                         <option value="2">Class Two</option>
                         <option value="3">Class Three</option>
                         <option value="4">Class Four</option>
                         <option value="5">Class Five</option>
                         <option value="6">Class Six</option>
                         <option value="7">Class Seven</option>
                         <option value="8">Class Eight</option>
                         <option value="9">Class Nine</option>
                         <option value="10">Class Ten</option>
                         </select>
                    </td>
                    <td>
                        <input type="submit" value="Search" class="btn btn-default">
                    </td>
                </tr>
               
                
            </table>
</form>
       
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
     <div class="col-md-4">
                <div class="panel panel-primary text-center"  style="border:1px #661346 solid ">
                    <div class="panel-heading"  style="background-color: #661346">
                        <h3 class="panel-title">Student Photo</h3>
                    </div>
                    <div class="panel-body">
                        <!--<img src="<?php echo base_url();?>logo/mr.jpg" class="img-circle" style="width: 100%;">-->
                        <img src="<?php echo base_url().$result->image;?>" class="img-circle" style="width: 100%;">
 

                    </div>
                    
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="padding: 0px; ">
                <div class="panel panel-default text-center"  style="padding: 0px; border:1px #661346 solid">
                    <div class="panel-heading" style="background-color: #661346">
                        <h3 class="panel-title" style="color: white">Student Information</h3>
                    </div>
                    <div class="panel-body" >
                        <ul class="list-group">
                          <li class="list-group-item" style="text-align: left; color: #661346"><strong>Name: </strong>  <?php echo $result->student;?></li>
                        <li class="list-group-item" style="text-align: left;  color: #661346"><strong>Roll Number: </strong> <?php echo $result->roll;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Class Name: </strong> <?php echo $result->st_class;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Father Name: </strong> <?php echo $result->father;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Mother Name: </strong> <?php echo $result->mother;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Mobile No: </strong> <?php echo $result->smobile;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Village Name: </strong> <?php echo $result->village;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Post Name: </strong> <?php echo $result->po;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Upazilla Name: </strong> <?php echo $result->upazilla;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>District Name: </strong> <?php echo $result->district;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Birth Name: </strong> <?php echo $result->birth;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Email: </strong> <?php echo $result->email;?></li>
                        <li class="list-group-item" style="text-align: left; color: #661346"><strong>Year: </strong> <?php echo $result->date;?></li>
                      </ul>
                    </div>
                    

                </div>
            </div>
</div>