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
	<link href="/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/frontend/includes/css/bootstrap-glyphicons.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/frontend/includes/css/styles.css">
	<link rel="stylesheet" href="/frontend/includes/css/responsive.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Include Modernizr in the head, before any other Javascript -->
	<script src="/frontend/includes/js/modernizr-2.6.2.min.js"></script>

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
				
				<a class="navbar-brand hidden-lg" href="/"><img src="/frontend/images/logo.png" alt="Your Logo"></a>

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
				<a href="trang-chu">Haychontoi.com</a>
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
	<div class="content-wrapper">
		@yield('content')
	</div>



	

	<!-- All Javascript at the bottom of the page for faster page loading -->

	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="/frontend/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="/frontend/includes/js/script.js"></script>

	<script src="/services/frontend_app_services.js" type="text/javascript"></script>


	@yield('scripts')
</body>
</html>

