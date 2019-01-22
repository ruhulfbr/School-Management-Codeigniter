
<form action="<?php echo base_url(); ?>teachers/updateinfo/<?php echo $result->id; ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>

            <td>
                <strong>ID:</strong>
            </td>
            <td>
                <input type="text" name="id" value="<?php echo $result->id; ?>"/>
            </td>			
        </tr>
        <tr>
            <td>
                <strong>Full Name:</strong>
            </td>
            <td>
                <input type="text" name="full_name" value="<?php echo $result->full_name; ?>"/>
            </td>			
        </tr>
        <tr>
            <td>
                <strong>designation:</strong>
            </td>
            <td>
                <input type="text" name="designation" value="<?php echo $result->designation; ?>"/>
            </td>			
        </tr>						
        <tr>
            <td>
                <strong>Email:</strong>
            </td>
            <td>
                <input type="text" name="email" value="<?php echo $result->email; ?>"/>
            </td>			
        </tr>						
        <tr>
            <td>
                <strong>mobile_no:</strong>
            </td>
            <td>
                <input type="text" name="mobile_no" value="<?php echo $result->mobile_no; ?>"/>
            </td>			
        </tr>		
        <tr>
            <td>
                <strong>Address:</strong>
            </td>
            <td>
                <input type="text" name="address" value="<?php echo $result->address; ?>"/>
            </td>			
        </tr>	
        <tr>
            <td>
                <strong>Subject:</strong>
            </td>
            <td>
                <input type="objectives" name="objectives" value="<?php echo $result->objectives; ?>"/>
            </td>			
        </tr>				
        <tr>
            <td>
                <strong>type:</strong>
            </td>
            <td>
                <select  name="type">
                    <?php  $type=$result->type; ?>
                    <option value="Principal" <?php if($type=='Principal'){echo 'selected';} ?>>Principal</option>
                    <option value="Teacher" <?php if($type=='Teacher'){echo 'selected';} ?>>Teacher</option>
                        <option value="Office Staff"<?php if($type=='Office Staff'){echo 'selected';} ?>>Office Staff</option>
                       <option value="Lab_Assis/Tr"<?php if($type=='Lab_Assis/Tr'){echo 'selected';} ?>>Lab Assis/Tr</option>
                </select>
                
            </td>			
        </tr>				
        <tr>
            <td>
                <strong>Status:</strong>
            </td>
            <td>
               
                <select  name="status">
                     <?php $status=$result->status; ?>
                    <option value="In_Active" <?php if($status=='In_Active'){echo 'selected';} ?>>In_Active</option>
                    <option value="Active" <?php if($status=='Active'){echo 'selected';} ?>>Active</option>
                </select>
               
            </td>			
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file"  name="teacher_img"></td>
            <!--<td><input type="text" value="<?php echo $result->teacher_img; ?>"  name="teacher_img"></td>-->
            
            <td><input type="hidden"  name="teacher_img2" value="<?php echo $result->teacher_img; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td colspan="2" align="left">
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </td>
        </tr>		
    </table>
</form>