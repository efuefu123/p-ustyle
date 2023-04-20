<?php
$post_id = get_the_ID();
?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/?post_id=<?php echo $post_id ?>"
  class="p-eventDetail__btn-reserve c-btn__btn">イベント予約はこちら</a>