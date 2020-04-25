@extends('home.layout')
@section('title'){{ 'Chính sách' }} @endsection
@section('content')
    <div class="nav-bg" id="navbar">
        @include('home.layout.nav')
    </div>
    <div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="title-hd">CHÍNH SÁCH</h1>
            </div>
            <div  class="text-justify">
                <h4>I. CHÍNH SÁCH VÀ QUY ĐỊNH CHUNG</h4>
                <ol>
                    <li>Giới thiệu dịch vụ</li>
                    <p>- "Trở thành triệu phú" là một dịch vụ cung cấp nội dung thông tin trên mạng viễn thông dành cho
                        các khách hàng sử dụng thuê bao MobiFone do chúng tôi hợp tác thực hiện cùng MobiFone, được
                        triển khai trên mạng MobiFone. Khách hàng khi đăng ký gói cước theo cú pháp sẽ được cung cấp
                        thông tin tổng hợp trong nhiều lĩnh vực trong đó tập trung chủ yếu vào lĩnh vực Âm
                        nhạc. Khách hàng tham gia tìm hiểu kiến thức bằng cách trả lời các câu hỏi trắc
                        nghiệm và được tiếp nhận thông tin bằng đáp án được trả về thuê bao đăng ký sử dụng dịch vụ .
                        Dịch vụ “Trở thành triệu phú” được triển khai theo hình thức sau: </p>
                    <p>+ Hàng ngày, chúng tôi sẽ cung cấp thông tin tổng hợp trong nhiều lĩnh vực trong đó tập
                        trung chủ yếu vào lĩnh vực Âm nhạc bằng cách gửi những câu hỏi dưới dạng trắc nghiệm để
                        khách hàng tham gia trả lời. Sau đó, thông tin về đáp án sẽ được trả về thuê bao cho khách hàng
                        dưới dạng tin nhắn.</p>
                    <p>+ Khách hàng đăng ký nhận câu hỏi và thông tin đáp án hàng ngày bằng cách soạn tin nhắn với cú
                        pháp theo hướng dẫn. Ngoài ra, khi tham gia trả lời đúng, khách hàng có cơ hội nhận được các
                        phần quà hấp dẫn từ chương trình khuyến mại của chúng tôi.</p>
                    <li>
                        <p>Hướng dẫn sử dụng dịch vụ</p>
                        <ul>
                            <li>Các điều kiện giao dịch chung</li>
                            <p>- Chúng tôi cung cấp dịch vụ trên kênh: SMS.</p>
                            <p>- Để tham gia sử dụng dịch vụ Trở thành triệu phú, bạn chỉ cần đáp ứng các điều kiện sau
                                đây để có thể dễ dàng đăng ký sử dụng dịch vụ:</p>
                            <p>+ Thuê bao sử dụng đang hoạt động 2 chiều trên mạng MobiFone.</p>
                            <p>+ Người dùng soạn cú pháp đăng ký gói cước, gửi đến đầu số của dịch vụ (1009)</p>
                        </ul>
                    </li>
                </ol>
                <h4>II. CHÍNH SÁCH BẢO MẬT THÔNG TIN</h4>
                <ol>
                    <li>Mục đích thu thập thông tin cá nhân</li>
                    <p>Các thông tin thu thập thông qua website sẽ giúp chúng tôi:</p>
                    <ul>
                        <li>Thực hiện các giao dịch theo các đơn đặt hàng của Khách hàng, giới thiệu về dịch vụ, tính
                            năng mới của website, chăm sóc Khách hàng;
                        </li>
                        <li>Tính giá, cước sử dụng;</li>
                        <li>Giải quyết các thắc mắc hay khiếu nại phát sinh khi Khách hàng sử dụng dịch vụ</li>
                        <li>Ngăn chặn những hoạt động vi phạm pháp luật tại trothanhtrieuphu.vn</li>
                    </ul>
                    <li>Phạm vi sử dụng thông tin</li>
                    <ul>
                        <li>Để truy cập và sử dụng dịch vụ, quý khách sẽ được yêu cầu cung cấp cho chúng tôi thông tin
                            số thuê bao sử dụng dịch vụ và gói cước khách hàng sử dụng .
                        </li>
                        <li>Chúng tôi thu thập và sử dụng thông tin cá nhân quý khách với mục đích phù hợp và hoàn toàn
                            tuân thủ nội dung của “Chính sách bảo mật thông tin cá nhân” này.
                        </li>
                    </ul>
                    <li>Thời gian lưu trữ thông tin</li>
                    <ul>
                        <li>Khi khách hàng đăng ký sử dụng dịch vụ, thông tin khách hàng sẽ được hệ thống tự động lưu
                            trữ
                        </li>
                        <li>Khi khách hàng ngưng/hủy dịch vụ thông tin khách hàng sẽ được lưu trữ trong thời hạn 03
                            tháng kể từ ngày khách hàng ngưng/hủy.
                        </li>
                    </ul>
                    <li>Những người hoặc tổ chức có thể được tiếp cận với thông tin đó</li>
                    <p>Đối với các thông tin do chúng tôi thu thập từ khách hàng thông, chỉ có các cá nhân, tổ chức sau
                        có quyền tiếp cận thông tin:</p>
                    <ul>
                        <li>Chủ sở hữu website</li>
                        <li>Khách hàng là chủ sở hữu của thông tin đã cung cấp</li>
                        <li>Đơn vị viễn thông khi thực hiện trừ giá, cước sử dụng</li>
                        <li>Các cơ quan chức năng khi pháp luật có yêu cầu</li>
                    </ul>
                    <li>Địa chỉ của đơn vị thu thập và quản lý thông tin</li>
                    <ul>
                        <li><p>Chủ sở hữu website: Công ty cổ phần VANO</p></li>
                        <li><p>Giấy chứng nhận kinh doanh: 0103327293 cấp ngày 12/02/2009</p></li>
                        <li><p>Nơi cấp: phòng Đăng ký kinh doanh, sở kế hoạch đầu tư Thành phố Hà Nội</p></li>
                        <li><p>Địa chỉ: Tầng 2, tòa nhà VIMECO, Lô E9, Phạm Hùng, Cầu giấy, Hà Nội</p></li>
                        <li><p>Chịu trách nhiệm nội dung: Ông Nguyễn Thanh Hương</p></li>
                        <li><p>Thông tin liên hệ: 0247 106 0808</p></li>
                        <li><p>Email: cskh@vano.vn</p></li>
                    </ul>
                    <li>Phương thức để người tiêu dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</li>
                    <p>Khách hàng có thể cung cấp và chỉnh sửa thông tin của mình khi đăng ký sử dụng dịch vụ hoặc khi
                        gọi điện đến tổng đài chăm sóc khách hàng và làm theo hướng dẫn chi tiết của bộ phận chăm sóc
                        khách hàng</p>
                    <li>Cam kết bảo mật thông tin cá nhân khách hàng</li>
                    <ul>
                        <li>Thông tin cá nhân của khách hàng được ban quản trị website cam kết bảo mật tuyệt
                            đối theo chính sách bảo vệ thông tin cá nhân của chúng tôi. Việc thu thập và sử
                            dụng thông tin của mỗi khách hàng chỉ được thực hiện khi có sự đồng ý của
                            khách hàng đó trừ những trường hợp pháp luật có quy định khác
                        </li>
                        <li>Chúng tôi không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3
                            nào về thông tin cá nhân của khách hàng khi không có sự cho phép đồng ý từ
                            khách hàng.
                        </li>
                        <li>Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát
                            dữ liệu cá nhân khách hàng, ban quản trị trang web sẽ có trách nhiệm thông báo vụ
                            việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho khách hàng
                            được biết.
                        </li>
                        <li>Tuy nhiên do hạn chế về mặt kỹ thuật, không một dữ liệu nào có thể được truyền trên đường
                            truyền internet mà có thể được bảo mật 100%. Do vậy, chúng tôi không thể đưa ra một cam kết
                            chắc chắn rằng thông tin Khách hàng cung cấp sẽ được bảo mật một cách tuyệt đối an toàn, và
                            chúng tôi không thể chịu trách nhiệm trong trường hợp có sự truy cập trái phép thông tin cá
                            nhân của Khách hàng, như các trường hợp Khách hàng tự ý chia sẻ thông tin với người khác.
                        </li>
                    </ul>
                    <li>Cơ chế tiếp nhận và giải quyết khiếu nại của người tiêu dùng</li>
                    <ul>
                        <li>Trường hợp khách hàng phát hiện thông tin cá nhân cung cấp trên trang web có dấu hiệu bị rò
                            rỉ, bị sử dụng vào những mục đích khác với mục 1 hoặc có vi phạm pháp luật, vui lòng báo
                            ngay cho chúng tôi qua số điện thoại 02471060808 hoặc gửi thư vào địa chỉ gửi mail trực tiếp
                            đến hòm thư cskh@vano.vn.
                        </li>
                        <li>Chúng tôi sẽ tiến hành kiểm tra, rà soát lại việc lưu trữ và sử dụng thông tin trong thời
                            gian ngắn nhất. Ngay khi có kết luận, chúng tôi sẽ thông báo lại cho khách hàng. Nếu phát
                            hiện có vi phạm hoặc thông tin bị rò rỉ, chúng tôi sẽ khắc phục trong phạm vi quyền hạn và
                            trách nhiệm của mình. Trường hợp sự việc nằm ngoài khả năng của chúng tôi, chúng tôi sẽ cùng
                            khách hàng làm việc với các cơ quan chức năng để giải quyết.
                        </li>
                        <li>Trường hợp khách hàng không hài lòng với kết luận xử lý khiếu nại của chúng tôi, hai bên sẽ
                            cùng thương lượng để giải quyết. Trường hợp không thể thương lượng thì sự việc sẽ được đưa
                            ra các cơ quan chức năng để giải quyết theo quy định của pháp luật.
                        </li>
                        <li>Quý khách hàng vui lòng đọc kỹ các chính sách trên trang web để hiểu và đảm bảo đầy đủ quyền
                            lợi theo pháp luật của mình khi thực hiện giao dịch.
                        </li>
                    </ul>
                </ol>
                <h4>III. CHÍNH SÁCH THANH TOÁN</h4>
                <ul>
                    <li>Viêc thu phí dịch vụ của khách hàng được chúng tôi liên kết qua hệ thống mạng MobiFone dựa trên
                        hợp đồng hợp tác giữa chúng tôi với MobiFone. Giá cước được khách hàng thanh toán qua tài khoản
                        chính của thuê bao di động đăng ký sử dụng dịch vụ.
                    </li>
                    <li>Khách hàng nạp tiền vào tài khoản của thuê bao di động đăng ký sử dụng dịch vụ. Đến thời hạn
                        thanh toán, hệ thống sẽ tự động trừ tiền trong tài khoản của khách hàng. Trừ cước thành công
                        khách hàng sẽ được sử dụng dịch vụ.
                    </li>
                    <li>Giá cước các nội dung và gói dịch vụ trên trothanhtrieuphu.vn</li>
                </ul>
                <h4>IV. CHÍNH SÁCH CHUYỂN GIAO VÀ CÀI ĐẶT DỊCH VỤ</h4>
                <p>- Khi hệ thống nhận được lệnh đăng ký hợp lệ, hệ thống sẽ ngay lập tức ghi nhận chính sách thuê bao
                    được hưởng trên dịch vụ và thông báo về thuê bao khách hàng. Khách hàng được sử dụng dịch vụ chúng
                    tôi cung cấp ngay khi nhận được thông báo</p>
                <h4>V. CHÍNH SÁCH ĐỔI TRẢ VÀ HOÀN TIỀN</h4>
                <p>- Trong trường hợp giao dịch lỗi, hệ thống đã tiến hành trừ tiền thành công trong tài khoản của Khách
                    hàng mà Khách hàng không sử dụng được dịch vụ mà thuê bao đăng ký theo gói cước đã đăng ký, hệ thống
                    sẽ gửi lại nội dung hoặc bù lại số ngày sử dụng cho Khách hàng tương ứng với nội dung bị lỗi hoặc số
                    ngày bị gián đoạn sử dụng.</p>
            </div>
        </div>
    </div>
@endsection
