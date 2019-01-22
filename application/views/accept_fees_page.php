 <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 




 <script>
            function pray_month_fee(str)
            {
                if (str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "<?php echo base_url(); ?>studentController/pray_month_fee?st_id=" + str, true);
                xmlhttp.send();
            }
        </script>





 <script>
            function pray_exam_fee(str)
            {
                if (str == "")
                {
                    document.getElementById("txtHint2").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "<?php echo base_url(); ?>studentController/pray_exam_fee?st_id=" + str, true);
                xmlhttp.send();
            }
        </script>



   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
<fieldset>
    <legend>Select Class For Attendance</legend>
    <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>studentController/select_student_for_fees" method="post">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
          
            <tr>
                <td>Select Class:</td>
                <td><select name="class_name" class="input-text">
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
                    <!-- <td>
                        Date:
                    </td> -->
                    <!-- <td>
                        <input type="text" name="attend_date" id="datepicker"  class="input-text">
                    </td> -->
             <td><input type="submit" value="Search" class="input-submit"></td>
            
            
            </tr>
           
        </table>
    </form>
    <?php if(isset($result)){ ?>
  <div id="txtHint2"> 
    <label style="color: #4D0033; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Student Attendance</label>
     <div id="txtHint">  

    <table class="table table-bordered" style="border-color: #4D0033">
    <tr>
        <th>Student Id</th> 
        <th>Student Roll</th> 
         <th>Student Name</th> 
          <th>Class Name</th> 
          <th>Month Fees</th> 
           <th>Exam Fees</th> 
            <th>Action</th> 
        
    </tr>
   
    <?php
    foreach ($result as $sInfo){
    ?>
    <tr>
        <td><?php echo $sInfo->student_id; ?></td>
        <td><?php echo $sInfo->roll; ?></td>
        <td><?php echo $sInfo->student; ?></td>
         <td><?php 
 $class=$sInfo->class;
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


         ?></td>
          <td><?php
$student_id_fee=$sInfo->student_id;
        $this->db->select ( '*' );
        $this->db->from ('tbl_month_fee');
        $this->db->where ('student_id_fee',$student_id_fee);
       
        $this->db->where ('month_date >=',date('01/m/Y'));
          $this->db->where ('month_date <=',date('t/m/Y'));
        $query = $this->db->get ();
       $feess=$query->row(); 
       if(!empty($feess)){ ?>
<img src="<?php echo base_url(); ?>design/tick-circle.gif">
<?php 
       }else{
         echo $month->month_fee; 
       }


          ?></td>
          <td><?php 
$student_id_fee=$sInfo->student_id;
 $this->db->select ( '*' );
        $this->db->from ('tbl_exam_fee');
        $this->db->where ('student_exam_fee_id',$student_id_fee);
     
        $this->db->where ('exam_fee_date >=',date('01/m/Y'));
          $this->db->where ('exam_fee_date <=',date('t/m/Y'));
        $query = $this->db->get ();
       $feess=$query->row(); 
 if(!empty($feess)){ ?>
<img src="<?php echo base_url(); ?>design/tick-circle.gif">
<?php 
       }else{
         echo $exam->Exam_fee;
       }



           ?></td>

          <td>
        <button value="<?php echo $sInfo->student_id;   ?>=<?php echo $sInfo->class;?>" class="input-submit" onclick="pray_month_fee(this.value)">Accept</button>&nbsp;||&nbsp;
              <button value="<?php echo $sInfo->student_id; ?>=<?php echo $sInfo->class;?>" class="input-submit" onclick="pray_exam_fee(this.value)">Accept</button>
          </td>
    </tr>
    <?php } ?>
</table>
</div>
 </div>
<?php  } ?>
</fieldset>
