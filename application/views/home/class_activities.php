
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px;   background-color: #661346; color: white; padding: 10px; border-bottom: 1px #EEE solid; margin-top: 20px;">
Class Activities
</div>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" margin-top: 20px;">
 
        <table  class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>
                    S/L
                </th>
              
                <th>
                   <!--Name-->
                 Teacher Name
                   <!--pdobi-->
                </th>
               
                
                <th>
                 <!--Photo-->
                Type
                   <!--photo-->
                </th>
                <th>
              Subject
                   <!--photo-->
                </th>
                <th>
              Photo
                   <!--photo-->
                </th>
            </tr>
            </thead>
            <tbody>
             <?php 
                    $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
        $this->db->where ('status','Active');
        $this->db->where ('type','Teacher');
        $resultSet = $this->db->get ();
        $result=$resultSet->result();
        foreach ($result as $fInfo){
             ?>
                <tr>
                    <td>
                     1
                    </td>
                    <td>
                    <?php echo $fInfo->full_name; ?>
                    </td>
                    <td>
                    <?php echo $fInfo->type; ?>
                    </td>
                    <td>
                    <?php 
             echo $fInfo->objectives;
            
                   ?>
                    </td>
                  
                    <td>
                      <img src="<?php echo base_url().$fInfo->teacher_img ?>" width="80px" height="80px;">
                      
                    </td>
                   
                   
                   
                </tr>
        <?php } ?>
            </tbody>
        </table>
        
      
       
    </div>

