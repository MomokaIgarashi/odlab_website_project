<?php get_header(); ?>

    <div class="members-page">
        <h1 class="members-page__title">メンバー紹介</h1>
        <div class="members-page__top">
            <picture>
                <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/top-sp.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/top-pc.png" class="members-page-backgroundimage" alt="ceo-image">
            </picture>
            <div class="members-top-description">
                <h1 class="members-page__top-description-title">OD Lab合同会社代表</h1>
                <h2 class="members-page__top-description-title-additional">Organization Development　Network Japan理事<br>株式会社　スコラ・コンサルト　パートナー</h2>
                <h3 class="members-page__top-description-japanese-name">水迫　洋子</h3>
                <h4 class="members-page__top-description-english-name">MIZUSAKO YOKO</h4>
            </div>
        </div>
        <div class="members-main">
            <div class="members-page__main-description">
                
            </div>
            <div class="members-page__main-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/leaf.png" class="members-page__main-image" alt="leaf">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/meeting1.png" class="members-page__main-image" alt="meeting1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/meeting2.png" class="members-page__main-image" alt="meeting2">
            </div>
        </div>


    </div>



<?php get_footer(); ?>
