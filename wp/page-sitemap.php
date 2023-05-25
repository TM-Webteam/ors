<?php get_header(); ?>

<main class="sitemap">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">サイトマップ</h1>
      </div>
    </div>
  </section>

  <section class="sitemap__box">
    <div class="containers flex gap60">

      <div class="group">
        <div class="group__ttl">製品・サービス</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>bgp/">BGPソーラーカーポート</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>flow/">導入までの流れ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>question/">よくあるご質問</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>strength/">当社の強み</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">ニーズ・課題から探す</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>decarbonization/">脱炭素に取り組みたい</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>energysave/">電気代を削減したい</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お役立ち情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お問合せ</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">サービス資料ダウンロード</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問合せ・簡易見積り</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">企業情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">会社概要</a></li>
        </ul>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>