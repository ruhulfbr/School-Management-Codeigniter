<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 Optional theme 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

 Latest compiled and minified JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">

     Custom CSS 
    <link href="css/modern-business.css" rel="stylesheet">

     Custom Fonts 
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>-->
<link href="../rsr/js/bootstrap5/css/bootstrap-theme.css" rel="stylesheet">
<link href="../rsr/js/bootstrap5/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../rsr/js/bootstrap5/css/bootstrap.css" rel="stylesheet">
<link href="../rsr/js/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
<script src="../rsr/js/bootstrap5/js/bootstrap.js"></script>
<script src="../rsr/js/bootstrap5/js/bootstrap.min.js"></script>
<script src="../rsr/js/bootstrap5/js/npm.js"></script>


<script type="text/javascript">

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    
 
    </script>

</head>

<body style="margin: 0px; padding: 0px;" onload="startTime();">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12" style="border: 1px red solid; height: 120px;">
           hello
        </div>
    </div>

    <!-- Navigation -->
    <!--navbar-fixed-top-->
    <nav class="navbar navbar-inverse " role="navigation" style="height: 30px; margin-bottom: 2px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" style="border: 1px #0281EC solid;background:#fff;box-shadow:0 0 15px #999999">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12" style="padding: 5px;">
           <!-- Header Carousel -->
           <header id="myCarousel" class="carousel slide" style=" height: 400px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('d54da7de-6ad2-4c8a-8f57-145983808fb3_5.jpg');  height:400px;"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
        </div>
    </div>  
         <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 5px; box-shadow:#999999 0 0 15px ">
           <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
               
               <script type="text/javascript">
                      
    $('#myDropdown').click('show.bs.dropdown', function () {
   $('.dropdown-menu').dropdown();
})
              
               </script>
               
               
               <div class="dropdown">
  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown trigger
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dLabel">
      <li>hee</li>
      <li>hee</li>
      <li>hee</li>
  </ul>
</div>
               <script type="text/javascript">
$(document).ready(function(){
	$(".navbar-header").click(function(){
$("#bs-example-navbar-collapse-1").toggle();
});
});
</script>
 
               
               
     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>          
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
           </div>
        <!-- Content Row -->
      
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="padding: 0px;">
            <div class="panel panel-default" style="border: 1px #661346 solid">
                      <div class="panel-heading" style="background-color: #661346; color: white;">
                          <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Weather News</b></h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            <div class="panel panel-default" style="border: 1px #661346 solid">
                      <div class="panel-heading" style="background-color: #661346; color: white;">
                          <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Visitor Counter</b></h4>
                    </div>
                    <div class="panel-body">
                        <center><script type="text/javascript" src="http://widget.supercounters.com/flag.js"></script><script type="text/javascript">sc_flag(609678,"FFFFFF","000000","cccccc",2,10,0,0)</script><br>
</center>
                    </div>
                </div>
            <div class="panel panel-default" style="border: 1px #661346 solid">
                      <div class="panel-heading" style="background-color: #661346; color: white;">
                          <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Time</b></h4>
                    </div>
                <div class="panel-body">
                                    <script>
                function startTime() {
                var today=new Date();
                var h=today.getHours();
                var m=today.getMinutes();
                var s=today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h+":"+m+":"+s;
                var t = setTimeout(function(){startTime()},500);
                }

                function checkTime(i) {
                if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
                }
                                    </script>

                                    <b> <div id="txt" style="text-align: center; font-size: 30px "></div></b>
                </div>
                </div>
            
             <div class="panel panel-default" style="border: 1px #661346 solid">
                      <div class="panel-heading" style="background-color: #661346; color: white;">
                          <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Latest News</b></h4>
                    </div>
                    <div class="panel-body">
                        		<marquee height='200'  onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="5" scrollamount="1" direction="up" behavior="scroll" >
                    <div style="padding:5px">
						<div class="newsscroller_title">
							<a href="" target="_blank">The government passed the Act in 15 July 2001 to establish a science and technology university in Pabna.The university will be located in the district head quarter of Pabna.</a>
						</div>
						<div style="clear:both"></div>
						                            
					</div>
                              
                    </marquee>
                    </div>
                </div>
            
            <div class="panel panel-default" style="border: 1px #661346 solid">
                <div class="panel-heading" style="background-color: #661346; color: white;">
                    <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Calendar</b></h4>
                </div>
                <div class="panel-body">
                    <div id="datepicker" style="width: 100%">
                        <style type="text/css">
                            .calendar{margin-top:10px;background:#F1E3DB;border:2px solid #564739;}
.calendar h2{background:#661346;line-height:35px;padding:6px;
color:#fff;margin-bottom:3px;margin-top:0px;
box-shadow: 0px 1px rgba(255, 255, 255, 0.3) inset, 0px -1px rgba(0, 0, 0, 0.3) inset, -1px 0px rgba(255, 255, 255, 0.1);
text-align:center}
.calendar table{margin:0 0 0 5px}
.calendar th {
    font-size: 18px;
    text-align: center;
    background: none repeat scroll 0px 0px #E0E0E0;
    border: 3px solid #FFF;
    padding: 6px 2px;
    color: #000;
}
.calendar tbody td {
    background: none repeat scroll 0px 0px #F5F5F5;
    border: 8px solid #FFF;
    padding: 8.5px;
    text-align: center;
    font-size: 18px;
}
.calendar caption {
  background-color: #A13265;
  color: #FFFFFF;
  font-family: 'OpenSans-Semibold',Arial,Verdana,sans-serif;
  padding: 6px;
  text-align: center;
 
}
.calendar tfoot td {
  background: none repeat scroll 0 0 #3F3C3D;
  border-top: 3px solid #FFFFFF;
  padding: 8px 8px;
}

.calendar tbody {
  color: #402B56;
}
.calendar tfoot .next {
  text-align: right;
}
.calendar tfoot td {
  background: none repeat scroll 0 0 #3F3C3D;
  border-top: 3px solid #FFFFFF;
  padding: 8px 8px;
}
                        </style>
                        <link rel="stylesheet" href="../rsr/js/jquery_ui/jquery-ui.css">
  <script src="../rsr/js/jquery_ui/jquery-1.10.2.js"></script>
  <script src="../rsr/js/jquery_ui/jquery-ui.js"></script>
  <script src="../rsr/js/jquery_ui/calendar.js"></script>
 
   <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>  
  <div class="calendar">
  <script type="text/javascript">
            calendar();
        </script>
                        
  </div>                 
                    </div>


                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            </div>
       
        </div>
         </div>
        
        
        
    </div>   

</body>

</html>
