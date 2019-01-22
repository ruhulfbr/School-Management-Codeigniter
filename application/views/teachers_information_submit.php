
<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Teachers</span></a></li>
        <li><a href="#tab02"><span>Create New Teachers</span></a></li>
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
                        <th>Teacher</th>
                        <th>Email</th>
                    <th>Phone</th>                        
                        <th>Designation</th>                        
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($result as $TcInfo) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $TcInfo->full_name; ?></td>
                            <td><?php echo $TcInfo->email; ?></td>
                            <td><?php echo $TcInfo->mobile_no; ?></td>
                           
                        <td><?php echo $TcInfo->type; ?></td>
                        <td><a href="<?php echo base_url() .$TcInfo->teacher_img; ?>"><img src="<?php echo base_url() .$TcInfo->teacher_img; ?>"  style="width: 20px; height: 20px;"></a></td>
                        <td>
                            <?php 
                            $st=$TcInfo->status;
                            if($st=='Active'){
                                ?>
                            <img src="<?php echo base_url(); ?>design/notification-tick.gif">
                            <?php
                            }  else {
                            ?>
                            <img src="<?php echo base_url(); ?>design/ico-warning.gif">
                                
                           <?php 
                           }
                            ?>
                            
                        </td>
                            <td>
                                <!--<input type="checkbox" />-->
                                <a href="<?php echo base_url(); ?>teachers/update_status/<?php echo $TcInfo->id;  ?>/Active">Active</a> || 
                                <a href="<?php echo base_url(); ?>teachers/update_status/<?php echo $TcInfo->id;  ?>/In_Active">In Active</a>
<!--                                <a href=""><img src="<?php echo base_url(); ?>design/balloon.gif" width="16" height="16" alt="comments" /></a>
                                &nbsp; <a href="<?php echo base_url(); ?>Admin/syllabus_delete/<?php echo $syllabus->syl_id;  ?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>-->
                           
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
<fieldset>
    <legend>Stuff Information submit here!</legend>
    <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>teachers/submit_info" method="post"  enctype="multipart/form-data">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="full_name" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Designation:</td>
                <td>
<!--                    <select name="designation" class="input-text" required="1">
                        <option value="">--: Select Designation :--</option>
                    
                    </select>-->
                    <input type="text" name="designation" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="text" name="mobile_no" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td class="va-top">Address:</td>
                <td><textarea rows="2" cols="37" name="address" class="input-text" required="1" size="40"></textarea></td>
            </tr>

            <tr>
                <td>Type:</td>
                <td>
                    <select name="type" class="input-text" required="1">
                        <option value=" ">--Type--</option>
                            <!--<option value="Principle">Principle</option>-->
                        <!--<option value="Teacher">Teacher</option>-->
                        
                        <option value="Principal">Principal</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Office Staff">Office Staff</option>
                       <option value="Lab_Assis/Tr">Lab Assis/Tr</option>
                        <!--<option value="MLSS">MLSS</option>-->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status:</td> 
                <td>
                    <select name="status" class="input-text" required="1">
                        <option value=" ">--Type--</option>
                        <option value="Active">Active</option>
                        <option value="In_Active">In Active</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="va-top">Subject:</td>
                <td><input name="objectives" class="input-text" required="1" size="40"/></td>
            </tr>
            <tr>
                <td>
                    Teacher Image:
                </td>
                <td>
                    <input type="file"  name="teacher_img" required="1">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SEND" class="input-submit"></td>
            </tr>
        </table>
    </form>
</fieldset>



</div> <!-- /tab02 -->



















