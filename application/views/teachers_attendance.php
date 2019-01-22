
         <fieldset>
            <legend>Add Attendance</legend>
             <form action="">
            <table id="myTable" class="tablesorter" width="940">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Teacher</th>
                                             
                        <th>designation</th>                        
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($result as $TcInfo) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $TcInfo->full_name; ?></td>
                           
                           
                        <td><?php echo $TcInfo->type; ?></td>
                        <td><a href="<?php echo base_url() .$TcInfo->teacher_img; ?>"><img src="<?php echo base_url() .$TcInfo->teacher_img; ?>"  style="width: 20px; height: 20px;"></a></td>
                        <td>
                            <?php 
                             $this->db->select('*');
                                $this->db->from('tbl_techer_attand');

                                $this->db->where('att_date',date('d/m/Y'));
                                $this->db->where('teacher_id',$TcInfo->id);
                                $resultSett = $this->db->get();
                               $d= $resultSett->row();
//                               print_r($d);
                              
                                if ($d) {
                                    echo $d->att_status;
                                }
                         
                            
                            ?>
                            
                        </td>
                            <td>
                                <a href="<?php echo base_url(); ?>teachers/teachers_attandence_a/<?php echo $TcInfo->id;  ?>/A">
                                <div style="padding: 4px; background-color: #EEE; border:#CCC 1px solid; float: left">Absent</div>
                                </a> &nbsp;&nbsp;
                                <a href="<?php echo base_url(); ?>teachers/teachers_attandence_a/<?php echo $TcInfo->id;  ?>/P">
                                <div style="padding: 4px; background-color: #EEE; border:#CCC 1px solid; float: left; margin-left: 5px;">Present</div>
                                </a> &nbsp;&nbsp;
                                <a href="<?php echo base_url(); ?>teachers/teachers_attandence_a/<?php echo $TcInfo->id;  ?>/L">
                                <div style="padding: 4px; background-color: #EEE; border:#CCC 1px solid; float: left; margin-left: 5px;">Leave</div>
                                </a> &nbsp;&nbsp;
                             
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
             </form>
         </fieldset>
       