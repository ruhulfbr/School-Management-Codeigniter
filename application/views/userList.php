

<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>User List</span></a></li>
        <li><a href="#tab02"><span>Create New Admin</span></a></li>
        <li><a href="#tab03"><span>Update Profile</span></a></li>
    </ul>
</div> <!-- /tabs -->
<!-- Tab01 -->
<div id="tab01">


    <div class="module">
        <!--<h2><span>Sample table</span></h2>-->

        <div class="module-table-body">
            <form action="">
                <table id="myTable" class="tablesorter">
                    <thead>
                        <tr>
                            <th style="width:5%">#</th>
                            <th style="width:20%">Title</th>
                            <th style="width:21%">Author</th>
                            <th style="width:13%">Category</th>
                            <th style="width:13%">Pages</th>
                            <th style="width:13%">Price</th>
                            <th style="width:15%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($user_select as $users){
                        ?>
                        <tr>
                            <td class="align-center"><?php echo $count++;?></td>
                            <td><a href="">Don Quixote</a></td>
                            <td><?php echo $users->user_email;?></td>
                            <td><?php echo $users->user_name;?></td>
                            <td><?php echo $users->password;?></td>
                            <td>$11.55</td>
                            <td>
                                <input type="checkbox" />
                                <a href=""><img src="<?php echo base_url(); ?>design/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/balloon.gif" width="16" height="16" alt="comments" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/bin.gif" width="16" height="16" alt="delete" /></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </form>
        </div>
            <div class="pager" id="pager">
                <form action="">
                    <div>
                        <img class="first" src="<?php echo base_url(); ?>design/arrow-stop-180.gif" alt="first"/>
                        <img class="prev" src="<?php echo base_url(); ?>design/arrow-180.gif" alt="prev"/> 
                        <input type="text" class="pagedisplay input-short align-center"/>
                        <img class="next" src="<?php echo base_url(); ?>design/arrow.gif" alt="next"/>
                        <img class="last" src="<?php echo base_url(); ?>design/arrow-stop.gif" alt="last"/> 
                        <select class="pagesize input-short align-center">
                            <option value="5">5</option>
                            <option value="10" selected="selected">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </form>
            </div>
            <div style="float: right;">
                <form action="">
                    <div>
                        <span>Apply action to selected:</span> 
                        <select class="input-medium" style="width: 200px;">
                            <option value="1" selected="selected">Select action</option>
                            <option value="2">Publish</option>
                            <option value="3">Unpublish</option>
                            <option value="4">Delete</option>
                        </select>
                    </div>
                </form>
            </div>
            <div style="clear: both"></div>
        </div> <!-- End .module-table-body -->

    </div> <!-- /tab01 -->

    <!-- Tab02 -->
    <div id="tab02">
        <form action="<?php echo base_url();?>admin/addNewAdmin.jsp" method="post">
            
        <fieldset>
            <legend>Add New User</legend>
            <table class="nostyle">
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" size="40" name="user_name" class="input-text" required="1"/>* </td>
                    <td>[Without any space and special character]</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" size="40" name="user_email" class="input-text" /></td>
                    <td></td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td><input type="password" size="40" name="password" class="input-text"required="1"/>*</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" size="40" name="con_password" class="input-text" required="1"/>*</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="va-top">Input:</td>
                    <td>
                        <label><input type="radio" name="admin_type" checked="1" value="admin"/>Admin</label> &nbsp;
                        <label><input type="radio" name="admin_type" value="c_creator"/> Content Creator</label> &nbsp;
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
        </form>
    </div> <!-- /tab02 -->

    <!-- Tab03 -->
    <div id="tab03">

        <p>This page is under-construction</p>

    </div> <!-- /tab03 -->
