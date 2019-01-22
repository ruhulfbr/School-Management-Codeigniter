<!--
<!DOCTYPE html>
<html>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/menu_2.js"></script>

    <script type="text/javascript">

        ddaccordion.init({
            headerclass: "headerbar", //Shared CSS class name of headers group
            contentclass: "submenu", //Shared CSS class name of contents group
            revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
            mouseoverdelay: 500, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
            collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
            defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc] [] denotes no content
            onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
            animatedefault: false, //Should contents open by default be animated into view?
            persiststate: true, //persist state of opened contents within browser session?
            toggleclass: ["", "selected"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
            togglehtml: ["", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
            animatespeed: "normal", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
            oninit: function(headers, expandedindices) { //custom code to run when headers have initalized
                //do nothing
            },
            onopenclose: function(header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                //do nothing
            }
        })

    </script>
    <style type="text/css">
        .urbangreymenu li:hover{
            background: white;
/*            font-weight: bold;
            font-size: 20px*/
        }
    </style>-->
<!--<link type="text/css" href="css/menu_design.css" rel="stylesheet">-->



<div class="urbangreymenu">

        <ul class="box">
            <li id="submenu-active" id="menu-active"><a href="<?php echo base_url(); ?>view/index.jsp"><span>Home</span></a></li>

            <li><a href="<?php echo base_url(); ?>admin/notice.jsp"><span>Notice</span></a></li>
            <li><a href="<?php echo base_url(); ?>admin/syllabus.jsp"><span>Syllabus</span></a></li>
            <li><a href="<?php echo base_url(); ?>teachers/teacher.jsp"><span>Teachers info submit</span></a></li>
      <li><a href="<?php echo base_url(); ?>teachers/teachers_attendance.jsp"><span>Teachers Attendance</span></a></li>
      <li><a href="<?php echo base_url(); ?>teachers/successful_student.jsp"><span>Successful Student</span></a></li>

            <li><a href="<?php echo base_url(); ?>teachers/update_t_info.jsp"><span>Update Teacher info</span></a></li>
            <li><a href="<?php echo base_url(); ?>photos/addPhoto.jsp"><span>Upload Photo</span></a></li>
            <li><a href="<?php echo base_url(); ?>photos/viewAlbum.jsp"><span>View All Photo Album</span></a></li>
            <li><a href="<?php echo base_url(); ?>studentController/upload_info.jsp"><span>Upload</span></a></li>
            <!--<li><a href="#"><span>Result Notice</span></a></li>-->
            <!--<li><a href="#"><span>Result Notice</span></a></li>-->
            <li class="headerbar" id="submenu-active"><a href="#">Active Page</a> <!-- Active -->
                <ul class="submenu">
                     <li><a href="<?php echo base_url(); ?>studentController/view_student_info_add.jsp">Student Info Add</a></li>
                    <li><a href="<?php echo base_url(); ?>studentController/add_subject">Add Subject</a></li>
                    <li><a href="<?php echo base_url(); ?>studentController/add_mark">Add Mark</a></li>
                    <li><a href="<?php echo base_url(); ?>studentController/view_class_subject">View Subject</a></li>
                    <li><a href="<?php echo base_url(); ?>studentController/view_class_result">Class Result </a></li>
                    <li><a href="<?php echo base_url(); ?>studentController/view_one_student_result">One Student Result </a></li>
                    <li><a href="<?php echo base_url(); ?>studentController/improvement">Improvement</a></li>
                </ul>
            </li>
            <li class="headerbar" id="submenu-active"><a href="#">Active Page</a> <!-- Active -->
                <ul class="submenu">
                     <li><a href="<?php echo base_url(); ?>studentController/select_class_attendance">Class Attendance</a></li>
                     <li><a href="<?php echo base_url(); ?>studentController/search_class_attendance">View Attendance</a></li>
                     <li><a href="<?php echo base_url(); ?>studentController/add_class_fees">Add Class Fees</a></li>
                      <!--<li><a href="<?php echo base_url(); ?>studentController/accept_fees_page">Accept Fees</a></li>-->
                      <li><a href="<?php echo base_url(); ?>studentController/accept_fees_page_only_one">Accept Fees Only One</a></li>
                      <li><a href="<?php echo base_url(); ?>studentController/accept_exam_fees_page_only_one">Accept Exam Fees </a></li>
                   </ul>
            </li>
            <li class="headerbar"><a href="#">Lorem ipsum</a>
                <ul class="submenu">
                   
                    <li><a href="<?php echo base_url(); ?>studentController/treasury">Treasury</a></li>
           
                </ul>
            </li>
            
              <li class="headerbar" id="submenu-active"><a href="#">rules and regulations</a> <!-- Active -->
                <ul class="submenu">
                     <li><a href="<?php echo base_url(); ?>studentController/add_rules">Add Rules</a></li>
                     <li><a href="<?php echo base_url(); ?>studentController/add_event">Add Events</a></li>
                     <li><a href="<?php echo base_url(); ?>studentController/view_all_event">view Events</a></li>
                                     <li><a href="<?php echo base_url(); ?>studentController/advertisement">Add Advertisement</a></li>
                     <li><a href="<?php echo base_url(); ?>studentController/view_all_advertisement">view Advertisement</a></li>

                </ul>
            </li>
              <li class="headerbar" id="submenu-active"><a href="#">Page</a> <!-- Active -->
                <ul class="submenu">
                     <li><a href="<?php echo base_url(); ?>studentController/principal_speak">Principal Speech</a></li>
                </ul>
            </li>
              <li class="headerbar" id="submenu-active"><a href="#">Admin Page</a> <!-- Active -->
                <ul class="submenu">
                     <li><a href="<?php echo base_url(); ?>admin/add_admin">Add Admin</a></li>
                              <li><a href="<?php echo base_url(); ?>admin/change_password">Change Password</a></li>
                              <li><a href="<?php echo base_url(); ?>admin/view_admin_list">View All Admin</a></li>
                </ul>
            </li>
              <li class="headerbar" id="submenu-active"><a href="#">Admin Page</a> <!-- Active -->
                <ul class="submenu">
                     <li><a href="<?php echo base_url(); ?>admin/add_leave">Add leave</a></li>
                              <li><a href="<?php echo base_url(); ?>admin/apply_for_leave">Apply For Leave </a></li>
                              <li><a href="<?php echo base_url(); ?>admin/approveForLeaveList">Approve</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
