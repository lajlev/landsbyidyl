<?php
/**
 * The template for Embeded calendar
 *
Template Name: Embeded calendar
*/
?>

<!DOCTYPE html>
<html lang="da-DK">
	<head>
		<meta charset="UTF-8">
		<title>embedable calendar</title>

		<meta name='robots' content='noindex,follow' />
		<link rel='stylesheet'  href='http://landsbyidyl.dk/wordpress/wp-content/themes/landsbyidyl/styles/embed-cal.css<?php srand( microtime() * 1000000); echo "?nocache=".rand(1,100); ?>' type='text/css' media='screen' />



	</head>

<body class="cal-embed">
	<div class="year-picker">
		<span >Vælg år</span>
		<?php echo do_shortcode('[availability display="dropdown"]'); ?>
	</div>

	<?php echo do_shortcode('[availability]'); ?>

	<a class="subtle" target="_blank" href="http://landsbyidyl.dk/wordpress/wp-admin/edit.php?post_type=page&page=availability">ADMIN LOGIN</a>

<?php wp_footer(); ?>

</body>
</html>
