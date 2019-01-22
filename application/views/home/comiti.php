<?php    $this->db->select ( '*' );
        $this->db->from ('tbl_speak');
        $this->db->where ('sp_type','comiti');
        $this->db->order_by("sp_id", "desc"); 
        $resultSet = $this->db->get ();
        $resul=$resultSet->row(); ?>
<div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px;   background-color: #661346; color: white; border-bottom: 1px #EEE solid; margin-top: 20px;">
Council Member's Speech

    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" border-bottom: 1px #EEE solid; margin-top: 20px;">
        
        <?php
        if(!$resul){
            echo 'তথ্য প্রদান করা হয়নি। ';  
        }  else {
            
        
    echo $resul->speak;
        }
        ?>
    </div>
</div>