<?php
/*
Template Name: イベント予約・その他お問い合わせ確認
*/
get_header();
?>

<main>
  <div class="p-contactCheck">
    <div class="p-contactCheck__container">
      <div class="c-lowerTitle p-contact__title">
        <h2 class="c-lowerTitle__main">Reserve</h2>
        <p class="c-lowerTitle__sub">イベント予約</p>
      </div>
      <div class="p-contactCheck__content l-inner">
        <dl class="p-contactCheck__item">
          <dt class="p-contactCheck__itemName">参加希望イベント名</dt>
          <dd class="p-contactCheck__itemData">
            <p class="p-contactCheck__itemData-text">これはダミー原稿です。</p>
          </dd>
        </dl>
        <dl class="p-contactCheck__item">
          <dt class="p-contactCheck__itemName">参加希望イベント名</dt>
          <dd class="p-contactCheck__itemData">
            <p class="p-contactCheck__itemData-text">これはダミー原稿です。</p>
          </dd>
        </dl>
        <dl class="p-contactCheck__item">
          <dt class="p-contactCheck__itemName">参加希望イベント名</dt>
          <dd class="p-contactCheck__itemData">
            <p class="p-contactCheck__itemData-text">これはダミー原稿です。</p>
          </dd>
        </dl>
        <div class="p-contactCheck__privacypolicyWrapper">
          <p class="p-contactCheck__itemData-text">プライバシーポリシーに同意します。</p>
        </div>
        <div class="p-contactCheck__btnWrapper">
          <button class="p-contactCheck__btn c-btn__btn">確認する</button>
        </div>
      </div>
      <!-- /.p-contactCheck__content -->

      <?php get_template_part('template/access-template');?>
    </div>
  </div>
  <!-- p-contactCheck -->
  <?php get_template_part('template/fixNav-template');?>
  <?php get_template_part('template/toTop-template');?>
</main>

<?php get_footer(); ?>