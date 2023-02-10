<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

 <!--Blog Page Content Start Here-->
 <section class="newsroom">
         <div class="section_width">
            <div class="col-md-12">
               <h1>Newsroom</h1>
            </div>
           
            <div class="col-md-12"> 
               <div class="newsroomcarousel">
                  <div id="newroomslider" class="owl-carousel owl-theme text-center">
                     <!--repeat start here-->
                     <?php
                        $singleArgs = array( 'post_per_page' => 4, 'offset'=> 0, 'category' => 3,'post_type' => 'pr_individual', );
                        $singlePost = get_posts( $singleArgs );

                     //   print_r($singlePost);die;
                        foreach ( $singlePost as $single ) : setup_postdata( $single ); 
                        $singleperm = get_permalink($single->ID);
                        $singleimage = wp_get_attachment_image_src( get_post_thumbnail_id($single->ID), 'single-post-thumbnail' );
                     ?>
                     <div class="item">
                        <div class="newsroominner">
                           <div class="newsroomimg">
                              <img src="<?php echo $singleimage['0']; ?>" />
                           </div>
                           <div class="newsroominfo">
                              <div class="newsroomcontent"><?php echo get_the_title($single->ID); ?>                              </div>
                              <span class="datenewsroom"><?php echo get_the_time('j M Y',$single->ID) ?></span>
                              <a href="<?php echo $singleperm; ?>" class="odc__btn--more odc__btn--xl">Read more</a>
                           </div>
                        </div>
                     </div>
                     <?php   endforeach;   wp_reset_postdata(); wp_reset_query();   ?>
                     <!--repeat end here-->
                 </div>
               </div>
            </div>
         </div>
      </section>
        <section class="annoucement">
         <div class="section_width">
            <div class="col-md-12">
               <div class="heading_div text-center">
                  <span class="annoucement_icon"></span>
                  <h2>Announcements</h2>
               </div>
            </div>
            <div class="annoucementsliderwr">
               <div id="annoucementslider" class="owl-carousel owl-theme">
                  <!--repeat start here-->
                  <div class="item">
                     <div class="annouce_sliderwrinner">
                        <div class="annoucement_div upperdiv">
                           <div class="col-md-3 col-sm-3 col-xs-12 annoucement_lt">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/newsroomodessalogo.png" />
                           </div>
                           <div class="col-md-9 col-sm-9 col-xs-12 nopad">
                              <div class="annoucement_rt">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <p>Data protection is paramount with controls to enforce SAML or SSO, and robust
                                    compliance programs in place to meet your business needs.</p>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                        </div>
                        <div class="bottomdiv">
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--repeat end here-->
                  <div class="item">
                     <div class="annouce_sliderwrinner">
                        <div class="annoucement_div upperdiv">
                           <div class="col-md-3 col-sm-3 col-xs-12 annoucement_lt">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/newsroomodessalogo.png" />
                           </div>
                           <div class="col-md-9 col-sm-9 col-xs-12 nopad">
                              <div class="annoucement_rt">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <p>Data protection is paramount with controls to enforce SAML or SSO, and robust
                                    compliance programs in place to meet your business needs.</p>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                        </div>
                        <div class="bottomdiv">
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="annouce_sliderwrinner">
                        <div class="annoucement_div upperdiv">
                           <div class="col-md-3 col-sm-3 col-xs-12 annoucement_lt">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/newsroomodessalogo.png" />
                           </div>
                           <div class="col-md-9 col-sm-9 col-xs-12 nopad">
                              <div class="annoucement_rt">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <p>Data protection is paramount with controls to enforce SAML or SSO, and robust
                                    compliance programs in place to meet your business needs.</p>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                        </div>
                        <div class="bottomdiv">
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore </a>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                              <div class="annoucement_div">
                                 <span class="date">June 10, 2020</span>
                                 <h3>Lorem ipsum dolor sit amet,onsectetuer adipiscing elit, sed diam nonummy </h3>
                                 <a href="#" class="odc__btn--more odc__btn--xl">Readmore</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="news">
         <div class="section_width">
            <div class="innerwidth_section">
               <div class="col-md-12">
                  <div class="heading_div text-center">
                     <span class="news_icon"></span>
                     <h3>In the News</h3>
                  </div>
               </div>
               <div class="clearfix">
                  <div class="news_div upperdiv">
                     <div class="col-md-6 col-sm-6 col-xs-12 news_lt">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news.png" />  
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-12 nopad">
                        <div class="news_rt">
                           <span class="date">June 25, 2020</span>
                           <h3>Accelerating Digital Transformation After COVID-19</h3>
                           <a href="https://www.magazine.monitordaily.com/critical-technology-accelerating-digital-transformation-after-covid19" class="odc__btn--more odc__btn--xl">Readmore </a>
                        </div>
                     </div>
                  </div>
                  <div class="bottomdiv">
                     <div class="col-md-4 col-sm-4 col-xs-12  pd10">
                        <div class="news_div">
                           <span class="date">February 20, 2020</span>
                           <h3>Odessa SVP Keelie Fitzgerald Named Top 50 Women in Equipment Finance</h3>
                           <a href="https://www.magazine.monitordaily.com/keelie-fitzgerald" class="odc__btn--more odc__btn--xl">Read more </a>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                        <div class="news_div">
                           <span class="date">July 10, 2019</span>
                           <h3>Living in the Future: The Monitor 2019 Tech Roundtable </h3>
                           <a href="https://www.monitordaily.com/article-posts/living-in-the-future-the-monitor-2019-tech-roundtable/" class="odc__btn--more odc__btn--xl">Read more </a>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 pd10">
                        <div class="news_div">
                           <span class="date">July 1, 2018</span>
                           <h3>The Next Big Trend: Equipment Finance is Ready for a Platform</h3>
                           <a href="https://www.monitordaily.com/article-posts/next-big-trend-equipment-finance-ready-platform/" class="odc__btn--more odc__btn--xl">Read more </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    
      <section class="awards">
         <div class="section_width">
            <div class="col-md-12">
               <div class="heading_div text-center">
                  <span class="award_icon"></span>
                  <h4>Awards and Recognition</h4>
               </div>
            </div>
            <div class="col-md-12">
               <div class="awardswr">
                  <div class="awardswr_upperrow">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/awards/elfa.png" />
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/awards/inc.png" />
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/awards/philadelphia.png" />
                  </div>
                  <div class="awardswr_bottomrow">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/awards/workingmother.png" />
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/awards/stpi.png" />
                  </div>
               </div>
            </div>
            <div class="col-md-12 email_div">
               <h4><span class="email"></span>For media enquiries contact&nbsp;<a href="mailto:'press@odessainc.com'">
                     press@odessainc.com</a></h4>
            </div>
         </div>
      </section>
   </div>


<?php
get_footer();
?>

<script>
   $('#newroomslider').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      center: true,
      dots: true,
      autoplay: false,
      responsive: {
         0: {
            items: 1
         },
         768: {
            items: 3
         },
         1024: {
            items: 3
         }
      }
   });
   $('#annoucementslider').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      touchDrag: false,
      mouseDrag: false,
      navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      autoplay: false,
      responsive: {
         0: {
            items: 1
         },
         768: {
            items: 1
         },
         1024: {
            items: 1
         }
      }
   });
</script>
