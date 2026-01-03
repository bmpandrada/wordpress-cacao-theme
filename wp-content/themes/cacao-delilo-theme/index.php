<?php get_header() ?>

<img src="<?php header_image() ?>"
  height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" />

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <h1>Blog</h1>
      <div class="container">
        <div class="blog-items">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post() ?>

              <?php get_template_part('template-parts/content') ?>

            <?php } ?>
            <div class="wpdevs-pagination">
              <div class="pages new">
                <?php previous_posts_link("<< Newer posts") ?>
              </div>

              <div class="pages old">
                <?php next_posts_link(" Older posts >>") ?>
              </div>
            </div>
          <?php } else {
          ?>
            <p>Nothing yet to be displayed</p>
          <?php
          }
          wp_reset_postdata();
          ?>
        </div>
        <?php get_sidebar() ?>
      </div>
    </main>
  </div>
</div>

<?php get_footer() ?>