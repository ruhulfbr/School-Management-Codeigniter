
<div class="tabs box">
    <ul>
        <li><a href="#tab01"><span>View All Syllabus</span></a></li>
        <li><a href="#tab02"><span>Create New Syllabus</span></a></li>
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

    <div class="module-table-body">
        <form action="">
            <table id="myTable" class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Treasury Subject</th>
                        <th>Date</th>
                        <th>Amaunt</th>
                                          
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
$tr=0;
    $this->db->select ( '*' );
        $this->db->from ('tbl_treasury');
       // $this->db->where ( 'add_date',  $data['add_date']);
        //  $this->db->where ( 'amaunt',  $data['amaunt']);
        //   $this->db->where ( 'treasury_subject',  $data['treasury_subject']);
        $resultSet = $this->db->get ();
        $alart=$resultSet->result();


                    $count = 1;
                    foreach ($alart as $treasury) {
                      $tr+=$treasury->amaunt;
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $treasury->treasury_subject; ?></td>
                            <td><?php echo $treasury->add_date; ?></td>
                            <td><?php

                             echo $treasury->amaunt; ?></td>
                           <!-- <td>
                                <input type="checkbox" />
                                <a href=""><img src="<?php echo base_url(); ?>design/pencil.gif" width="16" height="16" alt="edit" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/balloon.gif" width="16" height="16" alt="comments" /></a>
                                <a href=""><img src="<?php echo base_url(); ?>design/bin.gif" width="16" height="16" alt="delete" /></a>
                            </td> -->
                        </tr>
                        <?php
                    }
                    ?>
<tr>
<td></td>
<td></td>
<td style="text-align:right">Totall=</td>
  <td><?php echo $tr; ?></td>
</tr>
                </tbody>
            </table>
        </form>
        
    
    </div> <!-- End .module-table-body -->
</div> <!-- /tab01 -->

<!-- Tab02 -->
<div id="tab02">
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

   
        <fieldset>
            <legend>Add New Syllabus</legend>

           <?php
    if ($this->session->userdata('message')) {
        echo $this->session->userdata('message');
        $this->session->unset_userdata('message');
    } else {
        echo $this->session->unset_userdata('exception');
    }
    ?>
    <form action="<?php echo base_url(); ?>studentController/insert_treasury" method="post">
        <?php
        if ($this->session->userdata('ex')) {
            echo $this->session->userdata('ex');
            $this->session->unset_userdata('ex');
        }
        ?>
        <table class="nostyle">
        <tr>
          <td>Amaunt</td>
        </tr>
         <tr>
          <td><input type="text" name="amaunt" class="input-text" size="38"></td>
        </tr>
          <tr>
            <td>Treasury Subject </td>
          </tr>
            <tr>
                
                <td>
                <textarea name="treasury_subject"  rows="10" cols="40" class="input-text">
                  
                </textarea>
                    
                   
                    </td>
                    <tr> 
                      <td>
                          Date:
                      </td> 
                    </tr>
                    <tr>
                    <td>
                        <input type="date" name="add_date" id="datepicker"  class="input-text">
                    </td>
                    </tr>
            
            
            </tr>
            <tr>
               <td><input type="submit" value="Search" class="input-submit"></td>
            
            </tr>
           
        </table>
    </form>
        </fieldset>



</div> <!-- /tab02 -->





















<!-- <link href="<?php echo base_url(); ?>js/js/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="<?php echo base_url(); ?>js/js/jquery.min.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/jquery-ui.min.js"></script> 
  <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>
<fieldset>
    <legend>Treasury</legend>
    
   
</fieldset>
 -->












