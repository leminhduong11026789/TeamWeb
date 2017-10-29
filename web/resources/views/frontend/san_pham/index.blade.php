@include('frontend.layouts.app')

<section class="content">
	<div class="col-sm-10 col-sm-offset-1 form-choose">
		<div class="col-sm-3 form-choose-detail">
			<p>Lựa chọn của bạn</p>
			<div class="box-info-web">
				<ul>
					@foreach($categories  as $key=>$category)
						@if($key==1)
							<li class="active">
						@else
							<li>
								@endif
								<img src="/frontend/img/shirt1.png" alt="">
									<a href="{{route('danhmuc.index',$category->slug)}}">{{$category->ten}}</a>
								<span class="glyphicon glyphicon-chevron-right"></span>
							</li>
							@endforeach
				</ul>
			</div>
		</div>
		<div class="col-sm-9 form-right">
			<div class="col-sm-12">
				<ul>
					<li>
						<a href="">Miễn phí tư vấn</a>
					</li>
					<li>
						<a href="">Tham gia bán hàng</a>
					</li>
					<li>
						<a href="">Quảng cáo SEO Google</a>
					</li>
					<li>
						<a href="">Quảng cáo Google Adwords</a>
					</li>
					<li>
						<a href="">Quảng cáo Facebook</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-12 form-slider">
				<div class="col-sm-8 form-show">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="/frontend/img/1sl.png" alt="img1">
								<div class="carousel-caption">
									Hay tin chung toi
								</div>
							</div>
							<div class="item">
								<img src="/frontend/img/2sl.jpg" alt="img2">
								<div class="carousel-caption">
									VUon toi uoc mo that su
								</div>
							</div>
							<div class="item">
								<img src="/frontend/img/3sl.png" alt="img3">
								<div class="carousel-caption">
									VUon toi uoc mo that su
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-sm-4 form-introduce">
					<div class="text-hello">
						<a href="">
							<img src="/frontend/img/info.png" alt="">
						</a>
						<p>Xin chào, bạn !</p>
						<p>Chúng tôi sẽ giúp bạn phát triển của mình. Hãy tin chúng tôi</p>
						<p>Hãy để lại số điện thoại, gmail, facebook, zalo, intagram . Chúng tôi sẽ liên lạc ngay với bạn!</p>
					</div>
					<div class="form-btn-send">
						<input type="text" name="" value="" placeholder="Gmail, Sđt...">
						<button>Gửi</button>
						<br>
						<span>Cám ơn bạn đã truy cập vào hệ thống của chúng tôi!</span>
					</div>
				</div>
				<div class="col-sm-12 form-col-sm12">
					<div class="form-slide-much">
						<div class="col-sm-2">
							<img src="/frontend/img/giay.jpg" alt="">
							<div class="text">
								<p>Giá 1.000.000đ</p>
								<p>Website bán hàng</p>
								<button>Đặt ngay</button>
							</div>
						</div>
						<div class="col-sm-2">
							<img src="/frontend/img/aodep1.jpg" alt="">
							<div class="text">
								<p>Giá 1.000.000đ</p>
								<p>Website bán hàng</p>
								<button>Đặt ngay</button>
							</div>
						</div>
						<div class="col-sm-2">
							<img src="/frontend/img/aodep.jpg" alt="">
							<div class="text">
								<p>Giá 1.000.000đ</p>
								<p>Website bán hàng</p>
								<button>Đặt ngay</button>
							</div>
						</div>
						<div class="col-sm-2">
							<img src="/frontend/img/aodep.jpg" alt="">
							<div class="text">
								<p>Giá 1.000.000đ</p>
								<p>Website bán hàng</p>
								<button>Đặt ngay</button>
							</div>
						</div>
						<div class="col-sm-2">
							<img src="/frontend/img/aodep.jpg" alt="">
							<div class="text">
								<p>Giá 1.000.000đ</p>
								<p>Website bán hàng</p>
								<button>Đặt ngay</button>
							</div>
						</div>
						<div class="col-sm-2">
							<img src="/frontend/img/aodep.jpg" alt="">
							<div class="text">
								<p>Giá 1.000.000đ</p>
								<p>Website bán hàng</p>
								<button>Đặt ngay</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="info-img-economic">
		<img src="#" alt="">
	</div>

	<div class="col-sm-10 col-sm-offset-1 form-info-item">
		<h2 class="title text-center">HƠN 1000+ MẪU WEBSITES</h2>
		<!--Box-item1-->
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
</section>


@include('frontend.layouts.footer')
