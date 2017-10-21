@extends('layouts.frontend')

@section('content')
    <main>
        <section>
            <div id="k-banner" class="clearfix k-height-header pc">
                <div class="container">
                    <div class="wrap-content col-md-10 col-md-offset-1 pd0">
                        <h1 class="title">Tìm khóa học bạn đang quan tâm</h1>
                        <form id="search-form-index" class="clearfix form-search" action="https://kyna.vn/danh-sach-khoa-hoc" method="get"> <input type="text" name="q" class="form-control" placeholder="Nhập từ khóa để tìm khóa học bạn cần">
                            <button class="btn btn-default" type="submit">
                                <i class="icon-search icon"></i>
                            </button>
                        </form>
                        <ul>
                            {{--@foreach($tags as $tag)--}}
                            {{--<li class="box">--}}
                                {{--<a href="{{$tag->link}}" title="{{$tag->name}}">--}}
                                    {{--{{$tag->name}} </a>--}}
                            {{--</li>--}}
                            {{--@endforeach--}}
                            <li class="box">
                                <a href="tag/tieng-anh.html" title="Tiếng Anh">
                                    Tiếng Anh </a>
                            </li>
                            <li class="box">
                                <a href="tag/nuoi-day-con.html" title="Nuôi Dạy Con">
                                    Nuôi Dạy Con </a>
                            </li>
                            <li class="box">
                                <a href="tag/facebook.html" title="Facebook">
                                    Facebook </a>
                            </li>
                            <li class="box">
                                <a href="tag/bat-dong-san.html" title="Bất động sản">
                                    Bất động sản </a>
                            </li>
                            <li class="box">
                                <a href="tag/monkey-junior.html" title="Monkey Junior">
                                    Monkey Junior </a>
                            </li>
                            <li class="box">
                                <a href="tag/tieng-hoa.html" title="Tiếng Hoa">
                                    Tiếng Hoa </a>
                            </li>
                            <li class="box">
                                <a href="tag/kinh-doanh.html" title="Kinh Doanh">
                                    Kinh Doanh </a>
                            </li>
                            <li class="box">
                                <a href="tag/be-hoc-toan.html" title="Phương pháp giúp Bé Học Toán nhanh và hiệu quả">
                                    bé học toán </a>
                            </li>
                            <li class="box">
                                <a href="tag/tieng-phap.html" title="Tiếng Pháp">
                                    Tiếng Pháp </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="k-slide">
                <div class="container">
                    <div class="owl-carousel">
                        <div class="box">
                            <div class="lg-banner col-md-8 col-xs-12">
                                @foreach($superBanners as $superBanner)
                                    <div class="item">
                                        <a href="{{$superBanner->link}}" target="_blank">
                                            <div class="info">
                                                <h5>
                                                </h5>
                                            </div>
                                            <div class="img-wrap">
                                                <img class="img-fluid" src="{{$superBanner->image}}" alt="{{$superBanner->name}}{{$superBanner->name}}" title="{{$superBanner->name}}"> </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="sm-banner col-md-4 col-xs-12">
                                @foreach($banners as $banner)
                                    <div class="item">
                                        <div class="inner">
                                            <a href="{{$banner->link}}" target="_blank" Thuyết phục & phản biện theo phong cách chuyên gia>
                                                <img class="img-fluid" src="{{$banner->image}}" alt="{{$banner->name}}" title="{{$banner->name}}"> </a>
                                            <div class="info">
                                                <h5>
                                                    <a href="{{$banner->link}}" target="_blank" Thuyết phục & phản biện theo phong cách chuyên gia>
                                                        {{$banner->name}} </a>
                                                </h5>
                                                {{$banner->subcriptions}} người đăng ký </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="owl-buttons-custom hidden-xs-up">
                        <div class="owl-prev">
                            <img src="img/home/arrow-left.png" class="arrow-left icon">
                        </div>
                        <div class="owl-next">
                            <img src="img/home/arrow-right.png" class="arrow-right icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div id="k-highlights" class="container">
                <h2 class="title">Khóa học nổi bật cho bạn</h2>
                <ul class="clearfix k-box-card-list">
                    @foreach($onlineCourses->get() as $key => $onlineCourse)
                        <li class="col-xl-3 col-lg-4 col-md-6 col-xs-12 k-box-card" data-key="{{$key}}">
                            <div class="k-box-card-wrap">
                                <div class="img">

                                    <img class="img-fluid"
                                         src="{{$onlineCourse->image}}"
                                         alt="{{$onlineCourse->title}}"
                                         title="{{$onlineCourse->title}}">
                                    @if($onlineCourse->cost_sale > 0)
                                        <div class="label-wrap">
                                            <span class="lb-discount">- {{$onlineCourse->cost_sale}}%</span>
                                        </div>
                                    @endif
                                    <span class="time">{{$onlineCourse->duration}}</span>
                                    <span class="background-detail">
                                            <span class="wrap-position">
                                                <div class="inner">
                                                    <a href="{{route('onlineCourses.show', $onlineCourse->slug)}}" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                                    <a href="{{route('onlineCourses.show', $onlineCourse->slug)}}" class="view-detail">Xem chi tiết</a>
                                                </div>
                                            </span>
                                        </span>
                                </div>
                                <div class="content">
                                    <div class="rating-box clearfix">
                                        <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
                                        <div class="rating-text">0 <i class="icon icon-star"></i> <span>(0<detail> đánh giá</detail>)</span></div>
                                        <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
                                        <div class="number-student"><img src="/frontend/img/icon-user-circle.png" alt=""> <span>{{$subcriber_collection->get($onlineCourse->id)}} học viên<detail> đăng ký học</detail></span></div>
                                    </div>
                                    <h4>{{$onlineCourse->title}}</h4>
                                    <span class="author pc">{!! getTeachers($onlineCourse) !!}</span></span>
                                </div>
                                <div class="view-price">
                                    <ul>
                                        @if($onlineCourse->cost_sale > 0)
                                            <li class="sale"><span>{{number_format($onlineCourse->cost, 0, '', '.')}} đ</span></li>
                                            <li class="price"><strong>{{number_format($onlineCourse->cost - ($onlineCourse->cost_sale/100)*$onlineCourse->cost, 0, '', '.')}} đ</strong>
                                        @else
                                            <li class="sale"><span></span></li>
                                            @if ($onlineCourse->cost == 0)
                                                <li class="price"><strong>Miễn phí</strong>
                                            @else
                                                <li class="price"><strong>{{number_format($onlineCourse->cost, 0, '', '.')}} đ</strong>
                                                    @endif
                                                    @endif
                                                </li>
                                    </ul>
                                </div>
                                <a href="{{route('onlineCourses.show', $onlineCourse->slug)}}" class="link-wrap" data-ajax
                                   data-toggle="popup" data-target="#modal"></a>
                            </div>
                            <a href="{{route('onlineCourses.show', $onlineCourse->slug)}}" class="card-popup" data-ajax
                               data-toggle="popup" data-target="#modal"></a>
                        </li>
                    @endforeach
                </ul>
                <span class="button-more">
                    <a href="danh-sach-khoa-hoc" class="btn btn-primary-kyna">Xem tất cả khóa học</a>
                </span>
            </div>
        </section>
        <section>
            <div id="k-supply-list" class="pc">
                <div class="container k-supply-list-wrap">
                    <div class="k-supply-list-inner col-lg-10 col-lg-offset-1 col-sm-12">
                        <h2 class="title">Danh mục khóa học đang cung cấp</h2>
                        <div class="k-supply-list-box clearfix">
                            <ul>
                                @foreach($onlineCourseCategories as $onlineCourseCategory)
                                    <li>
                                        <form action='{{route('onlineCourses.index')}}' method='get' name='onlineCateroryForm-{{$onlineCourseCategory->id}}'>
                                            <input type="hidden" name="category" value="{{$onlineCourseCategory->slug}}">

                                        </form>
                                    <li>
                                        <a class="nav-link"  onclick='document.forms["onlineCateroryForm-{{$onlineCourseCategory->id}}"].submit();' return false; title="Marketing - Truyền thông">
                                            <span class="text">{{$onlineCourseCategory->name}}</span>
                                            <span class="icon marketing-truyen-thong"></span>
                                        </a>
                                    </li>
                                @endforeach
                                    {{--<a href="danh-sach-khoa-hoc/ky-nang-cho-be.html" title="Kỹ năng cho bé">--}}
                                        {{--<span class="text">Kỹ năng cho bé</span>--}}
                                        {{--<span class="icon ky-nang-cho-be"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li>
                                    <span>
                                        <a href="danh-sach-khoa-hoc.html" class="title button">
                                        Xem tất cả
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="k-about-us" class="clearfix pc">
                <div class="col-lg-6 col-md-12 col-xs-12 k-about-us-background"></div>
                <div class="container">
                    <div class="col-lg-6 col-md-12 col-xs-12 k-about-us-why">
                        <h2 class="title">Tại sao nên chọn Kyna?</h2>
                        <ul>
                            <li>
                                <span class="icon">
                                <img src="https://media.kyna.vn/src/img/home/hoc-cung-chuyen-gia.svg" alt="Học cùng chuyên gia" class="img-fluid">
                                </span>
                                <span class="text">
                                <span>Học cùng chuyên gia: </span>
                                Tương tác với chuyên gia, nhận sự trợ giúp từ chuyên gia.
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                <img src="https://media.kyna.vn/src/img/home/hoc-mai-mai.svg" alt="Thanh toán một lần" class="img-fluid">
                                </span>
                                <span class="text">
                                <span>Thanh toán một lần: </span>
                                Phương thức thanh toán linh hoạt, thanh toán một lần sở hữu bài học mãi mãi.
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                <img src="https://media.kyna.vn/src/img/home/hoc-moi-noi.svg" alt="Mọi lúc mọi nơi" class="img-fluid">
                                </span>
                                <span class="text">
                                <span>Mọi lúc mọi nơi: </span>
                                Học mọi lúc mọi nơi qua điện thoại, máy tính, ipad có kết nối Internet.
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                <img src="https://media.kyna.vn/src/img/home/hoan-tien.svg" alt="Cam kết hoàn tiền" class="img-fluid">
                                </span>
                                <span class="text">
                                <span>Cam kết hoàn tiền: </span>
                                Học viên được hoàn tiền học phí nếu thấy khóa học không hiệu quả.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 k-about-us-comment">
                        <h2 class="title">Học viên nói về chúng tôi</h2>
                        <div class="k-about-us-slide">
                            <ul>
                                <li>
                                    <div class="k-about-us-customer clearfix">
                                        <div class="col-md-4 col-xs-12 img">
                                            <img src="img/home/lechinhdoan.png" alt="Lê Chính Đoan" class="img-fluid"/>
                                        </div>
                                        <div class="col-md-8 col-xs-12 text">
                                            <span>Chị Lê Chính Đoan (Tp.HCM)</span>
                                            <span>Học viên khóa học Cho con ăn đúng cách</span>
                                        </div>
                                    </div>
                                    <p>Dù đã có kinh nghiệm nuôi dạy con nhưng chị vẫn tham gia khóa học Cho con ăn đúng cách trên Kyna. Sau đó, chị nhận ra rằng chính quan điểm nuôi con sau lầm của ba mẹ chính là điều cản trở lớn nhất cho sự phát triển của con. Ba mẹ thường hay so sánh con mình và con hàng xóm mà quên mất rằng mỗi đứa con là một người có cơ địa và tính cách hoàn toàn khác nhau. Đã vậy, ba mẹ lại còn lo lắng quá mức trong từng bữa ăn của con. Chính những điều đó đã tạo nên một áp lực vô hình cho cả ba mẹ và con. Ba mẹ cứ lo sợ bữa ăn còn con thì phải chịu những giờ ăn cực hình.</p>
                                </li>
                                <li>
                                    <div class="k-about-us-customer clearfix">
                                        <div class="col-md-4 col-xs-12 img">
                                            <img src="img/home/nguyenxuanxanh.png" alt="Nguyễn Xuân Xanh" class="img-fluid"/>
                                        </div>
                                        <div class="col-md-8 col-xs-12 text">
                                            <span>Nguyễn Xuân Xanh (Đồng Nai)</span>
                                            <span>Học viên khóa học Trở thành chiến binh Sale</span>
                                        </div>
                                    </div>
                                    <p>Bài học về sự nhượng bộ và cam kết mà anh Seb Trần chia sẻ trong khóa học Kỹ năng Sale khiến tôi vô cùng tâm đắc. Tôi nhận ra rằng việc bị khách hàng từ chối vẫn chưa phải là điểm chấm hết của quá trình bán hàng và cả cách làm sao để bán hàng được mức giá mà mình mong muốn. Các tình huống thực tế, kinh nghiệm trong nghề mà anh Seb Trần chia sẻ rất hữu ích với những khó khăn trong công việc mà tôi gặp phải. Tôi cảm ơn anh Seb Trần rất nhiều vì những kiến thức và kinh nghiệm ấy.</p>
                                </li>
                                <li>
                                    <div class="k-about-us-customer clearfix">
                                        <div class="col-md-4 col-xs-12 img">
                                            <img src="img/home/nguyentrananhkim.png" alt="Nguyễn Trần Ánh Kim" class="img-fluid"/>
                                        </div>
                                        <div class="col-md-8 col-xs-12 text">
                                            <span>Nguyễn Trần Ánh Kim (Đà Nẵng)</span>
                                            <span>Học viên khóa Trở thành Digital Marketer chuyên nghiệp</span>
                                        </div>
                                    </div>
                                    <p>Kim biết đến Kyna qua chiến dịch Học không giới hạn. Rồi Kim vô tình tham gia vào khóa Trở thành Digital Marketer chuyên nghiệp. Kyna làm Kim bất ngờ vô cùng khi một trang học Online có thể biên tập một bộ khóa học chuyên nghiệp và có nội dung chặt chẽ đến như vậy. Khóa gồm 5 thầy, mỗi thầy dạy một mảng khác nhau. Nội dung được cập nhật theo xu hướng Digital Marketing mới nhất và rất nhiều chia sẻ kinh nghiệm của các thầy nữa. Kim đã có được một bước bắt đầu tuyệt vời với khóa này. Đồng thời khi làm nghề cứ thắc mắc hay khó hiểu chỗ nào là Kim lại mở khóa học lên xem lại để kiểm tra xem mình có đang làm đúng hay không.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="k-teaching-kyna" class="pc">
                <div class="container k-teaching-kyna-wrap">
                    <h2>Tham gia giảng dạy tại Kyna</h2>
                    <a href="p/kyna/hop-tac-giang-day-online.html" class="button btn">Tìm hiểu thêm</a>
                    <img src="img/home/home-giangvien.png" alt="Tham gia giảng dạy tại Kyna" class="img-fluid">
                </div>
            </div>
            <div class="clearfix k-teaching mb">
                <div class="col-xs-5 img">
                    <img src="img/mobile/teaching.png" alt=""/>
                </div>
                <div class="col-xs-7 text">
                    <a href="p/kyna/gioi-thieu.html" class="btn">Giới thiệu về Kyna</a>
                </div>
            </div>
        </section>
        <script type="text/javascript">jQuery(document).ready(function($){$(document).on('shown.bs.modal',"#modal",function(){setTimeout(function(){FB.XFBML.parse();},2000);});});$zopim(function(){$zopim.livechat.window.onShow(function(){$('#feedback').css('bottom','450px');});$zopim.livechat.window.onHide(function(){$('#feedback').css('bottom','40px');})});</script>
    </main>
@endsection

