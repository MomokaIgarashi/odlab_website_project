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

    <meta name="keywords" content="OD Lab,組織開発">
</head>

<body>
        <header>
            <div class="top-index__header-inner">
                <img class="top-index__header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-index/main-logo.svg" alt="">
                <ul class="top-index__header-nav">
                    <li class="top-index__header-nav-list">
                        <a href="<?= esc_url(home_url('/about'));?>">ODLabについて</a>
                    </li>
                    <!-- <li class="top-index__header-nav-list">サービス</li>
                    <li class="top-index__header-nav-list">事例紹介</li>
                    <li class="top-index__header-nav-list">メンバー紹介</li>
                    <li class="top-index__header-nav-list">出版物</li>
                    <li class="top-index__header-nav-list">お知らせ</li> -->
                    <li class="top-index__header-nav-contact">
                        <a href="<?= esc_url(home_url('/contact'));?>">お問いあわせ</a>
                    </li>
                </ul>
            </div>
        </header>