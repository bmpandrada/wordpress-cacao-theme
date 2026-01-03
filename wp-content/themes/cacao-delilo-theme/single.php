<?php get_header() ?>

<div id="primary">
  <div id="main">
    <div class="container">
      <?php
      while (have_posts()) {
        the_post(); ?>

        <?php get_template_part('template-parts/content', 'single') ?>

        <div class="wpdevs-pagination">
          <div class="pages next">
            <?php next_post_link('&laquo; %link') ?>
          </div>

          <div class="pages previous">
            <?php previous_post_link('%link &raquo') ?>
          </div>
        </div>

      <?php }

      if (comments_open() or get_comments_number()) {
        comments_template();
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<?php get_footer() ?>