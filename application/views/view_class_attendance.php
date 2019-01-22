<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
     <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
<fieldset>
    <legend>Student Class For Attendance</legend>
    <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>studentController/view_class_attendance" method="post">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
          
            <tr>
                <td>Select Class:</td>
                <td><select name="class_name" class="input-text">
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
                    
                    
                    <!--<input type="text" name="password" class="input-text" required="1" size="40">-->
                    </td>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="text" name="attend_date" id="datepicker"  class="input-text">
                    </td>
             <td><input type="submit" value="Search" class="input-submit"></td>
            
            
            </tr>
           
        </table>
    </form>

    
    
    <br>
    <br>
    <label style="color: #4D0033; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Student Attendance</label>
    <table class="table table-bordered" style="border-color: #4D0033">
    <tr>
        <th>Student Id:</th> 
        <th>Student Roll:</th> 
         <th>Student Name:</th> 
          <th>Class Name:</th> 
          <th>Attend Date:</th> 
           <th>Attendance:</th> 
        
    </tr>
    <?php
    foreach ($result as $sInfo){
    ?>
    <tr>
        <td><?php echo $sInfo->student_id; ?></td>
        <td><?php echo $sInfo->student_roll; ?></td>
        <td><?php echo $sInfo->student_name; ?></td>
         <td><?php echo $sInfo->class_name; ?></td>
          <td><?php echo $sInfo->attend_date; ?></td>
          <td><?php echo $absence=$sInfo->student_status;
          if($absence=='A'){
              ?>
              <a href="<?php echo base_url(); ?>studentController/send_mess"><button>Send</button></a>
              <?php
          }
          
          ?></td>
    </tr>
    <?php } ?>
</table>
    
    
    </fieldset>
    </div>