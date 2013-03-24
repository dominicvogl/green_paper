<?php

#------------------------------#
# REGISTER Sidebar
#------------------------------#

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	    'before_widget' => '<li id="%1$s" class="widget %2$s">',
	    'after_widget' => '</li>',
	    'before_title' => '<h2 class="widgettitle">',
	    'after_title' => '</h2>',
	));
    
    
    
#------------------------------#
# REGISTER Navigation
#------------------------------#

register_nav_menus(array(
	'main-nav' => 'Hauptnavigation',
	'sub-nav' => 'Unternavigation'
));

?>
