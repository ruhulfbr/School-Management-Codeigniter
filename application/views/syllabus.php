<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Syllabus</span></a></li>
        <li><a href="#tab02"><span>Create New Syllabus</span></a></li>
    </ul>
</div> <!-- /tabs -->
<!-- Tab01 -->
<div id="tab01">
    <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>

    <div class="module-table-body">
        <form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Syllabus Name</th>
                        <th>Class Name</th>
                    <th>Session</th>                        
                        <th>PDF</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($syllabus_select as $syllabus) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $syllabus->syl_name; ?></td>
                            <td><?php 
                            $cls=$syllabus->dept_id;
                            if($cls==1){
                                echo 'Class One'; 
                            }elseif ($cls==2) {
                             echo 'Class Two'; 
                        }elseif ($cls==3) {
                             echo 'Class Three'; 
                        }elseif ($cls==4) {
                             echo 'Class Four'; 
                        }elseif ($cls==5) {
                             echo 'Class Five'; 
                        }elseif ($cls==6) {
                             echo 'Class Six'; 
                        }elseif ($cls==7) {
                             echo 'Class Seven'; 
                        }elseif ($cls==8) {
                             echo 'Class Eight'; 
                        }elseif ($cls==9) {
                             echo 'Class Nine'; 
                        }
                        elseif ($cls==10) {
                             echo 'Class Ten'; 
                        }
                            
                            
                            
                            ?></td>
                        <td><?php echo $syllabus->prob_id; ?></td>
                            <td><a href="<?php echo base_url() . 'user_upload/syllabus/' . $syllabus->pdf; ?>"><?php echo $syllabus->pdf; ?></a></td>
                            
                            <td>
                                <input type="checkbox" />
                                <a href="<?php echo base_url(); ?>Admin/syllabus_edit/<?php echo $syllabus->syl_id;  ?>"><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/balloon.gif" width="16" height="16" alt="comments" /></a>
                                &nbsp; <a href="<?php echo base_url(); ?>Admin/syllabus_delete/<?php echo $syllabus->syl_id;  ?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </form>
       
     
    </div> <!-- End .module-table-body -->
</div> <!-- /tab01 -->

<!-- Tab02 -->
<div id="tab02">
    <script>
        function new_providhanCreate() {
            var new_prov = prompt('Give a New Providhan name');
            if (new_prov != '') {
                document.getElementById('new_providhan').innerHTML = new_prov;
                document.getElementById('new_providhan').value = new_prov;
            } else {
                alert("Don't Allow Null Value");
            }
        }
    </script>

    <form action="<?php echo base_url(); ?>admin/syllabusAdd.jsp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Syllabus</legend>

            <table class="nostyle">
                <tr>
                    <td>Syllabus Name:</td>
                    <td><input type="text" size="40" name="syl_name" class="input-text" required="1"/></td>
                </tr>
               
                <tr>
                    <td class="va-top">Class:</td>
                    <td>
<select name="dept_id" class="input-text" required="1">
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


<!-- 
                        <select name="dept_id" class="input-text" required="1">
                            <option value="">----Select Department---</option>
                            <?php
                            foreach ($department_select as $department) {
                                ?>
                                <option value="<?php echo $department->dept_id; ?>"><?php echo $department->dept_code . ' (' . $department->dept_name . ')'; ?></option>
                                <?php
                            }
                            ?>
                        </select> -->
                    </td>
                </tr>
                <tr>
                    <td class="va-top">Session:</td>
                    <td>
                        <select name="prob_id" required="1" class="input-text">
                        <option  value="" selected="selected">--: Select Session :--</option>
                            <?php
                            for($i=date('Y'); $i>=2000; $i--){
                                ?>
 <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php    } ?>
                        
                            <!-- <option value="" id="new_providhan" onclick="new_providhanCreate()">Create New</option> -->
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>PDF file:</td>
                    <td><input type="file" size="40" name="syllabus_pdf" class="input-text" required="1"/></td>
                </tr>
<!--                <tr>
                    <td>Select Type:</td>
                    <td>
                      <select class="input-text" name="s_type" required="1">
                            <option value="">--: Select Type :-- </option>
                            <option value="class-routine">Class Routine</option>
                            <option value="exam-routine">Exam Routine</option>
                            <option value="yearly-leave-calendar">Yearly Leave Calendar</option>
                        </select>
                        
                    </td>
                </tr>-->
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>


</div> <!-- /tab02 -->
