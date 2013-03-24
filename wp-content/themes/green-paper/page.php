<?php get_header(); // Lade header.php ?>

<body>

	<div id="main-wrapper">
    
    	<div id="wrapper-content">
        
        	<?php include('navigation.php'); ?>
            
            <!-- MAINCONTENT -->
            <div id="main-content">
            
            	<div class="content-schatten"></div>
                
                <div class="content-wrapper">
                
                	
                    <!-- HIER KOMMT DER CONTENT -->                    
                    <?php while(have_posts()) : the_post(); // Hier beginnt der Content Loop ?>
                    
                    <div class="post">
                                                
                        <!-- ÜBERSCHRIFT DES POSTS -->
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        
                        <!-- DER EIGENTLICHE INHALT DES POSTS -->
                        <?php the_content(''); ?>
                                            
                    </div><!-- POST -->
                    
                    <?php endwhile; // Ende des Content Loops ?>
                    
                </div><!-- CONTENT-WRAPPER -->
                
                <?php get_sidebar(); // Lade sidebar.php ?>
            
            </div><!-- MAINCONTENT -->
            
        
        </div><!-- WRAPPER CONTENT-->    
    
    </div><!-- MAIN WRAPPER -->
    
    <?php get_footer(); // Lade footer.php ?>

</body>
</html>