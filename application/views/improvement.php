
 <script>
            function showsubject(str)
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
                xmlhttp.open("GET", "<?php echo base_url(); ?>studentController/select_class_subject?class=" + str, true);
                xmlhttp.send();
            }
        </script>

<form action="<?php echo base_url(); ?>studentController/select_student_imp" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>View Subject In Class</legend>
  <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>

            <table class="nostyle" style="margin-top: 20px; margin-bottom: 20px;" align="center">
                <tr>
                    <td class="va-top">Select Class</td>
                    <td>
                        <select name="class" required="1" class="input-text">
                              <!--onchange="showsubject(this.value)"-->
                        <option value="">---Select Semester---</option>
                       
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
                    <td>
                        <input type="submit" value="Search">
                    </td>
                </tr>
                
            </table>
        </fieldset>
    </form>
           <?php
if ($this->session->userdata('ex')) {
    ?>
    <div style=" background-color: white; padding: 10px;">
        <?php
        $msg = $this->session->userdata('ex');
        if ($msg) {
            echo $msg;
            $this->session->unset_userdata('ex');
        }
        ?>
    </div>
    <?php
}
?>   
        
        <?php if(isset($result)){ ?>
  
        <table>
            <tr>
                <td>
                    Student Name:
                </td>
                <td>
                    Class
                </td>
                <td>
                    Student Id
                </td>
                <td>
                    Year
                </td>
                <td>
                    Action
                </td>
                
            </tr>
            <?php foreach ($result as $isInfo){ ?>
            <tr>
                <td>
                    <?php echo $isInfo->student; ?>
                  
                </td>
              
                <td>
                      <?php echo $isInfo->st_class; ?>
                </td>
                  <td>
                      <?php echo $isInfo->student_id; ?>
                </td>
                  <td>
                      <?php echo $isInfo->cl_year; ?>
                </td>
                  <td>
                      <a href="<?php echo base_url(); ?>studentController/student_imp/<?php echo $isInfo->student_id; ?>/<?php echo $isInfo->info_id ; ?>/<?php echo $isInfo->roll_no  ; ?>/<?php echo $isInfo->st_class; ?>"><button>IMP</button></a>
                      
                </td>
                
            </tr>
            
            
            <?php } ?>
        </table>
        
        
        
        
        
        <?php } ?>

        
      