


<?php
if ($this->session->userdata('exseption_error')) {
    ?>
    <div style=" background-color: white; padding: 10px;">
        <?php
        $msg = $this->session->userdata('exseption_error');
        if ($msg) {
            echo $msg;
            $this->session->unset_userdata('exseption_error');
        }
        ?>
    </div>
    <?php
}
?>



<fieldset>
    <legend>Add New Admin</legend>
    <form  action="<?php echo base_url(); ?>admin/admin_registetion" method="POST" class="form">
        <table class="nostyle">
            <tr>
                <td>
                 Select  Teacher 
                </td>
                
                <td>
                     <select name="techar_id" class="input-text">
                         <option value="">---Select Teacher---</option>
                    <?php 
                       $this->db->select('*');
                    $this->db->from('tcacher_info');
//               
                    $resultSet = $this->db->get();
                    $resultSett=$resultSet->result();
                     foreach ($resultSett as $treasury) {
                         ?>
                       <option value="<?php echo $treasury->id ?>"><?php echo $treasury->full_name; ?></option> 
                    
                    <?php
                         
                     }
                    ?>
                          
                        </select>
                </td>
            </tr>
            <tr>
                <td>
                    First Name 
                </td>
                <td>
                    <input type="text" name="admin_firstname" class="form-control input-text">   
                </td>
            </tr>
            <tr>
                <td>
                    Last Name
                </td>
                <td>
                    <input type="text" name="admin_lastname" class="form-control input-text">
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number
                </td>
                <td>
                    <input type="text" name="admin_phon_number" class="form-control input-text">
                </td>
            </tr>
            <tr>
                <td>
                    Email Address
                </td>
                <td>
                    <input type="email" name="admin_email" class="form-control input-text">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="admin_password" class="form-control input-text">
                </td>
            </tr>
            <tr>
                <td>
                    Type
                </td>
                <td>
                    <select name="admin_type" class="form-control input-text">
                        <option value=" ">---: Select Type :--</option>                                                    
                        <option value="1">Admin</option>                                                    
                        <option value="2">Sub Admin</option>                                                    
                    </select>

                </td>
            </tr>
            <tr style="margin-top: 20px;">
                <td>

                </td>
                <td>
                    <input type="submit" value="Sign up" class="btn btn-primary pull-right">  
                </td>
            </tr>
        </table>









    </form>
</fieldset>