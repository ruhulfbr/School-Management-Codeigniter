<div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346; color: white">
                        <h3>Noapara Model Secondary School</h3>   
                    </div>
             <div class="well">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px;">
                    <p style="font-size: 17px; text-align: justify">
                        <img src="http://1.bp.blogspot.com/-7jGKx8ieqFE/VE9WMn4ecZI/AAAAAAAAAKY/wAYBTc3_jGI/s1600/4721_Medical_Admission.jpg" class="col-md-8 col-lg-8 col-sm-6" style="float: left; padding-right: 6px; padding-bottom: 6px;">
                       The government passed the Act in 15 July 2001 to establish a science and technology university in Pabna. The university will be located in the district head quarter of Pabna.

Pabna is a central district town in northern Bangladesh having long historical and cultural heritage. The academic curriculum of the Pabna University of Science and Technology was started on 15 July 2008. This university will play an innovative role in providing need-based higher education, training and research. Also the university will be committed to maintain and raise the quality and standard of higher education for the students as in international standards. This practical and need-based curricula will produce highly qualified trained scientists and technologists for the needs of Bangladesh as well as the world employment market.

The university offers education in science- and technology-based subjects for undergraduate and post graduate levels. This newly established university will occupies an area of about 30 acres, with a number of multi-storied buildings. Because of its location, it has already drawn the attention of brilliant students for admission and scholarly faculty members for teaching and research.
                    </p>
                </div>
               
            </div>
        </div>
<div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346; color: white">
                        <h3>Our Design tells about quality</h3>   
                    </div>
                <div class="row">
                <div class="col-md-12" style="padding-top: 20px;">
                    <p style="font-size: 17px; text-align: justify">
                        <img src="http://www.geebd.com/uploads/images/news/SHAFBD_1439130127.jpg" class="col-md-8 col-lg-8 col-sm-6" style="float: right; padding-right: 6px; padding-bottom: 6px;">
                       The government passed the Act in 15 July 2001 to establish a science and technology university in Pabna. The university will be located in the district head quarter of Pabna.

Pabna is a central district town in northern Bangladesh having long historical and cultural heritage. The academic curriculum of the Pabna University of Science and Technology was started on 15 July 2008. This university will play an innovative role in providing need-based higher education, training and research. Also the university will be committed to maintain and raise the quality and standard of higher

                    </p>
                </div>
               
            </div> 
                    
<div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="padding: 0px; margin-bottom: 20px;">
    <div class="col-md-6 col-sm-12 col-xs-12  col-lg-6" style="padding-left: 0px;">
                     <div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346;  padding: 5px;">
                      <b style="font-size: 24px; color: white">Our Education</b>
                     </div> 
                      <p style="font-size: 18px; text-align: justify">
                          Lorem ipsum dolor consectetursit amet, consectetur adipiscing elit consectetur euismod 
                      </p>
                      <p style="font-size: 18px; text-align: justify;">
                       Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat fabulas complectitur deterruisset at pro. Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea.   
                      
                      </p>
                    </div>
    <div class="col-md-6 col-sm-12 col-xs-12  col-lg-6" style="padding: 0px;">
                     <div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346;  padding: 5px;">
                      <b style="font-size: 24px; color: white">Our Courses</b>
                     </div> 
                      <p style="font-size: 18px; text-align: justify">
                          Lorem ipsum dolor consectetursit amet, consectetur adipiscing elit consectetur euismod 
                      </p>
                      <p style="font-size: 18px; text-align: justify;">
                       Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat fabulas complectitur deterruisset at pro. Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea.   
                      
                      </p>
                    </div>
                    </div>
                 <div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346;   color: #FFF">
                        <h3>Our Event</h3>   
                    </div>
               
                <div  class="row">
                   
                <div class="col-md-12 col-sm-12 col-xs-12  col-lg-12 ">
                    <marquee   onmouseout="this.start()" onmouseover="this.stop()" >
                    <?php 
                     $this->db->select ( '*' );
        $this->db->from ('tbl_event');
//        $this->db->where ( 'id', $id );
        $this->db->limit('3');
        $this->db->order_by('event_id' ,'desc' );
        $resultSet = $this->db->get ();
        $result=$resultSet->result();
        foreach ($result as $infor){
                    ?>
                     <a href="<?php echo base_url(); ?>home/view_advertisement/<?php echo $infor->event_id; ?>" style="text-decoration: none"> 
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6" style="padding: 3px;">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 0px; border: 1px #EEE solid;  max-width: 240px;">
                        <img src="<?php echo base_url().$infor->event_photo; ?>" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="height: 140px; max-width: 240px; padding: 0px;">
                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 0px; background-color: #EEE; color: #661346; font-size: 17px; max-width: 240px;">
                   <?php echo $infor->event_hading; ?><br>
                   Date:<?php echo $infor->event_date ; ?>
                   </div> 
                    </div> 
                    </div> 
                     </a>
                    
        <?php } ?>
                    </marquee>
                </div>
                </div>         



<div class="col-md-12 col-sm-12 col-xs-12  col-lg-12" style="background-color: #661346;  color: #FFF">
                        <h3>Our Video</h3>   
                    </div>
               
                <div  class="row">
                   
                    <div class="col-md-12 col-sm-12 col-xs-12  col-lg-12 " style="padding-top: 10px; padding-bottom: 10px;">
                   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-video" data-href="https://www.facebook.com/facebook/videos/10153231379946729/" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook/videos/10153231379946729/"><a href="https://www.facebook.com/facebook/videos/10153231379946729/">How to Share With Just Friends</a><p>How to share with just friends.</p>Posted by <a href="https://www.facebook.com/facebook">Facebook</a> on Friday, December 5, 2014</blockquote></div></div>
                </div>
                </div>             

      