<?php get_header(); ?>

    <body class="tk-myriad-pro">        
        <div id="content-positioneer">
            <!-- centralizes everything -->
            <div id="left-sided-menu" >
                
                
                <?php get_sidebar(); ?>

            </div>
            <div id="center-stackpanel">
                <header>
                    <!-- world of coffeescript and search box -->
                    <div id="header-stackpanel">
                        <p>World of</p>
                        <h1>Coffeescript</h1>
                    </div>
                    <div id="search-form">
                        <input type="search" placeholder="Search for article..." />
                        <input type="submit" />
                    </div>                    
                </header>
                <article id="article" >                    
                    
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
       <div class="entry">
          <?php the_content(); ?>
       </div>
    <?php endwhile; ?>
       <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?>  <?php
previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
    <?php endif; ?>
                    
                                        
                    <?php do_action('wp_footer'); ?>

                    
                </article>
            </div>
            <div id="right-sided-panel">
            <!-- should be used for advertising etc. -->
            </div>
        </div>
        <script src="//use.typekit.net/phn3blz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
    </body>
</html>