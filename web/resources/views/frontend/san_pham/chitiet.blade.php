@include('frontend.layouts.app')
<section class="content">
    <div class="main-product">
        <div class="container">
            <div class="row">
                <div class="details-news">
                    <div class="categoty-info">
                        <ul class="breadcrumb details-category">
                            <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                            <li>Sản phẩm</li>
                            <li class="active">Website Tin tức</li>
                        </ul>
                    </div>
                    <div class="details-product">
                        <div class="col-sm-4">
                            <div class="details-product-img">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-responsive" src="{{$sanPham->anh}}" alt="">
                                    </a>
                                </div>
                                <div class="product-demo-1">
                                    <a href="{{$sanPham->url}}" target="_blank">XEM WEBSITE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="content-product">
                                <div class="content-title">
                                    <h4>{{$sanPham->danhMucSanPham->ten}}</h4>
                                    <a href="{{$sanPham->url}}" target="_blank">Mã sản phẩm: <strong>01234</strong></a>
                                </div>
                                <div class="content-category">
                                    <ul>
                                        @foreach($descriptions as $description)
                                            <li>
                                                <i class="fa fa-check"></i>
                                                {{$description->content}}
                                            </li>
                                        @endforeach
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
            @foreach($relations as $key=>$sanPham)
                @if($key % $numberInline==0)
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
                        @if($key%3==2||$key==count($relations)-1)
                    </div>
                @endif
            @endforeach

            <div class="view-more">
                <button id='loadMore' next="1"> Xem thêm <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>
@include('frontend.layouts.footer')