<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Notice</span></a></li>
        <li><a href="#tab02"><span>Create New Notice</span></a></li>
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

    <div class="module-body" style=" height: auto">
        <form action="">
            <table  width="980" >
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Notice Title</th>
                        <th>Notice Details</th>
                        <th>Pdf</th>
                        <th>Date</th>
                        <th>Publish</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($notice_select as $notice) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $notice->notice_title; ?></td>
                            <td><?php echo $notice->notice_details; ?></td>
                            <td><a href="<?php echo base_url() . 'user_upload/notice/' . $notice->pdf; ?>"><?php echo $notice->pdf; ?></a></td>
                            <td><?php echo $notice->upload_date; ?></td>
                            <td>
                                <?php if ($notice->publish == 1) { ?>
                                    <img src="<?php echo base_url(); ?>design/tick-circle.gif" width="16" height="16" title="Published" alt="published" />
                                <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>design/ico-warning.gif" width="16" height="16" title="Un-Published" alt="un-published" />
                                <?php } ?>
                            </td>
                            <td>
<!--                                <input type="checkbox" />-->
                                <?php if ($notice->publish == 1) { ?>
                                    <a href="<?php echo base_url(); ?>admin/NoticePublish/0/<?php echo $notice->notice_id ?>"><img src="<?php echo base_url(); ?>design/ico-warning.gif" width="16" height="16" title="Click to Un-Published" alt="un-published" /></a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url(); ?>admin/NoticePublish/1/<?php echo $notice->notice_id ?>"><img src="<?php echo base_url(); ?>design/tick-circle.gif" width="16" height="16" title="Click to Published" alt="published" /></a>
                                <?php } ?>
                                <a href=""><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                                <a href="<?php echo base_url() ?>admin/notis_delete/<?php echo $notice->notice_id; ?>"><img src="<?php echo base_url(); ?>design/cross-on-white.gif" width="16" height="16" alt="delete" /></a>
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

    <form action="<?php echo base_url(); ?>admin/noticeAdd.jsp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Notice</legend>

            <table class="nostyle">
                <tr>
                    <td>Notice Title:</td>
                    <td><input type="text" size="40" name="notice_title" class="input-text" required="1"/></td>
                </tr>
                <tr>
                    <td class="va-top">Details:</td>
                    <td>
                        <textarea cols="38" rows="3" name="notice_details" class="input-text"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>PDF file:</td>
                    <td><input type="file" size="40" name="notice_pdf" class="input-text" required="1"/></td>
                </tr>
                <tr>
                    <td>Input:</td>
                    <td>
                        <label><input type="radio" name="publish" value="1" checked="1"/> Publish</label> &nbsp;
                        <label><input type="radio" name="publish" value="0"/> Un-publish</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>


</div> <!-- /tab02 -->
