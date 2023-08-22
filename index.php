<?php get_header(); ?>
  <div class="mv">
    <div class="mv__txt">
      <div class="mv__box">
        <h2 class="mv__ttl01">マッチングで理想の仕事を</h2>
        <a href="<?php echo home_url(); ?>" class="btn btn01">派遣登録<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <main class="main">
    <section class="sec news">
      <h2 class="secTtl">NEWS<span>おしらせ</span></h2>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
        <dl class="newsList" id="new">
          <dt id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php the_time('Y年n月j日'); ?><span><?php the_category(' ');?></span></dt>
          <dd><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?>
            <?php if( has_post_thumbnail() ) : ?>
                  <p class="thumb"><?php the_post_thumbnail( 'post-thumbnail' ); ?></p>
            <?php endif; ?>
            </a>
          </dd>
        </dl>
        <?php endwhile;
        endif;
        ?>
      </div>
    </section>
    <section class="sec read">
      <h2 class="secTtl">PLEASE READ<span>テンプレートのご利用前に必ずお読み下さい</span></h2>
      <h3 class="secTtl02">利用規約のご案内</h3>
      <p>このテンプレートは、Template Partyにて無料配布している『派遣会社向け 無料ホームページテンプレート tp_haken1』です。必ずダウンロード先のサイトの利用規約をご一読の上でご利用下さい。</p>
      <p>HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。
      わざと見えなく加工する事も禁止です。</p>
      <h3 class="secTtl02">当テンプレートの詳しい使い方は</h3>
      <p><a href="<?php echo home_url(); ?>">こちらをご覧下さい！！！！</a></p>
    </section>


    <section class="sec interview">
      <h2 class="secTtl A">INTERVIEW<span>キャリアチェンジに成功した人のインタビュー</span></h2>
      <div class="list-slide blur">
        <div class="list">
          <figure><a href="interview.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sample1.jpg" alt=""></a></figure>
        </div>
        <div class="list">
          <figure><a href="interview.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sample2.jpg" alt=""></a></figure>
        </div>
        <div class="list">
          <figure><a href="interview.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sample1.jpg" alt=""></a></figure>
        </div>
        <div class="list">
          <figure><a href="interview.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sample2.jpg" alt=""></a></figure>
        </div>
        <div class="list">
          <figure><a href="interview.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sample1.jpg" alt=""></a></figure>
        </div>
        <div class="list">
          <figure><a href="interview.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sample2.jpg" alt=""></a></figure>
        </div>
      </div>
    </section>


    <section class="sec pickUp A">
      <h2 class="secTtl">PICKUP<span>今月の注目企業様</span></h2>
          <?php $top_query = new WP_Query( 'tag=pickup' ); ?>
          <?php if ( $top_query->have_posts() ) : ?>
            <?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
              <div class="c2">
                  <!--サムネイル-->
                  <div class="thumb image r">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail('', array( 'class' => 'img-fluid' ) ); ?>
                    <?php else : ?>
                      <img class="img-fluid" width="100%" src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="">
                    <?php endif; ?>
                  </div>
                  <!--記事タイトル-->
                <div class="text l">
                  <h3 class="secTtl B"><?php the_title(); ?></h3>
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
                  <p class="c"><a href="<?php the_permalink(); ?>" class="btn2 block">READ MORE<i class="fas fa-arrow-circle-right"></i></a></p>
            <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
          <?php endif; ?>
    </section>



    <section class="sec bg2">
      <h2 class="secTtl">INTERVIEW<span>キャリアチェンジに成功した人のインタビュー</span></h2>
      <div class="list-container">
        <div class="list blur">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sample3.jpg" alt="">
          <div class="text">
            <h4>ここにタイトルを入れます</h4>
            <p>ここに説明を入れます。サンプルテキスト。</p>
          </div>
          <p class="c"><a href="" class="btn1 block">もっとみる</a></p>
          <span class="new">NEW</span>
        </div>
        <div class="list blur">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sample3.jpg" alt="">
          <div class="text">
            <h4>ここにタイトルを入れます</h4>
          </div>
          <p class="c"><a href="" class="btn2 block">もっとみる</a></p>
        </div>
        <div class="list blur">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sample3.jpg" alt="">
          <div class="text">
            <h4>ここにタイトルを入れます</h4>
            <p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
