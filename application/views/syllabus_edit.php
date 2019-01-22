<?php


?>


<form action="<?php echo base_url(); ?>admin/syllabusUpdat.jsp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Edit Syllabus</legend>

            <table class="nostyle">
                <input type="hidden" name="syl_id" value="<?php echo $syllabus->syl_id; ?>">
                <tr>
                    <td>Syllabus Name:</td>
                    <td><input type="text" size="40" name="syl_name" class="input-text" required="1" value="<?php echo $syllabus->syl_name; ?>"/></td>
                </tr>
                <!-- <tr>
                    <td class="va-top">Semester:</td>
                    <td>
                        <select name="sem_id" required="1" class="input-text" >
                            <option value="">---Select Semester---</option>
                            <?php
//                            foreach ($semester_select as $semester) {
                                ?>
                                <option value="<?php // echo $semester->sem_id; ?>"><?php // echo $semester->sem_name; ?></option>
                                <?php
//                            }
                            ?>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td class="va-top">Department:</td>
                    <td>
<select name="dept_id" class="input-text" required="1">
                     <option value="<?php echo $syllabus->dept_id; ?>">
                     <?php 
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
                            
                            
                            
                            ?>
                     
                     </option>
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
                            <option  value="<?php echo $syllabus->prob_id; ?>" selected="selected"><?php echo $syllabus->prob_id; ?></option>
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
                    <td><input type="file" size="40" name="syllabus_pdf" class="input-text" required="1"/>
                        <input type="hidden" size="40" name="syllabus_pdf2" value="<?php echo $syllabus->pdf; ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
