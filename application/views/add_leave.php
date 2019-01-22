<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Leave</span></a></li>
        <li><a href="#tab02"><span>Create New Leave</span></a></li>
    </ul>
</div> <!-- /tabs -->
<!-- Tab01 -->
<div id="tab01">
   <?php
if ($this->session->userdata('message')) {
    ?>
    <div style=" background-color: white; padding: 10px;">
        <?php
        $msg = $this->session->userdata('message');
        if ($msg) {
            echo $msg;
            $this->session->unset_userdata('message');
        }
        ?>
    </div>
    <?php
}
?>

    <div class="module-table-body">
        <form action="<?php echo base_url(); ?>admin/add_leave" method="POST">
            <table id="myTable" class="tablesorter">
                <tr>
                    <td>
                        Select Year
                    </td>
                    <td>
                        <select name="leave_year" class="input-text">
                         <option value="">---Select Year---</option>
                         <?php
                       for($i=date('Y');$i>=2012;$i--){
                             ?>
                             <option value="<?php echo $i ?>"><?php echo $i; ?></option>              
                             <?php
                         }
                         ?>
                     </select>
                    </td>
                    <td>
                        <input type="submit" value="Search" class="btn btn-primary pull-right">  
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Treasury Subject</th>
                        <th>Leave Day</th>
                        <th>Leave Year</th>
                                          
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $year=$leave_year;
                    $tr = 0;
                    $this->db->select('*');
                    $this->db->from('tbl_techer_leave');
                    $this->db->join('tcacher_info', 'tcacher_info.id = tbl_techer_leave.techar_id');
                     $this->db->where('leave_year', $year);
                    $resultSet = $this->db->get();
                    $alart = $resultSet->result();
                    $count = 1;
                    foreach ($alart as $treasury) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $treasury->full_name; ?></td>
                            <td><?php echo $treasury->leave_day; ?></td>
                            <td><?php echo $treasury->leave_year; ?></td>
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
    <legend>Add New Leave</legend>
    <form  action="<?php echo base_url(); ?>admin/save_leave" method="POST" class="form">
        <table class="nostyle">
            <tr>
                <td>
                    Select Teacher
                </td>
                 <td>
                     <select name="techar_id" class="input-text">
                         <option value="">---Select Teacher---</option>
                         <?php
                         $this->db->select('*');
                         $this->db->from('tcacher_info');
                         $this->db->where('status', 'Active');


                         $resultSet = $this->db->get();
                         $result = $resultSet->result();
                         foreach ($result as $info) {
                             ?>
                             <option value="<?php echo $info->id ?>"><?php echo $info->full_name; ?></option>              
                             <?php
                         }
                         ?>
                     </select>
                  </td>
            </tr>
            <tr>
                <td>
                 Leave Day
                </td>
                <td>
                    <input type="text" name="leave_day" class="form-control input-text">
                </td>
            </tr>
            <tr>
                <td>
                 Leave Year
                </td>
                <td>
                        <select name="leave_year" class="input-text">
                         <option value="">---Select Year---</option>
                         <?php
                       for($i=date('Y');$i>=2012;$i--){
                             ?>
                             <option value="<?php echo $i ?>"><?php echo $i; ?></option>              
                             <?php
                         }
                         ?>
                     </select>
                </td>
            </tr>
            <tr style="margin-top: 20px;">
                <td>

                </td>
                <td>
                    <input type="submit" value="Save" class="btn btn-primary pull-right">  
                </td>
            </tr>
        </table>
 </form>
</fieldset>

   



</div> <!-- /tab02 -->














