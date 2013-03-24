<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!-- HIER FÜGT WORDPRESS DIE SCRIPTE EIN -->
	<?php wp_head(); ?>
    
    <!-- META DATEN -->
    <meta name="author" content="Dominic Vogl"  />
    <meta name="description" content="Wordpress Beispielblog"  />

    <!-- BLOGTITEL -->
    <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
    
    <!-- RSS FEED -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    
    <!--FAVICON -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
    
    <!-- IMPORTIERE EXTERNE STYLESHEETS -->
    <link href="<?php bloginfo('template_url');?>/css/reset.css" rel="stylesheet" type="text/css" media="screen"  />
    <link href="<?php bloginfo('template_url');?>/fonz/fonz.css" rel="stylesheet" type="text/css" media="screen"  />
    <link href="<?php bloginfo('template_url');?>/css/master.css" rel="stylesheet" type="text/css" media="screen"  />
       
</head>