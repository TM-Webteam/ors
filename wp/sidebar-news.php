<!-- サイドメニュー -->
<aside class="side-nav">

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt="お問合せ・簡易お見積り"></a>

  <?php
  $args = array(
    'taxonomy' => 'news_category',
  );
  $categories = get_categories($args);
  if (!empty($categories)) :
  ?>

    <div class="catSearch">
      <h3 class="ttl-tertiary">カテゴリで探す</h3>
      <ul class="catSearch__list">
        <?php foreach ((array)$categories as $category) : ?>
          <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

  <?php endif; ?>

</aside>