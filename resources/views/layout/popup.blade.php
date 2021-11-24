<div id="newsletter-signup-link" class="lightbox-by-id lightbox-content mfp-hide lightbox-white " style="max-width:600px ;padding:40px 30px 10px 30px">
<p style="text-align: center;"><span style="font-size: 140%; color: #6a0a0b;"><strong>TẢI XUỐNG BỘ TÀI LIỆU DỰ ÁN</strong></span></p>
<div role="form" class="wpcf7" id="wpcf7-f95-o5" lang="vi" dir="ltr">
	<form action="dang-ky" method="post" class="wpcf7-form" novalidate="novalidate">
		<div class="form-flat">
			@include('layout.form')
			<p class="submit text-center"><input type="submit" value="TẢI VỀ NGAY" class="wpcf7-form-control wpcf7-submit" /></p>
		</div>
	</form>
</div>
</div>
<script>
// Auto open lightboxes
jQuery(document).ready(function($) {
// auto open lightbox
cookie("lightbox_newsletter-signup-link", false);    // run lightbox if no cookie is set
if(cookie("lightbox_newsletter-signup-link") !== 'opened'){
// Open lightbox
setTimeout(function(){
$.magnificPopup.open({midClick: true, removalDelay: 300, items: { src: '#newsletter-signup-link', type: 'inline'}});
}, 30000);
// set cookie
cookie("lightbox_newsletter-signup-link", "opened");
}
});
</script>

<div id="form-banggia" class="lightbox-by-id lightbox-content mfp-hide lightbox-white " style="max-width:600px ;padding:40px 30px 10px 30px">
<p style="text-align: center;"><span style="color: #6a0a0b;"><strong><span style="font-size: 140%;">TẢI XUỐNG BẢNG GIÁ CÁC CĂN HỘ</span></strong></span></p>
	<div role="form" class="wpcf7" id="wpcf7-f95-o6" lang="vi" dir="ltr">
		<form action="dang-ky" method="post" class="wpcf7-form" novalidate="novalidate">
			<div class="form-flat">
				@include('layout.form')
				<p class="submit text-center"><input type="submit" value="TẢI VỀ NGAY" class="wpcf7-form-control wpcf7-submit" /></p>
			</div>
		</form>
	</div>
</div>

<div id="form-noithat" class="lightbox-by-id lightbox-content mfp-hide lightbox-white " style="max-width:600px ;padding:40px 30px 10px 30px">
	<p style="text-align: center;"><span style="color: #6a0a0b;"><span style="font-size: 20.16px;"><b>TẢI DANH MỤC NỘI THẤT BÀN GIAO CHI TIẾT</b></span></span></p>
	<div role="form" class="wpcf7" id="wpcf7-f95-p9-o4" lang="vi" dir="ltr">
		<form action="dang-ky" method="post" class="wpcf7-form" novalidate="novalidate">
			<div class="form-flat">
			@include('layout.form')
			<p class="submit text-center"><input type="submit" value="TẢI VỀ NGAY" class="wpcf7-form-control wpcf7-submit" /></p>
			</div>
		</form>
	</div> 
</div>