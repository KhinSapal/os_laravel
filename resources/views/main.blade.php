@extends('master')
@section('content')


<!-- Sub Nav (WEB) -->
<div id="mySidebar" class="sidebar">
	<div class="row">
		<div class="col-10">
			<img src="{{ asset('front/logo/logo_med_trans.png') }}" class="img-fluid" style="width: 100px">
		</div>
		<div class="col-2">
			<a href="javascript:void(0)" class="closebtn text-decoration-none">
				<i class="icofont-close-line"></i>
			</a>
		</div>
	</div>
	
	<div class="mt-3">
		<p class="text-muted ml-4"> Shop By </p>
		<hr>
		<a data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
			Category
			<i class="icofont-rounded-down float-right mr-3"></i>

		</a>

		<div class="collapse sidebardropdown_container_category mt-3" id="category">
			<a href="" class="py-2"> Category One </a>
			<a href="" class="py-2"> Category Two </a>
			<a href="" class="py-2"> Category Three </a>
			<a href="" class="py-2"> Category Four </a>
			<a href="" class="py-2"> Category Five </a>
		</div>

		<hr>

		<a href="#"> Poromotion </a>
		<hr>

		<a data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="brand">
			Merchants
			<i class="icofont-rounded-down float-right mr-3"></i>

		</a>

		<div class="collapse sidebardropdown_container_category mt-3" id="brand">
			<a href="" class="py-2"> Brand One </a>
			<a href="" class="py-2"> Brand Two </a>
			<a href="" class="py-2"> Brand Three </a>
			<a href="" class="py-2"> Brand Four </a>
			<a href="" class="py-2"> Brand Five </a>
		</div>
		<hr>

		<a data-toggle="collapse" href="#service" role="button" aria-expanded="false" aria-controls="service">
			Service
			<i class="icofont-rounded-down float-right mr-3"></i>
		</a>

		<div class="collapse sidebardropdown_container_category mt-3" id="service">
			<a href="" class="py-2"> Help Center </a>
			<a href="" class="py-2"> Order </a>
			<a href="" class="py-2"> Shipping & Delivery </a>
			<a href="" class="py-2"> Payment </a>
			<a href="" class="py-2"> Returns & Refunds </a>
		</div>
		<hr>

		<a href="#"> Login | Signup</a>
		<hr>

		<a href="#"> Cart [ <span class="cartNoti"> 1 </span> ]  </a>
		<hr>

		<img src="front/image/download.png" class="img-fluid ml-2 text-center" style="width: 150px">
		<hr>

		<p class="text-white ml-3"> Copyright &copy; <img src="{{ asset('front/logo/logo_wh_transparent.png') }}" style="width: 20px; height: 20px"> 2019  </p>

	</div>
	
</div>


<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="front/image/banner/acc.jpeg" class="d-block w-100 bannerImg img-fluid" alt="...">
		</div>
		<div class="carousel-item">
			<img src="front/image/banner/gio.jpeg" class="d-block w-100 bannerImg" alt="...">
		</div>
		<div class="carousel-item">
			<img src="front/image/banner/gar.jpeg" class="d-block w-100 bannerImg" alt="...">
		</div>
	</div>
</div>


<!-- Content -->
<div class="container mt-5 px-5">
	<!-- Category -->
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_one.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Smart Home </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_two.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Grocery </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_three.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Cosmetic </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_four.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Stationery </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_five.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Electronic Devices </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_six.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Furniture </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_seven.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Kitchen Apperience </p>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
			<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				<img src="front/image/category/category_eight.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text font-weight-bold text-truncate"> Health Care </p>
				</div>
			</div>
		</div>
	</div>

	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
	
	<!-- Discount Item -->
	<div class="row mt-5">
		<h1> Discount Item </h1>
	</div>

	<!-- Disocunt Item -->
	<div class="row">
		<div class="col-12">
			<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
				<div class="MultiCarousel-inner">
					@foreach ($items as $item)
					<div class="item">
						<a href="{{route('itemdetailpage',$item->id)}}">
						<div class="pad15">
							<img src="{{ asset($item->photo) }}" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks</span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none" data-id="{{$item->id}}"
							data-name="{{$item->name}}"
							data-photo="{{$item->photo}}"
							data-price="{{$item->price}}"
							 >Add to Cart</a>

						</div>
						</a>
					</div>
						@endforeach
					</div>
					
				<button class="btn btnMain leftLst"><</button>
				<button class="btn btnMain rightLst">></button>
			</div>
		</div>
	</div>

	<!-- Flash Sale Item -->
	<div class="row mt-5">
		<h1> Flash Sale </h1>
	</div>

	<!-- Flash Sale Item -->
	<div class="row">
		<div class="col-12">
			<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
				<div class="MultiCarousel-inner">
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_one.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks</span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_two.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_three.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_four.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_one.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_two.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_three.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_four.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_four.jpeg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_one.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks</span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_three.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_two.png" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					
				</div>
				<button class="btn btnMain leftLst"><</button>
				<button class="btn btnMain rightLst">></button>
			</div>
		</div>
	</div>

	<!-- Random Catgory ~ Item -->
	<div class="row mt-5">
		<h1> Fresh Picks </h1>
	</div>

	<!-- Random Item -->
	<div class="row">
		<div class="col-12">
			<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
				<div class="MultiCarousel-inner">
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_one.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks</span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_two.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_three.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/saisai_four.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_one.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_two.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_three.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/giordano_four.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_four.jpeg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_one.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks</span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_three.jpg" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="front/image/item/apple_two.png" class="img-fluid">
							<p class="text-truncate">Multi Item Carousel</p>
							<p class="item-price">
								<strike>250,000 Ks </strike> 
								<span class="d-block">230,000 Ks </span>
							</p>

							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
									<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
								</ul>
							</div>

							<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

						</div>
					</div>
					
				</div>
				<button class="btn btnMain leftLst"><</button>
				<button class="btn btnMain rightLst">></button>
			</div>
		</div>
	</div>

	
	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	<!-- Brand Store -->
	<div class="row mt-5">
		<h1> Top Brand Stores </h1>
	</div>

	<!-- Brand Store Item -->
	<section class="customer-logos slider mt-5">
		@foreach($brands as $brand)
		<div class="slide">
			<a href="{{route('brandpage',$brand->id)}}">
				<img src="{{asset($brand->photo)}}" class="img-fluid">
			</a>
		</div>
		@endforeach
	</section>

	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

</div>
@endsection