<?php
/**
 Template Name: Category
 *
 * The Template for the Category page
 *
 *@package blackandwhite
 */
wp_enqueue_script( 'blackandwhite-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), true );
wp_enqueue_script( 'blackandwhite-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), true );
wp_enqueue_script( 'blackandwhite-bw-gallery', get_template_directory_uri() . '/js/bw-gallery.js', array(), true );
wp_enqueue_script( 'blackandwhite-scripts', get_template_directory_uri() . '/js/blackandwhite.scripts.js', array(), false, false ); 

get_header(); ?>

    <div id="secondary" class="content-area">
        <main id="main" class="site-main grid" role="main">
            
            <?php 
                global $post;
                $category = get_category( get_query_var( 'cat' ) );
                $cat_id = $category->cat_ID;
                $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'category' => $cat_id );
                $myposts = get_posts( $args );
            ?>

           
                <!-- Beginning of Featured Stories -->
                <div id="freshly-pressed">
                
                <?php
                
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
                            
                <div class="press">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'featured-thumb grayscale')); ?></a>
                   
                    <div class="press-info">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php the_date(); ?></p>
                    </div><!-- press-info --> 
                
                </div><!-- press --> 
                <?php endforeach; ?> 
                </div><!-- Freshly Pressed -->   
                <!-- End of Featured Stories -->

        </main><!-- #main -->
    </div><!-- #secondary -->
    
    <div class="grid more-stories">
        <div class="col-1-1">       
            <span class="plus">  
                <a href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) );
                else echo esc_url( home_url() ) ;?>"><?php _e( '+', 'blackandwhite' ); ?></a>
            </span><!-- plus -->  
        </div><!-- col-1-1 --> 
    </div><!-- more-stories --> 
    
    
<?php get_footer(); ?>