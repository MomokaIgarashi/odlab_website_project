<?php get_header();?>

<div class="post--wrapper">

    <div class="post--back__inner">
        <img class="post--back__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/back.png">
        <a href="<?= esc_url(home_url('/news'));?>" class="post--back__text">一覧ページへ</a>
    </div>

    <div class="post-article--title__inner">
        <button class="index--news--article--text__category">
            <?php the_category(array('class' => 'index--news--article--text__category') ); ?>
        </button>

        <div class="post--article__title">
                <?php the_title(); ?>
        </div>
        <div class="post--article__date">
                <?php the_time('Y/m/d'); ?>
        </div>
    </div>

    <div class="post--article--content__inner">
        <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'post--photo') ); ?>
            <?php }else{ ?>
                <img class="post--photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/no-thumbnais.png">
            <?php }?>
        <div class="post--article--content__wrapper">
            <div class="post--article__content">
                <?php the_content( $more_link_text, $stripteaser ); ?>
            </div>
        </div>
    </div>

    <div class="post--pagenation__wrapper">
        <p class="post--pagenation__left">
            <!-- <img class="post--pagenation__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/back.png"> -->
            <?php previous_post_link('%link', '前の記事へ'); ?>
        </p>
        <img class="post--pagenation__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/menu.png">
        <p class="post--pagenation__right">
            <?php next_post_link('%link', '次の記事へ'); ?>
            <!-- <img class="post--pagenation__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/next.png" > -->
        </p>
    </div>

</div>

<?php get_footer();
