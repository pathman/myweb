<?php

?>
<!-- TESTIMONIALS -->
     
     <section id="kudos">
         <div class="container">
             <div class="row">
                 <div class="col-sm-8 col-sm-offset-2">
                     
                     <h2>What People Are Saying About Brad</h2>
                       <?php $loop = new WP_Query( array('post_type' => 'testimonial', 
                     'orderby'=> 'post_id','order' =>'ASC'));  ?>
                      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                      
                     <!-- TESTIMONIAL -->
                     <div class="row testimonial">
                         <div class="col-sm-4">
                               <?php if (has_post_thumbnail()) {
     the_post_thumbnail();
                      }?>
                         </div><!-- END COL -->
                         <div class="col-sm-8">
                             <blockquote>
                               <blockquote>
                               <?php the_content(); ?>
                                 <cite>— <?php the_title(); ?></cite>
                             </blockquote>
                             </blockquote>
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                        <?php endwhile; wp_reset_query(); ?>
                     
                   
                             
                         </div><!-- END COL -->
                     </div><!-- ROW -->
                 </div><!-- END COL -->
             </div><!-- ROW -->
         </div><!-- CONTAINER -->