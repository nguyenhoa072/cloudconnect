@extends('layouts.app')

@section('content')

    @include('../pages/banner')

    <?php if (App::isLocale('vi')) { ?>

    <div class="container mb-5">
        <h2 class="text-center mt-5">CÁC CHÍNH SÁCH</h2>
        <h4 class="mt-5">I. Chính sách & Quy định chung</h4>
        <p>
            <i>FPT CLOUD CONNECT</i> là một giải pháp tiên tiến cho doanh nghiệp thông qua đường kết nối chuyên biệt đến các ứng
            dụng dịch vụ một cách đơn giản, hiệu quả và bảo mật, dựa trên các nhà cung cấp điện toán đám mây phổ biến nhất
            trên thị trường hiện nay. Dịch vụ thuộc sở hữu của Công ty Cổ phần Viễn thông FPT (FPT Telecom), một công ty đi
            đầu về ngành công nghệ viễn thông tại Việt Nam và khu vực. Website thương mại điện tử <i>https://cloudconnect.vn</i> do
            Công ty Cổ phần Viễn thông FPT làm chủ quản, với mục đích hỗ trợ khách hàng có thể thiết lập kết nối riêng giữa
            AWS, Azure, GCP... và môi trường trung tâm dữ liệu hoặc văn phòng, thường có thể dẫn đến chi phí mạng thấp hơn,
            tăng lượng băng thông và trải nghiệm mạng ổn định hơn so với kết nối Internet thông thường.
        </p>
        <ul class="list-unstyled ps-5">
            <li class="mb-4">
                <p class="mb-2"><strong>1. Chấp thuận các Điều kiện Sử dụng</strong></p>
                <p>
                    Khi quý khách truy cập vào trang web của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản được
                    nêu trên trang web. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Quy
                    định và Điều kiện sử dụng, vào bất cứ lúc nào, các thay đổi có hiệu lực ngay khi được đăng trên trang
                    web mà không cần thông báo trước. Quý khách vui lòng kiểm tra thường xuyên để cập nhật những thay đổi
                    của chúng tôi.
                </p>
            </li>
            <li>
                <p class="mb-2"><strong>2. Tính chất của thông tin hiển thị</strong></p>
                <p>
                    Các nội dung hiển thị trên website <i>https://cloudconnect.vn</i> nhằm mục đích cung cấp thông tin sản phẩm và
                    dịch vụ mà FPT đang cung cấp. Các thông tin khác liên quan nhằm phục vụ nhu cầu tìm hiểu của khách hàng
                    đều được ghi rõ nguồn cung cấp.
                </p>
            </li>
        </ul>
        <h4 class="mt-5">II. Quy định và hình thức thanh toán</h4>
        <p>Quý khách phải sử dụng hình thức chuyển khoản. Dưới đây là thông tin chuyển khoản của chúng tôi:</p>
        <ul class="ps-5">
            <li>Tên tài khoản: Công ty TNHH MTV Viễn thông Quốc tế FPT</li>
            <li>Số tài khoản: 007 1000 898 982</li>
            <li>Ngân hàng TMCP Ngoại thương Việt Nam - Chi nhánh TP.HCM</li>
        </ul>
        <h4 class="mt-5">III .Chính sách cài đặt dịch vụ</h4>
        <ul class="ps-5">
            <li>
                Cách 1: Khách hàng có thể trực tiếp tới email/hotline trên website <i>https://cloudconnect.vn</i> để đăng ký nhận
                thông tin dịch vụ.
            </li>
            <li>
                Cách 2: FPT sẽ gửi hợp đồng và thông tin triển khai và hỗ trợ khách hàng sử dụng dịch vụ <i>FPT CLOUD CONNECT</i>
            </li>
        </ul>
        <h4 class="mt-5">IV. Chính sách bảo hành, bảo trì</h4>
        <p>
            Dịch vụ chúng tôi cung cấp là dịch vụ sử dụng trực tuyến, nên không có chính sách này, chỉ cam kết chất lượng
            dịch vụ trong SLA.
        </p>
        <h4 class="mt-5">V. Chính sách hủy/trả và hoàn tiền</h4>
        <p>
            Khi Khách hàng bắt đầu đăng ký sử dụng dịch vụ <i>FPT CLOUD CONNECT</i> thì sẽ không được hủy, thay đổi hoặc hoàn tiền
            trong bất kỳ trường hợp nào.
        </p>
        <h4 class="mt-5">VI. Chính sách về bảo mật thông tin</h4>
        <p>
            Nhằm đảm bảo an toàn cho website và bảo mật thông tin cho khách hàng, <i>FPT CLOUD CONNECT</i> đưa ra một số chính sách
            bảo mật thông tin cho khách hàng cá nhân và tổ chức khi đăng ký mở tài khoản tại website
            <i>https://cloudconnect.vn</i>.
        </p>
        <p>
            Thuật ngữ “Bạn” được sử dụng dưới đây được thay thế cho khách hàng là cá nhân hay các tổ chức khi truy cập và sử
            dụng dịch vụ của website <i>https://cloudconnect.vn</i>.
        </p>
        <p>
            Chúng tôi có thể sửa đổi, cập nhật, bổ sung chính sách này vào mọi thời điểm. Bản sửa đổi có hiệu lực vào thời
            điểm chúng tôi cập nhật. Sau khi chính sách bảo mật được cập nhật, Bạn vẫn sử dụng website
            <i>https://cloudconnect.vn</i>. có nghĩa là Bạn đã hiểu và đồng ý với Chính sách bảo mật của <i>FPT CLOUD CONNECT</i>.
        </p>
        <ul class="list-unstyled ps-5">
            <li class="mb-4">
                <p class="mb-2"><strong>1. Mục đích thu thập thông tin </strong></p>
                <p>Việc thu thập thông tin qua website <i>https://cloudconnect.vn</i> sẽ giúp chúng tôi:</p>
                <ul>
                    <li>Ghi nhận thông tin đặt hàng nhằm giao hàng theo đúng yêu cầu từ khách hàng;</li>
                    <li>
                        Nhanh chóng cập nhật các chương trình khuyến mại, giảm giá... do <i>FPT CLOUD CONNECT</i> tổ chức cho khách
                        hàng;
                    </li>
                    <li>Hỗ trợ khách hàng khi có khiếu nại, ý kiến một cách nhanh nhất</li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>2. Phạm vi thu thập thông tin</strong></p>
                <p>Website <i>https://cloudconnect.vn</i> thu thập thông tin khách hàng bao gồm:</p>
                <ul>
                    <li>Họ và tên</li>
                    <li>Địa chỉ email</li>
                    <li>Điện thoại</li>
                    <li>Địa chỉ</li>
                    <li>Sản phẩm</li>
                    <li>Số lượng mua</li>
                    <li>Một số thông tin bổ sung (nếu có)</li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>3. Phạm vi sử dụng thông tin</strong></p>
                <p>
                    Chúng tôi rất coi trọng việc bảo mật thông tin khách hàng nên chúng tôi cam kết sẽ tuyệt đối không tự ý
                    sử dụng thông tin khách hàng với mục đích không mang lại lợi ích cho khách hàng, chúng tôi cam kết không
                    buôn bán, trao đổi thông tin bảo mật của khách hàng cho bất cứ bên thứ ba nào. Tuy nhiên, trong một số
                    trường hợp đặc biệt sau, chúng tôi có thể chia sẻ thông tin khách hàng một cách hợp lý khi:
                </p>
                <ul>
                    <li>Được sự đồng ý của khách hàng.</li>
                    <li>
                        Để bảo vệ quyền lợi của công ty và những đối tác của công ty: Chúng tôi chỉ đưa ra những thông tin
                        cá nhân của khách hàng khi chắc chắn rằng những thông tin đó có thể bảo vệ được quyền lợi, tài sản
                        của công ty chúng tôi và những đối tác liên quan. Những thông tin này sẽ được tiết lộ một cách hợp
                        pháp theo Pháp luật Việt Nam.
                    </li>
                    <li>Theo yêu cầu của những cơ quan chính phủ khi chúng tôi thấy nó phù hợp với pháp luật Việt Nam.</li>
                    <li>
                        Trong một số trường hợp cần thiết phải cung cấp thông tin khách hàng, như các chương trình khuyến
                        mại có sự tài trợ của một bên thứ ba chẳng hạn, chúng tôi sẽ thông báo cho quý khách hàng trước khi
                        thông tin của quý khách được chia sẻ. Quý khách có quyền quyết định xem có đồng ý chia sẻ thông tin
                        hoặc tham gia hay không.
                    </li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>4. Thời gian lưu trữ thông tin</strong></p>
                <p>
                    <i>FPT CLOUD CONNECT</i> sẽ lưu trữ các Thông tin cá nhân do Khách hàng cung cấp trên các hệ thống nội bộ của
                    chúng tôi trong quá trình cung cấp dịch vụ cho Khách hàng hoặc cho đến khi hoàn thành mục đích thu thập
                    hoặc khi Khách hàng có yêu cầu hủy các thông tin đã cung cấp.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>5. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</strong></p>
                <p class="mb-2">Công ty TNHH MTV Viễn thông Quốc tế FPT</p>
                <p class="mb-2">
                    Trụ sở chính: Lô L.29B-31B- 33B Đường Tân Thuận, Khu chế xuất Tân Thuận, phường Tân Thuận Đông, Quận 7,
                    TP.HCM, VN
                </p>
                <p class="mb-2">
                    Hotline: <a class="text-warning" href="tel:19006973"><strong>1900 6973</strong></a> &#151;
                    Cloud Connect Hotline: <a class="text-warning" href="tel:0907451357"><strong>090.745.1357</strong></a>
                </p>
                <p class="mb-0">
                    Email: <a class="text-warning"
                        href="mailto:fti.cloudconnect@fpt.com.vn"><strong>fti.cloudconnect@fpt.com.vn</strong></a>
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2">
                    <strong>6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</strong>
                </p>
                <p>
                    Khách hàng có thể thực hiện các quyền trên bằng cách tự truy cập vào website hoặc liên hệ với chúng tôi
                    qua email hoặc địa chỉ liên lạc được công bố trên website <i>https://cloudconnect.vn</i>.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>7. Cam kết bảo mật thông tin cá nhân khách hàng</strong></p>
                <p>
                    Chúng tôi cam kết bảo đảm an toàn thông tin cho khách hàng khi đăng ký thông tin cá nhân với chúng tôi.
                    Chúng tôi cam kết không trao đổi mua bán thông tin khách hàng vì mục đích thương mại và sẽ chỉ chia sẻ
                    và sử dụng thông tin khách hàng theo chính sách bảo mật của chúng tôi. Chúng tôi cam kết sẽ khiến khách
                    hàng cảm thấy tin tưởng và hài lòng về bảo mật thông tin cá nhân khi tham gia và sử dụng những dịch vụ
                    của công ty chúng tôi.
                </p>
                <ul>
                    <li>
                        Để bảo mật thông tin của khách hàng tốt nhất, chúng tôi khuyến cáo khách hàng hạn chế truy cập tài
                        khoản bằng đăng nhập tự động, chú ý chế độ sao ưu password và đảm bảo đăng xuất khỏi tài khoản khi
                        sử dụng máy tính chung để đăng nhập tài khoản trên website của chúng tôi. Chúng tôi sẽ không chịu
                        trách nhiệm khi những thông tin cá nhân của khách hàng bị rò rỉ vì những lý do trên.
                    </li>
                    <li>
                        Chính sách bảo mật chỉ áp dụng đối với những thông tin khách hàng đăng ký trên website
                        <i>https://cloudconnect.vn</i> của công ty chúng tôi. Mọi thông tin khách hàng đăng ký tại những website
                        hoặc những địa chỉ khác đều không thuộc phạm vi hiệu lực của Chính sách Bảo mật thông tin này.
                    </li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>8. Liên kết đến Website khác</strong></p>
                <p>
                    Website cung cấp một số liên kết tới trang Web hoặc nguồn dữ liệu khác. Quý khách tự chịu trách nhiệm
                    khi sử dụng các liên kết này. <i>FPT CLOUD CONNECT</i> không tiến hành thẩm định hay xác thực nội dung, tính
                    chính xác, quan điểm thể hiện tại các trang Web và nguồn dữ liệu liên kết này. <i>FPT CLOUD CONNECT</i> từ chối
                    bất cứ trách nhiệm pháp lý nào liên quan tới tính chính xác, nội dung thể hiện, mức độ an toàn và việc
                    cho hiển thị hay che đi các thông tin trên các trang Web và nguồn dữ liệu nói trên.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>9. Liên kết từ Website khác</strong></p>
                <p>
                    <i>FPT CLOUD CONNECT</i> không cho phép bất kỳ nhà cung cấp dịch vụ Internet nào được phép “đặt toàn bộ” hay
                    “nhúng” bất kỳ thành tố nào của Website này sang một trang khác hoặc sử dụng các kỹ thuật làm thay đổi
                    giao diện/ hiển thị mặc định của website <i>https://cloudconnect.vn</i> mà chưa có sự đồng ý của chúng tôi.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>10. Miễn trừ trách nhiệm</strong></p>
                <ul>
                    <li>
                        Thông tin hiển thị tại website này không đi kèm bất kỳ đảm bảo hay cam kết trách nhiệm từ phía FPT
                        CLOUD CONNECT về sự phù hợp của sản phẩm, dịch vụ mà khách hàng đã lựa chọn.
                    </li>
                    <li>
                        <i>FPT CLOUD CONNECT</i> từ chối trách nhiệm hay đưa ra đảm bảo rằng website sẽ không có lỗi vận hành, an
                        toàn, không bị gián đoạn hay tính chính xác, đầy đủ và đúng hạn của các thông tin hiển thị.
                    </li>
                    <li>
                        Khi truy cập vào website này, quý khách mặc nhiên đồng ý rằng <i>FPT CLOUD CONNECT</i>, các nhà cung cấp
                        khác cùng với đối tác liên kết, nhân viên của họ không chịu bất cứ trách nhiệm nào liên quan đến
                        thương tật, mất mát, khiếu kiện, thiệt hại trực tiếp hoặc gián tiếp do không lường trước hoặc do hậu
                        quả để lại dưới bất cứ hình thức nào phát sinh từ việc: (1) Sử dụng các thông tin trên website này;
                        (2) các truy cập kết nối từ website này; (3) Đăng ký thành viên, đăng ký nhận thư điện tử hay tham
                        gia vào chương trình khách hàng thường xuyên của <i>FPT CLOUD CONNECT</i>.
                    </li>
                    <li>Các điều kiện và hạn chế nêu trên chỉ có hiệu lực trong khuôn khổ pháp luật hiện hành.</li>
                </ul>
            </li>
        </ul>
    </div>

    <?php } if (App::isLocale('en')) { ?>

    <div class="container mb-5">
        <h2 class="text-center mt-5">POLICIES</h2>
        <h4 class="mt-5">I. Policies and General terms</h4>
        <p>
            <i>FPT CLOUD CONNECT</i> is the enhanced enterprise solution with completely private access to application services in
            a simple, effective, and secured manner, based on the most popular cloud services providers. The service is
            owned by FPT Telecom Joint Stock Company (FPT Telecom) – the leading company in telecommunications sector in
            Vietnam and its regions. Sales e-commerce website <i>https://cloudconnect.vn</i> belongs under control of FPT Telecom
            Joint Stock Company, whose purpose is to supply enterprises with private connectivity between AWS, Azure, GCP...
            and a datacenter, an office, or a colocation environment, which can benefit in lowering their network costs,
            increased bandwidth throughput, and a more consistent and stable network experience than Internet-based
            connections
        </p>
        <ul class="list-unstyled ps-5">
            <li class="mb-4">
                <p class="mb-2"><strong>1. Acceptance of Terms of Use</strong></p>
                <p>
                    At the time accessing to the website, it shall mean that customer accepts all of the terms presented
                    thereof. We keep the right to amend, supplement, complement or remove any parts in the Terms and
                    Conditions of this website at any time, such amendments therein shall come into effect right after being
                    uploaded without a prior notice. Customer is responsible to check such updates.
                </p>
            </li>
            <li>
                <p class="mb-2"><strong>
                        2. The nature of presented information
                    </strong></p>
                <p>
                    All contents presented on the website <i>https://cloudconnect.vn</i> is meant to provide information with
                    respect to products and services provided by FPT. Other related information which is served for
                    customer’s demand will be specified its source.
                </p>
            </li>
        </ul>
        <h4 class="mt-5">II. Terms and payment form</h4>
        <p>
            Customers have to use Bank Transfer method. Below is our Bank account information:
        </p>
        <ul class="ps-5">
            <li>Account name: FPT International Telecom Company Limited</li>
            <li>Account number: 007 1000 898 982</li>
            <li>Joint Stock Commercial Bank for Foreign Trade in Vietnam – HCMC Branch</li>
        </ul>
        <h4 class="mt-5">III. Terms for service installation</h4>
        <ul class="ps-5">
            <li>
                Option 1: Customer can contact via the hotline/email on the website <i>https://cloudconnect.vn</i> to receive the
                service information and service registration.
            </li>
            <li>
                Option 2: FPT will provide the contract and provide support in order to help customers to use the FPT Cloud
                Connect service.
            </li>
        </ul>
        <h4 class="mt-5">IV. Warranty and maintenance policy</h4>
        <p>
            The provided service is an online service, accordingly, no policies on warranty and maintenance are available.
            We guarantee the service quality set forth under the SLA.
        </p>
        <h4 class="mt-5">V. Cancellation, return and refund</h4>
        <p>
            After registering for <i>FPT CLOUD CONNECT</i> service, Customer shall not be allowed to cancel, change or be refunded
            in any circumstances.
        </p>
        <h4 class="mt-5">VI. Privacy policy</h4>
        <p>
            For the purpose of ensuring safety for the website and privacy of customer’s information, <i>FPT CLOUD CONNECT</i>
            regulates privacy policy applicable to individual customers and organizations when creating accounts on the
            website <i>https://cloudconnect.vn</i>.
        </p>
        <p>
            The term “You” used hereinafter refers to individual customers or organizations when accessing and using the
            service set forth on the website <i>https://cloudconnect.vn</i>.
        </p>
        <p>
            We keep the right to change, update, and supplement this policy at any time. The amended version shall come into
            effect at the time of an update. If You continue to use the website <i>https://cloudconnect.vn</i> following an update
            to the privacy policy, You signify that You understand and accept to be bound by the Privacy Policy of FPT CLOUD
            CONNECT.
        </p>
        <ul class="list-unstyled ps-5">
            <li class="mb-4">
                <p class="mb-2"><strong>1. Purpose of information collection </strong></p>
                <p>Collection of information via the website <i>https://cloudconnect.vn</i> helps us to:</p>
                <ul>
                    <li>Record the purchase order so as to deliver services satisfying customer’s request;</li>
                    <li>Instantly update promotions and discount programs and other marketing activities held by FPT CLOUD
                        CONNECT;</li>
                    <li>Assist customer in the fastest way possible in case of complaints and suggestions.</li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>2. Scope of information collection</strong></p>
                <p>The website <i>https://cloudconnect.vn</i> collects the following customer’s information:</p>
                <ul>
                    <li>Full name</li>
                    <li>Email address</li>
                    <li>Telephone</li>
                    <li>Address</li>
                    <li>Selected product</li>
                    <li>Quantity of order</li>
                    <li>Other information (if any)</li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>3. Scope of information use</strong></p>
                <p>
                    We understand that privacy and security are important to customer, for this reason, we commit not to use
                    customer’s information if such use does not benefit to the customer, we also guarantee that no sale,
                    exchange of customer’s confidential information to other third party is allowed. However, under some
                    special cases, we may reasonably share such customer’s information if:
                </p>
                <ul>
                    <li>Being approved by the customer.</li>
                    <li>To protect our company and company’s partners: We only disclose personal information of customer
                        after thorough and deliberate consideration that such information will help to protect benefits,
                        properties of our company and related partners. Such information shall be disclosed legally in
                        compliance with Vietnamese laws.</li>
                    <li>Being requested by regulatory authorities after our consideration that such request is legitimate in
                        accordance with Vietnamese laws.</li>
                    <li>Under some cases where provision of customer’s information is necessary, such as promotions
                        sponsored by the third party for example, we will inform customer before such customer’s information
                        is shared. Customer is entitled to decide to share such information or participate in programs or
                        not.</li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>4.Duration for information storage</strong></p>
                <p>
                    <i>FPT CLOUD CONNECT</i> will store all personal information provided by Customer in our internal system during
                    our service supply to Customer, or to the time we complete the purpose of information collection or
                    following a request from Customer to remove provided information.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2">
                    <strong>5. Address of the entity collecting and managing personal information:</strong>
                </p>
                <p class="mb-2">FPT International Telecom Company Limited</p>
                <p class="mb-2">
                    Head office: Lot L.29B-31B-33B Tan Thuan Road, Tan Thuan EPZ, Tan Thuan Dong Ward, District 7, HCMC, VN
                </p>
                <p class="mb-2">
                    Hotline: <a class="text-warning" href="tel:19006973"><strong>1900 6973</strong></a> &#151;
                    Cloud Connect Hotline: <a class="text-warning" href="tel:0907451357"><strong>090.745.1357</strong></a>
                </p>
                <p class="mb-0">
                    Email: <a class="text-warning"
                        href="mailto:fti.cloudconnect@fpt.com.vn"><strong>fti.cloudconnect@fpt.com.vn</strong></a>
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2">
                    <strong>Means and tools to access and edit personal data</strong>
                </p>
                <p>
                    Customer is able to perform aforementioned rights itself by accessing to the website or contacting us
                    via email or contact address available on the website <i>https://cloudconnect.vn</i>.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>7.Commitment on securing personal information</strong></p>
                <p>
                    We guarantee to ensure safety of information for our valued customers when such personal information is
                    registered. We guarantee that we shall not exchange customer’s information for business purposes. All
                    sharing and usage of such information must be in compliance with our privacy policy. We truly believe
                    that we will make customer reliable and satisfied with our privacy policy after engaging in and using
                    our services.
                </p>
                <ul>
                    <li>
                        To protect customer’s information on the highest level, we truly recommend that You should limit the
                        auto-signing in to account, notice to your password saving and ensure the signing out of account
                        after using a public computer to sign in to your account on our website. We shall not be liable for
                        personal data leaks due to such reasons thereof.
                    </li>
                    <li>
                        Privacy policy is only applicable to information which has been registered on our official website
                        <i>https://cloudconnect.vn</i>. Any registered information on other websites or addresses will not belong
                        to scope of Privacy Policy.
                    </li>
                </ul>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>8. Connection to other websites</strong></p>
                <p>
                    This website provides some links to other websites or resources. You shall be solely liable for using
                    such links. <i>FPT CLOUD CONNECT</i> assumes no obligation to evaluate or authenticate content, accuracy,
                    viewpoint presented on such websites and resources. <i>FPT CLOUD CONNECT</i> assumes no obligation with respect
                    to the accuracy, presented content, safety and displaying or hiding such information on websites and
                    resources thereof.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>9. Connection from other websites</strong></p>
                <p>
                    <i>FPT CLOUD CONNECT</i> will not give permission to any Internet service providers to “place” or “dip” any
                    parts of a website to another site or use technical measures to change the interface/ default display of
                    the website <i>https://cloudconnect.vn</i> without our prior consent.
                </p>
            </li>
            <li class="mb-4">
                <p class="mb-2"><strong>10. Exemption of liability</strong></p>
                <ul>
                    <li>Information presented on the website will not be ensured or assumed any liabilities by FPT CLOUD
                        CONNECT for the comfort of product, service chosen by customer.</li>
                    <li><i>FPT CLOUD CONNECT</i> refuses to take responsibility or ensure website is error-free, safe,
                        uninterrupted or ensure the accuracy, adequacy and timing of presented information.</li>
                    <li>By accessing to this website, customer is deemed to have agreed that <i>FPT CLOUD CONNECT</i> , other
                        providers together with their affiliates, employees shall not be liable for direct or indirect
                        injury, loss, lawsuit, damage due to unpredictability or consequence, in whatever forms, in relation
                        to: (1) Usage of information on this website; (2) Connectivity from the website; (3) Member
                        registration, registration for email receipt or participation in frequent customer program held by
                        <i>FPT CLOUD CONNECT</i> .</li>
                    <li>All conditions and limitations thereof are effective in accordance with current laws.</li>
                </ul>
            </li>
        </ul>
    </div>

    <?php } ?>

@endsection
