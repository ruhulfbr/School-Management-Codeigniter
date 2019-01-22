<style type="text/css">
    .popUpDiv{
        height: auto;
        position: relative;
        box-shadow: 2px 5px 15px gray;
        /*top: 50px;*/
        margin-top: 20px;
        background: white;
        float: right;
    }
</style>
<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>Department's</span></a></li>
        <li><a href="#tab02"><span>Semester's</span></a></li>
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
        <table id="myTable" width="980">
            <tr>
                <th>S/L</th>
                <th>Department Code</th>
                <th>Department Name</th>
                <th>Department Head</th>
                <th>Action</th>
            </tr>
            <?php
            $count = 1;
            foreach ($dept_select as $dept) {
                ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $dept->dept_code; ?></td>
                    <td><?php echo $dept->dept_name; ?></td>
                    <td><?php echo $dept->dept_head; ?></td>
                    <td>
                        <a href=""><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                        <a href="<?php echo base_url();?>admin/deleteDept/<?php echo $dept->dept_id;?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div> <!-- End .module-table-body -->

    <form action="<?php echo base_url(); ?>admin/departmentAdd.jsp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Department</legend>
            <table class="nostyle">
                <tr>
                    <td>Department Code</td>
                    <td><input type="text" size="40" name="dept_code" class="input-text" required="1"/></td>
                </tr>
                <tr>
                    <td>Department Name:</td>
                    <td>
                        <input type="text" size="40" name="dept_name" class="input-text" required="1"/>
                    </td>
                </tr>
                <tr>
                    <td>Department Head:</td>
                    <td><input type="text" size="40" name="dept_head" class="input-text" required="1"/></td>
                </tr>
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div><!-- /tab01 -->

<!-- Tab02 -->
<div id="tab02">
    <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>
    <div class="module-table-body">
        <table id="myTable" class="tablesorter" width="280">

            <tr>
                <th>S/L</th>
                <th> Semester Name</th>
                <th> Action</th>
            </tr>
            <?php
            $count = 1;
            foreach ($sem_select as $sem) {
                ?>
                <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $sem->sem_name; ?></td>
                    <td>
                        <a href=""><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                           <a href="<?php echo base_url();?>admin/deleteSem/<?php echo $sem->sem_id;?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div> <!-- End .module-table-body -->

    <form action="<?php echo base_url(); ?>admin/semesterAdd.jsp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Semester</legend>
            <table class="nostyle">
                <tr>
                    <td>Semester Name</td>
                    <td><input type="text" size="40" name="sem_name" class="input-text" required="1"/></td>
                </tr>
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div> <!-- /tab02 -->
