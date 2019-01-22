<?php    $this->db->select ( '*' );
        $this->db->from ('tbl_speak');
        $this->db->where ('sp_type','Principal');
        $this->db->order_by("sp_id", "desc"); 
        $resultSet = $this->db->get ();
        $resul=$resultSet->row(); ?>
<div>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="font-size: 34px;    background-color: #661346; color: white; padding: 10px; border-bottom: 1px #EEE solid; margin-top: 20px;">
Pincipal Speech
<?php 
  $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
        $this->db->where ('type','Principal');
        $this->db->where ('status','Active');
        $this->db->order_by("id", "desc"); 
        $resultSet = $this->db->get ();
        $resull=$resultSet->row();

?>
        <img src="<?php echo base_url().$resull->teacher_img; ?>" width="100px" height="100px;"  class="pull-right">
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" border-bottom: 1px #EEE solid; margin-top: 20px;">
        
        <?php 
    echo $resul->speak;
        
        ?>
    </div>
</div>