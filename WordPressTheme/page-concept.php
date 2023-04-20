<?php
/*
Template Name: ユースタイルの家づくり
*/
get_header();
?>

<main>
  <div class="p-concept">
    <div class="p-concept__container">
      <section class="p-concept-intro">
        <div class="p-concept-intro__container l-inner">
          <div class="c-lowerTitle">
            <h2 class="c-lowerTitle__main">Concept</h2>
            <p class="c-lowerTitle__sub">ユースタイルの家づくり</p>
          </div>
          <div class="p-concept-intro__content">
            <div class="p-concept-intro__mmedia">
              <div class="p-concept-intro__imgWrapper">
                <picture class="p-concept-intro__img">
                  <source
                    srcset="<?php echo get_theme_file_uri( './assets/images/concept/concept-intro_img-symbol.png' ); ?>"
                    media="(min-width: 768px)" class="p-concept-intro__img-pc" />
                  <img
                    src="<?php echo get_theme_file_uri( './assets/images/concept/concept-intro_img-symbol-sp.png' ); ?>"
                    alt="U.Styleロゴ" class="p-concept-intro__img-sp" />
                </picture>
              </div>
              <div class="p-concept-intro__body">
                <p class="p-concept-intro__lead">
                  福岡で建てるおしゃれな<br class="u-mobile">注文住宅。<br />
                  最高品質のデザインを、<br />あなたへお届け。
                </p>
                <p class="p-concept-intro__text">
                  ユースタイル株式会社は、すべてのお客様に最高品質のデザイン住宅をお届けしています。私たちが考える「良いデザイン」とは、お客様が福岡県で楽しい暮らしを実現できるデザインのこと。最高品質のデザインを“あなた”にお届けするために、ユースタイル株式会社はお客様に、３つのお約束をしています。
                </p>
              </div>
            </div>
            <!-- /.p-concept-intro__mmedia -->
          </div>
        </div>
      </section>
      <!-- /.p-concept-intro -->

      <section class="p-concept-promise">
        <div class="p-concept-promise__container l-inner">
          <div class="c-lowerTitle">
            <h2 class="c-lowerTitle__main p-concept-promise__mainTitle">ユースタイルからあなたへ、<br />3つのお約束</h2>
          </div>
          <div class="p-concept-promise__content">
            <div class="p-concept-promise__mmedia">
              <div class="p-concept-promise__imgWrapper">
                <picture class="p-concept-promise__img">
                  <source
                    srcset="<?php echo get_theme_file_uri( './assets/images/concept/concept-promise_img1.jpg' ); ?>"
                    media="(min-width: 768px)" class="" />
                  <img src="<?php echo get_theme_file_uri( './assets/images/concept/concept-promise_img1-sp.jpg' ); ?>"
                    alt="注文住宅のリビングでくつろぐ家族" class="" />
                </picture>
              </div>
              <div class="p-concept-promise__body">
                <h3 class="p-concept-promise__title">User&nbsp;<span class="p-concept-promise__titleSupply">[お客様]</span>
                </h3>
                <p class="p-concept-promise__lead u-anime-fadeup u-anime-fadeup1">お客様視点で、<br />プランをご提案。</p>
                <p class="p-concept-promise__text u-anime-fadeup u-anime-fadeup2">
                  ユースタイル株式会社は、お客様一人ひとりに合わせたプランをご提案いたします。デザインの美しさにもこだわりつつ、「何がお客様にとって最適なのか」を常に問答し、お客様と共に、世界でひとつの注文住宅を創り上げてまいります。
                </p>
                <div class="p-concept-promise__btnWrapper">
                  <a href="<?php echo get_post_type_archive_link( 'voice' ); ?>"
                    class="p-concept-promise__btn">お客様の声</a>
                </div>
              </div>
            </div>
            <!-- /.p-concept-promise__mmedia -->

            <div class="p-concept-promise__mmedia">
              <div class="p-concept-promise__imgWrapper">
                <picture class="p-concept-promise__img">
                  <source
                    srcset="<?php echo get_theme_file_uri( './assets/images/concept/concept-promise_img2.jpg' ); ?>"
                    media="(min-width: 768px)" class="" />
                  <img src="<?php echo get_theme_file_uri( './assets/images/concept/concept-promise_img2-sp.jpg' ); ?>"
                    alt="注文住宅の中庭で選択する主婦" class="" />
                </picture>
              </div>
              <div class="p-concept-promise__body">
                <h3 class="p-concept-promise__title">Useful&nbsp;<span
                    class="p-concept-promise__titleSupply">[使いやすい]</span></h3>
                <p class="p-concept-promise__lead u-anime-fadeup u-anime-fadeup1">使いやすく、<br />住み心地の良い空間を実現。</p>
                <p class="p-concept-promise__text u-anime-fadeup u-anime-fadeup2">
                  ユースタイル株式会社の住宅性能は、長期優良住宅（ZEH）並の高品質住宅です。福岡県の気候に合わせた仕様なので、夏涼しく・冬暖かい暮らしを実現。細部のデザインにもこだわり、あなただけの注文住宅を実現いたします。
                </p>
                <div class="p-concept-promise__btnWrapper">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>./quality" class="p-concept-promise__btn">住宅性能</a>
                </div>
              </div>
            </div>
            <!-- /.p-concept-promise__mmedia -->

            <div class="p-concept-promise__mmedia">
              <div class="p-concept-promise__imgWrapper">
                <picture class="p-concept-promise__img">
                  <source
                    srcset="<?php echo get_theme_file_uri( './assets/images/concept/concept-promise_img3.jpg' ); ?>"
                    media="(min-width: 768px)" class="" />
                  <img src="<?php echo get_theme_file_uri( './assets/images/concept/concept-promise_img3-sp.jpg' ); ?>"
                    alt="注文住宅の中庭でくつろぐ家族" class="" />
                </picture>
              </div>
              <div class="p-concept-promise__body">
                <h3 class="p-concept-promise__title">Unison&nbsp;<span
                    class="p-concept-promise__titleSupply">[調和する]</span></h3>
                <p class="p-concept-promise__lead u-anime-fadeup u-anime-fadeup1">家と家族が調和する、<br />楽しい暮らしを約束。</p>
                <p class="p-concept-promise__text u-anime-fadeup u-anime-fadeup2">
                  ユースタイル株式会社は、「家は家族の暮らしを楽しくするための道具」と考え、家と家族が調和する注文住宅を目指しています。そこで産まれたのが「中庭のある家」で、その実績は100棟以上。福岡県で中庭を建てるならユースタイルへ。
                </p>
                <div class="p-concept-promise__btnWrapper">
                  <a href="<?php echo get_term_link( 'courtyard' , 'works_category' ); ?>"
                    class="p-concept-promise__btn">中庭のある家</a>
                </div>
              </div>
            </div>
            <!-- /.p-concept-promise__mmedia -->
            <div class="p-concept-promise__foot">
              <h2 class="p-concept-promise__copy u-anime-fadeup u-anime-fadeup1">Good design.<br />for “U”</h2>
              <p class="p-concept-promise__subCopy u-anime-fadeup u-anime-fadeup2">最高品質のデザインを、<br
                  class="u-mobile" />“あなた”へ。</p>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-concept-promise -->

      <?php get_template_part('template/access-template');?>
    </div>
    <!-- /.p-concept -->
  </div>
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>