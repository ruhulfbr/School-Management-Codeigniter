

<form action="<?php echo base_url(); ?>studentController/select_one_student_result" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>View Subject In Class</legend>
  <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>

            <table class="nostyle" style="margin-top: 20px; margin-bottom: 20px;" align="center">
                <tr>
                    <td class="va-top">Select Class</td>
                    <td>
                        <select name="class" required="1" class="input-text"  onchange="showsubject(this.value)">
                        <option value="">---Select Semester---</option>
                       
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
           <td>Select Exam Term</td>
                    <td><select name="exam_term" class="input-text"  style="width: 200px;">
                            <option value="">select Year</option>
                            <option value="1">First Term</option>
                            <option value="2">Second Term</option>
                            <option value="3">Third Term</option>
                          
                        </select></td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td><input type="text" name="student_id" class="input-text"></td>
                    <td>Select Year</td>
                    <td><select name="year" class="input-text">
                            <option value="">--:select Year:--</option>
                            <?php for($i=2005;$i<=date('Y');$i++){ ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select></td>
                        <td>
                            <input type="submit" value="Search">
                        </td>
                </tr>
                
            </table>
        </fieldset>
    </form>
<style type="text/css">
    .imdh{
      background: url("<?php echo base_url(); ?>logo/result2.jpg") no-repeat; 
    }
    .h{
        border: 0px;
    }
</style>
      <?php if(isset($result)){ ?> 
<div id="trans" class="imdh" style="width: 100%; height:920px; margin: 0x auto; ">
    <div style="width: 60%; float: left; margin-top: 200px; margin-left: 100px;">
      <?php 
        $this->db->select ( '*' );
        $this->db->from ('tbl_stdinfo');
        $this->db->where ( 'student_id',$student_id );
        $resultSet = $this->db->get ();
        $resul=$resultSet->row();
      
      ?>
        <table style="border: 0px; float: left">
           
            <tr>
                <td style="border: 0px;" class="h">Student Name:</td>
                <td style="border: 0px;"><?php echo $resul->student; ?></td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">Father Name:</td>
                <td style="border: 0px;"><?php echo $resul->father; ?></td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">Mother Name:</td>
                <td style="border: 0px;"><?php echo $resul->mother; ?></td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">Student ID:</td>
                <td style="border: 0px;"><?php echo $resul->student_id; ?></td>
            </tr>
           
        </table>
        
        <table style="border: 0px; float: right">
             <tr style="background-color: #EEE">
                 <th style="background-color: #EEE; color: black">Letter Grade</th>
                <th style="background-color: #EEE; color: black">Class Interval</th>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">A+:</td>
                <td style="border: 0px;">80-100</td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">A</td>
                <td style="border: 0px;">70-79</td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">A-</td>
                <td style="border: 0px;">60-69</td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">B</td>
                <td style="border: 0px;">50-59</td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">C</td>
                <td style="border: 0px;">40-49</td>
              
            </tr>
            <tr>
                <td style="border: 0px;" class="h">D</td>
            
                <td style="border: 0px;">33-39</td>
            </tr>
            <tr>
                <td style="border: 0px;" class="h">F</td>
            
                <td style="border: 0px;">0-32</td>
            </tr>
           
        </table>
        
        <br><br>
        <table style="width: 100%;">
    <tr>
    
        
        <?php
          $this->db->select ( '*' );
        $this->db->from ('tbl_subject');
        $this->db->where ( 'class', $class);
       
        $resultSet = $this->db->get ();
        $subject=$resultSet->result();
          $this->db->select ( '*' );
        $this->db->from ('tbl_subject');
        $this->db->where ( 'class', $class);
       
        $resultSet = $this->db->get ();
        $num=$resultSet->num_rows();
        foreach ($subject as $sInfo){
            ?>
        <td><?php echo $sInfo->subject_name; ?></td>
        <?php
        }
        
        ?>
    </tr>
    <?php 
    $i=1;
    foreach ($result as $rInfo){ ?>
    <tr>
       
        <?php for($t=1;$t<=14;$t++){ 
            $sl='subject'.$t;
            $suj=$rInfo->$sl;
            if(!$suj=='0' && !empty($suj) ){
            ?>
         <td><?php echo $suj+$t; ?></td>
            <?php } } ?>
    </tr>
    <?php } ?>
</table>
    </div>
    
    
</div>





      <?php } ?>
        