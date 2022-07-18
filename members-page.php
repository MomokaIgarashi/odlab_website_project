<?php
/*
Template Name: Members Page
*/
?>
<?php get_header(); ?>
<div class="members-page">
    <h1 class="members-page__title">メンバー紹介</h1>
    <div class="members-page__top">
        <picture>
            <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/top-sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/top-pc.png" class="members-page-backgroundimage" alt="ceo-image">
        </picture>
        <div class="members-top-outline">
            <span class="members-top-outline--sp-wrap">
                <h1 class="members-page__top-outline--title">OD Lab合同会社代表<br>株式会社プラスアルファ・コンサルティング社外取締役</h1>
                <h2 class="members-page__top-outline--title-additional">Organization Development Network Japan理事<br>株式会社　スコラ・コンサルト　パートナー</h2>
            </span>
            <span class="members-top-outline--sp-wrap">
                <p class="members-page__top-outline__jp-name">水迫　洋子</p>
            </span>
            <span class="members-top-outline--sp-wrap">
                <p class="members-page__top-outline__en-name">MIZUSAKO YOKO</p>
            </span>
        </div>
    </div>
    <div class="members-main">
        <section class="members-page__main-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/leaf.png" class="members-page__main-image" alt="leaf" width="372" height="492">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/meeting1.png" class="members-page__main-image" alt="meeting1" width="372" height="304">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/meeting2.png" class="members-page__main-image" alt="meeting2" width="372" height="304">
        </section>
        <section class="members-page__main-outline">
            <ul class="members-page__main-section">
                <li class="members-page__main-section--list">
                    <h3 class="members-page__main-section__title">経歴</h3>
                    <p class="members-page__main-section__career-detail">青山学院大学院 社会情報学部　ヒューマンイノベーション学科修士課程修了。野村證券を経て、東京電力の新規事業としての子会社３社の事業会社の立ち上げ、事業拡大の経験の中、企業変革の重要性を感じスコラ・コンサルトへ。2008年より2015年までスコラ・コンサルトの代表を務めたのち、独立。ODNJでは「理事」および「研究会委員長」を務め、「組織開発基礎講座」も担当。</p>
                </li>
                <li class="members-page__main-section--list">
                    <h3 class="members-page__main-section__title">強み</h3>
                    <ul class="members-page__main-section__strength">
                        <li class="members-page__main-section__strength-list">日本を代表する大企業の組織開発や組織変革の多数の実績</li>
                        <li class="members-page__main-section__strength-list">役員チームや事業リーダー層など、社内の人間だけでは関わることが難しいトップ層への関わりの実績多数</li>
                        <li class="members-page__main-section__strength-list">企業内における組織開発コーディネーターの養成</li>
                    </ul>
                </li>
                <li class="members-page__main-section--list">
                    <h3 class="members-page__main-section__title">分野</h3>
                    <ul class="members-page__main-section__field">
                        <li class="members-page__main-section__field-list">経営チームづくり</li>
                        <li class="members-page__main-section__field-list">トップ・ミドル層のマネジメント変革</li>
                        <li class="members-page__main-section__field-list">組織開発事務局支援</li>
                        <li class="members-page__main-section__field-list">組織開発コーディネーターの養成</li>
                        <li class="members-page__main-section__field-list">ダイバーシティ推進</li>
                        <li class="members-page__main-section__field-list">ビジョン浸透</li>
                        <li class="members-page__main-section__field-list">自律型組織</li>
                        <li class="members-page__main-section__field-list">変革リーダー育成</li>
                        <li class="members-page__main-section__field-list">組織風土改革</li>
                    </ul>
                </li>
                <li class="members-page__main-section--list">
                    <h3 class="members-page__main-section__title">実績</h3>
                    <span class="members-page__main-section__works-wrap">
                        <div class="members-page__main-section__works">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/works1.png" class="members-page__works-image" alt="works1">
                            <h4 class="members-page__main-section__works-title">次世代経営者育成・経営チームづくり</h4>
                            <p class="members-page__main-section__works-text">IT企業、物流、電力、アパレルメーカー、半導体測定機メーカー、情報サービス業、通信ネットワーク業、機械メーカー、</p>
                        </div>
                        <div class="members-page__main-section__works">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/works2.png" class="members-page__works-image" alt="works2">
                            <h4 class="members-page__main-section__works-title">組織開発支援</h4>
                            <p class="members-page__main-section__works-text">総合商社、総合化学メーカー、飲食業、損害保険業、IT企業、総合人材サービス業、生活協同組合、電機メーカー</p>
                        </div>
                        <div class="members-page__main-section__works">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/works3.png" class="members-page__works-image" alt="works3">
                            <h4 class="members-page__main-section__works-title">マネジャー育成、変革リーダー育成</h4>
                            <p class="members-page__main-section__works-text">自動車メーカー、精密機器メーカー、医薬品メーカー、総合商社、飲料メーカー、損害保険業、不動産、総合商社、銀行、電機メーカー</p>
                        </div>
                        <div class="members-page__main-section__works">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/works4.png" class="members-page__works-image" alt="works4">
                            <h4 class="members-page__main-section__works-title works-title-last">ダイバーシティ推進・ビジョン浸透・自律型組織</h4>
                            <p class="members-page__main-section__works-text works-text-last">IT企業、飲食業、物流、生活協同組合、総合人材サービス業</p>
                        </div>
                    </span>
                </li>
            </ul>
        </section>
    </div>
    <div class="members-page__main-outline-book">
            <ul class="members-page__main-section">
                <li class="members-page__main-section--list">
                    <h3 class="members-page__main-section__title-book">著書</h3>
                    <div class="members-page__main-section__book">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/book.png" class="members-page__book-image" alt="book">
                        <span class="members-page__main-section__book-detail">
                            <h4 class="members-page__main-section__book-title">クロネコヤマト人の育て方</h4>
                            <p class="members-page__main-section__book-text">著者　水迫洋子</p>
                            <p class="members-page__main-section__book-text">発行　KADOKAWA／中経出版<br>（2015年）</p>
                            <a href="https://www.amazon.co.jp/dp/404600584X/" target="_blank" class="members-page__main-section__book-link">Amazon <i class="fas fa-external-link-alt"></i></a>
                        </span>
                    </div>
                </li>
            </ul>
    </div>
    <div class="members-partner">
        <h1 class="members-partner__main-title">パートナー</h1>
        <ul class="members-partner__outline">
            <li class="members-partner__outline-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/partner1.png" class="members-page__partner-image" alt="SCHOLAR CONSULT">
                <span class="members-partner__profile">
                    <h5 class="members-partner__title members-partner__title-scholar">パートナー</h5>
                    <p class="members-partner__js-name">スコラ・コンサルト</p>
                    <p class="members-partner__en-name">SCHOLAR CONSULT</p>
                    <p class="members-partner__detail">組織風土の変革、新しい組織文化の創造をサポートするスコラ・コンサルト<br>組織風土改革のパイオニアとして、大企業から中小企業までの組織の変革をご支援いたします。</p>
                </span>
            </li>
            <li class="members-partner__outline-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/partner3.png" class="members-page__partner-image" alt="MAENO TAKASHI">
                <span class="members-partner__profile">
                    <h5 class="members-partner__title members-partner__title-fujita">
                        パートナー / 應義塾大学大学院システムデザイン・マネジメント研究科教授 兼<br>
                        同大学ウェルビーイングリサーチセンター長、一般社団法人ウェルビーイングデザイン 代表理事
                    </h5>
                    <p class="members-partner__js-name">前野 隆司</p>
                    <p class="members-partner__en-name">MAENO TAKASHI</p>
                    <p class="members-partner__detail-fujita">
                        人々のウェルビーイング（幸せ、健康、福祉）を向上するための様々な施策および情報提供を行っている社団法人です。
                        具体的には、オンラインサロンウェルビーイング大学、はたらく幸せ研究会、ウェルビーイングデザイン研究会、ウェルビーイングダイアログカード
                        コミュニティーの運営や、幸福度診断ウェルビーイングサークル、はたらく人の幸せ／不幸せ診断などのアンケートの運用、ブログなどの情報提供を行っています。本活動では、働く人のウェルビーイングを向上するために、当法人が蓄積した多様な知見を生かしていく予定です。
                    </p>
                </span>
            </li>            
            <li class="members-partner__outline-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/partner4.png" class="members-page__partner-image" alt="MAENO MADOKA">
                <span class="members-partner__profile">
                    <h5 class="members-partner__title members-partner__title-fujita">パートナー / EVOL株式会社 代表取締役</h5>
                    <p class="members-partner__js-name">前野 マドカ</p>
                    <p class="members-partner__en-name">MAENO MADOKA</p>
                    <p class="members-partner__detail-fujita">
                        一般社団法人ウェルビーイングデザイン、慶應義塾大学大学院システムデザイン・マネジメント研究科前野隆司研究室などと連携しながら、
                        ウェルビーイングに満ち溢れた世界をリードすることを目指して、コンサルティングや研修、講演などの活動を行っています。
                        会社名のEVOLは、LOVEを反対から読んだものでもあり、革命（エボリューション）の頭の4文字でもあります。
                        つまり、作りたい愛に満ちた世界からバックキャスティングして、世の中を革新していこうという志を表しています。
                    </p>
                </span>
            </li>            
            <li class="members-partner__outline-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/partner5.png" class="members-page__partner-image" alt="KOBAYASHI KOUJI">
                <span class="members-partner__profile">
                    <h5 class="members-partner__title members-partner__title-fujita">パートナー / 株式会社キズナキャスト 代表取締役</h5>
                    <p class="members-partner__js-name">小林 広治</p>
                    <p class="members-partner__en-name">KOBAYASHI KOUJI</p>
                    <p class="members-partner__detail-fujita">
                        「すべての人が、いきいき！わくわく働ける未来を創造する」をビジョンに
                        掲げる、戦略支援専門のコンサルティング会社。特に近年は、時代変化が加速するいま、企業における多くの課題の本質は組織そのものにある、と考え、５年以上前から新時代型への組織変革に注力しています。
                        「指示命令・競争型から自立・共創型へ」をキーワードに、人と組織と社会の変革を目指します。フジサンケイグループ「イノベーションズアイ」支援機関。
                    </p>
                </span>
            </li>
            <li class="members-partner__outline-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members-page/partner2.png" class="members-page__partner-image" alt="FUJITA HARUNO">
                <span class="members-partner__profile">
                    <h5 class="members-partner__title members-partner__title-fujita">パートナー / テクスト株式会社 代表取締役</h5>
                    <p class="members-partner__js-name">藤田 ハルノ</p>
                    <p class="members-partner__en-name">FUJITA HARUNO</p>
                    <p class="members-partner__detail-fujita">国際基督教大学 教養学部 国際関係学科を卒業後、知的資本経営を掲げる株式会社 ICMG にコンサルタント職として入社。
                        一般社団法人 Japan Innovation Network の立ち上げ、企業の新規事業創造エコシステムのデザインプロジェクトに関わったのち、
                        ミラノにある大学院ドムスアカデミーのビジネスデザイン修士へ留学。
                        その後、言葉のにわづくりをコンセプトとして、テクスト株式会社を創業し、言葉を可視化することでコミュニケーションを支援するグラフィックスキルや、
                        複雑な関係性を紐解くコンステーレーションといったアプローチを用いてファシリテーターとして活動。</p>
                </span>
            </li>
        </ul>
    <div>
</div>
</div>
<?php get_footer(); ?>

