<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Subject</span></a></li>
        <li><a href="#tab02"><span>Create New Subject</span></a></li>
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
            <table  width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Class Name</th>
                        <th>Subject Name</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_subject');
                    $query = $this->db->get();
                    $subject_select = $query->result();
                    $count = 1;
                    foreach ($subject_select as $syllabus) {
                        ?>
                        <tr>
                            <?php // $count % 2 == 0 ? 'class="bg"' : ''; ?>
                            <td><?php echo $count++; ?></td>
                            <td>
                                <?php
                                $cls = $syllabus->class;
                                if ($cls == 1) {
                                    echo 'Class One';
                                } elseif ($cls == 2) {
                                    echo 'Class Two';
                                } elseif ($cls == 3) {
                                    echo 'Class Three';
                                } elseif ($cls == 4) {
                                    echo 'Class Four';
                                } elseif ($cls == 5) {
                                    echo 'Class Five';
                                } elseif ($cls == 6) {
                                    echo 'Class Six';
                                } elseif ($cls == 7) {
                                    echo 'Class Seven';
                                } elseif ($cls == 8) {
                                    echo 'Class Eight';
                                } elseif ($cls == 9) {
                                    echo 'Class Nine';
                                } elseif ($cls == 10) {
                                    echo 'Class Ten';
                                } else {
                                    echo '';
                                }
                                ?>
                            </td>
                            <td><?php echo $syllabus->subject_name; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>studentController/delete_subject/<?php echo $syllabus->sub_id; ?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>
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
    <form action="<?php echo base_url(); ?>studentController/insert_subject" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Subject</legend>

            <table class="nostyle">
                <tr>
                    <td class="va-top">Class:</td>
                    <td>
                        <select name="class" required="1" class="input-text" >
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
                </tr>
                <tr>
                    <td>Subject Name:</td>
                    <td><input type="text" size="40" name="subject_name" class="input-text" required="1"/></td>
                </tr>


                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>


</div> <!-- /tab02 -->















