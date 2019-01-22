
<fieldset>
    <legend>Change Admin Password</legend>
    <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>admin/updat_password" method="post">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
          <?php //   echo $msg = $this->session->userdata('admin_id'); ?>
 
            <tr>
                <td>Enter Old Password:</td>
                <td><input type="text" name="password" class="input-text" required="1" size="40"></td>
            </tr>
            <tr>
                <td> Enter New Password:</td>
                <td><input type="text" name="new_password" class="input-text" required="1" size="40"></td>
            </tr>
        
          
          
            <tr>
                <td></td>
                <td><input type="submit" value="Change" class="input-submit"></td>
            </tr>
        </table>
    </form>
</fieldset>
