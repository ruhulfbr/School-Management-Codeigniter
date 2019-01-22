
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>css/reset.css" /> <!-- RESET -->
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>css/main.css" /> <!-- MAIN STYLE SHEET -->
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>css/2col.css" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>css/1col.css" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]--> <!-- MSIE6 -->
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>css/style.css" /> <!-- GRAPHIC THEME -->
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>css/mystyle.css" /> <!-- WRITE YOUR CSS CODE HERE -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/switcher.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/toggle.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ui.core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ui.tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/table/jquery.wysiwyg.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.wysiwyg.js"></script>

<!-- JQuery tablesorter plugin script-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/table/jquery.tablesorter.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.min.js"></script>

<!-- JQuery pager plugin script for tablesorter tables -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/table/jquery.tablesorter.pager.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.pager.js"></script>

<!-- JQuery password strength plugin script -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/table/jquery.pstrength-min.1.2.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.pstrength-min.1.2.js"></script>

<!-- JQuery thickbox plugin script -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/table/thickbox.js" tppabs="http://www.xooom.pl/work/magicadmin/js/thickbox.js"></script>
<div id="tray" class="box">

    <p class="f-left box">

        <!-- Switcher -->
        <span class="f-left" id="switcher">
            <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="<?php echo base_url(); ?>design/switcher-1col.gif" alt="1 Column" /></a>
            <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="<?php echo base_url(); ?>design/switcher-2col.gif" alt="2 Columns" /></a>
        </span>

        Project: <strong> Admin pannel</strong>

    </p>

    <p class="f-right">User: <strong><a href="<?php echo base_url(); ?>admin/updateMyProfile">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <strong><a href="<?php echo base_url(); ?>admin/logout.jsp" id="logout">Log out</a></strong></p>

</div>
<div style="width: 100%; float: left; margin-top: 20px;">
    <div id="aside">
        <?php
        include 'menu.php';
        ?>
    </div>

    <div style=" padding: 10px; border: 1px green solid; float: left;" >
         <div style="font-size: 20px; color: #661346; width: 100%; text-align: center">Principal's Speech</div>
          <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>
         
         
         <form action="<?php echo base_url(); ?>studentController/insert_speak"  method="Post">
            <label style="font-size: 20px; color: darkblue">Select Speech</label>
            <select name="speak_type" class="input-text"  required="1">
                <option  value="">--: Select Speech :--</option>
                <option value="Principal">Principal</option>
                <option value="comiti">Council Member's Speech</option>
            </select>
            <br>
            <br>
        <textarea name="speak" id="content" required="1" >
<?php 
if(isset($speak2)){
    echo $speak2;  
}
?>
            </textarea>
        <?php echo display_ckeditor($ckeditor); ?>
        
        <br>
        <br>
        <input type="submit" value="Send" class="input-submit">
</form>
    </div>
</div>