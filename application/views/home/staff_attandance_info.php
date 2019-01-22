
<!--//  $( ".selector" ).datepicker({ dateFormat: 'dd-mm-yy' });-->
  <!--</script>-->

  <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $(".datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="<?php echo base_url(); ?>home/staff_attandance_info" method="POST">
    <table style="margin-top: 10px; margin-bottom: 10px;">
        <tr>
            <td>
                Search Attendance  &nbsp;   
            </td>
            <td>
               <input type="text" class="form-control datepicker"  name="datet"> 
            </td>
            <td> To:&nbsp; </td>
            <td>
               <input type="text" class="form-control datepicker"  name="datet2" id=""> 
            </td>
            <td>
                <input type="submit" name="" value="Search" >
            </td>
        </tr>
    </table>
    </form>
    </div>
<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 8px; margin-top: 10px; margin-bottom: 10px; background-color: #EEE;  font-size: 22px;">Teacher Attendance</label>

<?php

 
         $this->db->select ( '*' );
        $this->db->from ('tbl_techer_attand');
        $this->db->where ('att_date >=',$date);
        $this->db->where ('att_date <=',$date2);
     $query = $this->db->get ();
        $result=$query->result();
     if(!empty($result)){
         
    
?>
<table class="table table-bordered">
     <thead style="background-color: #661346; color: white">
        <tr>
            <td>S/L</td>
            <td>Date</td>
            <td>Teacher Name</td>
           
            <td>Destination</td>
            
            <td>Status</td>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;
        foreach($result as $value){
  $i++;
   
        ?>
        <tr>
            <td>
                <?php 
                  echo $i;
                ?>
            </td> 
            <td><?php echo $value->att_date; ?></td>
            <td>
                
                <?php
                 $tid=$value->teacher_id;
                 $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
        $this->db->where ('id',$tid);
     $query = $this->db->get ();
        $result=$query->row();
                 echo $result->full_name;     
                          
                            ?>
            </td>   
            <td>
                <?php 
                  echo $value->att_date;
                ?>
            </td>   
            <td>
                <?php 
                  echo $value->att_status;
                ?>
            </td>   
             
        </tr>
        <?php

}
 
//        $result['result2']=$query->row();
?>
    </tbody>
</table>
<?php 
     }  else {
?>
<label>Sorry Have No result</label>

     <?php } ?>
