<?php
/**
* Polite Slider Function
* @since Polite 1.0.0
*
* @param null
* @return void
*
*/
global $polite_theme_options;
$slide_id = absint($polite_theme_options['polite-select-category']);
// $slick_args = array(
//     'slidesToShow'      => 3,
//     'slidesToScroll'    => 3,
//     'dots'              => true,
//     'arrows'            => true,
// );
$args = array(
'posts_per_page' => 4,
'paged' => 1,
'cat' => $slide_id,
'post_type' => 'post'
);
$slider_query = new WP_Query($args);
if ($slider_query->have_posts()): ?>
<div class="container">
    <div class="polite_3carousel" data-slick='<?php echo isset( $slick_args_encoded ) ? $slick_args_encoded : ''; ?>'>
        <?php while ($slider_query->have_posts()) : $slider_query->the_post();
        ?>
        <div class="col-md-3">
            <div <?php post_class(); ?>>
                <div class="blog-item">
                    <?php if(has_post_thumbnail()) { ?>
                        <div class="blog-img">
                            <?php the_post_thumbnail('polite-portrait-image'); ?>
                        </div>
                    <?php } else{ ?>
                        <div class="no-image"></div>
                    <?php } ?>
                
                    <div class="blog-info">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                        echo '<a class="post-category" href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'">'.esc_html( $categories[0]->name ).'</a>';
                        }
                        ?>
                        <h3 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <ul class="meta">
                            <li><?php polite_posted_on(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php  endwhile;
        wp_reset_postdata(); ?>
    </div>
</div>
<?php endif; ?>