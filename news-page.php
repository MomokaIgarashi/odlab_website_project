<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>

<div class="news-index">
    <h1 class="news-index__title">お知らせ</h1>
    <div class="news-index-content">
        <div class="news-index-content-category"></div>

        <div class="news-index-content-articles">
            <div class="index--news__wrapper">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6
                );
                $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="index--news--article__wrapper">
                <div class="index--news--article--image__wrapper">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'index--news--photo') ); ?>
                        <?php }else{ ?>
                        <img class="index--news--photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/post/thumbnail-news.JPG">
                        <?php }?>
                </div>
                <div class="index--news--article--text__wrapper">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php the_category(); ?>
                        <div class="index--news--article--text__title">
                            <?php the_title(); ?><br>
                        </div>
                        <div class="index--news--article--text__content">
                            <?php echo wp_trim_words(get_the_content(), 60, '…もっとみる' );?><br>
                        </div>
                        <?php the_time('Y/m/d'); ?>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="news-index-content-pagenation">
        <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'Back', 'textdomain' ),
            'next_text' => __( 'Onward', 'textdomain' ),
        ) ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>