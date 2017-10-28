<!DOCTYPE html>

<html>
<head>

    <!-- Website Title & Description for Search Engine purposes -->
    <title>HomePage</title>
    <meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">

    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="includes/css/styles.css">
    <link rel="stylesheet" href="includes/css/responsive.css">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Include Modernizr in the head, before any other Javascript -->
    <script src="includes/js/modernizr-2.6.2.min.js"></script>

</head>
<body>

<<header>


    <div class="navbar navbar-fixed-top">
        <div class="container">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand hidden-lg" href="/"><img src="images/logo.png" alt="Your Logo"></a>

            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Trang chủ</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Giới thiệu <strong class="caret"></strong></a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Hệ thống</a>
                            </li>

                            <li>
                                <a href="#">Sản phẩm</a>
                            </li>

                            <li>
                                <a href="#">Con người</a>
                            </li>

                        </ul><!-- end dropdown-menu -->
                    </li>

                    <li class="">
                        <a href="#">Nhận Website miễn phí</a>
                    </li>

                    <li class="">
                        <a href="#">Đặt làm Website</a>
                    </li>

                    <li class="">
                        <a href="#">Tư vấn miễn phí</a>
                    </li>

                    <li class="">
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form pull-right">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm..." id="searchInput">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form><!-- end navbar-form -->

                <ul class="nav navbar-nav pull-right hidden-lg hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
                            </li>

                            <li>
                                <a href="#"><span class="glyphicon glyphicon-refresh"></span> Update Profile</a>
                            </li>

                            <li>
                                <a href="#"><span class="glyphicon glyphicon-briefcase"></span> Billing</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#"><span class="glyphicon glyphicon-off"></span> Sign out</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- end nav pull-right -->
            </div><!-- end nav-collapse -->

        </div><!-- end container -->
    </div><!-- end navbar -->


    <div class="col-sm-12 form-search">
        <div class="col-sm-7 form-text">
            <a href="">Haychontoi.com</a>
            <p>Bước đệm cho sự thành công và bền vững</p>
        </div>

        <div class="col-sm-4 form-contact">
            <div class="col-sm-12 text-phone">
                <p>Liên hệ với chúng tôi qua</p>
                <p>HOTLINE: <strong>091234567</strong></p>
            </div>
        </div>
    </div>
</header><!-- /header -->

