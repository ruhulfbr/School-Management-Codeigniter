<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>File Inventory System</title>
        <style type="text/css">
            textarea{
                width: 100%;
            }
        </style>
        <?php include 'link.php'; ?>
        <script type="text/javascript">
            function showMouja(str)
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
                xmlhttp.open("GET", "<?php echo base_url(); ?>index.php/register_control/moujaquery?q=" + str, true);
                xmlhttp.send();
            }</script>
    </head>
    <body>
        <!-- header -->
        <?php include("header.php"); ?>
        <div class="row">
          <div class="col-md-12 margin-top-admin">
           
                <div class="login_form">
                    <h3>Admin Panel Login</h3>
    
                    <a href="#" class="forgot_pass">Forgot password</a> 
                    <form action="<?php echo base_url(); ?>admin/loginCheck.jsp" method="post" class="niceform">
                        <fieldset>
                            <dl>
                                <dt><label for="email">Username:</label></dt>
                                <dd><input type="text" name="user_name" id="" size="54" required="1"/></dd>
                            </dl>
                            <dl>
                                <dt><label for="password_input">Password:</label></dt>
                                <dd><input type="password" name="password_input" id="" size="54" required="1"/></dd>
                            </dl>
                            <dl class="submit">
                                <input type="submit" name="submit" id="submit" value="Enter" />
                            </dl>
                        </fieldset>
                    </form>
                </div>  
            </div>
        </div>
            <div class="form-group  margin-top-admin">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="margin-bottom: 10px">
                    <?php include("footer1.php"); ?>
                </div>
            </div>
    </body>
</html>
