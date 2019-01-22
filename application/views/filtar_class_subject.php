<?php
 $class=$_GET['class'];
    $this->db->select ( '*' );
        $this->db->from ('tbl_subject');
        $this->db->where ( 'class', $class );
        $resultSet = $this->db->get ();
       $result=$resultSet->result();
       ?>
<form action="<?php echo base_url(); ?>studentController/insert_subject_mark" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>All Subject In Class</legend>

            <table class="nostyle" style="margin-top: 20px; margin-bottom: 20px;" align="center">
             
                <tr> <td colspan="2"></td></tr>
                <tr> <td colspan="2"></td></tr>
                <tr> <td colspan="2"></td></tr>
<?php 
$i=1;
       foreach ($result as $sInfo){
      ?>
  <tr>
      <td><?php   echo $sInfo->subject_name;?></td>
      <td>
          <!--<input type="text" name="subject<?php echo $i++; ?>" class="input-text">-->
      </td>
         </tr>
     <?php  } ?>
      
                
            </table>
        </fieldset>
    </form>