<!--//  $( ".selector" ).datepicker({ dateFormat: 'dd-mm-yy' });-->
  <!--</script>-->

  <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $(".datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="<?php echo base_url(); ?>home/student_attandance_info" method="POST">
    <table style="margin-top: 10px; margin-bottom: 10px;">
        <tr>
            <td>
                Search Attendance  &nbsp;   
            </td>
            <td>
               <input type="text" class="form-control datepicker"  name="datet"> 
            </td>
            <td> To:&nbsp; </td>
            <td>
               <input type="text" class="form-control datepicker"  name="datet2" id=""> 
            </td>
            <td>
                <input type="submit" name="" value="Search" >
            </td>
        </tr>
    </table>
    </form>
    </div>
 


<?php
      
$query = $this->db->select('class_name,attend_date, COUNT(at_id) as total')
        ->from('tbl_attendance')
        ->where ('student_status','P')
        ->where ('attend_date >=',$date)
        ->where ('attend_date <=',$date2)
        ->group_by('class_name')
        ->get();

?>
<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 8px; margin-top: 10px; margin-bottom: 10px; background-color: #EEE;  font-size: 22px;">Present</label>
<table class="table table-bordered">
   <thead style="background-color: #661346; color: white">
        <tr>
            <td>S/L</td>
            <td>Date</td>
            <td>Class Name</td>
            <td>Present</td>
          
        </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;
        foreach($query->result() as $value){
  $i++;
   
        ?>
        <tr>
            <td>
                <?php 
                  echo $i;
                ?>
            </td>   
            <td>
                <?php 
                  echo $value->attend_date;
                ?>
            </td>   
            <td>
                <?php
                       $class=$value->class_name;
                           if($class==1){
                               echo 'Class One';
                           }elseif ($class==2) {
                               echo 'Class Two';
                           }elseif ($class==3) {
                               echo 'Class Three';
                           }elseif ($class==4) {
                               echo 'Class Four';
                           }elseif ($class==5) {
                               echo 'Class Five';
                           }elseif ($class==6) {
                               echo 'Class Six';
                           }elseif ($class==7) {
                               echo 'Class Seven';
                           }elseif ($class==8) {
                               echo 'Class Eight';
                           }elseif ($class==9) {
                               echo 'Class Nine';
                           }elseif ($class==10) {
                               echo 'Class Ten';
                           }
                            ?>
            </td>   
            <td>
                <?php 
                  echo $value->total;
                ?>
            </td>   
            
        </tr>
        <?php

}
 
//        $result['result2']=$query->row();
?>
    </tbody>
</table>




<?php
       
$query = $this->db->select('class_name, COUNT(at_id) as total')
        ->from('tbl_attendance')
        ->where ('student_status','A')
          ->where ('attend_date',$date)
        ->group_by('class_name')
        ->get();

?>
<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 8px; margin-top: 10px; margin-bottom: 10px; background-color: #EEE;  font-size: 22px;">Absence</label>
<table class="table table-bordered">
     <thead style="background-color: #661346; color: white">
        <tr>
            <td>S/L</td>
            <td>Class Name</td>
           
            <td>Absence</td>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;
        foreach($query->result() as $value){
  $i++;
   
        ?>
        <tr>
            <td>
                <?php 
                  echo $i;
                ?>
            </td>   
            <td>
                
                <?php
                       $class=$value->class_name;
                           if($class==1){
                               echo 'Class One';
                           }elseif ($class==2) {
                               echo 'Class Two';
                           }elseif ($class==3) {
                               echo 'Class Three';
                           }elseif ($class==4) {
                               echo 'Class Four';
                           }elseif ($class==5) {
                               echo 'Class Five';
                           }elseif ($class==6) {
                               echo 'Class Six';
                           }elseif ($class==7) {
                               echo 'Class Seven';
                           }elseif ($class==8) {
                               echo 'Class Eight';
                           }elseif ($class==9) {
                               echo 'Class Nine';
                           }elseif ($class==10) {
                               echo 'Class Ten';
                           }
                            ?>
            </td>   
            <td>
                <?php 
                  echo $value->total;
                ?>
            </td>   
             
        </tr>
        <?php

}
 
//        $result['result2']=$query->row();
?>
    </tbody>
</table>




<?php
       
$query = $this->db->select('class_name, COUNT(at_id) as total')
        ->from('tbl_attendance')
        ->where ('student_status','L')
          ->where ('attend_date',$date)
        ->group_by('class_name')
        ->get();

?>
<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 8px; margin-top: 10px; margin-bottom: 10px; background-color: #EEE;  font-size: 22px;">Leave</label>
<table class="table table-bordered">
    <thead style="background-color: #661346; color: white">
        <tr>
            <td>S/L</td>
            <td>Class Name</td>
          
            <td>Leave</td>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;
        foreach($query->result() as $value){
  $i++;
   
        ?>
        <tr>
            <td>
                <?php 
                  echo $i;
                ?>
            </td>   
            <td>
                 <?php
                       $class=$value->class_name;
                           if($class==1){
                               echo 'Class One';
                           }elseif ($class==2) {
                               echo 'Class Two';
                           }elseif ($class==3) {
                               echo 'Class Three';
                           }elseif ($class==4) {
                               echo 'Class Four';
                           }elseif ($class==5) {
                               echo 'Class Five';
                           }elseif ($class==6) {
                               echo 'Class Six';
                           }elseif ($class==7) {
                               echo 'Class Seven';
                           }elseif ($class==8) {
                               echo 'Class Eight';
                           }elseif ($class==9) {
                               echo 'Class Nine';
                           }elseif ($class==10) {
                               echo 'Class Ten';
                           }
                            ?>
            </td>   
            <td>
                <?php 
                  echo $value->total;
                ?>
            </td>   
              
        </tr>
        <?php

}
 
//        $result['result2']=$query->row();
?>
    </tbody>
</table>