<section>
    <div class="main-product">
        <div class="container">
            <div class="row">
                <div class="details-news">
                    <div class="categoty-info">
                        <ul class="breadcrumb details-category">
                            <li><a href="">Trang chủ</a></li>
                            <li>Sản phẩm</li>
                            <li class="active">Website Tin tức</li>
                        </ul>
                    </div>
                    <div class="details-product">
                        <div class="col-sm-4">
                            <div class="details-product-img">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-responsive" src="img/giay.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-demo-1">
                                    <a href="">XEM WEBSITE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="content-product">
                                <div class="content-title">
                                    <h4>Website Tin tức</h4>
                                    <a href="">Mã sản phẩm: <strong>01234</strong></a>
                                </div>
                                <div class="content-category">
                                    <ul>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Quản trị web: Thiết kế tuỳ biến cực dễ quản trị (Tích hợp các tiện ích web tự công ty xây dựng cho khách hàng)
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Quản trị web: Thiết kế tuỳ biến cực dễ quản trị (Tích hợp các tiện ích web tự công ty xây dựng cho khách hàng)
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Tích hợp phần mềm chát online: Có (Tặng kèm có thể nhiều nick chát cùng lúc).
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Bảo mật mã nguồn chống HACK: có (bảo mật MD5 không có chế độ giải mã ngược lại)
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Tích hợp phần mềm chát online: Có (Tặng kèm có thể nhiều nick chát cùng lúc).
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Thiết kế chuẩn SEO Google 100%: Có (Chuẩn tiêu chí SEOquake)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 form-info-item">
            <h2 class="title text-center">Website cùng lĩnh vực</h2>
            <!--Box-item1-->
            <div class="col-sm-12">
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/giay.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/mypham.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/dochoi.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
            </div>
            <!--Box-item1-->
            <div class="col-sm-12">
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/giay.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/mypham.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/dochoi.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
            </div>
            <!--Box-item1-->
            <div class="col-sm-12">
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/giay.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/mypham.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
                <!--ITEM1-->
                <div class="col-sm-4 form-item">
                    <div class="col-sm-12 hovereffect">
                        <img class="img-responsive" src="img/dochoi.jpg" alt="">
                        <div class="overlay">
                            <div class="box-demo-info">
                                <h2>
                                    <button type="">Xem Demo</button>
                                </h2>
                                <h2 class="btn-info1">
                                    <button type="">Xem Chi Tiết</button>
                                </h2>
                            </div>
                            <p class="icon-links icon-contacts1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 item-info">
                        <a href="">
                            <span>Giá: <strong>1.000.000 đ</strong></span>
                            <h3>Mẫu Website Shop Bán Giày </h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="view-more">
                <button> Xem thêm <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="col-sm-12 box-footer">
        <div class="contacts-more-info">
            <div class="container">
                <div class="row">
                    <div class="center-text-title team-titile">
                        <h4>Đội ngũ của Team Maru với tiêu chí làm trên mong đợi của khách hàng!</h4>
                    </div>
                    <div class="team-img">
                        <img src="images/line.png" alt="">
                    </div>
                    <div class="col-sm-3">
                        <div class="box-info team-box">
                            <img src="images/ngan.jpg" alt="img1">
                            <h4>Nguyễn Thị Thúy Ngân</h4>
                            <p><strong>Vị trí: </strong> Designer</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box-info team-box">
                            <img src="images/ngan.jpg" alt="img2">
                            <h4>Nguyễn Thị Thúy Ngân</h4>
                            <p><strong>Vị trí: </strong> Designer</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box-info team-box">
                            <img src="images/ngan.jpg" alt="img3">
                            <h4>Nguyễn Thị Thúy Ngân</h4>
                            <p><strong>Vị trí: </strong> Designer</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box-info team-box">
                            <img src="images/ngan.jpg" alt="img4">
                            <h4>Nguyễn Thị Thúy Ngân</h4>
                            <p><strong>Vị trí: </strong> Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2 sm-left-margin">
            <img src="img/bg_h2.png" alt="">
            <div class="col-sm-12">
                <h3>Chúng tôi hỗ trợ khách hàng 7 ngày trong tuần 24/24</h3>
                <span>Hotline: (Mr.Dung) 0912345678</span> - <span>(Mrs.Thao) 094567890</span>
                <br>
                <span>Gmail:nguyenvanabc@gmail.com</span>
                <h4>Với đội ngũ nhân viên nhiều năm kinh nghiệm, không chỉ là tạo ra một sản phẩm website uy tín - chất lượng cao mà chúng tôi còn tạo dựng mô hình kinh doanh cho bạn, nâng cao số lượng sản phẩm bán</h4>

            </div>
            <div class="col-sm-12 footer-contact">
                <div class="col-sm-6">
                    <input type="text" name="" value="" placeholder="Họ tên">
                    <input type="text" name="" value="" placeholder="Số điện thoại">
                    <input type="text" name="" value="" placeholder="Gmail">
                </div>
                <div class="col-sm-6">
                    <textarea class="form-control" rows="3" placeholder="Nội dung"></textarea>
                    <button type="" class="pull-right">GỬI</button>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 footer-final">
            <div class="col-sm-3">
                <h3><span class="glyphicon glyphicon-bold"></span> Websites miễn phí</h3>
                <h4>- Không cần phải trả phí cho bất cứ sản phẩm nào của hệ thống</h4>
                <h4>- Khách hàng thoải mái lựa chọn web phù hợp</h4>
            </div>
            <div class="col-sm-3">
                <h3><span class="glyphicon glyphicon-bell"></span> Chiến lược sản phẩm</h3>
                <h4>- Hệ thống chúng tôi sẽ tư vấn cho sản phẩm của bạn</h4>
                <h4>- Cùng bạn kinh doanh và phát triển sản phẩm</h4>
            </div>
            <div class="col-sm-3">
                <h3><span class="glyphicon glyphicon-book"></span> Hỗ trợ kĩ thuật</h3>
                <h4>- Hoàn toàn hỗ trợ miễn phí khi web của bạn gặp sự cố</h4>
                <h4>- Bảo trì và phát triển web theo yêu cầu của khách hàng</h4>
            </div>
            <div class="col-sm-3">
                <h3><span class="glyphicon glyphicon-asterisk"></span> Gửi yêu cầu làm Web</h3>
                <h4>- Nhận các đơn làm web của khách hàng 24/7</h4>
                <h4>- Sẵn sàng đáp ứng mọi yêu cầu xây dựng hệ thống web của khách hàng</h4>
            </div>
        </div>
    </div>
</footer>




<!-- All Javascript at the bottom of the page for faster page loading -->

<!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="includes/js/script.js"></script>

</body>
</html>

