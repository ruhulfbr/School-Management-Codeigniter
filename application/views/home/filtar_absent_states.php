<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$sDate = $_GET['status'];
$aDate = explode("/", $sDate);
$class = $aDate[3];
$student_id = $aDate[2];
$table_id = $aDate[1];
$status = $aDate[0];
$this->db->select('*');
$this->db->from('tbl_stdinfo');
$this->db->where('id', $table_id);
$resultSet = $this->db->get();
$result = $resultSet->row();
$data = array();
$data['student_id'] = $result->student_id;
$data['student_roll'] = $result->roll;
$data['student_name'] = $result->student;
$data['class_name'] = $result->class;
$data['attend_date'] = date('d/m/Y');
$data['student_status'] = $status;
    $this->db->select('*');
                $this->db->from('tbl_attendance');
                $this->db->where('class_name', $class);
                $this->db->where('student_id', $student_id);
                $this->db->where('attend_date',date('d/m/Y'));
                $resultSet = $this->db->get();
                $resulj = $resultSet->row();
if(!empty($resulj)){
     $this->db->set('student_status',$status);
    $this->db->where('student_id', $student_id);
    $this->db->where('attend_date',date('d/m/Y'));
$status=$this->db->update('tbl_attendance'); 
    
}  else {
   $status = $this->db->insert("tbl_attendance", $data);
}



if ($status) {
    ?>
<tr><td colspan="7" style="color: green; font-size: 22px;">
   <?php //  echo 'attendence accepted'.'---'.$student_id; ?>    </td></tr>
    <?php
//    $this->db->select('*');
//    $this->db->from('tbl_stdinfo');
////    $this->db->join('tbl_attendance', 'tbl_attendance.student_id = tbl_stdinfo.student_id');
//    $this->db->where('class', $class);
////    $this->db->where('attend_date',date('d/m/Y'));
//    $resultSet = $this->db->get();
//    $resul = $resultSet->result();
    
        $this->db->select ( '*' );

        $this->db->from('tbl_student_roll');
        $this->db->join('tbl_stdinfo', 'tbl_stdinfo.student_id = tbl_student_roll.student_id');
        $this->db->where ( 'st_class', $class );
        $this->db->where ( 'cl_year', date('Y') );
        $resultSet = $this->db->get ();
       $resul =$resultSet->result(); 
    
    
    ?>
    <?php
    $count = 1;
    foreach ($resul as $sInfo) {
        ?>
        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
            <td style="width: 70px;"><?php echo $count++; ?><input type="hidden" name="student_status[]" value="1"  style="float: right; margin-right: 10px;" />&nbsp;&nbsp;</td>
            <td><?php
                $class = $sInfo->class;
                if ($class == 1) {
                    echo 'Class One';
                } elseif ($class == 2) {
                    echo 'Class Two';
                } elseif ($class == 3) {
                    echo 'Class Three';
                } elseif ($class == 4) {
                    echo 'Class Four';
                } elseif ($class == 5) {
                    echo 'Class Five';
                } elseif ($class == 6) {
                    echo 'Class Six';
                } elseif ($class == 7) {
                    echo 'Class Seven';
                } elseif ($class == 8) {
                    echo 'Class Eight';
                } elseif ($class == 9) {
                    echo 'Class Nine';
                } elseif ($class == 10) {
                    echo 'Class Ten';
                }
                ?>
                <input type="hidden" name="class_name[]"  value="<?php echo $class; ?>">
            </td>
            <td><?php echo $sInfo->student_id; ?>
                <input type="hidden" name="student_id[]"  value="<?php echo $sInfo->student_id; ?>">
            </td>
            <td><?php echo $sInfo->roll; ?>
                <input type="hidden" name="student_roll[]"  value="<?php echo $sInfo->roll; ?>">
            </td>
            <td><?php echo $sInfo->student; ?>
                <input type="hidden" name="student_name[]"  value="<?php echo $sInfo->student; ?>">
            </td>


            <td><?php echo date('d/m/Y'); ?>
                <input type="hidden" name="attend_date[]"  value="<?php echo date('d/m/Y'); ?>">
            </td>
            <!--<td>-->
                <?php
//                $this->db->select('*');
//                $this->db->from('tbl_attendance');
//                $this->db->where('class_name', $class);
//                $this->db->where('student_id', $student_id);
//                $this->db->where('attend_date', date('d/m/Y'));
//                $resultSet = $this->db->get();
//                $resulj = $resultSet->row();
//                echo $resulj->student_status;
//                echo $sInfo->student_status;
                ?>
            <!--</td>-->
            <?php 
              $this->db->select('*');
                            $this->db->from('tbl_attendance');
                            $this->db->where('class_name', $class);
                            $this->db->where('student_id',$sInfo->student_id);
                            $this->db->where('student_roll',$sInfo->roll);
                            $this->db->where('student_name',$sInfo->student);
                            $this->db->where('attend_date', date('d/m/Y'));
                            $resultSet = $this->db->get();
                            $re=$resultSet->row();
            
            ?>
            <td>
                <select name="status" onchange="updat_status(this.value)">
                    
                    <?php 
                     
                    if(!empty($re)){
                    ?>
                    <option value="" style="height: 26px;"><b><?php echo $re->student_status; ?></b></option>
                    <?php }  else {
                    ?>
                     <option>--:Select Status</option>
                <?php } ?>
                    <option value="P/<?php echo $sInfo->id; ?>/<?php echo $sInfo->student_id; ?>/<?php echo $class; ?>">Present</option>
                    <option value="A/<?php echo $sInfo->id; ?>/<?php echo $sInfo->student_id; ?>/<?php echo $class; ?>">Absent</option>
                    <option value="L/<?php echo $sInfo->id; ?>/<?php echo $sInfo->student_id; ?>/<?php echo $class; ?>">leave</option>
                </select>
                <?php 
                if(!empty($re)){
                ?>
                <img src="<?php echo base_url(); ?>design/tick-circle.gif">
                
                <?php } ?>
            </td>
        </tr>



        <?php
    }
}
?>
<tr>
                            <td colspan="7">
                                <input type="submit" value="All Present" class="input-submit">
                            </td>
                        </tr>