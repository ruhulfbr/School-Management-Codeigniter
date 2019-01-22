<?php
 $class=$_GET['class'];
    $this->db->select ( '*' );
        $this->db->from ('tbl_subject');
        $this->db->where ( 'class', $class );
        $resultSet = $this->db->get ();
       $result=$resultSet->result();
       ?>
<form action="<?php echo base_url(); ?>studentController/insert_subject_mark" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Mark Insert Form</legend>

            <table class="nostyle" style="margin-top: 20px; margin-bottom: 20px;" align="center">
                <tr>
                    <td>Student ID</td>
                    <td><input type="text"  name="Student_id" class="input-text"></td>
                </tr>    
                <tr>
                    <td>Roll Number</td>
                    <td>
                        <input type="text"  name="student_roll" class="input-text"></td>
                <input type="hidden" name="class" value="<?php echo $class; ?>">
                </tr>    
                <tr>
                    <td>Select Year</td>
                    <td><select name="year" class="input-text"  style="width: 200px;">
                            <option value="">select Year</option>
                            <?php 
                            $y=date('Y');
                            for($i=$y;$i>1990;$i--){
                                ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                           <?php } ?>
                        </select></td>
                </tr> 
                <tr>
                    <td>Select Exam Term</td>
                    <td><select name="exam_term" class="input-text"  style="width: 200px;">
                            <option value="">select Year</option>
                            <option value="1">First Term</option>
                            <option value="2">Second Term</option>
                            <option value="3">Third Term</option>
                          
                        </select></td>
                </tr> 
                <tr> <td colspan="2"></td></tr>
                <tr> <td colspan="2"></td></tr>
                <tr> <td colspan="2"></td></tr>
<?php 
$i=1;
       foreach ($result as $sInfo){
      ?>
  <tr>
      <td><?php   echo $sInfo->subject_name;?></td>
      <td>
          <input type="text" name="subject<?php echo $i++; ?>" class="input-text">
      </td>
         </tr>
     <?php  } ?>
         <tr>
             <td></td>
             <td>
                 <input type="submit" value="Save" class="input-text" style="height: 40px; width: 70px; text-align: center">
             </td>
         </tr>
                
            </table>
        </fieldset>
    </form>