@extends('layouts.app')

@section('content')

    @include('../pages/banner')

    <?php if (App::isLocale('vi')) { ?>

    <div class="container mb-5">
        <h2 class="text-center mt-5">CHÍNH SÁCH BẢO MẬT THÔNG TIN</h2>
        <h4 class="mt-5">I. Mục đích thu thập thông tin</h4>
        <p>Trang web <i>https://cloudconnect.vn</i> sử dụng thông tin Người dùng cung cấp để:</p>
        <ul>
            <li>Cung cấp các dịch vụ đến Người dùng;</li>
            <li>Gửi các thông báo về các hoạt động trao đổi thông tin giữa Người dùng và trang web <i>https://cloudconnect.vn</i>;
            </li>
            <li>Ngừa các hoạt động phá hủy tài khoản người dùng của Người dùng hoặc các hoạt động giả mạo Người dùng;</li>
            <li>Liên lạc và giải quyết với Người dùng trong những trường hợp đặc biệt;</li>
            <li>Không sử dụng Thông tin cá nhân của Người dùng ngoài mục đích xác nhận và liên hệ có liên quan đến hoạt động
                tại trang web <i>https://cloudconnect.vn</i>;</li>
            <li>Trong trường hợp có yêu cầu của pháp luật: FPT có trách nhiệm hợp tác cung cấp Thông tin cá nhân Người dùng
                khi có yêu cầu từ cơ quan tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an điều tra liên quan đến
                hành vi vi phạm pháp luật nào đó của khách hàng. Ngoài ra, không ai có quyền xâm phạm vào Thông tin cá nhân
                của Người dùng.</li>
        </ul>
        <h4 class="mt-5">II. Phạm vi thu thập thông tin</h4>
        <ol>
            <li class="mb-3">Việc thu thập dữ liệu chủ yếu trên trang web <i>https://cloudconnect.vn</i> bao gồm: email,
                điện thoại, tên đăng
                nhập, mật khẩu đăng nhập, địa chỉ Người dùng. Đây là các thông tin mà FPT cần Người dùng cung cấp bắt buộc
                khi đăng ký sử dụng dịch vụ và để FPT liên hệ xác nhận khi Người dùng đăng ký sử dụng dịch vụ trên trang web
                nhằm đảm bảo quyền lợi cho cho chính Người dùng.</li>
            <li class="mb-3">Người dùng sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ
                dưới tên đăng ký, mật
                khẩu và hộp thư điện tử của mình. Ngoài ra, Người dùng có trách nhiệm thông báo kịp thời cho FPT về những
                hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có
                biện pháp giải quyết phù hợp.</li>
            <li class="mb-3">
                Khi tiến hành thu thập thông tin sẽ phải thông báo với Người dùng tham gia vào trang web:
                <ul>
                    <li class="mt-1">Trường hợp Người dùng đồng ý cung cấp thông tin: có thể tạo lập tài khoản cá
                        nhân để tham gia vào sử
                        dụng các tiện ích của trang web trong phạm vi theo thỏa thuận đã đồng ý khi tiến hành tạo lập tài
                        khoản.</li>
                    <li class="mt-1">Trường hợp Người dùng không đồng ý: không phát sinh quyền và nghĩa vụ đối với
                        trang web.</li>
                </ul>
            </li>
            <li class="mb-3">
                Thông tin nhận dạng cá nhân
                <ul>
                    <li class="mt-1">Trong quá trình sử dụng <i>FPT CLOUD CONNECT</i> của FPT, chúng tôi có thể yêu cầu
                        Người dùng cung cấp một
                        số thông tin nhận dạng cá nhân để liên lạc hoặc nhận dạng người dùng ("Thông tin cá nhân"). Thông
                        tin cá nhân có thể bao gồm, nhưng không giới hạn, tên của Người sử dụng, nước cư trú, địa chỉ
                        email và địa chỉ website.</li>
                </ul>
            </li>
            <li class="mb-3">
                Thông tin nhận dạng không mang tính cá nhân
                <ul>
                    <li class="mt-1">Khi Người dùng sử dụng <i>FPT CLOUD CONNECT</i> (cho dù sử dụng trên máy tính, điện
                        thoại, tivi thiết bị
                        kết nối internet, trên trang web hoặc trên trang web của một trong những đối tác của chúng tôi hoặc
                        bên thứ ba khác), chúng tôi thu thập thông tin liên quan đến việc Người dùng sử dụng FPT CLOUD
                        CONNECT và thông tin mà trình duyệt của chúng tôi gửi bất cứ khi nào Người dùng truy cập một trang
                        web hoặc dịch vụ trực tuyến, bao gồm, nhưng không giới hạn, địa chỉ Internet Protocol (IP) máy tính
                        của Người dùng, loại trình duyệt, trang web Người dùng đã ghé thăm trước đó, và các thông tin mà
                        Người dùng tìm kiếm.</li>
                    <li class="mt-1">Khi Người dùng sử dụng một tiện ích hoặc công cụ được đề nghị bởi chúng tôi,
                        cho dù trên máy tính,
                        điện thoại, tivi thiết bị kết nối internet, trên trang web hoặc trên một trang web của bên thứ ba,
                        bao gồm trang web thuộc sở hữu hoặc điều hành bởi Người dùng, chúng tôi có thể ghi lại các dữ liệu
                        liên quan đến hoạt động đó, việc sử dụng công cụ hoặc tiện ích hoặc bất kỳ tài khoản khác liên quan
                        đến dữ liệu.</li>
                    <li class="mt-1">Giống như nhiều trang web khác, chúng tôi sử dụng "cookies" để thu thập
                        thông tin. Mỗi cookie là
                        một tập tin dữ liệu nhỏ mà chúng tôi chuyển vào đĩa cứng máy tính của Người dùngvới mục đích lưu giữ
                        hồ sơ. Người dùng có thể trình duyệt, bằng cách lựa chọn trình duyệt, để ngăn chặn việc chấp nhận
                        cookie, hoặc để nhắc Người dùng trước khi chấp nhận một cookie từ website mà Người dùng truy cập
                        vào. Nếu Người dùng không chấp nhận cookie, tuy nhiên, Người dùng có thể không sử dụng tất cả các
                        phần của trang web hoặc tất cả các tính năng của <i>FPT CLOUD CONNECT</i>.</li>
                    <li class="mt-1">Chúng tôi có thể cung cấp các đường dẫn ở định dạng cho phép chúng tôi theo
                        dõi xem các đường dẫn.
                    </li>
                </ul>
            </li>
        </ol>
        <h4 class="mt-5">III. Phạm vi sử dụng thông tin</h4>
        <p>Chúng tôi có quyền tiết lộ bất cứ thông tin thu được bởi chúng tôi, bao gồm nhưng không giới hạn đến Thông tin
            nhận dạng Cá nhân và Thông tin nhận dạng Không mang tính Cá nhân, (i) theo quy định của pháp luật hoặc của cơ
            quan nhà nước; hoặc (ii) trong trường hợp khẩn cấp; hoặc (iii) cho pháp nhân kế thừa liên quan đến việc sáp
            nhập, mua lại, phá sản hoặc bán lại toàn bộ hoặc một phần tài sản đáng kể của chúng tôi. Thông tin của Người
            dùng có thể được xử lý hoặc chuyển ra khỏi Việt Nam, nơi mà luật bảo mật có thể không bảo vệ
            như luật bảo mật ở Việt Nam.</p>
        <h4 class="mt-5">IV. Thời gian lưu trữ thông tin</h4>
        <p>Dữ liệu cá nhân của Người dùng sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự Người dùng đăng nhập và thực
            hiện hủy bỏ. Còn lại trong mọi trường hợp Thông tin cá nhân Người dùng sẽ được bảo mật trên máy chủ của trang
            web <i>https://cloudconnect.vn</i>.</p>
        <h4 class="mt-5">V. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</h4>
        <p class="mb-2">Công ty TNHH MTV Viễn thông Quốc tế FPT</p>
        <p class="mb-2">Trụ sở chính: Lô L.29B-31B-33B đường Tân Thuận, KCX Tân Thuận, phường Tân Thuận Đông,
            Quận 7, TP.HCM, Việt
            Nam</p>
        <p>
            Hotline: <a class="text-warning" href="tel:19006973"><strong>1900 6973</strong></a> &#151;
            Cloud Connect Hotline: <a class="text-warning" href="tel:0907451357"><strong>090.745.1357</strong></a>
        </p>
        <h4 class="mt-5">
            VI. Phương tiện và công cụ để Người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình.
        </h4>
        <ol>
            <li class="mb-3">
                Người dùng có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ Thông tin cá nhân của mình bằng cách đăng
                nhập vào tài khoản và chỉnh sửa Thông tin cá nhân hoặc yêu cầu FPT thực hiện việc này.
            </li>
            <li>
                Người dùng có quyền gửi khiếu nại về việc lộ thông tin các nhân cho bên thứ 3 đến Ban quản trị của trang web
                <i>https://cloudconnect.vn</i>. Khi tiếp nhận những phản hồi này, FPT sẽ xác nhận lại thông tin, phải có trách
                nhiệm trả lời lý do và hướng dẫn Người dùng khôi phục và bảo mật lại thông tin.
                <ul>
                    <li class="mt-1">
                        Email liên hệ: <a class="text-warning"
                            href="mailto:fti.cloudconnect@fpt.com.vn"><strong>fti.cloudconnect@fpt.com.vn</strong></a>
                    </li>
                    <li class="mt-1">
                        Hotline: <a class="text-warning" href="tel:19006973"><strong>1900 6973</strong></a>
                    </li>
                </ul>
            </li>
        </ol>
        <h4 class="mt-5">VII. Cam kết</h4>
        <ol>
            <li class="mb-3">Thông tin cá nhân của Người dùng trên trang web <i>https://cloudconnect.vn</i> được FPT cam
                kết bảo mật tuyệt đối theo chính sách bảo vệ Thông tin cá nhân của <i>https://cloudconnect.vn</i>. Việc thu thập và
                sử dụng thông tin của mỗi Người dùng chỉ được thực hiện khi có sự đồng ý của Người dùng đó, trừ những trường
                hợp pháp luật có quy định khác.</li>
            <li class="mb-3">Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về Thông tin
                cá nhân của Người dùng khi không có sự cho phép đồng ý từ thành viên.</li>
            <li class="mb-3">Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu
                cá nhân thành viên, FPT sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và
                thông báo cho Người dùng được biết.</li>
            <li class="mb-3">Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Người dùng bao gồm thông tin
                hóa đơn kế toán, chứng từ số hóa tại khu vực dữ liệu trung tâm an toàn cấp 1 của <i>https://cloudconnect.vn</i>.
            </li>
            <li class="mb-3">Ban quản trị <i>https://cloudconnect.vn</i> yêu cầu các cá nhân khi đăng ký là Người dùng,
                phải cung cấp đầy đủ Thông tin cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, số chứng minh
                nhân dân, điện thoại … và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản trị
                <i>https://cloudconnect.vn</i> không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến
                quyền lợi của Người dùng đó nếu xét thấy tất cả Thông tin cá nhân của Người dùng đó cung cấp khi đăng ký ban
                đầu là không chính xác.</li>
            <li class="mb-3">Chúng tôi quan tâm đến việc bảo vệ thông tin của Người dùng. Chúng tôi sử dụng các
                biện pháp an toàn được thiết kế để bảo vệ thông tin của Người dùng từ việc truy cập và tiết lộ trái phép.
                Tuy nhiên, chúng tôi không thể bảo đảm rằng những Thông tin cá nhân của Người dùng hoặc các thông tin liên
                lạc riêng tư luôn riêng tư và an toàn.</li>
        </ol>
    </div>

    <?php } if (App::isLocale('en')) { ?>

    <div class="container mb-5">
        <h2 class="text-center mt-5">PRIVACY POLICY</h2>
        <h4 class="mt-5">I. Purposes of information collection</h4>
        <p>The website <i>https://cloudconnect.vn</i> uses the information of its User to:</p>
        <ul>
            <li>Provide Services to Users.</li>
            <li>Inform about the information exchange between Users and <i>https://cloudconnect.vn</i></li>
            <li>Prevent the damage of the user’s account or counterfeiting the Users.</li>
            <li>Contact and settle with Users in the special cases.</li>
            <li>We only use the individual information of Users to confirm or contact with you about the matters relating to
                the operation of <i>https://cloudconnect.vn</i>.</li>
            <li>Under the regulations of Vietnamese laws : <i>https://cloudconnect.vn</i> is responsible for providing the personal
                information of Users, under the request of the government authorities includes: the procuracies, courts,
                investigate agencies, relating to their violations against the laws. Except this regulation, noone has the
                right to infringe the personal information of Users.</li>
        </ul>
        <h4 class="mt-5">II. Scope of information collection</h4>
        <ol>
            <li class="mb-3">The datas of the collection on <i>https://cloudconnect.vn</i> which are mostly: email,
                phone, user’s name, password, address. These are the mandatory information which the Users shall provide to
                <i>https://cloudconnect.vn</i> when registering the Services and <i>https://cloudconnect.vn</i> uses them to confirm the
                User’s identity on website.</li>
            <li class="mb-3">The Users are responsible for keeping confidential information and storing all
                activities of Service use under their registered user, password and email. Futhermore, the Users are
                responsible for informing to <i>https://cloudconnect.vn</i> about the illegal use, misuse, violation of
                confidentiality, the storage on user’s name and password of the third parties in order to have prompt and
                appropriate solutions.</li>
            <li class="mb-3">
                In the information collection, we will inform Users as follows:
                <ul>
                    <li class="mt-1">In the case that User agrees to provide information: may create an account to
                        use the widgets of the <i>https://cloudconnect.vn</i> which mentioned in the scope of agreement before
                        creating the account.</li>
                    <li class="mt-1">In the case that User disagrees to provide information: there are not rights
                        and obligations between User and <i>https://cloudconnect.vn</i>.</li>
                </ul>
            </li>
            <li class="mb-3">
                Personally Identifiable Information:
                <ul>
                    <li class="mt-1">o In the course of using <i>FPT CLOUD CONNECT</i> of FPT, we might ask you to
                        provide us with certain personally identifiable information that can be used to contact or identify
                        you (“Personal Information”). Personal Information may include, but is not limited to, your name,
                        country of residence, email address and website address.</li>
                </ul>
            </li>
            <li class="mb-3">
                Non-Personally Identifiable Information:
                <ul>
                    <li class="mt-1">
                        When you use <i>FPT CLOUD CONNECT</i> (whether such use is performed on the computer, cellphone, TV, device
                        connected with Internet, on <i>https://cloudconnect.vn</i> and/or on a website of one of our partners or
                        other third parties), we collect information regarding your use of the Services of FPT CLOUD
                        CONNECT, and information that your browser sends whenever you visit a site or online service,
                        including, without limitation, your computer's Internet Protocol (IP) address, browser type, the web
                        page you were visiting before, and information for which you search.
                    </li>
                    <li class="mt-1">
                        When you use a widget or any other tool offered by us, whether on the computer, cellphone, TV,
                        device connected with Internet, on <i>https://cloudconnect.vn</i> and/or on a third party website,
                        including a website owned or operated by you, we may record data related to that activity, the
                        deployment of the widget or tool and any other account related data.
                    </li>
                    <li class="mt-1">
                        Like many websites, we use “cookies” to collect information. A cookie is a small data file that we
                        transfer to your computer's hard disk for record-keeping purposes. You can instruct your browser, by
                        changing its options, to stop accepting cookies or to prompt you before accepting a cookie from the
                        website you visit. If you do not accept cookies, you may limit use all portions of <i>FPT CLOUD CONNECT</i>
                        or all functionality of <i>FPT CLOUD CONNECT</i>.
                    </li>
                    <li class="mt-1">
                        We may present links in a format that enables us to keep track of whether these links have been
                        followed.
                    </li>
                </ul>
            </li>
        </ol>
        <h4 class="mt-5">III. Scope of information use</h4>
        <p>
            We reserve the right to disclose any information obtained by us, including but not limited to Personal
            Information and Non Personally Identifiable Information, (i) if required by law or by any governmental
            authority; or (ii) in case of emergency; or (iii) to a successor entity in connection with a merger,
            acquisition, bankruptcy or sale of all or substantially all of our assets. Your information may be processed or
            transferred outside of your state, where the privacy laws may not be as protective as those in your
            jurisdiction.
        </p>
        <h4 class="mt-5">IV. Duration of information storage</h4>
        <p>
            Personal Identifiable Information of User will be stored until there is a request of User’s its cancellation or
            the User logs in and cancel the storage by itself. In other cases, Personal Identifiable Information shall be
            kept confidential in the servers of <i>https://cloudconnect.vn</i>.
        </p>
        <h4 class="mt-5">
            V. Information of the entity which collects and manages Personal Identifiable Information
        </h4>
        <p class="mb-2">FPT International Telecom Company Limited</p>
        <p class="mb-2">Head Office: Lot L.29B-31B-33B Tan Thuan Street, Tan Thuan EPZ, Tan Thuan Dong Ward,
            District 7, HCMC, Vietnam</p>
        <p>
            Hotline: <a class="text-warning" href="tel:19006973"><strong>1900 6973</strong></a> &#151;
            Cloud Connect Hotline: <a class="text-warning" href="tel:0907451357"><strong>090.745.1357</strong></a>
        </p>
        <h4 class="mt-5">VI. Methods and tools for Users to access and edit their Personal Identifiable
            Information.
        </h4>
        <ol>
            <li class="mb-3">
                You has the rights to check, update, adjust or cancel the Personal Identifiable Information by logging to
                your account and edit the Personal Identifiable Information or asking <i>https://cloudconnect.vn</i> to do this.
            </li>
            <li>
                You has the right to appeal against the disclose of Personal Identifiable Information of third party to the
                Administration Board of <i>https://cloudconnect.vn</i>. Upon receiving this feedback, <i>https://cloudconnect.vn</i> shall
                confirm the information and be responsible for answering and providing guidance to restore and keep the
                confidential information again.
                <ul>
                    <li class="mt-1">
                        Email: <a class="text-warning"
                            href="mailto:fti.cloudconnect@fpt.com.vn"><strong>fti.cloudconnect@fpt.com.vn</strong></a>
                    </li>
                    <li class="mt-1">
                        Hotline: <a class="text-warning" href="tel:19006973"><strong>1900 6973</strong></a>
                    </li>
                </ul>
            </li>
        </ol>
        <h4 class="mt-5">VII. Commitment</h4>
        <ol>
            <li class="mb-3"><i>https://cloudconnect.vn</i> undertakes to keep confidential Personal Identifiable
                Information under the Privacy Policy of <i>https://cloudconnect.vn</i>. The information collection and use of each
                User is only performed with the consent of the Users, unless otherwise agreed by laws.</li>
            <li class="mb-3">Do not use, transfer, provide or disclose to third party about Personal Identifiable
                Information of User without the consent of User.</li>
            <li class="mb-3">In the case that the server of information storage is attacked by hacker and the
                personal datas of User is lost, <i>https://cloudconnect.vn</i> shall be responsible for promptly informing the
                matter to the competent government authorities to investigate and inform it to Users.</li>
            <li class="mb-3">Keep strictly confidential information of online transactions of Users, includes:
                invoice, digital documents in the area of data safety center level 1 of <i>https://cloudconnect.vn</i>.</li>
            <li class="mb-3">When User purchases the products, User shall be requested by Administration Board of
                <i>https://cloudconnect.vn</i> to provide personal information such as: name, contact, email, identity number,
                phone ... and be responsible for the legality of its information. Administration Board of
                <i>https://cloudconnect.vn</i> shall not be responsible for as well as not resolve the complaints relating to the
                rights of Users if the personal information provided by User that is not initially correct.</li>
            <li class="mb-3">We are concerned with safeguarding your information. We employ a variety of safety
                measures designed to protect your information from unauthorized access and disclosure. However, we cannot
                guarantee that your personal information or private communications will always remain private and secure.
            </li>
        </ol>
    </div>

    <?php } ?>

@endsection
