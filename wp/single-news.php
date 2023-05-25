<?php get_header();
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
?>

<main class="all-news">

  <section class="">
    <div class="containers flex">

    <!-- ニュース詳細 -->
    <section class="main-conts news-single">

      <div class="flex gap20 fS aiC inherit news-single__date">
        <time class="time"><?php echo get_the_date('Y.m.d'); ?></time>
        <?php if ($post_terms) : ?>
          <?php foreach ($post_terms as $post_term) : ?>
            <span class="cat"><?php echo esc_html($post_term->name); ?></span>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <h1 class="news-single__h1"><?php the_title(); ?></h1>

      <?php get_template_part( 'template-parts/sns' ); ?>

      <div class="news-single__lead"><?php echo CFS()->get('lead'); ?></div>

      <div class="news-single__conts"><?php the_content(); ?></div>

    </section>

    <?php get_sidebar("news"); ?>

    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>