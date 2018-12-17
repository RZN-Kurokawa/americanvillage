<?php

/**
 * Single template (default)
 *
 * 投稿ページのデフォルトテンプレートです。
 * 投稿ページで、他にテンプレートの指定がない場合はこのテンプレートが使用されます。
 */
get_header(); ?>

<?php if (have_posts()):  ?>
<main class="l-main">
  <section>
    <div class="l-content_narrow">
      <article>
        <div class="p-article_header">
          <div class="p-article_header_body">
            <h2 class="c-heading_1"><?php echo get_the_title(); ?></h2>
            <p>
              <time datetime="<?php the_time('Y-n-j'); ?>" class="p-article_header_time"><?php the_time('Y年n月j日'); ?></time>
            </p>
          </div>
          <?php
            if(has_post_thumbnail()):
              the_post_thumbnail('full');
            endif;
          ?>
        </div>
        <div class="p-article">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </article>
    </div>
  </section>
</main>
<?php endif; ?>

<?php get_footer(); ?>