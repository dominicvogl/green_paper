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




<?php
$images = get_field('headSlider', 'option');
 
if( $images ): ?>
    <div id="slider" class="slider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
<?php endif; ?>


