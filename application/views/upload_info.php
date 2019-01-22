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
                        <th> Name</th>
                        <th>Type</th>
                    <th>upload Date</th>                        
                        <th>PDF</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($re as $upInfo) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $upInfo->up_name; ?></td>
                            
                        <td><?php echo $upInfo->up_type; ?></td>
                        <td><?php echo $upInfo->up_date; ?></td>
                            <td><a href="<?php echo base_url() . $upInfo->up_pdf; ?>"><?php echo $upInfo->up_pdf; ?></a></td>
                            
                            <td>
                               
                                &nbsp; <a href="<?php echo base_url(); ?>studentController/upload_delete/<?php echo $upInfo->up_id;  ?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>
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

    <form action="<?php echo base_url(); ?>studentController/insert_upload.jsp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Syllabus</legend>

            <table class="nostyle">
                <tr>
                    <td>Upload Name:</td>
                    <td><input type="text" size="40" name="up_name" class="input-text" required="1"/></td>
                </tr>
               
               <tr>
                    <td>PDF file:</td>
                    <td><input type="file" size="40" name="up_pdf" class="input-text" required="1"/></td>
                </tr>
                <tr>
                    <td>Select Type:</td>
                    <td>
                      <select class="input-text" name="up_type" required="1">
                            <option value="">--: Select Type :-- </option>
                            <option value="class-routine">Class Routine</option>
                            <option value="exam-routine">Exam Routine</option>
                            <option value="yearly-leave-calendar">Yearly Leave Calendar</option>
                            <option value="tot_ist">tot List</option>
                            <option value="academic-calendar">Academic Calendar</option>
                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>


</div> <!-- /tab02 -->
