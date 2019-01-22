
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px; color: #661346; background-color: #CCC; padding: 10px; border-bottom: 1px #EEE solid; margin-top: 20px;">
Successful Student
</div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" margin-top: 20px;">
       <?php if(!empty($result)){ ?>
        <table  class="table table-striped table-bordered table-hover">
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
                 Session
                   <!--address-->
                </th>
                <th>
                  Current Position
                   <!--photo-->
                </th>
                <th>
                 Photo
                   <!--photo-->
                </th>
                <th>
                 Address
                   <!--photo-->
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                
                $i=0;
             foreach ($result as $SSInfo){
                    $i++;
                    ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                      <?php echo $SSInfo->sts_Name; ?>  
                    </td>
                    <td>
                      <?php echo $SSInfo->sts_session; ?>  
                    </td>
                    <td>
                      <?php echo $SSInfo->current_position; ?>  
                    </td>
                    <td><img src="<?php echo base_url().$SSInfo->sts_photo; ?>" width="80px" height="80px;">
                      
                    </td>
                    <td>
                      <?php echo $SSInfo->comment; ?>  
                    </td>
                   
                   
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
       <?php }  else {   ?>
        <h2>Have No Result</h2>     
        <?php    } ?>
       
    </div>

