<?php get_header(); ?>

<main class="flow">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">導入までの流れ</h1>
        <div class="lead">初めてで何から始めたらよいかわからないという方でも安心してください。<br>当社が導入検討から設置までフルサポートします。</div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="containers">

      <div class="process">
        <div class="process__side">約<span>3</span>ヶ月～<span>5</span>ヶ月</div>
        <dl class="flex process__box">
          <dt class="process__box--ttl"><h3 class="num01">導入のご検討</h3></dt>
          <dd class="process__box--txt">
            <ul>
              <li>導入のご相談</li>
              <li>現地調査を行い、設置場所や設置台数の確認を精査</li>
              <li>「期待できる発電量」「電気代削減効果」を試算</li>
              <li>設置に伴うお見積り</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more small">お問合せ・簡易お見積り（無料）</a>
          </dd>
        </dl>
        <dl class="flex process__box">
          <dt class="process__box--ttl v2"><h3 class="num02">内示・契約合意</h3></dt>
        </dl>
        <dl class="flex process__box">
          <dt class="process__box--ttl v3"><h3 class="num03">建築確認申請・地盤調査</h3></dt>
          <dd class="process__box--txt">
            <ul>
              <li>建築確認申請作成・提出</li>
              <li>検査機関・自治体による確認</li>
            </ul>
          </dd>
        </dl>
        <dl class="flex process__box">
          <dt class="process__box--ttl v4"><h3 class="num04">正式契約</h3></dt>
        </dl>
        <dl class="flex process__box">
          <dt class="process__box--ttl v5"><h3 class="num05">設計・設置工事・運用開始</h3></dt>
          <dd class="process__box--txt">
            <ul>
              <li>地盤調査をもとにソーラーカーポートの詳細設計</li>
              <li>ソーラーカーポート調達・工事</li>
            </ul>
          </dd>
        </dl>
      </div>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>