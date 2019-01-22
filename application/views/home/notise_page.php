<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px;   background-color: #661346; color: white; padding: 10px; border-bottom: 1px #EEE solid; margin-top: 20px;">

<h3>Notice Board</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th>Sl</th>
        <th>Notice Title</th>
     <th>Date</th>
    </tr>
    <?php 

  $this->db->select ( '*' );
        $this->db->from ('tbl_notice');
        $this->db->where ('publish','1');
        $resultSet = $this->db->get ();
        $notice=$resultSet->result();
$sl=1;
        foreach ($notice as $nInfo){

?>
    <tr>
        <td>
            <?php echo $sl++; ?>
        </td>
      
        <td>
            <a href="<?php echo base_url().$nInfo->pdf; ?>">
             <?php echo $nInfo->notice_title; ?> 
            </a>
        </td>
        <td>
            <?php echo $nInfo->upload_date; ?>
        </td>
    </tr>
        <?php } ?>
</table>