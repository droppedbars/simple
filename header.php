<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=0.8"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" /><link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
		<div id='topmenubar'> <!-- menu -->
			<div id='sitetitle'>
				<span class='sitename'>
					<a href="<?php echo home_url(); ?>" class='sitename'><?php bloginfo('name'); ?></a>
				</span>
			</div>
			<div id='topmenu'>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menuitem' ) ); ?>
			</div>	
		</div>