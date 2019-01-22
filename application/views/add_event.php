 <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
<div class="tabs box">
    <ul>
      <li><a href="#tab01"><span>Create New Event</span></a></li>
         
    </ul>
</div> <!-- /tabs -->
<!-- Tab01 -->
<div id="tab01">
    <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>


    <script>
        function new_providhanCreate() {
            var new_prov = prompt('Give a New Providhan name');
            if (new_prov != '') {
                document.getElementById('new_providhan').innerHTML = new_prov;
                document.getElementById('new_providhan').value = new_prov;
            } else {
                alert("Don't Allow Null Value");
            }
        }
    </script>

    <form action="<?php echo base_url(); ?>studentController/insert_new_event" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add New Rules</legend>

            <table class="nostyle">
                <tr>
           
                    <td>
                        <label style="font-size: 22px; color: #661346;  font: bolder 3000;">Event Date</label>
                        <br>
                        <input type="text" name="event_date" id="datepicker"  class="input-text" size="40">
                    </td>
                </tr>
                <tr>
           
                    <td>
                        <label style="font-size: 22px; color: #661346;  font: bolder 3000;">Event Hading</label>
                        <br>
                        <input type="text" name="event_hading" id="datepicker"  class="input-text" size="40">
                    </td>
                </tr>
                <tr>
           
                    <td>
                        <label style="font-size: 30px; color: #661346;  font: bolder 3000;">Enter You Event</label>
                        <br>
                        <textarea name="event" rows="10" cols="80" class="input-text" required="1">

                        </textarea>
                        </td>
                </tr>
                <tr>
           
                    <td>
                        <label style="font-size: 17px; color: #661346;  font: bolder 3000;">Event Photo</label>
                        <br>
                        <input type="file" name="event_photo">
                        </td>
                </tr>
              <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>


</div> <!-- /tab02 -->
