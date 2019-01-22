<?php
 $this->db->select ( '*' );
        $this->db->from ('tbl_rules');
      $resultSet = $this->db->get ();
      $result=$resultSet->result();
 
      
?>
<div class="col-md-12 col-lg-12 col-sm-12  col-xs-12">
    <div class="col-md-12 col-lg-12 col-sm-12  col-xs-12" style=" margin-top: 30px;">
    
        <label  class="col-md-12 col-lg-12 col-sm-12  col-xs-12" style="padding: 5px;  background-color: #661346; color: white;"><h2 style="  background-color: #661346; color: white; ">Rules And Regulation</h2></label>
    
    <table class="table table-striped table-bordered bootstrap table-hover ">
        <thead>
            <tr>
                <th>S/L</th>
                <th>
                    <!--নিয়ম কানুন-->
                    Rules
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 18px;">
        <?php     
        $i=0;
        foreach ($result as $info_ruls){
            $i++;
            ?>
<!--    <p style="font-size: 16px;"><img src="<?php echo base_url(); ?>design/arrow.gif">
        &nbsp;&nbsp;<?php echo $info_ruls->rules; ?>
    </p>-->
    <!--<li style="list-style: none; font-size: 16px;">1 <?php echo $info_ruls->rules; ?></li>-->
            <tr style="border: 1px">
                <td><?php echo $i; ?></td>
            <td><?php echo $info_ruls->rules; ?></td>
          
        </tr>
        
        
        <?php } ?>
    
    </tbody>
     
    </table>
</div>
</div>
