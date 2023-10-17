<?php get_header(); ?>



    <article class="sec article">

      <?php get_template_part('template-parts/breadcrumb'); ?>

      <h2 class="secTtl"><?php the_title(); ?></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="article_meta">
                <ul class="post-categories">
                  <li><?php the_category(' ');?></li>
                </ul>
                <time datetime=""><?php the_time('Y年n月j日'); ?></time>
              </div>
            <?php if( has_post_thumbnail() ) : ?>
              <p class="post-thumb"><?php the_post_thumbnail( '' ); ?></p>
                <?php else : ?>
            <?php endif; ?>
              <div class="post-content"><?php the_content(); ?></div>
        <?php endwhile; endif;?>

<div class="postLinks">
<div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
<div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
</div>

    </article>



  </main>
<?php get_footer(); ?>



