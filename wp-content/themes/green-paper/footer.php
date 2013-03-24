<div id="footer">

	<div class="footer-wrapper">
    
    	<div class="sub-nav">
        
        	
            <!--  UNTERNAVIGATION -->
            <ul>
				<?php wp_nav_menu( array('menu' => 'Subnavigation' )); ?>
            </ul>
            
            
            <!-- SOCIAL MEDIA ICONS -->
            <ul>
            	<li><a class="facebook" href="https://www.facebook.com/dominic.vogl" title="Facebook"></a></li>  
                <li><a class="twitter" href="http://twitter.com/arynsworld" title="Twitter"></a></li>
                <li><a class="rss" href="<? bloginfo('url');?>/feed/" title="RSS"></a></li>       
            </ul>
  
        
        </div>
        
        
        <!-- COPYRIGHT -->
        <div class="copyright">
        
        	<p>2013 copyright by <a href="<?php bloginfo('url');?>" title="<?php wp_title(); ?>">catalystblog.com</a></p>
            <p>design &amp; code by <a href="http://www.catalyst-interactive.com" title="Catalyst-Interactive">catalyst-interactive.com</a></p>
            
        </div><!-- COPYRIGHT -->
    
    </div>
    
  </div>
  
 <?php wp_footer(); ?>