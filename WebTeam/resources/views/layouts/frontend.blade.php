<!DOCTYPE HTML>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--THIẾT LẬP CẤU HÌNH CSRF--}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>HỌC TRỰC TUYẾN</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="robots" content="index,follow">
    <meta name="google-site-verification" content="JQvj84cgEFSsi0_LRfTN39yKNQ5ZogkvSUw9bcQR_t0">
    <meta property="fb:app_id" content="191634267692814">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <link href="" rel="canonical">


    <link type="text/css"  href="/frontend/css/custom.css" rel="stylesheet">
    <link type="text/css"  href="/frontend/css/feedback.css" rel="stylesheet">
    <link type="text/css" href="/frontend/css/main.min.css?version=1502076361" rel="stylesheet">
    <link type="text/css" href="/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="/frontend/css/owl.carousel.css" rel="stylesheet">
    <link type="text/css" href="/frontend/css/owl.theme.css" rel="stylesheet">
    <link type="text/css" href="/frontend/css/owl.transitions.css" rel="stylesheet">
    <link href="/frontend/css/jquery.fancybox.css" rel="stylesheet">

    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/yii.js"></script>
    <script src="/frontend/js/bootbox.js"></script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "url": "",
        "contactPoint": [
            {
                "@type": "",
                "telephone": "",
                "contactType": ""
            }
        ]
    }
    </script>

    <link rel="icon" href="/frontend/favo_ico.png">
    <script type="text/javascript">var mediaBaseUrl='http://hoctructuyen.vn/';</script>
</head>

<body>
    @include('layouts.frontend.top-banner')
    @include('layouts.frontend.header')
    <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='https://www.visitlisboa.com/themes/lisbon/images/demo/plan/timer.gif' width="64" height="64" /><br>Loading..</div>
    @yield('content')

    @include('layouts.frontend.footer')

    {{--FEEDBACK--}}
    <div id="k-wrap-feedback">
        <div id="k-feedback">
            <div class="box-k-feedback">
                <h2>Góp ý cho Kyna.vn<span class="icon-out-feedback">-</span></h2>
                <form action="#" data-type="multiple" id="landing-page-id" name="landing-page-id" method="post" accept-charset="utf-8">
                    <div class="form-group input input-phone">
                        <input type="number" class="form-control" name="phone" id="feedback-phone" placeholder="Số điện thoại*" required="">
                        <span>Số điện thoại*</span>
                    </div>
                    <div class="form-group input input-email">
                        <input type="email" class=" form-control" name="email" id="feedback-email" placeholder="Email*" required="">
                        <span>Email*</span>
                    </div>
                    <h3>Bạn có sẵn sàng giới thiệu Kyna.vn với người thân và bạn bè?</h3>
                    <ul>
                        <li>
                            <input type="radio" id="feedback-ss" name="feedback-radio" value="Sẵn sàng" data-value="Sẵn sàng" checked>
                            <label for="feedback-ss">Sẵn sàng</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="feedback-ct" name="feedback-radio" value="Có thể" data-value="Có thể">
                            <label for="feedback-ct">Có thể</label>
                            <div class="check">
                                <div class="inside"></div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" id="feedback-k" name="feedback-radio" value="Không" data-value="Không">
                            <label for="feedback-k">Không</label>
                            <div class="check">
                                <div class="inside"></div>
                            </div>
                        </li>
                    </ul>
                    <h3>Bạn có góp ý gì về phiên bản mới của Kyna.vn?</h3>
                    <textarea cols="50" id="feedback-textarea" placeholder="Bạn có thể góp ý về cả giao diện, nội dung các lĩnh vực bạn muốn có thêm trên Kyna.vn"></textarea>
                    <p class="error"></p>
                    <button type="submit" class="btn-box-register">GỬI GÓP Ý</button>
                </form>
            </div>
        </div>
        <div id="k-feedback-button">
            <img src="/frontend/img/pen.png" alt="">
            <div>GÓP Ý</div>
        </div>
        <div id="k-feedback-result">
            <h2>Góp ý cho Kyna.vn<span class="icon-out-feedback">-</span></h2>
            <div class="box-result">
                <div class="text">Cảm ơn bạn đã đóng góp ý kiến cho Kyna. Chúc bạn một ngày học tập và làm việc nhiều năng lượng.</div>
                <button type="submit" class="btn-box-register btn-result">ĐÓNG</button>
            </div>
        </div>
    </div>

    <script>var countCart=0;var sendData=true;</script>
    <script src="/backend/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>

    <script src="/frontend/js/popup-get-user-info.js"></script>
    <script src="/frontend/js/jquery-ui.js"></script>
    <script src="/frontend/js/autocomplete.js"></script>

    <script src="/frontend/js/feedback.js"></script>

    <script src="/frontend/js/add-to-cart.js"></script>
    <script src="/frontend/js/course-pop-up.js"></script>

    <script src="/frontend/js/yii.activeForm.js"></script>

    <script src="/frontend/js/tether.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>

    <script src="/frontend/js/offpage.js"></script>
    <script src="/frontend/js/main.js"></script>
    <script src="/frontend/js/details.js"></script>
    <script src="/frontend/js/ajax-caller.js"></script>

    <!-- <script src="js/push-notification/firebase21b8.js?v=4.1.3"></script>
    <script src="js/push-notification/push-notification-main051f.js?v=1501782491"></script> -->

    <script src="/frontend/js/js_cookie.js?v=123432123"></script>
    <script src="/frontend/js/jquery.fancybox_home80c6.js?v=166437739"></script>

    <script src="/services/frontend_app_services.js" type="text/javascript"></script>


    <script type="text/javascript">;(function($){if($('#topbar').length>0){var imgHeight=$('#topbar').find('img:visible').height();var LISTING_MARGIN_TOP=67;$('.k-header-wrap').css('top',imgHeight+'px');$('#k-listing').css('marginTop',LISTING_MARGIN_TOP+imgHeight+'px');}$('body').on('submit','#profile-form',function(e){e.preventDefault();var url=$(this).attr('action');var form=$(e.target);console.log(form);console.log(form.parent());$.post(url,form.serialize(),function(res){form.parents('.k-profile-edit-content').html(res);});});$('body').on('submit','#active-cod-form',function(e){e.preventDefault();var url=$(this).attr('action');var form=$(e.target);$.post(url,form.serialize(),function(res){form.parent().html(res);});});})(jQuery);</script>
    <script type="text/javascript">jQuery(document).ready(function(){jQuery('#search-form-index').yiiActiveForm([],[]);jQuery('#search-form').yiiActiveForm([],[]);});</script>
    @yield('scripts')
</body>
</html>