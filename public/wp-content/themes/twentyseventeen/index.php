<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

 	<section>
 		
 		<div class="container">
 			
 			<div class="row">
		        
		        <div id="info" class="col-md-6">

		            <div class="logo">
		            	<img src="<?php echo get_template_directory_uri() ?>/assets/img/EngageNevada-logo.png"/>
		            </div>
		            
		            <h2 class="text-center">VOTER REGISTRATION</h2>

		            <p class="visible-xs">Voter registration takes an average of two minutes or less to complete</p>
		            
		            <div class="hidden-xs">
		            <hr>
		            <p>Voter registration takes an average of two minutes or less to complete.</p>
		            <p>Engage Nevada is a non-profit, non-partisan 501(c)(4) organization for civic engagement.</p>
		            <p>If you have a valid driver's license of identification card issued by the Nevada DMV, you can register online in Nevada. If you'd like to, select "I have a current NV state identification card or driver's license" and then click "Next Step" and we'll take you to the Nevada Secretary of State's online voter registration system.</p>
		            <p>If you don't have a state-issued ID, you can still register to vote using a paper form. Select "I don't have a current NV state identification card or driver's license" and then click "Next Step" and we'll take you to the Nevada Secretary of State website where you can print off your registration application.</p>
		            </div>

		        </div>

		        <div id="form" class="col-md-6">
		            <?php echo do_shortcode('[gravityform id="2" title="false" description="true"]'); ?>
		        </div>
		    </div>

		</div>

    </section>

    <div class="row">
	    <div class="col-md-12 text-center copyright hidden-xs">
	    	<p>Copyright Engage Nevada, Inc. 2015. All Rights Reserved</p>
	    </div>
	</div>

	<div class="row">
	    <div class="footer col-md-12 text-center visible-xs">
	    	Engage Nevada is a non-profit, non-partisan 501(c)(4) organization for civic engagement
	    </div>
	</div>

<?php get_footer();