<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px; padding: 8px; background-color: #661346; color: white;  margin-bottom: 10px; font-size: 22px;">
School Treasury
</div>
<table class="table-bordered table-hover table-striped table">
    <thead style="background-color: #661346; color: white">
                   
                        <th>S/L</th>
                        <th>Treasury Subject</th>
                        <th>Date</th>
                        <th>Amaunt</th>
                                          
                        
                   
                </thead>
                <tbody>
                    <?php
$tr=0;
$count = 1;
                    foreach ($result as $treasury) {
                      $tr+=$treasury->amaunt;
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $treasury->treasury_subject; ?></td>
                            <td><?php echo $treasury->add_date; ?></td>
                            <td><?php

                             echo $treasury->amaunt; ?></td>
                           <!-- <td>
                                <input type="checkbox" />
                                <a href=""><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/balloon.gif" width="16" height="16" alt="comments" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/bin.gif" width="16" height="16" alt="delete" /></a>
                            </td> -->
                        </tr>
                        <?php
                    }
                    ?>
<tr>
<td></td>
<td></td>
<td style="text-align:right">Totall=</td>
  <td><?php echo $tr; ?></td>
</tr>
                </tbody>
            </table>
    
    </div>