<?php
/*
Template Name: Contact Confirmation Page
*/
?>
<?php get_header(); ?>

<h1 class="contact__main-title">お問い合わせ</h1>

<div class="contact-form-wrapper">

    <div class="contact__menu--inner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-process2.png" class="contact__image-process" alt="">
        <p class="contact__description__1">入力内容に間違いがないかご確認ください</p>
    </div>


    <div class="contact-form__inner">
    <p class="contact-menu">お問い合わせ内容</p>

    <?php echo do_shortcode('[mwform_formkey key="19"]'); ?>

</div>

<?php get_footer(); 