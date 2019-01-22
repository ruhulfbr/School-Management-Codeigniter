<?php 
if(isset($edit)){
    ?>
 <fieldset>
    <legend>Update Successful Student</legend>
    
    <form action="<?php echo base_url(); ?>teachers/updat_successful_student_info" method="post"  enctype="multipart/form-data">
        
        <table class="nostyle">
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="sts_Name" value="<?php echo $edit->sts_Name ; ?>" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Current Position:</td>
                <td>

                    <input type="text" name="current_position" value="<?php echo $edit->current_position; ?>" class="input-text" required="1" size="40"></td>
            <input type="hidden" name="sts_photo2" value="<?php echo $edit->sts_photo ; ?>" class="input-text" required="1" size="40"></td>
            <input type="hidden" name="ss_id" value="<?php echo $edit->ss_id ; ?>" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Session:</td>
                <td><input type="text" name="sts_session" value="<?php echo $edit->sts_session; ?>" class="input-text" required="1" size="40"></td>
            </tr>
            
            <tr>
                <td class="va-top">comment:</td>
                <td><textarea rows="2" cols="37" name="comment" class="input-text" required="1" size="40">
<?php 
                            echo $edit->comment;
?>

                    </textarea></td>
            </tr>

            <tr>
                <td>
                    Student Image:
                </td>
                <td>
                    <input type="file"  name="sts_photo">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" class="input-submit"></td>
            </tr>
        </table>
    </form>
</fieldset>  



<?php
}  else {
?>


<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Successful Student</span></a></li>
        <li><a href="#tab02"><span>Create New Successful Student</span></a></li>
    </ul>
</div> <!-- /tabs -->
<!-- Tab01 -->
<div id="tab01">
   <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>

    <div class="module-table-body">
        <form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Student Name</th>
                        <th>Current Position</th>
                    <th>Session</th>                        
                        <th>Student Photo</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($result as $sInfo) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $sInfo->sts_Name; ?></td>
                            
                        <td><?php echo $sInfo->current_position; ?></td>
                        <td><?php echo $sInfo->sts_session; ?></td>
                            <td>
                                <img src="<?php echo base_url().$sInfo->sts_photo; ?>" style="width: 60px;height: 60px;">
                            </td>
                            
                            <td>
                              <a href="<?php echo base_url(); ?>teachers/edit_successful_student/<?php echo $sInfo->ss_id;  ?>">
                                <div style="padding: 4px; background-color: #EEE; border:#CCC 1px solid; float: left">Edit</div>
                                </a> &nbsp;&nbsp;
                                <a href="<?php echo base_url(); ?>teachers/delete_successful_student/<?php echo $sInfo->ss_id;  ?>">
                                <div style="padding: 4px; background-color: #EEE; border:#CCC 1px solid; float: left; margin-left: 5px;">Delete</div>
                                </a> &nbsp;&nbsp;
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
  <fieldset>
    <legend>Add Successful Student</legend>
    
    <form action="<?php echo base_url(); ?>teachers/successful_student_info" method="post"  enctype="multipart/form-data">
        
        <table class="nostyle">
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="sts_Name" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Current Position:</td>
                <td>

                    <input type="text" name="current_position" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td>Session:</td>
                <td><input type="text" name="sts_session" class="input-text" required="1" size="40"></td>
            </tr>
            
            <tr>
                <td class="va-top">comment:</td>
                <td><textarea rows="2" cols="37" name="comment" class="input-text" required="1" size="40"></textarea></td>
            </tr>

            <tr>
                <td>
                    Student Image:
                </td>
                <td>
                    <input type="file"  name="sts_photo" required="1">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" class="input-submit"></td>
            </tr>
        </table>
    </form>
</fieldset>  

    

</div> <!-- /tab02 -->


<?php } ?>









