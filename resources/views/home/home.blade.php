@extends('home.layout')
@section('title'){{ 'Trang chủ' }}@endsection

@section('content')
    <div class="nav-bg" id="navbar">
        @include('home.layout.nav')
        <div id="intro">
            <div class="container">
                <div  class="row pt-3">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/home/images/phone-left.png') }}" class="img-fluid hidden tilt">
                    </div>
                    <div class="col-md-6 intro-text pt-5">
                        <h1 class="intro-text__top">TRỞ THÀNH</h1>
                        <h1 class="intro-text__bottom">TRIỆU PHÚ</h1>
                        <p class="intro-text__description">Cung cấp kiến thức và thông tin tổng hợp trong nhiều lĩnh vực trong đó tập trung chủ yếu vào lĩnh vực Âm nhạc</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 intro-text-2">
                        <p class="intro-text__description"><span>TRỞ THÀNH TRIỆU PHÚ</span> là dịch vụ cung cấp kiến thức và thông tin tổng hợp trong nhiều lĩnh vực trong đó tập trung chủ yếu và lĩnh vực Âm nhạc. Khách hàng tham gia tìm hiểu kiến thức bằng cách trả lời các câu hỏi trắc nghiệm trúng thưởng</p>
                        <div class="row intro-button p-2">
                            <a class="btn intro-button__custom tilt p-2" href="#GTP">GÓI QUIZZ</a>
                            <a class="btn intro-button__custom tilt p-2" href="#GQ">GÓI TRIỆU PHÚ</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/home/images/phone-right.png') }}" class="img-fluid tilt">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="content-background">
        <div id="huongdan">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1 class="title-hd">HƯỚNG DẪN</h1>
                </div>
                <div class="row pt-3">
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="card shadow" id="GQ">
                            <div class="card-header" style="background-image: linear-gradient(-65deg, #9b4ba1 0%, #574ba1 100%)">
                                <h3 class="card-title__custom">GÓI QUIZZ</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="card-heading-1">SOẠN DK Q</h2>
                                <h2 class="card-heading-1">GỬI 1009</h2>
                                <ul class="p-3">
                                    <li><p>Miễn phí 1 bộ 5 câu hỏi mỗi ngày</p></li>
                                    <li><p>Trả lời đúng 3/4/5 câu hỏi trúng ngay lập tức 5.000đ/10.000đ/20.000đ vào TKC</p></li>
                                    <li><p>Trả lời hết bộ câu hỏi miễn phí được phép mua thêm các bộ câu hỏi khác (tối đa 3 bô/ngàỵ)</p></li>
                                </ul>
                                @if (session()->get('_user')['msisdn'] !== 'empty')
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="pkg" value="Q">
                                        <input type="submit" class="btn-custom gradient-button gradient-button__Q" value="Đăng ký">
                                    </form>
{{--                                @else--}}
{{--                                    <a class="btn-custom gradient-button gradient-button__Q" href="sms:1009&body=DK%20Q" id="regQ">Đăng ký</a>--}}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 p-3">
                        <div class="card shadow" id="GTP">
                            <div class="card-header" style="background-image: linear-gradient(164deg, #ff7200 0%, #ffab00 59%)">
                                <h3 class="card-title__custom">GÓI TRIỆU PHÚ</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="card-heading-2">SOẠN DK TP</h2>
                                <h2 class="card-heading-2">GỬI 1009</h2>
                                <ul class="p-3">
                                    <li><p>Không có câu hỏi miễn phí, tham gia trả lời câu hỏi bằng cách mua lẻ</p></li>
                                    <li><p>Soạn <strong>MUA 5</strong> gửi 1009 để mua bộ câu hỏi. Cước phí 5.000đ/bộ 3 câu hỏi. Trả lời đúng cả 3 câu cộng ngay lập tức 10.000đ vào TKC</p></li>
                                    <li><p>Được phép mua lẻ tối đa 3 bộ/ngày</p></li>
                                </ul>
                                @if (session()->get('_user')['msisdn'] !== 'empty')
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="pkg" value="TP">
                                        <input type="submit" class="btn-custom gradient-button gradient-button__TP" value="Đăng ký">
                                    </form>
{{--                                @else--}}
{{--                                    <a class="btn-custom gradient-button gradient-button__TP" href="sms:1009&body=DK%20TP" id="regTP">Đăng ký</a>--}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-head__background">
                            <tr>
                                <th>STT</th>
                                <th>Nội dung</th>
                                <th>Loại gói</th>
                                <th>Cú pháp gửi 1009</th>
                                <th>Mức cước (VNĐ/ngày)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="2">1</td>
                                <td rowspan="2">Đăng ký gói</td>
                                <td>Gói Quizz</td>
                                <td><strong>DK Q</strong></td>
                                <td>5.000</td>
                            </tr>
                            <tr>
                                <td>Gói Triệu phú</td>
                                <td><strong>DK TP</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td rowspan="2">2</td>
                                <td rowspan="2">Hủy dịch vụ</td>
                                <td>Gói Quizz</td>
                                <td><strong>HUY Q</strong></td>
                                <td>Miễn phí</td>
                            </tr>
                            <tr>
                                <td>Gói Triệu phú</td>
                                <td><strong>HUY TP</strong></td>
                                <td>Miễn phí</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Mua lẻ</td>
                                <td><strong>MUA 5</strong>, <br><strong>MUA 10</strong>, <br><strong>MUA 20</strong>, <br><strong>MUA 30</strong>, <br><strong>MUA 40</strong>, <br>hoặc <strong>MUA 50</strong></td>
                                <td>5.000, <br>10.000, <br>20.000, <br>30.000, <br>40.000, <br>hoặc 50.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td colspan="2">Lấy hướng dẫn</td>
                                <td><strong>HD</strong> gửi 1009</td>
                                <td>Miễn phí</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td colspan="2">Truy vấn gói cước đang sử dụng</td>
                                <td><strong>KT</strong> gửi 1009</td>
                                <td>Miễn phí</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="luuy">
            <div class="container pb-5">
                <div class="d-flex justify-content-center pb-3 pt-3">
                    <h1 class="title-hd">LƯU Ý</h1>
                </div>
                <div class="row alert-content">
                    <div class="col-md-6 col-sm-12">
                        <div class="card alert-content__custom shadow tilt">
                            <div class="card-title">
                                <img src="{{ asset('assets/home/images/noti.png') }}" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <ul class="p-2">
                                    <li><p>Thời gian tham gia trả lời câu hỏi của dịch vụ: từ 6h đến 22h hằng ngày</p></li>
                                    <li><p>Thời gian trả lời câu hỏi được tính từ lúc hệ thống gửi câu hỏi (giờ ghi nhận trên hệ thống) và nhận được câu trả lời của thuê bao (giờ ghi nhận trên hệ thống). Mọi căn cứ lấy thời gian khác giờ ghi nhận trên hệ thống đều không được công nhận.</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 sol-sm-12">
                        <div class="card alert-content__custom shadow tilt">
                            <div class="card-title">
                                <img src="{{ asset('assets/home/images/alarm.png') }}" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <ul class="p-2">
                                    <li><p>Thuê bao chỉ có thể mua lẻ bộ câu hỏi mới khi hoàn thiện trả lời toàn bộ câu hỏi của gói Quizz hoặc bộ câu hỏi mua lẻ trước đó</p></li>
                                    <li><p>Bộ câu hỏi của khách hàng chỉ sử dụng trong ngày, sang ngày tiếp theo hệ thống sẽ phát bộ câu hỏi mới cho khách hàng. Số câu hỏi khách hàng chưa sử dụng sẽ không được bảo lưu.</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
