@extends('layout.index')

@section('title')
Liên hệ
@endsection
@section('description')

@endsection
@section('keywords')

@endsection
@section('robots')
noindex, nofollow
@endsection
@section('url')
<?php echo asset('').'lien-he'; ?>
@endsection

@section('content')
<section>
    <div class="bg-white container">
        <div class="row">
            <div class="col-md-9">
                <div class="main-body">
                    <h1 class="titie">Liên hệ</h1>
                    <div class="main-content">
                        <div class="content">
                            <h2>Cây cảnh để bàn</h2>
                            <p><b>Địa chỉ nhà vườn:</b> Khu 8 - xã Phù Ninh - huyện Phù Ninh - tỉnh Phú Thọ</p>
                            <p><b>Địa chỉ bán hàng tại Hà Nội:</b> Số 61 - Ngõ 145 - Cổ Nhuế - Hà Nội</p>
                            <p><b>Website:</b> caycanh88.com</p>
                            <p><b>Email:</b> info.caycanh88@gmail.com</p>
                            <p><b>Chủ vườn:</b> (chú Quyết) 0942 192 744</p>
                            <p><b>Nhân viên bán hàng:</b> 0977 572 947 - 0973 346 070</p>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.sitebar')
        </div>
    </div>
</section>

@endsection
