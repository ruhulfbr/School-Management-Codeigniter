
<div class="panel panel-default" style="border: 1px #661346 solid">
    <div class="panel-heading" style="background-color: #661346; color: white;">
        <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">All Event</b></h4>
    </div>
    <div class="panel-body">
        <marquee height='200'  onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="5" scrollamount="1" direction="up" behavior="scroll" >
        <?php 
            $this->db->select ( '*' );
        $this->db->from ('tbl_event');
       $this->db->order_by('event_id','desc');
        $resultSet = $this->db->get ();
        $result=$resultSet->result();
        foreach ($result as $eInfo){
            ?>
        
            <a href="<?php echo base_url(); ?>home/view_advertisement/<?php echo $eInfo->event_id; ?>" style="text-decoration: none"> <p style="background-color: gray; color: white; padding: 5px;"><?php echo $eInfo->event_hading; ?></p></a>
      <?php   }
        ?>
        </marquee>
          <a href="#" class="btn btn-default">Learn More</a>
    </div>
</div>

<div class="panel panel-default" style="border: 1px #661346 solid">
    <div class="panel-heading" style="background-color: #661346; color: white;">
        <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Visitor Counter</b></h4>
    </div>
    <div class="panel-body">
        <center><script type="text/javascript" src="http://widget.supercounters.com/flag.js"></script><script type="text/javascript">sc_flag(609678, "FFFFFF", "000000", "cccccc", 2, 10, 0, 0)</script><br>
        </center>
    </div>
</div>
<div class="panel panel-default" style="border: 1px #661346 solid">
    <div class="panel-heading" style="background-color: #661346; color: white;">
        <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Time</b></h4>
    </div>
    <div class="panel-body">
        <script type="text/javascript">
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                var t = setTimeout(function() {
                    startTime()
                }, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }
                ;  // add zero in front of numbers < 10
                return i;
            }
        </script>

        <b> <div id="txt" style="text-align: center; font-size: 30px "></div></b>
    </div>
</div>

<div class="panel panel-default" style="border: 1px #661346 solid">
    <a href="<?php echo base_url() ?>home/notise_page" style="text-decoration: none">
        <div class="panel-heading" style="background-color: #661346; color: white;">
            <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">Latest News</b></h4>
        </div></a>
    <div class="panel-body">
        <marquee height='200'  onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="5" scrollamount="1" direction="up" behavior="scroll" >
            <div style="padding:5px">
                <div class="newsscroller_title">
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_notice');
                    $this->db->where('publish', '1');
                    $resultSet = $this->db->get();
                    $notice = $resultSet->result();

                    foreach ($notice as $nInfo) {
                        ?>
                        <style class="dr">
                            .dr{
                                color: #000; background-color: #F5F5F5; padding: 5px; margin-bottom: 5px;
                            }
                            .dr:hover{
                                color: red
                            }
                        </style>
                        <a href="<?php echo base_url() . $nInfo->pdf; ?> " target="_blank" style=" font-size: 20px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dr" style="">
                                <?php echo $nInfo->notice_title; ?> 
                            </div>

                        </a>

                    <?php } ?>

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

        <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
<!--  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        -->
        <script type="text/javascript">

            $(function() {
                $("#datepickerr").datepicker();
            });
        </script>

        <div id="datepickerr" style="width: 100%; height: 300px;">
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





        </div>
        <!--  <div class="calendar">
          <script type="text/javascript">
                    calendar();
                </script>
                                
          </div> -->

    </div>
</div>
<div class="panel panel-default" style="border: 1px #661346 solid">
    <div class="panel-heading" style="background-color: #661346; color: white;">
        <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">
                <!--link-->
                গুরুত্বপূর্ণ লিঙ্ক
            </b></h4>
    </div>
    <div class="panel-body">
        <p>
            <a target="_blank" href="http://www.bangladesh.gov.bd">
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;বাংলাদেশ পোর্টাল</a>
        </p>
        <p></p>
        <a target="_blank" href="http://www.moedu.gov.bd">
            <i class="fa fa-caret-right"></i>&nbsp;&nbsp;
            শিক্ষা মন্ত্রনালয়
        </a>
        <p>
            <a target="_blank" href="http://www.educationboardresults.gov.bd">
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;
                জাতীয় শিক্ষা বোর্ড </a>
        </p>
        <p>
            <a target="_blank" href="http://www.bmeb.gov.bd">
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;
                মাদ্রাসা শিক্ষা বোর্ড
            </a>
        </p>

        <p>
            <a target="_blank" href="http://www.educationboard.gov.bd">
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;

                শিক্ষা বোর্ড অফিসিয়াল ওয়েবসাইট

            </a>
        </p>
<p>
            <a target="_blank" href="http://www.jessoreboard.gov.bd">
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;

               যশোর বোর্ড

            </a>
        </p>
        <p>
            <a target="_blank" href="http://www.bteb.gov.bd">
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;
                কারিগরী শিক্ষা বোর্ড
            </a>
        </p>



    </div>
</div>


<div class="panel panel-default" style="border: 1px #661346 solid">
    <div class="panel-heading" style="background-color: #661346; color: white;">
        <h4><i class="fa fa-fw fa-check"></i><b style="text-align: center">
                <!--link-->
              Facebook Page
            </b></h4>
    </div>
    <div class="panel-body">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>

    </div>
</div>

















