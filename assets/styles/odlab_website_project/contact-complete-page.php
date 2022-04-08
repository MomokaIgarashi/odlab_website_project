<?php
/*
Template Name: Contact Complete Page
*/
?>
<?php get_header(); ?>

<h1 class="contact__main-title">お問い合わせ</h1>

<div class="contact-form-wrapper">

    <div class="contact__menu--inner">
        <picture>
            <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-process3-sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-process3.png" class="contact__image-process" alt="">
        </picture>
        <p class="contact__description__1">
        お問い合わせありがとうございました。<br>
        担当者より折り返しご連絡させていただきます。なお、返信<br>
        まで数日かかる場合もございます。ご了承くださいませ。
        </p>
    </div>

    <div class="contact-form__inner">
        <div class="contact-form--wrapper__complete">
            <?php echo do_shortcode('[mwform_formkey key="7"]'); ?>
        </div>
        <a href="<?= esc_url(home_url('/'));?>">
            <p class="button-backtotop">トップに戻る</p>
        </a>
    </div>
</div>

<?php get_footer(); 