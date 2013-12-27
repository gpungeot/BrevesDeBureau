<?php if (is_404()) { header("HTTP/1.1 404 Not Found"); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
       
<head profile="http://gmpg.org/xfn/11?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
       
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
       
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!� leave this for stats �>
       
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0? href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92? href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3? href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
       
<?php wp_get_archives('type=monthly&format=link'); ?>
       
<?php
    global $user_identity;
    wp_head();
?>

</head>
<body>
<div align="center">
<div id="wrap">
	<div id="header">
		<span class="blog_title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
		<div id="menu">
            <div id="user_info_header">
            <p><?php printf(__('Hey <a href="%1$s" title="Edit your profile">%2$s</a>'), site_url('/wp-admin/profile.php'), $user_identity) ?>
            <a href="<?php echo wp_logout_url() ?>" title="<?php _e('Log Out') ?>"><?php _e('Log Out'); ?></a></p>
            </div>
		</ul-->
		</div>
	</div>

	<div id="header_below_left"><div id="header_below_right"></div></div>

	<div id="content">

	<?php get_sidebar(); ?>