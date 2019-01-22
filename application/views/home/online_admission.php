<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 6px; padding: 8px; border: 1px #CCC solid">
<form action="<?php echo base_url(); ?>home/online_applay" method="post" enctype="multipart/form-data">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 6px; padding: 0px; background-color: #EFE1DB">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" padding: 0px">
        <img src="<?php echo base_url(); ?>logo/logot.jpg" class="img-responsive">
    </div>
    <!--<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style=" padding: 0px; text-align: center">
        <p style="font-size: 32px; color: #661346">Wel Come Demo School </p>
        <p>50 Prana Polton,Dhaka,1208 </p>
    </div>-->
</div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 6px; padding: 0px">
<table class="table table-bordered">
    <tr>
        <td>Student Name:</td>
        <td><input type="text" class="form-control"  name="student_name" required="1"></td>
    </tr>
    <tr>
         <td> Father's Name: </td>
         <td><input type="text" class="form-control"  name="fathar_name" required="1"></td>
    </tr>
    <tr>
    <td> Mother's Name: </td>
       <td><input type="text" class="form-control"  name="mother_name" required="1"></td>  
    </tr>
        
    <tr>
    <td> Present Address:</td>
    <td> 
         <!--rowspan="2"-->
         <textarea class="form-control textarea" rows="5"  cols="40" name="present_address"></textarea>
           <span class="help-block">This is some help text...</span>
         </td>  
    </tr>
    <tr>
    <td> Permanent Address:</td>
    <td> 
         <!--rowspan="2"-->
         <textarea class="form-control textarea" rows="5"  cols="40" name="permanent_address"></textarea>
           <span class="help-block">This is some help text...</span>
         </td>  
    </tr>
    <tr>
        <td> Religion:</td>
        <td> 
            <label class="checkbox-inline">
                <input type="checkbox" name="religion" value="Islam">Islam
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="religion" value="Hindu">Hindu 
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="religion" value="Other">Other
            </label>
        </td>  
    </tr>
    <tr>
        <td>  Sex:</td>
        <td> 
            <label class="checkbox-inline">
                <input type="checkbox" name="sex" value="Male">Male
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="sex" value="Female">Female 
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="sex" value="Other">Other
            </label>
        </td>  
    </tr>
    <tr>
        <td> Date Of Birth:</td>
        <td> 
            <input type="text" class="form-control"  name="birth_date" placeholder="DD-MM-YYY" required="1">
        </td>  
    </tr>
    <tr>
        <td>Class Name:</td>
        <td> 
            <input type="text" class="form-control"  name="class_name" placeholder="Class Name" required="1">
        </td>  
    </tr>
    <tr>
        <td>
          Group:  
        </td>
        <td>
             <label class="checkbox-inline">
                 <input type="checkbox" name="group" value="Science">Science
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="group" value="Arts">Arts 
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="group" value="Business">Business
            </label>
           
        </td>
    </tr>
     <tr>
        <td>Mobile Number Home:</td>
        <td> 
            <input type="text" class="form-control"  name="home_number" placeholder="Home Number" required="1">
        </td>  
    </tr>
     <tr>
        <td>Mobile Number Own:</td>
        <td> 
            <input type="text" class="form-control"  name="own_number" placeholder="Own Number" required="1">
        </td>  
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="" class="btn btn-default btn-sm" value="View"></td>
    </tr>    
</table>      
    </div>
	

</form>	
</div>
