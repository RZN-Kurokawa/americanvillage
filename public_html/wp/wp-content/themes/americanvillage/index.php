<?php
get_header(); ?>
<main class="l-main">
  <div class="l-content_narrow">
    <div class="p-hero">
      <p class="p-hero_lead">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png" alt="AmericanVillage">
        </picture>
      </p>

      <div class="p-hero_slider">
        <?php
        if( have_rows('slider_img') ): while ( have_rows('slider_img') ) : the_row(); ?>
          <div class="p-hero_slider_item">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php the_sub_field('slider_img_pc'); ?>">
              <img src="<?php the_sub_field('slider_img_sp'); ?>" alt="">
            </picture>
          </div>
        <?php endwhile; ?>
        <?php else : ?>
          <div class="p-hero_slider_item">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" alt="">
            </picture>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="l-content_wide">
    <p class="p-top_lead">進化し続ける「街」<br class="u-sp">アメリカンビレッジマガジン</p>
  </div>

  <section class="l-content_narrow">
    <div class="l-content_inner">
      <h2 class="c-heading_1">Latest Articles</h2>
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1
        );
        $myQuery = new WP_Query( $args );
      ?>
      <?php if ( $myQuery->have_posts() ): ?>
        <div class="l-grid">
        <?php while ( $myQuery->have_posts() ) : $myQuery->the_post(); ?>
          <article class="l-grid_3col">
            <a href="<?php the_permalink(); ?>" class="c-card">
              <?php
                if(has_post_thumbnail()):
                  the_post_thumbnail('full', array( 'class' => 'c-card_img' ));
                else:
                  echo '<img src="'.get_template_directory_uri().'/assets/img/dammy.png" alt="" class="c-card_img">';
                endif;
              ?>
              <div class="c-card_body">
                <time datetime="<?php the_time('Y-m-d'); ?>" class="c-card_time"><?php the_time('Y / m / d'); ?></time>
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
          </article>
        <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>新しい記事はありません</p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>