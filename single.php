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
                        <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="search" placeholder="Search for article..." value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s"/>
                            <input type="submit" />
                        </form>
                    </div>                    
                </header>
                <article id="article" >    
                    
                    
                    
                    
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <div class="entry"><?php the_content(); ?></div>
                    
                    <br/><br/>
                    <div id="meta">    
                    Published in: <?php the_category(', '); ?></p>
                    </div>
                <?php endwhile; endif; ?>
<br/><br/>
                <?php do_action('wp_footer'); ?>
                
                <br />

                <?php comments_template(); ?> 
                </article>
            </div>
            <div id="right-sided-panel">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- adsensepanel-world-of-coffeescript -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:160px;height:600px"
                 data-ad-client="ca-pub-8855735265372980"
                 data-ad-slot="3085608956"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
        </div>
        <script src="//use.typekit.net/phn3blz.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    </body>
</html>