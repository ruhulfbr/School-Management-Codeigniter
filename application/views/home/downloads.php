
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px;   background-color: #661346; color: white; border-bottom: 1px #EEE solid; margin-top: 20px;">
<?php if(!empty($result)){ ?>
    <?php echo $result2->up_type; ?>
<?php } ?>
</div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" margin-top: 20px;">
       <?php if(!empty($result)){ ?>
        <table  class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>
                    S/L
                </th>
              
                <th>
                   Name
                   <!--pdobi-->
                </th>
                <th>
                   Type
                   <!--address-->
                </th>
                <th>
                   Upload Date
                   <!--photo-->
                </th>
                <th>
                 Download
                   <!--photo-->
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                
                $i=0;
             foreach ($result as $UpInfo){
                    $i++;
                    ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                      <?php echo $UpInfo->up_name; ?>  
                    </td>
                    <td>
                      <?php echo $UpInfo->up_type; ?>  
                    </td>
                    <td>
                      <?php echo $UpInfo->up_date; ?>  
                    </td>
                    <td>
                      <a href="<?php echo base_url() . $UpInfo->up_pdf; ?>"><?php echo $UpInfo->up_pdf; ?></a>
                    </td>
                   
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
       <?php }  else {   ?>
        <h2>Have No Result</h2>     
        <?php    } ?>
       
    </div>

