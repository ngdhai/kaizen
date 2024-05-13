<?php

/*

type: layout

name: Default

description: Default

*/

?>
<div class="kaizen-container">
    <div id="my-carousel" class="owl-carousel">
        <?php if (is_array($data)) : ?>
            <?php $rand = uniqid(); ?>
            <?php $count = -1;
            foreach ($data as $item) : ?>
                <?php $count++; ?>
                <div class="item">
                    <img src="<?php print $item['filename']; ?>" alt="" />
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<script>mw.require("<?php print template_url(); ?>assets/js/owl.carousel.min.js", true); </script>
<script>
  $(document).ready(function () {
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel();
    });
    $(".kaizen-form-headline").click(function () {
      $('html, body').animate({
        scrollTop: $("#scroll-form").offset().top
      }, 1000);
    });
    $('#my-carousel').owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      nav: true,
      dots: true,
      navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      singleItem: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
  });
</script>
