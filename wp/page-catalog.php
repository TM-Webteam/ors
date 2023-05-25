<?php get_header(); ?>

<main class="catalog">

  <section class="">
    <div class="containers flex">

      <!-- 資料紹介 -->
      <article class="sub-conts article">

        <h1 class="article__ttl">事業者様・自治体様向け<br>BGPソーラーカーポート</h1>

        <!-- 資料のスライダー -->
        <div class="wp-slick">
          <div id="wp-slick">
            <figure><img src="<?php echo assets_path() ?>img/catalog/img-single01.jpg" alt=""></figure>
            <!-- <figure><img src="/assets/img/common/img-single01.jpg" alt=""></figure>
            <figure><img src="/assets/img/common/img-single01.jpg" alt=""></figure> -->
          </div>
        </div>
        

        <h2 class="article__desc">BGPソーラーカーポートは、商業施設や工場をお持ちの事業者様に特化したソーラーカーポートです。コストや納期、設置環境に合わせた最適なソーラーカーポートの導入･設置をご提案いたします。初めてご検討されるお客様でもソーラーカーポートの設置にまつわる業務をワンストップでサポートしますので安心です。<br><br>こんな方におすすめです。<br>・脱炭素に取り組みたい<br>・電気代の高騰に困っている</h2>

        <div class="article__toc">
          <h2 class="article__toc--ttl">本資料の目次</h2>
          <div class="article__toc--list">
            <dl>
              <dt><h3>BGPソーラーカーポートとは</h3></dt>
              <dt><h3>ソーラーカーポートとは？</h3></dt>
              <dt><h3>ソーラーカーポート設置のメリット</h3></dt>
              <dt><h3>BGPソーラーカーポート製品の特長</h3></dt>
              <dt><h3>BGPソーラーカーポート製品概要</h3></dt>
              <dt><h3>BGPソーラーカーポート完成イメージ図</h3></dt>
              <dt><h3>開発パートナーの紹介</h3></dt>
              <dt><h3>建築許可申請について</h3></dt>
              <dt><h3>参考価格</h3></dt>
              <dt><h3>導入までの大まかな流れ</h3></dt>
              <dt><h3>ソーラーカーポートの導入が向いている事業者様</h3></dt>
            </dl>
            <!-- <dl>
              <dt><h3>章タイトルが入ります。章タイトルが入ります。</h3></dt>
              <dd>
                <ul>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt><h3>章タイトルが入ります。章タイトルが入ります。</h3></dt>
              <dd>
                <ul>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                </ul>
              </dd>
            </dl> -->
          </div>
        </div>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-form">

        <!-- カイロスタグ挿入 -->
        <form action="" class="form">
          <div class="form__ttl">ダウンロード申込みフォーム</div>
          <div class="form__table">
            <table>
              <colgroup>
                <col>
                <col>
              </colgroup>
              <tbody><tr>
                <th class="flex aiC">
                  <span class="item">会社名</span>
                  <span class="required"></span>
                </th>
                <td><input type="text" placeholder="例）〇〇〇株式会社"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">部署名</span>
                  <span class="required"></span>
                </th>
                <td><input type="text" placeholder="例）システム管理室"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">ご担当者名</span>
                  <span class="required"></span>
                </th>
                <td>
                  <div class="flex aiC">
                    <p class="flex fS aiC half"><span>氏：</span><input type="text" placeholder="例）佐藤"></p>
                    <p class="flex fS aiC half"><span>名：</span><input type="text" placeholder="例）太郎"></p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">メールアドレス</span>
                  <span class="required"></span>
                </th>
                <td><input type="email" placeholder="例）sample@gmail.com.jp"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">電話番号</span>
                  <span class="required"></span>
                </th>
                <td><input type="tel" placeholder="例）090-1234-5678"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">お問合せ・相談事項がある方<br class="pc-only">はご記入ください。</span>
                  <span class="optional">任意</span>
                </th>
                <td><textarea placeholder="例）ダウンロード資料を見ながら説明もしてほしい。"></textarea></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">個人情報の取扱いについて</span>
                  <span class="required"></span>
                </th>
                <td><div class="flex fS aiC"><input type="checkbox">同意する</div><p>弊社Webサイトの<a href="/privacy/">プライバシーポリシー</a>をご確認の上、ご同意いただき送信をお願いいたします。</p></td>
              </tr>
            </tbody></table>
            <button type="submit" class="more small">確認画面へ進む</button>
          </div>
        </form>
        <!-- カイロスタグ挿入 end -->

      </aside>
      
    </div>
  </section>

</main>

<?php get_footer(); ?>