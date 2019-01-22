<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Noapara Model Secondary School</title>
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>tmp/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>tmp/js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>tmp/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>tmp/css/modern-business.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>tmp/js/jquery_ui/jquery-ui.css">
        <script src="<?php echo base_url(); ?>tmp/js/jquery_ui/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url(); ?>tmp/js/jquery_ui/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>tmp/js/jquery_ui/calendar.js"></script>
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>tmp/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body style="margin: 0px; padding: 0px;" onload="startTime();">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #EFE1DB; height: 120px;">
                <?php include 'heder_page.php'; ?>
            </div>
        </div>
        <!-- Navigation -->
        <?php include 'nave_page.php'; ?>
        <!-- Navigation -->
        <!--navbar-fixed-top-->


        <div class="container" style="border-left: 1px #CCC solid;border-right: 1px #CCC solid;background:#fff;box-shadow:0 0 0px #999999">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12" style="padding: 5px;">
                    <!-- Header Carousel -->
                    <?php include 'slider_page.php'; ?>
                    <!-- Header Carousel -->
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 5px; box-shadow:#999999 0 0 5px ">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="">
                        <?php echo $tergetPage; ?>

                    </div>
                    <!-- Content Row -->

                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="padding: 0px;">
                        <?php include 'right_side.php'; ?>

                    </div>

                </div>
            </div>



        </div>   
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #4D0033; margin-top: 2px; padding: 0px;">
                <?php include 'footer_page.php'; ?>
            </div>
        </div>
































    </body>

</html>


<?php // include("footer.php");?>