<div class="header-top">
		<div class="container">
			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href="{{route('home-page')}}" style="font-size: 120%"><b><i class="fa fa-home" style="font-size: 120%;"></i> Thời trang </b></a></li>
					<li><a style="font-size: 120%; color: magenta"><i class="fa fa-phone" style="font-size: 120%;"></i> 01234.567.890 </a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
					<li><a href="{{route('home-page')}}"><b style="color: blue; font-size: 115%">Đăng ký</b></a></li>
					<li><a href="{{route('home-page')}}"><b style="color: blue; font-size: 115%">Đăng nhập</b></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="container beta-relative">
			<div class="pull-left">
				<a href="{{route('home-page')}}" id="logo"><img src="source/image/logo/logo.png" width="200px" alt=""></a>
			</div>
			<div class="pull-right beta-components space-left ov">
				<div class="space10">&nbsp;</div>
				<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="{{route('search')}}">
				        <b style="font-size: 115%; color: red" ><input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." /></b>
				        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>

				<div class="beta-comp">
					<div class="cart">
						<div class="beta-select"><b <b style="color: green; font-size: 115%"><i class="fa fa-shopping-cart"></i><i class="fa fa-chevron-down"></i></b></div>

						</div>
					</div> <!-- .cart -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #0277b8;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="{{route('home-page')}}">Trang chủ</a></li>
					<li><a>Loại sản phẩm</a>
						<ul class="sub-menu">
							@foreach($typePro as $type)
							<li><a href=""><b style="color: black">{{$type->name}}</b></a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="">Giới thiệu</a></li>
					<li><a href="">Liên hệ</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->