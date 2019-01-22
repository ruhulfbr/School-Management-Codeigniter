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
<style type="text/css">
    .faq-cat-content {
    margin-top: 25px;
}

.faq-cat-tabs li a {
    padding: 15px 10px 15px 10px;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    color: #777777;
}

.nav-tabs li a:focus,
.panel-heading a:focus {
    outline: none;
}

.panel-heading a,
.panel-heading a:hover,
.panel-heading a:focus {
    text-decoration: none;
    color: #777777;
}

.faq-cat-content .panel-heading:hover {
    background-color: #efefef;
}

.active-faq {
    border-left: 5px solid #888888;
}

.panel-faq .panel-heading .panel-title span {
    font-size: 18px;
    font-weight: normal;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $('.collapse').on('show.bs.collapse', function() {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-faq');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-minus"></i>');
    });
    $('.collapse').on('hide.bs.collapse', function() {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-faq');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-plus"></i>');
    });
});
</script>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab"><b style="color: #661346; font-size: 19px;">Search Student Information</b></a></li>
                <li><a href="#faq-cat-2" data-toggle="tab"><b style="color: #661346; font-size: 19px;">Search Student Attendance</b></a></li>
            </ul>
    
            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                       <!--<label style="margin-top: 10px;"><h3></h3></label>-->
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
       
                      
                        
                        
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                    
<!--//  $( ".selector" ).datepicker({ dateFormat: 'dd-mm-yy' });-->
  <!--</script>-->
  <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
  
  
                       <form action="<?php echo base_url(); ?>home/search_student_attendance" method="post" enctype="multipart/form-data">
  
          
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
                </tr>
                <tr>
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
                </tr>
                 <tr>
                    <td style="text-align: right;font-size: 20px;">Date:</td>
                    <td>
                        <input type="text"  name="attend_date" required="1" class="form-control" id="datepicker">
                      
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Search" class="btn btn-default">
                    </td>
                </tr>
               
                
            </table>
</form>
        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
          </div>
        </div>
  









