<?php global $post;
if (!theme_the_post()) return;
 $post0 = $post;
if (!theme_the_post()) return;
 $post1 = $post;
if (!theme_the_post()) return;
 $post2 = $post;
 ?>
<?php $skip_min_height = false; ?><section class="u-clearfix u-section-1" id="sec-fdf6">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":3}--><!--/blog_options_json-->
    <div class="u-blog u-expanded-width u-repeater u-repeater-1"><!--blog_post-->
      <div class="u-blog-post u-container-style u-repeater-item u-white u-repeater-item-1">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--blog_post_header-->
          <?php if ($post0 !== null) { ?><h4 class="u-blog-control u-text u-text-1">
            <?php if (!is_singular()): ?><a class="u-post-header-link" href="<?php theme_switch_post($post0); the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if (!is_singular()): ?></a><?php endif; ?>
          </h4><?php } ?><!--/blog_post_header--><!--blog_post_image-->
          <?php if ($post0 !== null) { ?><?php
                            $post_image = theme_get_post_image(array('class' => 'u-blog-control u-expanded-width u-image u-image-default u-image-1', 'default' => '/images/1.jpeg'));
                            if ($post_image) echo $post_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><?php } ?><!--/blog_post_image--><!--blog_post_content-->
          <?php if ($post0 !== null) { ?><div class="u-blog-control u-post-content u-text u-text-2"><?php echo is_singular() ? theme_get_content() : theme_get_excerpt(); ?></div><?php } ?><!--/blog_post_content--><!--blog_post_readmore-->
          <?php if ($post0 !== null) { ?><a href="<?php the_permalink(); ?>" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-1"><?php _e(sprintf(__('Read more', 'site1'))); ?></a><?php } ?><!--/blog_post_readmore-->
        </div>
      </div><!--/blog_post--><!--blog_post-->
      <div class="u-blog-post u-container-style u-repeater-item u-video-cover u-white">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><!--blog_post_header-->
          <?php if ($post1 !== null) { ?><h4 class="u-blog-control u-text u-text-3">
            <?php if (!is_singular()): ?><a class="u-post-header-link" href="<?php theme_switch_post($post1); the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if (!is_singular()): ?></a><?php endif; ?>
          </h4><?php } ?><!--/blog_post_header--><!--blog_post_image-->
          <?php if ($post1 !== null) { ?><?php
                            $post_image = theme_get_post_image(array('class' => 'u-blog-control u-expanded-width u-image u-image-default u-image-2', 'default' => '/images/2.jpeg'));
                            if ($post_image) echo $post_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><?php } ?><!--/blog_post_image--><!--blog_post_content-->
          <?php if ($post1 !== null) { ?><div class="u-blog-control u-post-content u-text u-text-4"><?php echo is_singular() ? theme_get_content() : theme_get_excerpt(); ?></div><?php } ?><!--/blog_post_content--><!--blog_post_readmore-->
          <?php if ($post1 !== null) { ?><a href="<?php the_permalink(); ?>" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-2"><?php _e(sprintf(__('Read more', 'site1'))); ?></a><?php } ?><!--/blog_post_readmore-->
        </div>
      </div><!--/blog_post--><!--blog_post-->
      <div class="u-blog-post u-container-style u-repeater-item u-video-cover u-white">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--blog_post_header-->
          <?php if ($post2 !== null) { ?><h4 class="u-blog-control u-text u-text-5">
            <?php if (!is_singular()): ?><a class="u-post-header-link" href="<?php theme_switch_post($post2); the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if (!is_singular()): ?></a><?php endif; ?>
          </h4><?php } ?><!--/blog_post_header--><!--blog_post_image-->
          <?php if ($post2 !== null) { ?><?php
                            $post_image = theme_get_post_image(array('class' => 'u-blog-control u-expanded-width u-image u-image-default u-image-3', 'default' => '/images/3.jpeg'));
                            if ($post_image) echo $post_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><?php } ?><!--/blog_post_image--><!--blog_post_content-->
          <?php if ($post2 !== null) { ?><div class="u-blog-control u-post-content u-text u-text-6"><?php echo is_singular() ? theme_get_content() : theme_get_excerpt(); ?></div><?php } ?><!--/blog_post_content--><!--blog_post_readmore-->
          <?php if ($post2 !== null) { ?><a href="<?php the_permalink(); ?>" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-3"><?php _e(sprintf(__('Read more', 'site1'))); ?></a><?php } ?><!--/blog_post_readmore-->
        </div>
      </div><!--/blog_post-->
    </div><!--/blog-->
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>