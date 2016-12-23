<?php
/*
Template Name: Home Page
 */
// Custum Fields
$prelaunch_price = get_post_meta(15,'prelaunch_price',true);
$launch_price = get_post_meta(15,'launch_price',true);
$final_price = get_post_meta(15,'final_price',true);
$course_url = get_post_meta(15,'course_url',true);
$button_text= get_post_meta(15,'button_text',true);
$optin_text= get_post_meta(15,'optin_text',true);
$optin_button_text= get_post_meta(15,'optin_button_text',true);

// Advanced Custum Fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_feature_desc = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_des = get_field('reason_1_description');
$reason_2_title = get_field('reason_1_title');
$reason_2_des = get_field('reason_1_description');

$who_feature_image = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$instructor_section_title  = get_field('instructor_section_title');
$instructor_name  = get_field('instructor_name');
$bio_excerpt  = get_field('bio_excerpt');
$full_bio  = get_field('full_bio');
$twitter_username  = get_field('twitter_username');
$facebook_username  = get_field('facebook_username');
$google_plus_username  = get_field('google_plus_username');
$num_students  = get_field('num_students');
$num_reviews  = get_field('num_reviews');
$num_courses  = get_field('num_courses');



get_header(); ?>

 <!-- HERO -->  
    
     <section id="hero" data-type="background" data-speed="5">
    <article>
    <div class="container clearfix">
    <div class="row">
   
    <div class="col-sm-5">
    <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
    </div><!-- col -->
   
    <div class="col-sm-7 hero-text">
        <h1><?php bloginfo('name'); ?></h1>
           <p class="lead">  <?php bloginfo('description'); ?></p>
           
           <div id="price-timeline">
            <div class="price active">
            <h4>Pre-Launch Price <small>Ends soon!</small></h4>
            <span><?php echo $prelaunch_price; ?></span>
            </div><!-- end price -->
            <div class="price">
            <h4>Launch Price <small>Coming soon!</small></h4>
            <span><?php echo $launch_price; ?></span>
            </div><!-- end price -->
            <div class="price">
            <h4>Final Price <small>Coming soon!</small></h4>
            <span><?php echo $final_price; ?></span>
            </div><!-- end price -->
           </div><!-- price-timeline -->

           <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
    </div><!-- col -->
   
    </div><!-- row -->
    </div><!-- container -->
    </article>
    </section>      
           <!-- HERO -->
     
     <!-- OPT IN SECTION -->
     
     <section id="optin">
        <div class="container">
           <div class="row">
               
               <div class="col-sm-8">
                   <p class="lead"><?php echo $optin_text; ?></p>
               </div><!-- col -->
               
               <div class="col-sm-4">
                   <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
               </div><!-- col -->
           </div><!-- row -->
            
        </div><!-- container -->
         
     </section><!-- optin -->
     
     <!-- BOOST YOUR INCOME -->
     
     <section id="boost-income">
         <div class="container">
             <div class="section-header">
                 <!-- If user uploaded an Image -->
                 <?php if (!empty($income_feature_image)): ?>
                 <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
                 <?php endif; ?>
                 <h2><?php echo $income_section_title; ?></h2>
             </div><!-- SECTION-HEADER -->
             
             <p class="lead"><?php echo $income_feature_desc; ?></p>
             
             <div class="row">
                <div class="col-sm-6">
                   <h3><?php echo $reason_1_title; ?></h3>
                   <p><?php echo $reason_1_des  ; ?></p>
                </div><!-- COL --> 
                
                <div class="col-sm-6">
                    <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_des; ?></p>
                </div><!-- COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->
     </section>
     
     <!-- WHO BENEFITS -->
     
     <section id="who-benefits">
         <div class="container">
             
             <div class="section-header">
                 <!-- If user uploaded an image -->
                 <?php if (!empty($who_feature_image)): ?>
                 <img src="<?php echo $who_feature_image['url'] ;?> " alt="<?php echo $who_feature_image['alt']; ?>">
                 <?php  endif; ?>
                 <h2><?php echo $who_section_title ;?> </h2>
                 
                 
             </div><!-- SECTION-HEADER -->
             
             <div class="row">
                 <div class="col-sm-8 col-sm-offset-2">
                     
                     <?php echo $who_section_body;?>  

                 </div><!-- COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->
     </section><!-- WHO BENEFITS -->
     
     <!-- COURSE FEATURES -->
     
     <section id="course-features">
         <div class="container">
             
             <div class="section-header">
                        <!-- If user uploaded an image -->
                 <?php if (!empty($features_section_image)): ?>
                 <img src="<?php echo $features_section_image['url'] ;?> " alt="<?php echo 
                 $features_section_image['alt']; ?>">
                 <?php  endif; ?>
                 <h2><?php echo $features_section_title;?> </h2>
                  <!-- If user uploaded an body text  -->
                 <?php if (!empty($features_section_body)): ?>
                  <p class="lead"><?php echo $features_section_body ; ?></p>
                 <?php  endif; ?>
             </div><!--SECTION-HEADER-->
             
             <div class="row">
                 <?php $loop = new WP_Query( array('post_type' => 'course_feature', 
                     'orderby'=> 'post_id','order' =>'ASC'));  ?>
                      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                   <div class="col-sm-2">
                       <i class="<?php the_field('course_feature_icon') ; ?>" ></i>
                       <h4><?php the_title() ; ?></h4>
                 </div><!-- COL -->
     <?php endwhile; wp_reset_query(); ?>
                
                 </div><!-- COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->
     </section><!-- COURSE FEATURES -->
     
     <!-- PROJECT FEATURES -->
     
     <section id="project-features">
         <div class="container">
             
             <h2>Final Project Features</h2>
             <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website <strong>you</strong> are going to build? <em>You're looking at it!</em> The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
             
             <div class="row">
                 <div class="col-sm-4">
                     <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/icon-design.png" alt="Design">
                     <h3>Sexy & Modern Design</h3>
                     <p>You get to work with a modern, professional quality design & layout.</p>
                 </div><!-- END COL -->
                 
                 <div class="col-sm-4">
                     <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/icon-code.png" alt="Code">
                     <h3>Quality HTML5 & CSS3</h3>
                     <p>You'll learn how to hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.</p>
                 </div><!-- END COL -->
                 
                 <div class="col-sm-4">
                     <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/icon-design.png" alt="Design">
                     <h3>Easy-to-use CMS</h3>
                     <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
                 </div><!-- END COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->
     </section><!-- PROJECT-FEATURES -->
     
     <!-- VIDEO FEATURETTE -->
     
     <section id="featurette">
         <div class="container">
             <div class="row">
                 <div class="col-sm-8 col-sm-offset-2">
                     <h2>Watch the Course Introduction</h2>
                     <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
                 </div><!-- END COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->
     </section><!-- FEATURETTE -->
     
