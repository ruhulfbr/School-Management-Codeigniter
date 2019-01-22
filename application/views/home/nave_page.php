<style  type="text/css">
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0px; 
    background-color: #661346;
   
    /*height: 120px;*/
 }
 .dropdown-menu li a{
   color: white;  
   font-size: 16px;
 }
 .dropdown-menu li a:hover{
     /*height: 60px;*/
     font-size: 16px;
     padding-top: 8px;
     padding-bottom: 8px;
     background-color: #4D0A33;
     color: white;
 }
 
 ul{
     font-size: 14px;
     color: white !important;
 }
</style>



<nav class="navbar navbar-inverse " role="navigation"  style=" margin-bottom: 2px; background-color: #661346; border-radius: 0px; padding-left: 0px; padding-right: 0px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>home/index"><i class="glyphicon glyphicon-home"></i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
<!--                    <li>
                        <a href="<?php echo base_url(); ?>home/principal_speech">principal speech</a>
                    </li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <!--আমাদের তথ্য-->
                              Our Information
                            <!--Our Info-->
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo  base_url(); ?>home/principal_speak">Principal Speech</a>
                            </li>
                            <li>
                                <a href="<?php echo  base_url(); ?>home/comiti_speak">Council Member's Speech</a>
                            </li>
                            <li>
                                <a href="<?php echo  base_url(); ?>home/history">School History</a>
                            </li>
                            <li>
                                <a href="<?php echo  base_url(); ?>home/successful_student">Successful Student</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/rulse_regulation">Rules And Regulations</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/school_treasury">School Treasury</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/our_communication">Our Communication</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/school_play_ground">School Play Ground</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--School regulation-->
                                <!--স্কুল প্রশাসন--> 
                                Administration
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo  base_url(); ?>home/board_of_directors">Board of Directors</a>
                            </li>
                            <li>
                                <a href="<?php echo  base_url(); ?>home/staffs">staffs</a>
                            </li>
                            <li>
                        <a href="<?php echo base_url();?>home/teachers">Teachers</a>
                    </li>
                            <li>
                        <a href="<?php echo base_url();?>home/old_teacher">Old Teachers</a>
                    </li>
                            <li>
                        <a href="<?php echo base_url();?>home/student_attandance_info">Student Attendance</a>
                    </li>
                            <li>
                        <a href="<?php echo base_url();?>home/staff_attandance_info">Staff Attendance</a>
                    </li>
                            <li>
                        <a href="<?php echo base_url();?>home/old_teacher">Old Teachers</a>
                    </li>
<!--                            <li>
                                <a href="<?php echo  base_url(); ?>home/history">School History</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/rulse_regulation">Rules And Regulations</a>
                            </li>-->
                          
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--result-->
                            Result
                            <!--ফলাফল-->
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                             <li>
                                <a href="<?php echo base_url(); ?>home/serch_student_result">School Result</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/psc_result">PSC Board Result</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/jsc_result">JSC Board Result</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/ssc_result">SSC Board Result</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/board_result">Board Result</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/downloads/tot_ist">Tot List</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--result-->
                        Activities
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                             <li>
                                <a href="<?php echo base_url(); ?>home/all_event">Event</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/all_advertisement">Advertisement</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>home/class_activities">Class Activities</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Download<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo  base_url(); ?>home/downloads/class-routine">Class Routine</a>
                            </li>
                            <li>
                        <a href="<?php echo base_url();?>home/downloads/exam-routine">Exam Routine</a>
                    </li>
                            <li>
                        <a href="<?php echo base_url();?>home/downloads/yearly-leave-calendar">Yearly Leave Calendar</a>
                    </li>
                            <li>
                        <a href="<?php echo base_url();?>home/downloads/academic-calendar">Academic Calendar</a>
                    </li>
                        <li>
                                <a href="<?php echo base_url(); ?>home/downloads/tot_ist">Tot List</a>
                            </li>  
                          
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>home/library">
                       Library
                            <!--পাঠাগার-->
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>home/gallery">Gallery</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>home/contact">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo  base_url(); ?>home/index">About</a>
                    </li>
<!--                    <li>
                        <a href="<?php echo base_url();?>home/teachers">Teachers</a>
                    </li>-->
                   
           
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>home/search_student">Search Student</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/serch_student_result">Search Result</a>
                            </li>
                            
                        </ul>
                    </li>
<!--                    <li class="dropdown">
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
                    </li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>home/online_admission">Online Admission</a>
                            </li>
                            <li>
                                <a href="#">Important Link</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home/online_fees">Online Fees</a>
                            </li>
<li>
                                 <a href="<?php echo base_url(); ?>home/visitor_comments">Visitor Comments</a>
                            </li>
                          
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
