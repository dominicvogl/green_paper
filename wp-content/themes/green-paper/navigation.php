<!-- HAUPTNAVIGATION -->
<div id="nav">
  
  <?php #Render navigation
  	wp_nav_menu( array(
  	'menu' => 'Hauptnavigation',
  	'container' => 'false',
  	'menu_id' => '',
  	'menu_class' => 'navigation',
  	'walker' => ''
  	 ));
  ?>  
  
 <a href="<?php bloginfo('url'); ?>" title="<?php wp_title(); ?>" class="logo"></a>    
  
               
  
</div><!-- HAUPTNAVIGATION -->


<!-- HEADERSLIDER -->            
<div id="slider">
</div><!-- HEADERSLIDER -->


