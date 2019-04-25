<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div  class="footer__wrapper">
		    <div class="learn">
				<h3>Learn</h3>
         			<?php the_field('footer_nav_1', 'option'); ?>
         	</div>
         	<div class="connect">
         		<h3>Connect</h3>
         		<?php the_field('footer_nav_2', 'option'); ?>
         	</div>
		    <div class="join">
		      <h3>Join</h3>
		      <form action="">
		        <div class="email">
		          <label for="email">
		            <input id="email" type="email" placeholder="Join our email list and get tips. learn about Webinars and more!">
		            <button class="btn blue-buton">Join Us!</button>
		          </label>
		        </div>
		        <div class="agree">
		          <input type="checkbox" id="agree">
		          <label for="agree">By joining the email list you agree to the LifeLens <a href="#">Privacy Policy</a></label>
		        </div>
		       </form>
		      <div>
		        <ul class="social-icon">
		          <li><a href="https://www.facebook.com/" title="Facebook"><i class="fab fa-facebook"></i></a></li>
		          <li><a href="https://vimeo.com/" title="Vimeo"><i class="fab fa-vimeo"></i></a></li>
		          <li><a href="https://www.linkedin.com/f" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
		          <li><a href="https://twitter.com/" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
		        </ul>
		      </div>
		    </div> </div>
		    <div class="footer-line">
		    	<?php the_field('footer_bottom_line', 'option'); ?>
		    </div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://example.com/wp-content/themes/hw/source-js/main.js"></script>



<script src="http://example.com/wp-content/themes/hw/node_modules/owl.carousel2/dist/owl.carousel.min.js"></script>
</body>
</html>
