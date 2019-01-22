
<label style="margin-top: 10px;"><h3>Search Student Result</h3></label>
<form action="<?php echo base_url(); ?>home/search_student_result_view" method="post" enctype="multipart/form-data">
  
          
  <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>

            <table class="nostyle table table-striped table-bordered" style="margin-top: 20px; margin-bottom: 20px;" align="center">
                <tr>
                    <td style="text-align: right;font-size: 20px;">Student ID:</td>
                    <td>
                        <input type="text"  name="student_id" required="1" class="form-control">
                      
                    </td>
                </tr>
                <tr>
                     <td style="text-align: right;font-size: 20px;">Select Class</td>
                    <td>
                        <select name="class" required="1" class="input-text form-control"  onchange="showsubject(this.value)">
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
                    </td>
                </tr>
                <tr>
                     <td style="text-align: right;font-size: 20px;">Select Year</td>
                    <td>
                        <select name="year" required="1" class="input-text form-control"  onchange="showsubject(this.value)">
                        <option value="">---Select Year---</option>
                       <?php for($i=date('Y');$i>1992;$i--){ ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                     <td style="text-align: right;font-size: 20px;">Select Exam Term</td>
                    <td>
                        <select name="term" required="1" class="input-text form-control"  onchange="showsubject(this.value)">
                        <option value="">---Select Term---</option>
                      
                        <option value="1">First Term</option>
                        <option value="2">Second Term</option>
                        <option value="3">Third Term</option>
                     
                        </select>
                    </td>
                </tr>
                <tr>
                  
                    <td colspan="2">
                        <input type="submit" value="Search" class="btn btn-default pull-right">
                    </td>
                </tr>
               
                
            </table>
</form>
