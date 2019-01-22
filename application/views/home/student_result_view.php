<div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346; color: white; margin-bottom: 20px;">
                        <h3>Student Result</h3>   
                    </div>
<table class="table table-bordered" style="margin-bottom: 20px; width: 300px; font-size: 16px; margin-top: 15px;">
    <tr>
        <td style="text-align: right">Name:&nbsp;&nbsp;</td>
         <td><?php echo $result1->student; ?></td>
    </tr>
    <tr>
        <td style="text-align: right">Class:&nbsp;&nbsp;</td>
        <td>
             <?php
  $class=$result2->student_class;
                           if($class==1){
                               echo 'Class One';
                           }elseif ($class==2) {
                               echo 'Class Two';
                           }elseif ($class==3) {
                               echo 'Class Three';
                           }elseif ($class==4) {
                               echo 'Class Four';
                           }elseif ($class==5) {
                               echo 'Class Five';
                           }elseif ($class==6) {
                               echo 'Class Six';
                           }elseif ($class==7) {
                               echo 'Class Seven';
                           }elseif ($class==8) {
                               echo 'Class Eight';
                           }elseif ($class==9) {
                               echo 'Class Nine';
                           }elseif ($class==10) {
                               echo 'Class Ten';
                           }
                      

?>
        </td>
    </tr>
    <tr>
        <td style="text-align: right">Roll:&nbsp;&nbsp;</td>
         <td><?php echo $result1->roll; ?></td>
    </tr>
    <tr>
        <td style="text-align: right">ID Number:&nbsp;&nbsp;</td>
         <td><?php echo $result1->student_id; ?></td>
    </tr>
    <tr>
        <td style="text-align: right">Year:&nbsp;&nbsp;</td>
         <td><?php echo $result2->year; ?></td>
    </tr>
     <tr>
         <td style="margin-top: 20px;">
             <a href="<?php echo base_url(); ?>home/serch_student_result"> <button class="btn btn-info btn-block">Try Again</button></a>
        </td>
    </tr>
</table>
<table class="table table-striped table-bordered">
    <tr>
        <?php foreach ($result3 as $subInfo){ ?>
        <th>
            <?php echo $subInfo->subject_name; ?>
        </th>
        <?php } ?>
    </tr>
    <tr>
        <?php // foreach ($result2 as $subInfo){ 
        for($i=1;$i<16;$i++){
            $subj='subject'.$i;
        $rr=$result2->$subj;
        if(!empty($rr)){
        ?> 
         <td>
            <?php echo $rr; ?>
        </td>
        <?php } } ?>
    </tr>
   
</table>