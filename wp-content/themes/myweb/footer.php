<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myweb
 */

?>
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
<!-- BOOTSTRAP CORE JAVASCRIPT
Placed at the end of the document so the pages load faster
=========================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0

/jquery.min.js"></script>
<script src=" <?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/main.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>
<script src="https://use.typekit.net/gkl3uoj.js
"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	

<?php wp_footer(); ?>

</body>
</html>
