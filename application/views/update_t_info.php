<style>
  #con{
     margin-left: -10px;
     font-family: tahoma;
     font-size:11px;
}  

</style>


<div id="con">
    <fieldset>
        <legend style="border: 1px #333 solid;">Information Update here!</legend>
<table>
    
    <tr>
        <th>Full name</th>
        <th>Designation</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Objectives</th>
        <!--<th>Department</th>-->
        <th>Type</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php
    if($info){
    foreach($info as $value){
    ?>
    <tr>
        <td><?php echo $value->full_name;?></td>
        <td><?php echo $value->designation;?></td>
        <td><?php echo $value->email;?></td>
        <td><?php echo $value->mobile_no;?></td>
        <td><?php echo $value->address;?></td>
        <td><?php echo $value->objectives;?></td>
        <!--<td><?php echo $value->department;?></td>-->
        <td><?php echo $value->type;?></td>
        <td><?php echo $value->status;?></td>
        <td>
            <a href="<?php echo base_url();?>teachers/editinfo/<?php echo $value->id;?>">Edit</a>
            <a href="<?php echo base_url();?>teachers/delet_info/<?php echo $value->id;?>">Delete</a>
           
        </td>
    </tr>
    <?php
    }
    }
    ?>
   
</table>
         </fieldset>
</div>