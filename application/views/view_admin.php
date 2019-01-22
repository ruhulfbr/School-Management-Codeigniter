

<script>
            function showCustomer(str)
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
                xmlhttp.open("GET", "<?php echo base_url(); ?>index.php/admin/admin_active?valu=" + str, true);
                xmlhttp.send();
            }
 </script>

    
                <div class="col-sm-9 col-md-9" style="padding: 0px;">
                    <div class="container-fluid main-container" style="padding: 0px;">
                        <div class="col-md-12 content" style="padding-left: 0px;">
                            <div class="panel panel-default"style="padding: 0px;">
                                <div class="panel-heading">
                                    Admin List
                                </div>
                                <div class="panel-body">


                                    <?php
                                    if ($this->session->userdata('exseption_error')) {
                                        ?>
                                        <div style=" background-color: white; padding: 10px;">
                                            <?php
                                            $msg = $this->session->userdata('exseption_error');
                                            if ($msg) {
                                                echo $msg;
                                                $this->session->unset_userdata('exseption_error');
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>


                                    <div class="col-md-12 col-lg-12 col-sm-12  col-xs-12 table-responsive">
                                          <div id="txtHint">
                                        <table class="table table-bordered table-striped">
                                           
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Amdin Name</th>
                                                    <th>Admin Email</th>
                                                    <th>Admin Phone Number</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php 
                                                $sl=1;
                                                                                    foreach ($result as $AInfo){
                                                ?>
                                                <tr>
                                                    <td><?php echo $sl++; ?></td>
                                                    <td><?php echo $AInfo->admin_full_name; ?></td>
                                                    <td><?php echo $AInfo->admin_email; ?></td>
                                                    <td><?php echo $AInfo->admin_phon_number; ?></td>
                                                    <td>
                                                            <?php
                                                            $type = $AInfo->admin_type;
                                                            if ($type == 1) {
                                                                echo 'Admin';
                                                            } elseif ($type == 2) {
                                                                echo 'Sub Admin';
                                                            }
                                                            ?>

                                                        </td>
                                                        <td>
                                                              <?php
                                                            $action=$AInfo->admin_action;
                                                            if ($action == 0) {
                                                                ?>
                                                            <img src="<?php echo base_url(); ?>design/ico-warning.gif">
                                                            <?php
                                                            } elseif ($action == 1) {
                                                              ?>
                                                                 <img src="<?php echo base_url(); ?>design/ico-done.gif">
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                <button class="btn btn-xs btn-sm btn-danger" value="1=<?php echo $AInfo->admin_id ?>"  onclick="showCustomer(this.value)"><img src="<?php echo base_url(); ?>design/notification-tick.gif"></button>
                                                        
                                       
                                                            <button class="btn btn-xs btn-sm btn-success"><img src="<?php echo base_url(); ?>design/ico-warning.gif"></button>
                                                  
                                                        </td>
                                                </tr>
                                                                                    <?php } ?>
                                            </tbody>
                                      
                                        </table>
                                            </div>
                                    </div>

                                </div> <!-- .widget -->
</div>
                        </div>
                    </div>


                </div> 
            