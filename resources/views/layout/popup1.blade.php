<div class='pubup'>
	<h3>Đăng Ký Nhận Ưu Đãi Mới Nhất</h3>
	<p>Tài liệu gửi quý khách gồm có: Mặt bằng, bảng giá, ưu đãi, chính sách bán hàng ...</p>
	@if(count($errors) > 0)
		@foreach($errors->all() as $err)
			<div class="alert">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{$err}} !</strong>
			</div>
		@endforeach
	@endif
	<form action="dang-ky" method="post" class="wpcf7-form">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
		<p><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" placeholder="Họ & tên" /></p>
		<p><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" placeholder="Số điện thoại*" /></p>
		<p><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Địa chỉ email" /></p>
		<p><input type="submit" name="" value="ĐĂNG KÝ" size="40" /></p>
	</form>
	<a id="fancybox-close" style="display: inline;"></a>
</div>


<style type="text/css">
.pubup{
	position: fixed;
    text-align: center;
    margin: 0 auto;
	z-index: 999999;
    background-color: #fff;
    padding: 20px 20px 5px;
    border: 1px #fff solid;
	-webkit-animation-name: example;  /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 3s;  /* Safari 4.0 - 8.0 */    
    -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 2s;    
    animation-fill-mode: forwards;
	width: 450px;
}

@-webkit-keyframes example {
    from {right: -500px; bottom:40px}
    to {right: 50px;bottom:40px}
}

@keyframes example {
    from {right: -500px; bottom:40px}
    to {right: 50px;bottom:40px}
}
.pubup input[type='submit']{
	background-color: #b8882a;
	/*background-image: linear-gradient(to right, #ffd008 , #bf2130);*/
	color: #fff;
	font-weight: bold;
	padding: 0px 22px;
	border-radius: 5px;
	    margin: 0;
}
.pubup h3{
	color: #b8882a;
    margin: 0px 0px 10px 0px;
}
.pubup p{
	color: #b8882a;
}

#fancybox-close {
    position: absolute;
    top: -15px;
    right: -15px;
    width: 30px;
    height: 30px;
    background: url(data/home/fancybox.png) -40px 0;
    cursor: pointer;
    z-index: 111103;
    display: none;
}
.fancybox-hidden{
	display: none;
}
@media only screen and (max-width: 600px) {
    .pubup{
		z-index: 9999999;
		width: 80%;
	}
	@-webkit-keyframes example {
		from {right: -500px; bottom:25vh}
		to {right: 9%;bottom:25vh}
	}
	@keyframes example {
		from {right: -500px; bottom:25vh}
		to {right: 9%;bottom:25vh}
	}
	.trang{
		width: 100%;
		height: 100vh;
		background-color: #ffffffc2;
		position: fixed;
		z-index: 999999;
	}
}
</style>