<!======================================= -->
<section id="instructor">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6">
				<div class="row">
					<div class="col-lg-8">
						<h2><?php echo $instructor_section_title;?> <small><?php echo $instructor_name;?></small></h2>
					</div><!-- end col -->
					
					 <div class="col-lg-4">
                            <?php if (!empty($twitter_username)):?>
                            <a href="http://twitter.com/<?php echo $twitter_username;?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                            <?php endif;?>
                                   <?php if (!empty($facebook_username)):?>
                            <a href="http://facebook.com/ <?php echo $facebook_username;?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                             <?php endif;?>
                            
                                   <?php if (!empty($google_plus_username)):?>
                            <a href="http://plus.google.com/ <?php echo $google_plus_username;?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                               <?php endif;?>
                        </div><!-- END COL -->
					
				</div><!-- row -->
				
				<p class="lead"><?php echo $bio_excerpt;?></p>
				
				Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.<br />
<br />
Brad&#039;s determination and love for what he does has landed him in some pretty interesting places with some neat people. He&#039;s had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.<br />
<br />
Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.				
				<hr>
				
				<h3>The Numbers <small>They Don't Lie</small></h3>
				
				<div class="row">
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								  <?php echo $num_students;?><span>students</span>
							</div><!-- num-content -->
						</div><!-- num -->
					</div><!-- end col -->
					
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								2013+ <span>reviews</span>
							</div><!-- num-content -->
						</div><!-- num -->
					</div><!-- end col -->
					
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								8 <span>courses</span>
							</div><!-- num-content -->
						</div><!-- num -->
					</div><!-- end col -->
				</div><!-- row -->
				
			</div><!-- end col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- instructor -->	
     
     <!-- TESTIMONIALS -->
     
     <section id="kudos">
         <div class="container">
             <div class="row">
                 <div class="col-sm-8 col-sm-offset-2">
                     
                     <h2>What People Are Saying About Brad</h2>
                     
                     <!-- TESTIMONIAL -->
                     <div class="row testimonial">
                         <div class="col-sm-4">
                             <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/brennan.jpg" alt="Brennan">
                         </div><!-- END COL -->
                         <div class="col-sm-8">
                             <blockquote>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque, harum dignissimos incidunt ab nisi voluptas totam similique impedit amet culpa quibusdam temporibus, sint eum commodi asperiores. Nihil, molestias quaerat!
                                 <cite>— Brennan, graduate of all of Brad's courses</cite>
                             </blockquote>
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                     
                      <!-- TESTIMONIAL -->
                     <div class="row testimonial">
                         <div class="col-sm-4">
                             <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
                         </div><!-- END COL -->
                         <div class="col-sm-8">
                             <blockquote>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque, harum dignissimos incidunt ab nisi voluptas totam similique impedit amet culpa quibusdam temporibus, sint eum commodi asperiores. Nihil, molestias quaerat!
                                 <cite>— Brennan, graduate of all of Brad's courses</cite>
                             </blockquote>
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                     
                       <!-- TESTIMONIAL -->
                     <div class="row testimonial">
                         <div class="col-sm-4">
                             <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/aj.png" alt="AJ">
                         </div><!-- END COL -->
                         <div class="col-sm-8">
                             <blockquote>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque, harum dignissimos incidunt ab nisi voluptas totam similique impedit amet culpa quibusdam temporibus, sint eum commodi asperiores. Nihil, molestias quaerat!
                                 <cite>— Brennan, graduate of all of Brad's courses</cite>
                             </blockquote>
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                             
                              <!-- TESTIMONIAL -->
                     <div class="row testimonial">
                         <div class="col-sm-4">
                             <img src="<?php bloginfo(stylesheet_directory);?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
                         </div><!-- END COL -->
                         <div class="col-sm-8">
                             <blockquote>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque, harum dignissimos incidunt ab nisi voluptas totam similique impedit amet culpa quibusdam temporibus, sint eum commodi asperiores. Nihil, molestias quaerat!
                                 <cite>— Ernest, graduate of Code Dynamic Websites with PHP</cite>
                             </blockquote>
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                 </div><!-- END COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->
     </section><!-- KUDOS -->
        <!-- SIGN UP SECTION
