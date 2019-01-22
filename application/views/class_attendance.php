
 <script>
            function updat_status(str)
            {
                if (str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "<?php echo base_url(); ?>studentController/updat_class_present_status?status=" + str, true);
                xmlhttp.send();
            }
        </script>










<fieldset>
    <legend>Select Class For Attendance</legend>
    <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>studentController/select_class_student" method="post">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
          
            <tr>
                <td>Select Class:</td>
                <td><select name="class" class="input-text">
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
             <td><input type="submit" value="Search" class="input-submit"></td>
            
            
            </tr>
           
        </table>
    </form>
    <br>
    <br>
    
</fieldset>

 <div class="module-table-body">
     <form action="<?php echo base_url(); ?>index.php/studentController/insert_attendance"  method="POST">
         <!--<input type="hidden" name="row"  value=" <?php echo $row; ?>">-->
         <table id="myTable" class="tablesorter" width="840">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Class</th>
                        <th>Student ID</th>
                        <th>Student Roll</th>
                        <th>Student Name</th>
<!--                        <th>Exam Fees</th>
                        <th>Month Fees</th>
                        <th>Extra Fees</th>-->
                        <th>Date</th>
                        <th>Attendance</th>
                     
                    </tr>
                </thead>
                <tbody id="txtHint">
                    <?php
                    $count = 1;
                    foreach ($resul as $sInfo) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td style="width: 70px;"><?php echo $count++; ?><input type="hidden" name="student_status[]" value="P"  style="float: right; margin-right: 10px;" />&nbsp;&nbsp;</td>
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
                            ?>
                                <input type="hidden" name="class_name[]"  value="<?php echo $class; ?>">
                            </td>
                            <td><?php  echo $sInfo->student_id;?>
                             <input type="hidden" name="student_id[]"  value="<?php  echo $sInfo->student_id;?>">
                            </td>
                            <td><?php  echo $sInfo->roll;?>
                            <input type="hidden" name="student_roll[]"  value="<?php  echo $sInfo->roll;?>">
                            </td>
                            <td><?php  echo $sInfo->student;?>
                            <input type="hidden" name="student_name[]"  value="<?php  echo $sInfo->student;?>">
                            </td>
<!--                            <td><?php echo $exam->Exam_fee; ?></td>
                            <td><?php echo $month->month_fee; ?></td>
                            <td><?php echo $extra->Extra_free; ?></td>-->
                           
                            <td><?php echo date('d/m/Y'); ?>
                                 <input type="hidden" name="attend_date[]"  value="<?php echo date('d/m/Y'); ?>">
                             </td>
                             <td>
                                 <select name="status" onchange="updat_status(this.value)" class="input-text">
                                     <option>--:Select Status</option>
                                     <option value="P/<?php echo $sInfo->id; ?>/<?php echo $sInfo->student_id; ?>/<?php echo $class; ?>">Present</option>
                                     <option value="A/<?php echo $sInfo->id; ?>/<?php echo $sInfo->student_id; ?>/<?php echo $class; ?>">Absent</option>
                                     <option value="L/<?php echo $sInfo->id; ?>/<?php echo $sInfo->student_id; ?>/<?php echo $class; ?>">leave</option>
                                 </select>
                             </td>
                        </tr>
                        <?php
                    }
                    ?>
                        <tr>
                            <td colspan="10">
                                <input type="submit" value="All Present" class="input-submit">
                            </td>
                        </tr>
                </tbody>
            </table>
        </form>
       
    </div> <!-- End .module-table-body -->
