<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">お問い合わせ種別</p>
    </div>
    <div class="contct-content-wrapper__customize">
        <div class="contact-category">
            [mwform_checkbox name="category-check" children="(コンサルティング)経営チームビルディング,(コンサルティング)経営の軸づくり(ビジョン・ミッション・パーパス),(コンサルティング)変革推進における経営サポート,(コンサルティング)ビジョン・ミッション・パーパスの社内浸透,(コンサルティング)対話の場づくり,(コンサルティング)組織開発支援,(コンサルティング)組織開発事務局支援,(コンサルティング)ダイバーシティ＆インクルージョン推進,(研修)マネジメント研修,(研修)変革型リーダー育成,(研修)ODコーディネーター養成,(セミナー)講演,(その他)エグゼクティブ・コーチング,(その他)キャリア支援,(その他)その他" separator="," vertically="true" class="category-check-box"]
        </div>
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">お問い合わせ内容</p>
    </div>
    <div class="contct-content-wrapper__customize">
        [mwform_textarea name="content" cols="40" rows="10" placeholder="最大4000字まで" class="contact-content"]
    </div>
</div>

<p class="contact-menu">ご連絡先</p>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">お名前</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_text name="name" size="" placeholder="山田花子" class="contact-box"]
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">企業名</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_text name="name" size="" placeholder="株式会社xxxx" class="contact-box"]
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">所属部署名</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_text name="name" size="" placeholder="○○○○部" class="contact-box"]
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="nini">任意</p> <p class="contact-title">お役職</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_select name="select-menu" id="select" class="select-box" children="------------,一般社員,主任,課長/マネージャー,部長,事業責任者,役員,その他," value="-----------------"]
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">電話番号</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_text name="phone" size="" placeholder="03-0000-0000" class="contact-box"] 
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">メールアドレス</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_email name="email" placeholder="xxxxxx@co.jp" class="contact-box"]
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">メールアドレス(確認)</p>
    </div>
    <div class="contct-content-wrapper">
        [mwform_email name="emailcheck" placeholder="xxxxxx@co.jp" class="contact-box"]
    </div>
</div>

<p class="contact__privacy--text">お問い合わせには、<a href="<?= esc_url(home_url('/contact/privacy'));?>"><span class="contact__privacy--menu">プライバシーポリシー</span></a>への同意が必要です。</p>

<div class="contact-button-wrapper">
[mwform_submitButton name="confirm-submit" class="button contact-confirm-button" confirm_value="同意の上、入力内容を確認" submit_value="送信する"]
[mwform_bback class="button contact-back-button" value="back"]修正する[/mwform_bback]
</div>



<!-- ＊＊＊＊お問い合わせ種別ドラフト＊＊＊＊＊ -->

<!-- <div class="contact-category">
    [mwform_checkbox name="category-check" children="(コンサルティング)  経営チームビルディング,(コンサルティング)  経営の軸づくり(ビジョン・ミッション・パーパス),(コンサルティング)  変革推進における経営サポート,(コンサルティング)  ビジョン・ミッション・パーパスの社内浸透,(コンサルティング)  対話の場づくり,(コンサルティング)  組織開発支援,(コンサルティング)  組織開発事務局支援,(コンサルティング)  ダイバーシティ＆インクルージョン推進,(研修)  マネジメント研修,(研修)  変革型リーダー育成,(研修)  ODコーディネーター養成,(セミナー)  講演,(その他)  エグゼクティブ・コーチング,(その他)  キャリア支援,(その他)  その他" separator="," vertically="true" class="category-check-box"]
</div> -->

<!-- <div class="contact-category__training">
    [mwform_checkbox name="category-check2" children="(研修)  マネジメント研修,(研修)  変革型リーダー育成,(研修)  ODコーディネーター養成" separator="," vertically="true" class="category-check-box"]
</div>

<div class="contact-category__seminar">
    [mwform_checkbox name="category-check3" children="(セミナー)  講演" separator="," vertically="true" class="category-check-box"]
</div>

<div class="contact-category__other">
    [mwform_checkbox name="category-check4" children="(その他)  エグゼクティブ・コーチング,(その他)  キャリア支援,(その他)  その他" separator="," vertically="true" class="category-check-box"]
</div> -->