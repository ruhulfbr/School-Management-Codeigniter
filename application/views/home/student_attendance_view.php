
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
    <label style="color: #4D0033; font-size: 22px; margin-bottom: 10px;">Student Attendance</label>
    <table class="table table-bordered" style="border-color: #4D0033">
    <tr>
        <td>Student Id:</td> 
        <td><?php echo $result->student_id; ?></td>
    </tr>
    <tr>
        <td>Student Roll:</td> 
        <td><?php echo $result->student_roll; ?></td>
    </tr>
    <tr>
        <td>Student Name:</td> 
        <td><?php echo $result->student_name; ?></td>
    </tr>
    <tr>
        <td>Class Name:</td> 
        <td><?php echo $result->class_name; ?></td>
    </tr>
    <tr>
        <td>Attend Date:</td> 
        <td><?php echo $result->attend_date; ?></td>
    </tr>
    <tr>
        <td>Attendance:</td> 
        <td><?php echo $result->student_status; ?></td>
    </tr>
</table>
    </div>