<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Box-icon -->
	 <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/css_user/navlord.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/css_user/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/product_detail.css')}}">
</head>
<body>
<nav class="navbard">
        <div class="containerd">
        <a class="name_web" href="{{ route('user.home_page') }}"><h2 class="h2n"><i class="fa-solid fa-seedling"></i> TECHTITAN</h2></a>
        <div class="search-bard">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Search">
        </div>
        <div class="contentd">
            <a href="{{ route('cart.list') }}" class="cart"><i class="fa-solid fa-basket-shopping"></i><span class="my-content"> Shopping Carts</span> {{Cart::getTotalQuantity()}}</a>
            <div class="dropdown-hotline">
            <a href="{{ route('user.contact_us')}}" class="hotline"><i class="fa-solid fa-phone-volume"></i><span class="my-content"> ContactUs</span></a>
            <div class="hotl-btn">
                <a href="mailto:techtitan@aptech.vn" class="em"><span><i class="fa-regular fa-envelope"></i> Email : <span class="inf-btn">techtitan@aptech.vn</span></span></a>
                <a href="#" class="time"><span><i class="fa-regular fa-clock"></i> Time : <span class="inf-btn">8h00 - 19h00</span></span></a>
            </div>
            </div>
            @guest
                            @if (Route::has('login'))
                                
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                            @endif

                            @if (Route::has('register'))

                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            
                            <div class="dropdown-account">
                                <a  class="account" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="acc-btn">
                                    <a href="{{ route('user.personal_information') }}" style="text-decoration:none"><span>Account Information</span></a>
                                    <a href="{{ route('user.my_order') }}" style="text-decoration:none"><span>My Order</span></a>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="text-decoration:none">
                                        <span>{{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </div>
                            </div>
                                
                        @endguest 
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
    <div class="heading-section">
        <h2>Product Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="slider" class="owl-carousel product-slider">
            @foreach ($product->images as $image)
                <div class="item">
                <img src="{{ $image->img_link }}" alt="Product Image">
                </div>
            @endforeach
            </div>
            <div id="thumb" class="owl-carousel product-thumb">
            @foreach ($product->images as $image)
                <div class="item">
                <img src="{{ $image->img_link }}" alt="Product Image">
                </div>
            @endforeach
            </div>            
        </div>
        <div class="col-md-6">
            <div class="product-dtl">
                <div class="product-info">
                    <div class="product-name">{{ $product->product_name}}</div>
                    <div class="reviews-counter">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" checked />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" checked />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" checked />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <span>3 Reviews</span>
                    </div>
                </div>

                <div class="product-price-discount"><span>${{$product -> price}}</span>
                </div>
            </div>
            <p>{{ $product -> description}}</p>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status:</label> 
                        @if($product->quantity == 0)
                            Out of stock
                        
                        @else
                            In stock
                        @endif

                    </div>
                </div>
            </div>
            <div class="product-count">
                <label for="size">Quantity</label>
                <form action="#" class="display-flex">
                    <div class="qtyminus">-</div>
                    <input type="text" name="quantity" value="1" class="qty">
                    <div class="qtyplus">+</div>
                </form>
                <a href="#" class="round-black-btn add-to-cart-btn">Add to Cart</a>

                <a href="#" class="round-red-btn">Buy Now</a>
            </div>
        </div>
    </div>
</div>
<div class="product-info-tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <table class="product-table">
                <tr>
                    <th>Tên sản phẩm</th>
                    <td>Áo thun</td>
                </tr>
                <tr>
                    <th>Mã sản phẩm</th>
                    <td>AT001</td>
                </tr>
                <tr>
                    <th>Giá sản phẩm</th>
                    <td>100,000 VND</td>
                </tr>
                <tr>
                    <th>Mô tả sản phẩm</th>
                    <td>Áo thun đơn giản và thoải mái</td>
                </tr>
            </table>










        </div>
        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
            <div class="review-heading">REVIEWS</div>
            <!-- <p class="mb-20">There are no reviews yet.</p> -->
            <div class="user-comments">
                <div class="comment">
                    <div class="comment-user">
                        <span class="user-name">John Doe</span>
                        <div class="rate">
                            <input type="radio" id="user1-star5" name="user1-rate" value="5" checked />
                            <label for="user1-star5" title="text">5 stars</label>
                        </div>
                        <span class="comment-time">12 hours ago</span>
                    </div>
                    <div class="comment-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo ac mi elementum
                            consequat.</p>
                    </div>
                </div>

                <div class="comment">
                    <div class="comment-user">
                        <span class="user-name">Jane Smith</span>
                        <div class="rate">
                            <input type="radio" id="user2-star4" name="user2-rate" value="4" checked />
                            <label for="user2-star4" title="text">4 stars</label>
                        </div>
                        <span class="comment-time">2 days ago</span>
                    </div>
                    <div class="comment-content">
                        <p>Quisque tincidunt enim vitae velit consectetur, ut ultrices augue bibendum.</p>
                    </div>
                </div>

                <div class="comment">
                    <div class="comment-user">
                        <span class="user-name">Alex Johnson</span>
                        <div class="rate">
                            <input type="radio" id="user3-star3" name="user3-rate" value="3" checked />
                            <label for="user3-star3" title="text">3 stars</label>
                        </div>
                        <span class="comment-time">1 week ago</span>
                    </div>
                    <div class="comment-content">
                        <p>Maecenas rhoncus quam eu nibh mattis, in egestas urna fermentum.</p>
                    </div>
                </div>
            </div>
            <form class="review-form">
                <div class="form-group">
                    <label>Your rating</label>
                    <div class="reviews-counter">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Your message</label>
                    <textarea class="form-control" rows="10"></textarea>
                </div>

                <button class="round-black-btn">Submit Review</button>
            </form>

        </div>
    </div>
</div>

<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details details left">
            <i class="fa-solid fa-user-shield"></i>
            <span class="logo_name">Prestigious service</span>
        </div>
        <div class="logo-details detail-center">
            <i class="fa-solid fa-repeat"></i>
            <span class="logo_name">Return in 7 days</span>
        </div>
        <div class="logo-details detail-right">
            <i class="fa-solid fa-truck-fast"></i>
            <span class="logo_name">Transcontinental delivery</span>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Contact Us</li>
          <li class="info">1st Floor, C5 Building, THUY LOI University 175 TAY SON St, DONG DA Dist, HANOI VIETNAM</li>
          <li class="email">Email: <a href="mailto:techtitan@aptech.vn">techtitan@aptech.vn</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account management</li>
          <li><a href="{{ route('user.personal_information') }}">My account</a></li>
          <li><a href="{{ route('user.my_order') }}">Purchase history</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Our Company</li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('category.products', ['categoryName' => 'All']) }}">List of products</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Find us on social:</li>
          <li class="contact face"><a href="https://www.facebook.com/aptech.vn"><i class="fa-brands fa-facebook"></i></a></li>
          <li class="contact twit"><a href="https://twitter.com/fpt_aptech"><i class="fa-brands fa-square-twitter"></i><span></span></a></li>
          <li class="contact inst"><a href="https://www.instagram.com/aptech.vn/"><i class="fa-brands fa-square-instagram"></i><span></span></a></li>
          <li class="contact yout"><a href="https://www.youtube.com/@AprotrainAptech"><i class="fa-brands fa-square-youtube"></i><span></span></a></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2023 <a href="mailto:techtitan@aptech.vn"> techtitan@aptech.vn.</a>Lavarel</span>
        <span class="main_logo">
          <a href=""><h2><i class="fa-solid fa-seedling"></i> TECHTITAN</h2></a>
        </span>
      </div>
    </div>
  </footer>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/js_user/product_detail.js')}}"></script>
