<?php
/*
Template Name: About Us Page
*/
?>
<?php get_header(); ?>
        <div class="top-index">
            <div class="top-index__main">
                <picture>
                    <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/main-sp.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/main-pc.svg" class="top-index__main-backgroundimage" alt="">
                </picture>
                    <div class="top-index__main-description">
                        <h1 class="top-index__main-description-title">自走する組織開発</h1>
                        <h2 class="top-index__main-description-sentence">
                            組織開発が、職場の中でマネージャーとメンバーでの「日常の配慮」になるよう、「職場の当たり前」として定着すること目指します。
                        </h2>
                    </div>
            </div>
        </div>
<?php get_footer(); ?>
