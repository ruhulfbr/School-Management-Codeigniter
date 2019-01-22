
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="robots" content="noindex,nofollow" />
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
        <script type="text/javascript">
            $(document).ready(function() {
                $("#myTable")
                        .tablesorter({
                            // zebra coloring
                            widgets: ['zebra'],
                            // pass the headers argument and assing a object 
                            headers: {
                                // assign the sixth column (we start counting zero) 
                                6: {
                                    // disable it by setting the property sorter to false 
                                    sorter: false
                                }
                            }
                        })
                        .tablesorterPager({container: $("#pager")});
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".tabs > ul").tabs();
            });
        </script>
        <title>Adminizio Lite</title>
    </head>

    <body>

        <div id="main">

            <!-- Tray -->
            <div id="tray" class="box">

                <p class="f-left box">

                    <!-- Switcher -->
                    <span class="f-left" id="switcher">
                        <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="<?php echo base_url(); ?>design/switcher-1col.gif" alt="1 Column" /></a>
                        <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="<?php echo base_url(); ?>design/switcher-2col.gif" alt="2 Columns" /></a>
                    </span>

                    Project: <strong> Admin pannel</strong>

                </p>

                <p class="f-right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <strong><a href="<?php echo base_url();?>admin/logout.jsp" id="logout">Log out</a></strong></p>

            </div> <!--  /tray -->

            <hr class="noscreen" />

            <!-- Menu -->
            <!--            <div id="menu" class="box">
            
                            <ul class="box f-right">
                                <li><a href="#"><span><strong>Visit Site &raquo;</strong></span></a></li>
                            </ul>
            
                            <ul class="box">
                                <li id="menu-active"><a href="<?php echo base_url(); ?>view/index.jsp"><span>Home</span></a></li>  
                                <li><a href="<?php echo base_url(); ?>photos/addPhoto.jsp"><span>Upload Photo into Album</span></a></li>
                                <li><a href="<?php echo base_url(); ?>photos/viewAlbum.jsp"><span>View Album</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/notice"><span>New Notice</span></a></li>
                                <li><a href="#"><span>View All Notice</span></a></li>
                                <li><a href="#"><span>Result Notice</span></a></li>
                                <li><a href="#"><span>Syllabus</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/usersList.jsp"><span>Users</span></a></li>
                            </ul>
            
                        </div>  /header -->

            <hr class="noscreen" />

            <!-- Columns -->
            <div id="cols" class="box">

                <!-- Aside (Left Column) -->
                <div id="aside" class="box">

                    <div class="padding box">

                        <!-- Logo (Max. width = 200px) -->
                        <!--<p id="logo"><a href="#"><img src="<?php echo base_url(); ?>design/logo.png" alt="Our logo" title="Visit Site" width="100" /></a></p>-->
                        <p id="logo"><a href="#"><img src="<?php echo base_url(); ?>design/FCI_logo.jpg" alt="Our logo" title="Visit Site" width="100" /></a></p>



                        <!-- Create a new project -->
                        <!--<p id="btn-create" class="box"><a href="#"><span>Create a new project</span></a></p>-->

                    </div> <!-- /padding -->


                    <?php
                    include 'menu.php';
                    ?>
                    <!-- Search -->
                    <!--                    <form action="#" method="get" id="search">
                                            <fieldset>
                                                <legend>Search</legend>
                    
                                                <p><input type="text" size="17" name="" class="input-text" />&nbsp;<input type="submit" value="OK" class="input-submit-02" /><br />
                                                    <a href="javascript:toggle('search-options');" class="ico-drop">Advanced search</a></p>
                    
                                                 Advanced search 
                                                <div id="search-options" style="display:none;">
                    
                                                    <p>
                                                        <label><input type="checkbox" name="" checked="checked" /> Option I.</label><br />
                                                        <label><input type="checkbox" name="" /> Option II.</label><br />
                                                        <label><input type="checkbox" name="" /> Option III.</label>
                                                    </p>
                    
                                                </div>  /search-options 
                    
                                            </fieldset>
                                        </form>-->

                </div> <!-- /aside -->

                <hr class="noscreen" />

                <!-- Content (Right Column) -->
                <div id="content" class="box">
                    
                    <?php
                  
                    echo $tergetPage;
                    ?>

                </div> <!-- /content -->

            </div> <!-- /cols -->

            <hr class="noscreen" />

            <!-- Footer -->
            <div id="footer" class="box">

                <p class="f-left">&copy; 2013 <a href="#"></a>, All Rights Reserved &reg;</p>

                <p class="f-right">Developed by <a href="https://www.facebook.com/anowar.cst">Adminizio</a></p>

            </div> <!-- /footer -->

        </div> <!-- /main -->

    </body>
</html>

