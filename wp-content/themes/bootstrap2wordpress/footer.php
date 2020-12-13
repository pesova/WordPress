<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_WordPress
 */

?>

	<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing List</h4>

                </div>

                <div class="modal-body">
                    <P>Simple enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></P>

                    <form action="" role="form" class="form-inline" method="post">
                        <div class="form-group">
                            <label for="subscribe-name" class="sr-only">Your First name</label>
                            <input type="text" name="subscribe-name" id="subscribe-name" class="form-control" placeholder="Your first name">
                        </div>

                        <div class="form-group">
                            <label for="subscribe-email" class="sr-only">Your First name</label>
                            <input type="email" name="subscribe-email" id="subscribe-email" class="form-control" placeholder="Your email">
                        </div>

                        <input type="submit" value="Subscribe!" class="btn btn-danger">
                    </form>

                    <hr>
                    <p><small>By providing your email we promise no spam, just good stuffs to protect your privacy &amp; you may unsubscribe at any time</small></p>
                    <!-- modal body -->
                </div>
            </div>
        </div>
    </div>

<footer>
        <div class="container">
            <div class="col-sm-3">
                <p>
                    <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="bootstrap to wordpress"></a>
                </p>
            </div>

            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li><a href="/">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="signup-link">
                            <a href="">Sign up now</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <p class="pull-right">&copy; 2014 BradHussey</p>
            </div>
        </div>
    </footer>

	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script> 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
