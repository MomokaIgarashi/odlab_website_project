<footer>
    <div class="footer--contact">
        <p class="footer--contact__title">
            <a href="<?= esc_url(home_url('/contact'));?>">お問い合わせ</a>
        </p>
        <p class="footer--contact__description">ご依頼、ご相談などお気軽にお問い合わせ下さい</p>
    </div>

    <div class="footer--main">
        <img class="footer--main-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/footer-logo.svg" alt="odlab-logo">
        <ul class="footer--main-nav">
            <li class="footer--main-nav-list">
                <a href="<?= esc_url(home_url('/about'));?>">ODLabについて</a>
            </li>
            <li class="footer--main-nav-list">
                <a href="<?= esc_url(home_url('/members'));?>">メンバー紹介</a>
            </li>
        </ul>
        <div class="footer--main-nav-contact">
            <p class="footer--main-nav-contact-inner">
                <img class="footer--main-nav-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/header-mail-icon.svg" alt="footer-contact">
                <a href="<?= esc_url(home_url('/contact'));?>" class="footer--main-nav-contact__text">お問い合わせ</a>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>