<script src="{{ asset('assets/js/js_admin/nav.js')}}"></script>
<script>
		$(document).ready(function () {
			var slider = $("#slider");
			var thumb = $("#thumb");
			var slidesPerPage = 4; //globaly define number of elements per page
			var syncedSecondary = true;
			slider.owlCarousel({
				items: 1,
				slideSpeed: 2000,
				nav: false,
				autoplay: false,
				dots: false,
				loop: true,
				responsiveRefreshRate: 200
			}).on('changed.owl.carousel', syncPosition);
			thumb
				.on('initialized.owl.carousel', function () {
					thumb.find(".owl-item").eq(0).addClass("current");
				})
				.owlCarousel({
					items: slidesPerPage,
					dots: false,
					nav: true,
					item: 4,
					smartSpeed: 200,
					slideSpeed: 500,
					slideBy: slidesPerPage,
					navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
					responsiveRefreshRate: 100
				}).on('changed.owl.carousel', syncPosition2);
			function syncPosition(el) {
				var count = el.item.count - 1;
				var current = Math.round(el.item.index - (el.item.count / 2) - .5);
				if (current < 0) {
					current = count;
				}
				if (current > count) {
					current = 0;
				}
				thumb
					.find(".owl-item")
					.removeClass("current")
					.eq(current)
					.addClass("current");
				var onscreen = thumb.find('.owl-item.active').length - 1;
				var start = thumb.find('.owl-item.active').first().index();
				var end = thumb.find('.owl-item.active').last().index();
				if (current > end) {
					thumb.data('owl.carousel').to(current, 100, true);
				}
				if (current < start) {
					thumb.data('owl.carousel').to(current - onscreen, 100, true);
				}
			}
			function syncPosition2(el) {
				if (syncedSecondary) {
					var number = el.item.index;
					slider.data('owl.carousel').to(number, 100, true);
				}
			}
			thumb.on("click", ".owl-item", function (e) {
				e.preventDefault();
				var number = $(this).index();
				slider.data('owl.carousel').to(number, 300, true);
			});


			$(".qtyminus").on("click", function () {
				var now = $(".qty").val();
				if ($.isNumeric(now)) {
					if (parseInt(now) - 1 > 0) { now--; }
					$(".qty").val(now);
				}
			})
			$(".qtyplus").on("click", function () {
				var now = $(".qty").val();
				if ($.isNumeric(now)) {
					$(".qty").val(parseInt(now) + 1);
				}
			});
		});
	</script>
</body>
</html>




