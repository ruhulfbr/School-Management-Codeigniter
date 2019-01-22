

<form action="<?php echo base_url(); ?>studentController/select_class_result" method="post" enctype="multipart/form-data">
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
        
      <?php if(isset($result)){ ?> 

<table>
    <tr>
        <td>S/l</td>
        <td>Student Roll</td>
        <td>Student ID</td>
        
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
        <td><?php echo $i++; ?></td>
        <td><?php echo $rInfo->student_roll; ?></td>
        <td><?php echo $rInfo->Student_id; ?></td>
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




      <?php } ?>
        