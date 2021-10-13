<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="title" content="組織開発コンサルティング OD Lab合同会社">
    <title>組織開発コンサルティング OD Lab合同会社</title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/normalize.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/top-index.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/contact.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/members.css" >
    <script src="/assets/js/hamburger-menu.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <meta name="keywords" content="OD Lab,組織開発">
</head>

<body>
    <header>
        <div class="top-index__header-inner">
            <img class="top-index__header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/main-logo.svg" alt="odlab-logo">
            <ul class="top-index__header-nav">
                <li class="top-index__header-nav-list">
                    <a href="<?= esc_url(home_url('/about'));?>">ODLabについて</a>
                </li>
                <!-- <li class="top-index__header-nav-list">サービス</li>
                <li class="top-index__header-nav-list">事例紹介</li> -->
                <li class="top-index__header-nav-list">
                    <a href="<?= esc_url(home_url('/members'));?>">メンバー紹介</a>
                </li>
                <!-- <li class="top-index__header-nav-list">出版物</li>
                <li class="top-index__header-nav-list">お知らせ</li> -->
                <li class="top-index__header-nav-contact">
                    <a href="<?= esc_url(home_url('/contact'));?>">
                        <img class="top-index__header-nav-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/header-mail-icon.svg" alt="header-contact">
                        <p class="top-index__header-nav-contact__text">お問い合わせ</p>
                    </a>
                </li>
            </ul>
        </div>
    </header>

    

    <!-- SP用ヘッダー -->
    
    <!-- <div>
        <a href="<?= esc_url(home_url('/contact'));?>">
            <p class="top-index__header-nav-contact__text">お問い合わせ</p>
        </a>
    </div> -->
    <!-- この部分がハンバーガーメニューのボタンになる -->
    <div id="hamburger">
        <p class="btn-gNav">
            <span></span>
            <span></span>
            <span></span>
        </p>
        <nav id="gNav" class="">
            <ul class="gNav_menu">
                <li><a href="<?= esc_url(home_url('/about'));?>">ODLabについて</a></li>
                <li><a href="<?= esc_url(home_url('/members'));?>">メンバー紹介</a></li>
                <li>
                    <a href="<?= esc_url(home_url('/contact'));?>">
                        <img class="top-index__header-nav-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/header-mail-icon.svg" alt="header-contact">
                        <p class="top-index__header-nav-contact__text">お問い合わせ</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</body>





