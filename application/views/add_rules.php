<div class="tabs box">
    <ul>
          <?php 
       if(isset($result2)){ 
           ?>
        <li><a href="#tab01"><span>Update Rules</span></a></li>
       <?php } else {
       ?>
            <li><a href="#tab01"><span>View All Rules</span></a></li>
        <?php
       } ?>
        <li><a href="#tab02"><span>Create New Rules</span></a></li>
         
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
       <?php 
       if(isset($re)){ 
           ?>
           <form action="<?php echo base_url(); ?>studentController/update_roules" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Rules</legend>

            <table class="nostyle">
                <tr>
           
                    <td>
                        <label style="font-size: 30px; color: #661346;  font: bolder 3000;">Enter You Rules</label>
                        <br>
                        <input type="hidden" name="rules_id"  value="<?php echo $re->rules_id; ?>">
                        <textarea name="rules" rows="10" cols="80" class="input-text" required="1">
<?php echo $re->rules; ?>
                        </textarea>
                        </td>
                </tr>
              <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Update" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
           
           <?php
       }  else {
     
?>
        <form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Rules</th>
                                                
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($result as $rules_info) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $rules_info->rules; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/studentController/edit_rules/<?php echo $rules_info->rules_id ; ?>" style="padding: 5px; border: 1px #661346 solid; background-color: forestgreen; color: white; text-decoration: none">
<!--                                <button class="input-submit">Edit</button>-->
                              edit  </a>
                                &nbsp;||&nbsp;
                               <a href="<?php echo base_url(); ?>index.php/studentController/delete_rules/<?php echo $rules_info->rules_id ; ?>" style="padding: 5px; border: 1px #661346 solid; background-color: red; color: white; text-decoration: none">
   delete
                                </a>
                                
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </form>
       <?php } ?>
     
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

    <form action="<?php echo base_url(); ?>studentController/insert_new_roules" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Rules</legend>

            <table class="nostyle">
                <tr>
           
                    <td>
                        <label style="font-size: 30px; color: #661346;  font: bolder 3000;">Enter You Rules</label>
                        <br>
                        <textarea name="rules" rows="10" cols="80" class="input-text" required="1">

                        </textarea>
                        </td>
                </tr>
              <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>


</div> <!-- /tab02 -->
