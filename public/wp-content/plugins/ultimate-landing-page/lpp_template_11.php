<?php include 'lpp_counter.php'; ?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<html>
	<head>



		<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">


				<script type="text/javascript">

							<?php echo get_post_meta($post->ID,'lpp_custom_js',true); ?>

				</script>


		<style>

		<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>

		</style>

<?php
$lpp_head = get_post_meta($post->ID,'lpp_load_wphead',true);
$lpp_footer = get_post_meta($post->ID,'lpp_load_wpfooter',true);
if ($lpp_head === 'yes') { wp_head(); }
?>


	</head>
	<body>
		<?php echo do_shortcode(get_post_meta($post->ID,'lpp_new_empty_template',true)); ?>
	<section id="registration">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <h1>Engage Nevada</h1>
                <h2>Voter Registration</h2>
                <p>Voter Registration takes an average of two minutes or less to complete.</p>
                <p>Engage Nevada is a non-profit, non-partisan 501(c)(4) organization for civic engagement.</p>
                <p>If you have a valid driver's license of identification card issued by the Nevada DMV, you can register online in Nevada. If you'd like to, select "I have a current NV state identification card or driver's license" and then click "Next Step" and we'll take you to the Nevada Secretary of State's online voter registration system.</p>
                <p>If you don't have a state-issued ID, you can still register to vote using a paper form. Select "I don't have a current NV state identification card or driver's license" and then click "Next Step" and we'll take you to the Nevada Secretary of State website where you can print off your registration application.</p>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    
    </div>
    
</section>
	</body>

<?php
if ($lpp_footer === 'yes') { wp_footer(); }
?>
</html>