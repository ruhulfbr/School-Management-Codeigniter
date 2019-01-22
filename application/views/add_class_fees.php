<fieldset>
    <legend>Student Class For Fees</legend>
    <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>studentController/add_student_fees" method="post">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
          
            <tr>
                <td>Select Class:</td>
                <td><select name="class_id" class="input-text" required="1">
                          <option value="">---Select Class---</option>
                       
                        <option value="1">Class One</option>
                         <option value="2">Class Two</option>
                         <option value="3">Class Three</option>
                         <option value="4">Class Four</option>
                         <option value="5">Class Five</option>
                         <option value="6">Class Six</option>
                         <option value="7">Class Seven</option>
                         <option value="8">Class Eight</option>
                         <option value="9">Class Nine</option>
                         <option value="10">Class Ten</option>
                    </select>
                    
                    
                    <!--<input type="text" name="password" class="input-text" required="1" size="40">-->
                    </td>
                    <td>
                        Type:
                    </td>
                    <td>
                        <select name="type" class="input-text" required="1">
                            <option value="">---Select Class---</option>
                            <option value="1">Month Fees</option>
                            <option value="2">Exam Fees</option>
                            <option value="3">Extra Fees</option>
                        </select>
                    </td>
                    <td>
                        Amount:
                    </td>
                    <td>
                        <input type="text" name="amount" required="1"  class="input-text">
                    </td>
             <td><input type="submit" value="Search" class="input-submit"></td>
            
            
            </tr>
           
        </table>
    </form>
</fieldset>