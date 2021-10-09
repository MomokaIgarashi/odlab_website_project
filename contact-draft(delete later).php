<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">お問い合わせ種別</p>
    </div>
    <div class="contct-content-wrapper">
        <div class="contact-category__consulting">
            [mwform_checkbox name="category-check1" children="経営チームビルディング,経営の軸づくり(ビジョン・ミッション・パーパス),変革推進における経営サポート,ビジョン・ミッション・パーパスの社内浸透,対話の場づくり,組織開発支援,組織開発事務局支援,ダイバーシティ＆インクルージョン推進" separator="," vertically="true" class="category-check-box"]
        </div>

        <div class="contact-category__training">
            [mwform_checkbox name="category-check2" children="マネジメント研修,変革型リーダー育成,ODコーディネーター養成" separator="," vertically="true" class="category-check-box"]
        </div>

        <div class="contact-category__seminar">
            [mwform_checkbox name="category-check3" children="講演" separator="," vertically="true" class="category-check-box"]
        </div>

        <div class="contact-category__other">
            [mwform_checkbox name="category-check4" children="エグゼクティブ・コーチング,キャリア支援,その他" separator="," vertically="true" class="category-check-box"]
        </div>
    </div>
</div>

<div class="contact-list">
    <div class="contact-title-wrapper">
        <p class="hissu">必須</p> <p class="contact-title">お問い合わせ内容</p>
    </div>
    <div class="contct-content-wrapper">
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

<p class="contact__privacy--text">お問い合わせには、<span class="contact__privacy--menu">プライバシーポリシー</span>への同意が必要です。</p>

[mwform_submitButton name="confirm-submit" class="button contact-confirm-button" confirm_value="同意の上、入力内容を確認" submit_value="送信する"]

[mwform_bback class="button contact-back-button" value="back"]修正する[/mwform_bback]

</div>