================================================== -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
	<p><a href="#" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#myModal">Yes, sign me up!</a></p>
									
			</div><!-- end col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- signup -->

<!-- FOOTER
================================================== -->
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/"><img src="<?php bloginfo();?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
                        
                        
		</div><!-- end col -->
		<div class="col-sm-6">
			<nav><ul class="list-unstyled list-inline">
 <li ><a href="#">Home</a></li>
<li><a href="#">Resources</a></li>
<li ><a href="#">Blog</a></li>
<li class="signup-link"><a href="#">Contact</a></li>
<li><a href="#" >Sign up now!</a></li>
</ul></nav>		</div><!-- end col -->
		<div class="col-sm-3">
			<p class="pull-right">Bootstrap to WordPress &copy; 2016 Brad Hussey</p>
		</div><!-- end col -->
	</div><!-- container -->
</footer>

<   <!-- MODAL
    ================================================== -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
           
                <div class="modal-header">
               
                </div><!-- modal header -->
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing list</h4>
                <div class="modal-body">
                    <p> Simply enter your name and email!  As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
                   
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                        </div><!-- form group -->
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">and your email</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                        </div><!-- form group -->
                       
                        <input type="submit" class="btn btn-danger" value="Subscribe!">
                       
                       
                    </form>
                   
                    <hr>
                   
                    <p><small>By provising your email you consent to receiving occasional promotional emails &amp; newsletters.  <br>No Spam.  Just good stuff.  We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                </div><!-- modal body -->
            </div><!-- modal content -->
        </div><!-- modal dialog -->
   
    </div><!-- modal -->




      
<?php get_footer();?>


