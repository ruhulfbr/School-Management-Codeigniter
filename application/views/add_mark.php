
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
                xmlhttp.open("GET", "<?php echo base_url(); ?>studentController/select_subject?class=" + str, true);
                xmlhttp.send();
            }
        </script>

<form action="<?php echo base_url(); ?>studentController/insert_subject" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Insert Mark</legend>
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
                        <select name="class" required="1" class="input-text"  onchange="showsubject(this.value)">
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
                
            </table>
        </fieldset>
    </form>
        
        
         <div id="txtHint">  </div>