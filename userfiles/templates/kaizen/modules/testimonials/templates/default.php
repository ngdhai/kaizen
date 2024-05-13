<?php

/*

type: layout

name: Default

description: Testimonials Default

*/

?>
<div class="kz-container">
  <div class="detail">
    <h3 class="kaizen-headline edit" field="kz-testi-headline-<?php print $params['id'] ?>" rel="module">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h3>
    <div class="testimonial">
      <div class="title">
        <div class="point titile-blue pr-10 edit" field="kz-testi-point1-<?php print $params['id'] ?>" rel="module">4.8/5</div>
        <img class="pr-10"
          src="https://w.ladicdn.com/s400x350/5c7362c6c417ab07e5196b05/sao-star-20231010094822-vteoa.png" alt="">
        <div class="point edit" field="kz-testi-point2-<?php print $params['id'] ?>" rel="module">4.8/5>(15.5k) | Đã bán </div>
        <div class="pl-5 point titile-blue edit" field="kz-testi-point3-<?php print $params['id'] ?>" rel="module">4.8/5>145k</div>
      </div>
      <div class="list-testimonial">
        <?php if (isset($data)): ?>
          <?php foreach ($data as $item) { ?>
            <div class="testimonial-item">
              <div class="testimonial-img">
                <img src="<?php print thumbnail($item['client_picture'], 200, 200, true); ?>" alt="">
              </div>
              <div class="content">
                <h3 class="title"><?php print $item['name']; ?></h3>
                <div class="description">
                  <?php print $item['content']; ?>
                </div>
              </div>
            </div>
            <?php if($item !== end( $data )):?>
              <div class="kizen-line"></div>
            <?php endif; ?>
          <?php } ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>