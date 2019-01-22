   <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 



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
   <script type="text/javascript">
       $(function() {
               $(".datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
   
   
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
   <script type="text/javascript">
       $(function() {
               $(".datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>

    <div class="module-table-body">
 
        <form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Treasury Subject</th>
                        <th>Number OF Day</th>
                        <th>Apply Date</th>
                        <th>Action</th>
                                          
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $year=date('Y');
                    $tr = 0;
                    $this->db->select('*');
                    $this->db->from('tbl_applay_for_leave');
                    $this->db->join('tcacher_info', 'tcacher_info.id = tbl_applay_for_leave.techar_id');
//                     $this->db->where('leave_year', $year);
                    $resultSet = $this->db->get();
                    $alart = $resultSet->result();
                    $count = 1;
                    foreach ($alart as $treasury) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $treasury->full_name; ?></td>
                            <td><?php echo $treasury->number_of_day; ?></td>
                            <td><?php echo $treasury->apply_date; ?></td>
                            <td><?php $ac=$treasury->apply_action; 
                            if($ac==1){
                                ?>
                                <img src="<?php echo base_url(); ?>design/notification-tick.gif">
                                <?php
                            }  else {
                                 ?>
                                <img src="<?php echo base_url(); ?>design/ico-warning.gif">
                                <?php 
                            }
                            
                            ?></td>
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
    <legend>Apply For Leave</legend>
    <form  action="<?php echo base_url(); ?>admin/leave_apply" method="POST" class="form">
        <table class="nostyle">
            <tr>
                <td>To Date
                <?php // echo $this->session->userdata('techar_id'); ?>
                
                </td>
                <td>
                    <input type="text" class="form-control input-text datepicker"  name="to_date"> 
                    <input type="hidden" class="form-control input-text datepicker"  value="<?php echo $this->session->userdata('admin_id'); ?>" name="admin_id"> 
                    <input type="hidden" class="form-control input-text datepicker"  value="<?php echo $this->session->userdata('techar_id'); ?>" name="techar_id"> 
                    <input type="hidden" class="form-control input-text datepicker"  value="0" name="apply_action"> 
               </td>
            </tr>
            <tr>
                <td>
                   Form Date
                 
                </td>
                <td>
                    <input type="text" class="form-control input-text datepicker"  name="form_date"> 
                </td>
            </tr>
            <tr>
            <td>
                Duty Resume On
           </td>
                <td>
                    <input type="text" class="form-control input-text datepicker"  name="duty_resume_on"> 
           
                </td>
            </tr>
            <tr>
                <td>
                     Cause Of Leave
            </td>
                <td>
                  
                    <textarea name="cause_of_leave"  rows="5" cols="17" class="form-control input-text"> </textarea>
                   
                </td>
            </tr>
            <tr>
                <td>
                    Address(During Leave)
                </td>
                <td>
                    
                    <textarea name="address"  rows="5" cols="17" class="form-control input-text">

                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Number Of Day
                </td>
                <td>
                    <input type="text" name="number_of_day" class="form-control input-text">
                </td>
            </tr>
         
            <tr style="margin-top: 20px;">
                <td>

                </td>
                <td>
                    <input type="submit" value="Apply" class="btn btn-primary pull-right">  
                </td>
            </tr>
        </table>
    </form>
</fieldset>

   



</div> <!-- /tab02 -->



























