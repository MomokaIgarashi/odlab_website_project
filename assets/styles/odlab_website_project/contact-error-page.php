<?php
/*
Template Name: Contact Error Page
*/
?>
<?php get_header(); ?>

<h1 class="contact__main-title">お問い合わせ</h1>

<div class="contact-form-wrapper">

    <div class="contact__menu--inner">
        <picture>
            <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-process1-sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-process1.png" class="contact__image-process" alt="">
        </picture>

        <p class="contact__description__1">
            ご依頼、ご相談など、お気軽にお問い合わせください。<br>
            ご返信に数日お時間をいただいております。</p>
    </div>
    <picture>
            <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-error-sp.png">
            <img class="contact__error-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-error-pc.png" alt="">
    </picture>

    <div class="contact-form__inner">
        <p class="contact-menu">お問い合わせ内容</p>

        <?php echo do_shortcode('[mwform_formkey key="7"]'); ?>
    </div>
</div>

<?php get_footer(); 