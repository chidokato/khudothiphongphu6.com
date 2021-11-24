<input type="hidden" name="_token" value="{{csrf_token()}}" />
<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />

<p><span class="wpcf7-form-control-wrap your-name">
    <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="Họ và tên" /></span>
</p>
<p><span class="wpcf7-form-control-wrap your-phone">
    <input required type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="Số điện thoại*" /></span>
</p>
<p><span class="wpcf7-form-control-wrap your-email">
    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Địa chỉ email" /></span>
</p>