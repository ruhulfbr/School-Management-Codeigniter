<!--  <div class="col-md-12">
                 Embedded Google Map 
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>-->
<style>
    .maine{
        width: 130px;
        height: auto;
        float: left; 
        border: 1px #CCC solid;
        padding: 5px;
        border-radius: 5px;
        margin-right: 10px; margin-bottom: 15px;
        -webkit-box-shadow: -4px 7px 12px -1px rgba(0,0,0,0.71);
-moz-box-shadow: -4px 7px 12px -1px rgba(0,0,0,0.71);
box-shadow: -4px 7px 12px -1px rgba(0,0,0,0.71);
    }
    .maine:hover{
        -webkit-box-shadow: -4px 7px 12px -1px rgba(110,4,4,1);
-moz-box-shadow: -4px 7px 12px -1px rgba(110,4,4,1);
box-shadow: -4px 7px 12px -1px rgba(110,4,4,1);
cursor: pointer;
    }
    .Name{
        font-size: 18px;
        color: #0E385F;
        text-align: center;
        
    }
    a{
        text-decoration: none;
    }
</style>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <a href="<?php echo base_url(); ?>studentController/view_student_info_add">
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/reader-512.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Student Info</p>
    </div></a>
    <a href="<?php echo base_url(); ?>teachers/teacher">
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/techare.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Teachers Info</p>
    </div></a>
    <a href="<?php echo base_url(); ?>admin/notice">
      <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/clipboard-icon.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Notice</p>
    </div></a>
    <a href="<?php echo base_url(); ?>teachers/successful_student">
    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/images.jpg" class="" style="width:120px; height: 120px;">  
        <p >Successful Student</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/add_subject">
    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Books-512.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Add Subject</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/add_mark">
    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
        <img src="<?php echo base_url(); ?>design/icon/20sided.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Add Mark</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/select_class_attendance">
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Attendance.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Class Attendance</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/search_class_attendance">
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Increase-icon.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">View Attendance</p>
    </div></a>
    <a href="<?php echo base_url(); ?>photos/viewAlbum">
      <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Gallery.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Photo Gallery</p>
    </div></a>
    <a href="<?php echo base_url(); ?>admin/apply_for_leave">
        <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/leave.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Apply Leave</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/upload_info">
        <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Icon_30-512.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Upload</p>
    </div></a>
    <a href="<?php echo base_url(); ?>admin/syllabus">
        <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Edit icon.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Syllabus</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/treasury">
       <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/icon.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">School Treasury</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/accept_fees_page_only_one">
     
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/icon_pricing.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Accept Fees</p>
    </div></a>
    <a href="<?php echo base_url(); ?>studentController/add_rules">
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Notepad.jpg" class="" style="width:120px; height: 120px;">  
        <p class="Name">Add Rules</p>
    </div></a>
        
  
   
   
   
   
    
   
    
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/Syllabus.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Hello Welcome</p>
    </div>
   
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/chart.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Hello Welcome</p>
    </div>
   
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/icon-maintenance.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Hello Welcome</p>
    </div>
    
    
      <a href="<?php echo base_url(); ?>studentController/improvement">
     <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4 maine">
         <img src="<?php echo base_url(); ?>design/icon/image2.png" class="" style="width:120px; height: 120px;">  
        <p class="Name">Class Improve</p>
    </div></a>
  
    
    
</div>




