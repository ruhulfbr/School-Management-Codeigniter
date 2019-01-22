<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

    
        <title>Noapara Model Secondary School</title>
        
        <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
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
    <body>
        <div class="container" id="mydiv" style="border-left: 1px #CCC solid;border-right: 1px #CCC solid;background:#fff;box-shadow:0 0 0px #999999">
            <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 col-md-offset-1" style="margin-bottom: 6px; padding: 8px; border: 1px #CCC solid">
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 6px; padding: 0px; background-color: #EFE1DB">
                      
                       <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style=" padding: 0px">
        <img src="<?php echo base_url(); ?>logo/logot.jpg" class="img-responsive">
    </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 6px; padding: 0px">
                        <table class="table table-bordered">
                            <tr>
                                <td>Student Name:</td>
                                <td><?php echo $student_name; ?></td>
                            </tr>
                            <tr>
                                <td> Father's Name: </td>
                                 <td><?php echo $fathar_name; ?></td>
                            </tr>
                            <tr>
                                <td> Mother's Name: </td>
                                  <td><?php echo $mother_name; ?></td>
                            </tr>

                            <tr>
                                <td> Present Address:</td>
                                  <td><?php echo $present_address; ?></td>
                               
                            </tr>
                            <tr>
                                <td> Permanent Address:</td>
                                 <td><?php echo $permanent_address; ?></td>
                               
                            </tr>
                            <tr>
                                <td> Religion:</td>
                                 <td><?php echo $religion; ?></td>
                                 
                            </tr>
                            <tr>
                                <td>  Sex:</td>
                                 <td><?php echo $sex; ?></td>
                                
                            </tr>
                            <tr>
                                <td> Date Of Birth:</td>
                                 <td><?php echo $birth_date; ?></td>
                               
                            </tr>
                            <tr>
                                <td>Class Name:</td>
                                      <td><?php echo $class_name; ?></td>
                               
                            </tr>
                            <tr>
                                <td>
                                    Group:  
                                </td>
                                 <td><?php echo $group; ?></td>
                          
                            </tr>
                            <tr>
                                <td>Mobile Number Home:</td>
                                 <td><?php echo $home_number; ?></td>
                                
                            </tr>
                            <tr>
                                <td>Mobile Number Own:</td>
                                 <td><?php echo $own_number; ?></td>
                               
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="button" class="btn btn-default btn-sm" value="Print Div" onclick="PrintElem('#mydiv')">Print</button></td>
                            </tr>    
                        </table>      
                    </div>


                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 6px; padding: 0px; background-color: #EFE1DB; height: 60px;">
                      
                    </div>
            </div>
        </div>
    </body>
</html>