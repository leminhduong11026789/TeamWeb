@include('frontend.layouts.app')
<section class="content">
    <div class="main-product">
        <div class="container">
            <div class="row">
                <div class="details-news">
                    <div class="categoty-info">
                        <ul class="breadcrumb details-category">
                            <li><a href="trang-chu">Trang chủ</a></li>
                            <li>Sản phẩm</li>
                            <li class="active">{{$category->ten}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 form-info-item">
            <!--Box-item1-->
            <div class="col-sm-12">
                @foreach($sanPhams as $key=>$sanPham)
                    @if($key%$numberInline==0)
                        <div hidden class="col-sm-12 showOder{{(int)($key/$numberInpage)}}">
                            @endif
                            <div class="col-sm-4 form-item">
                                <div class="col-sm-12 hovereffect">
                                    <img class="img-responsive" src="{{$sanPham->anh}}" alt="">
                                    <div class="overlay">
                                        <div class="box-demo-info">
                                            <h2>
                                                @if($sanPham->url)
                                                    <a href="{{$sanPham->url}}" target="_blank"><button type="">Xem Demo</button></a>
                                                @else
                                                    <button type="">Xem Demo</button>
                                                @endif
                                            </h2>
                                            <h2 class="btn-info1">
                                                <a href="{{route('sanpham.show',$sanPham->id)}}"><button type="">Xem Chi Tiết</button></a>
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
                                        <span>Giá: <strong>{{number_format($sanPham->gia,0,'','.')}} đ</strong></span>
                                        <h3>{{$sanPham->ten}} </h3>
                                    </a>
                                </div>
                            </div>
                            @if($key%3==2||$key==count($sanPhams)-1)
                        </div>
                    @endif
                @endforeach

                <div class="view-more">
                    <button id='loadMore' next="1"> Xem thêm <i class="glyphicon glyphicon-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layouts.footer')





