<fieldset>
    <legend>Approve For Leave</legend>

<form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Treasury Name</th>
                        <th>Designation</th>
                        <th>Mobile No</th>
                        <!--<th>Mobile No</th>-->
                        <th>Teacher Img</th>
                        <th>Remaining Leave</th>
                        <th>Number OF Day</th>
                        <th>Apply Date</th>
                        <th>Action</th>
                                          
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
               
                    $count = 1;
                    foreach ($result as $treasury) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $treasury->full_name; ?></td>
                            <td><?php echo $treasury->designation; ?></td>
                            <td><?php echo $treasury->mobile_no; ?></td>
                            <!--<td>test<?php echo $treasury->apply_id; ?></td>-->
                        
                           
                            <td><img src="<?php echo base_url().$treasury->teacher_img; ?>" style="height: 30px; width: 30px;"></td>
                               <td>
                              <?php
                              $tid=$treasury->techar_id;
                                    $this->db->select('*');
                                    $this->db->from('tbl_techer_leave');
                                    $this->db->where('techar_id', $tid);

                                    $resultSet = $this->db->get();
                                    $resultfff = $resultSet->row();



                                    echo $resultfff->leave_day;
                                    ?>
                            </td>
                            
                            <td><?php echo $treasury->number_of_day; ?></td>
                            <td><?php echo $treasury->apply_date; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>admin/approve_leavee/<?php echo $treasury->apply_id ?>/<?php echo $treasury->techar_id ?>/<?php echo $treasury->number_of_day ?>">Approve</a>
                                <!--<button style="height: 40px;  ">Delete</button>-->
                                
                               </td>
                         </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </form>
    </fieldset>