<?php 

 $student_id_fees=$_GET['st_id'];

     $sDate=$student_id_fees;
$aDate = explode("=", $sDate);
 $class_name= $aDate[1];

 $student_id_fee = $aDate[0];
       $this->db->select ( '*' );
        $this->db->from ('tbl_month_fee');
        $this->db->where ('student_id_fee',$student_id_fee);
         // $this->db->where ('active_s','1');
        $this->db->where ('month_date >=',date('01/m/Y'));
          $this->db->where ('month_date <=',date('t/m/Y'));
        $query = $this->db->get ();
       $feess=$query->row(); 
       if(empty($feess)){
        $data=array();
        $data['student_id_fee']=$student_id_fee;
         $data['month_date']=date('d/m/Y');
        $data['fee_momth_status']=1;
         $status=$this->db->insert("tbl_month_fee",$data);
         // echo 'insert ok';

       }
       // else{
       //  echo 'no';
       // }




        $data['class_name'] =$class_name;
         $class =$class_name;
        $result=$this->info_model->select_student_for_fees($data);
         $month= $this->info_model->select_student_fees_month($class);
     $exam= $this->info_model->select_student_fees_exam($class);
     $extra= $this->info_model->select_student_fees_extra($class);
?>
<table class="table table-bordered" style="border-color: #4D0033">
    <tr>
        <th>Student Id</th> 
        <th>Student Roll</th> 
         <th>Student Name</th> 
          <th>Class Name</th> 
          <th>Month Fees</th> 
           <th>Exam Fees</th> 
            <th>Action</th> 
        
    </tr>
  <?php
    foreach ($result as $sInfo){
    ?>
    <tr>
        <td><?php echo $sInfo->student_id; ?></td>
        <td><?php echo $sInfo->roll; ?></td>
        <td><?php echo $sInfo->student; ?></td>
         <td><?php 
 $class=$sInfo->class;
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


         ?></td>
          <td><?php
$student_id_fee=$sInfo->student_id;
        $this->db->select ( '*' );
        $this->db->from ('tbl_month_fee');
        $this->db->where ('student_id_fee',$student_id_fee);
       
        $this->db->where ('month_date >=',date('01/m/Y'));
          $this->db->where ('month_date <=',date('t/m/Y'));
        $query = $this->db->get ();
       $feess=$query->row(); 
       if(!empty($feess)){ ?>
<img src="<?php echo base_url(); ?>design/tick-circle.gif">
<?php 
       }else{
         echo $month->month_fee; 
       }


          ?></td>
          <td><?php 
$student_id_fee=$sInfo->student_id;
 $this->db->select ( '*' );
        $this->db->from ('tbl_exam_fee');
        $this->db->where ('student_exam_fee_id',$student_id_fee);
     
        $this->db->where ('exam_fee_date >=',date('01/m/Y'));
          $this->db->where ('exam_fee_date <=',date('t/m/Y'));
        $query = $this->db->get ();
       $feess=$query->row(); 
 if(!empty($feess)){ ?>
<img src="<?php echo base_url(); ?>design/tick-circle.gif">
<?php 
       }else{
         echo $exam->Exam_fee;
       }



           ?></td>

          <td>
        <button value="<?php echo $sInfo->student_id;   ?>=<?php echo $sInfo->class;?>" class="input-submit" onclick="pray_month_fee(this.value)">Accept</button>&nbsp;||&nbsp;
              <button value="<?php echo $sInfo->student_id;?>=<?php echo $sInfo->class;?>" class="input-submit" onclick="pray_exam_fee(this.value)">Accept</button>
          </td>
    </tr>
    <?php } ?>
    </table>