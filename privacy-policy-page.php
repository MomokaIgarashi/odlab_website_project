<?php
/*
Template Name: Privacy Policy Page
*/
?>
<?php get_header(); ?>

<h1 class="contact__main-title">プライバシーポリシー</h1>

<div class="contact-form-wrapper">

    <div class="privacy__inner">
        <div class="privacy--wrapper__complete">
            <div class="privacy--wrapper__complete__inner">
                <p class="privacy--text__content">OD Lab合同会社は、当社が取得した個人情報の取扱いに関し、個人情報の保護に関する法律、個人情報保護に関するガイドライン等の指針、その他個人情報保護に関する関係法令を遵守します。<br>
                    お客様の個人情報はご本人への事前の許可なしに、OD Lab合同会社および業務委託先以外の第三者に開示することは一切ありません。</p>

                <p class="privacy--text__title">個人情報の収集について</p>
                <p class="privacy--text__content">セミナー・ワークショップ等へのお申込み、メールニュースのご登録など、一部のコンテンツにつきましては、お客様の個人情報をご提供頂く場合がありますので、あらかじめご了承ください。</p>

                <p class="privacy--text__title">個人情報の利用目的について</p>
                <p class="privacy--text__content">ご提供いただく個人情報は、以下の目的のために利用させていただきます。<br>
                    また提供頂いた個人情報はその目的の範囲内でのみ利用します。利用目的は下記のとおりです。</p>
                
                <p class="privacy--text__content">・OD Lab合同会社の提供するセミナーや対話会などの場、出版物、 各種サービスのご案内をお届けするため</p>
                <p class="privacy--text__content">・各種お申込み、ご登録、受付の確認をするため</p>
                <p class="privacy--text__content">・各種サービス、セミナー等のご請求、お支払い確認の連絡や、開催にあたっての連絡事項の伝達、必要備品をお届けするため</p>

                <p class="privacy--text__title">第三者への提供について</p>

                <p class="privacy--text__content">ご提供いただいた個人情報をお客様に明示した利用目的を達成するために、OD Lab合同会社の関連会社に提供することがあります。それ以外には、次の場合を除き、第三者に開示することはいたしません。</p>

                <p class="privacy--text__content">(1)お客様の同意がある場合</p>
                <p class="privacy--text__content">(2)当社と個人情報に関する機密保持契約を締結している協力会社、提携会社および業務委託先会社に対して、お客様に明示した利用目的の達成に必要な範囲内で個人情報の取扱を委託する場合</p>
                <p class="privacy--text__content">(3)法令等により情報の提供を求められた場合</p>

                <p class="privacy--text__title">個人情報管理について</p>
                <p class="privacy--text__content">ご提供いただきましたお客様の個人情報を厳重に管理し、不正アクセス、紛失、棄損、改ざん、漏洩等の防止策を講じるものとします。万一の事故等の発生時には速やかな是正措置を実施いたします。</p>

                <p class="privacy--text__title">個人情報の照会・訂正・削除について</p>

                <p class="privacy--text__content">ご提供いただいた個人情報の内容に関し、照会／訂正／削除等を希望される場合は、当該お問合せ窓口までご請求ください。当該ご請求がお客様ご本人によるものであることが確認できた後、合理的な期間内に、お客様の個人情報を開示、訂正または削除等を行ないます。登録の照会、定性、削除等に関するお問い合わせは、以下の窓口で受け付けています。</p>

                <!-- <a href="tel:03-3952-2706">
                    <p class="privacy--text__link">・03-3952-2706</p>
                </a> -->
                <a href="<?= esc_url(home_url('/contact'));?>">
                    <p class="privacy--text__link">・お問い合わせフォーム</p>
                </a>
            </div>

            <!-- <div class="button-backto-contact">
                <a href="<?= esc_url(home_url('/contact'));?>">お問い合わせフォームへ戻る</a>
            </div> -->
        </div>
    </div>
</div>

<?php get_footer(); 