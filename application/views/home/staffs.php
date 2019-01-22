<?php    $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
        $this->db->where ('type','Office Staff');
        $this->db->or_where ('type','Lab_Assis/Tr');
        $this->db->where ('status','Active');
//        $this->db->order_by("sp_id", "desc"); 
        $resultSet = $this->db->get ();
        $resul=$resultSet->result(); ?>

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px; color: blueviolet; border-bottom: 1px #EEE solid; margin-top: 20px;">
<!--কর্মকর্তা কর্মচারী বৃন্দ-->
All Staffs
</div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" margin-top: 20px;">
       
        <table  class="table table-striped table-bordered">
            <thead style="background-color: #661346; color: white; font-size: 20px;">
            <tr>
                <th>
                    S/L
                </th>
                <th>
                    <!--শিক্ষকের নাম-->
                     Name
                </th>
                <th>
                   <!--পদবি-->
                   Designation
                   <!--pdobi-->
                </th>
                <th>
                   <!--যোগাযোগ-->
                   Address
                </th>
                <th>
                   <!--ফটো-->
                   Photo
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach ($resul as $sInfo ){ 
                    $i++;
                    ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                      <?php echo $sInfo->full_name; ?>  
                    </td>
                    <td>
                      <?php echo $sInfo->designation; ?>  
                    </td>
                    <td>
                      <?php 
//                      phone
                      echo 'মোবাইল: '.$sInfo->mobile_no;
                      echo '<br>';
//                      email
                      echo 'ইমেইল:  '.$sInfo->email;
                      echo '<br>';
                      
                      echo 'ঠিকানা:  '.$sInfo->address; ?>  
                    </td>
                    <td>
                        <img src="<?php echo base_url().$sInfo->teacher_img; ?>" width="120px" height="120px">
                      
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        
       
    </div>
