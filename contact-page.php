<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<h1 class="contact__main-title">お問い合わせ</h1>

<div class="contact-form-wrapper">

    <div class="contact__menu--inner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-process1.png" class="contact__image-process" alt="">

        <p class="contact__description__1">
            ご依頼、ご相談など、お気軽にお問い合わせください。<br>
            ご返信に数日お時間をいただいております。</p>
    </div>


    <div class="contact-form__inner">
    <p class="contact-menu">お問い合わせ内容</p>

    <div class="contact-list">
        <div class="contact-title-wrapper">
            <p class="hissu">必須</p> <p class="contact-title">お問い合わせ分類</p>
        </div>
        <div class="contact-category-wrapper">
            <img class="contact__category" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/category-consulting-active.png" alt="">
            <img class="contact__category" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/category-training-inactive.png" alt="">
            <img class="contact__category" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/category-seminar-inactive.png" alt="">
            <img class="contact__category" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/category-others-inactive.png" alt="">
        </div>
    </div>

    <?php echo do_shortcode('[mwform_formkey key="19"]'); ?>

</div>

<?php get_footer(); 