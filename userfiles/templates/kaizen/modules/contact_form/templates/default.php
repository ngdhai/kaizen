<?php
/*

  type: layout

  name: Default

  description: Default

 */
?>

<div class="modal fade show" style="display:none;" data-bs-backdrop="static" data-bs-keyboard="false" id="msg<?php print $form_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-center text-center bold text-success fs-4 fw-bold py-2"><span>ĐẶT HÀNG THÀNH CÔNG!</span></div>
                <div class="justify-content-center text-center fs-6 py-6"><span>Cảm ơn quý khách đã đặt hàng thành công. <br>Chúng tôi sẽ liên hệ lại để xác nhận đơn hàng qua số điện thoại <span class="fw-bold">0392 038 028</span></span></div>
                <div class="justify-content-center text-center pt-4">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form">
    <form id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
        <?php print csrf_form() ?>

        <div class="row">
            <div class="col-12">
                <module type="custom_fields" default-fields="Họ và tên[type=text,field_size=12,show_placeholder=true], E-mail[type=email,field_size=12,show_placeholder=true], Số điện thoại[type=phone,field_size=12,show_placeholder=true], Địa chỉ[type=textarea,field_size=12,show_placeholder=true]" input_class="form-control" />
            </div>
            <div class="col-12">
                <?php if ($require_terms && $require_terms_when == 'b') : ?>
                    <module type="users/terms" data-for="contact_form_default" />
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="kaizen-animation">
                <div class="kaizen-button kaizen-transition">
                    <div class="kaizen-button-headline">
                        <module type="btn" button_action="submit" text="Đặt hàng ngay" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>