<?php  get_header(); ?>

    <?php  while(have_posts()): the_post(); ?>

        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="hero-content">
                <div class="hero-text">
                    <h2><?php echo esc_html(get_option('blogdescription')); ?></h2>
                    <p><?php the_content(); ?></p>
                    <?php  $url = get_page_by_title('About us');?>
                    <a  class ="button secondary" href="<?php echo get_permalink($url->ID); ?>">More info</a>
                </div>
            </div>
        </div>
        <div class="main-content container">
            <main class="text-center content-text clear">
            </main>
        </div>
    <?php endwhile; ?>
    
<?php  get_footer(); ?>