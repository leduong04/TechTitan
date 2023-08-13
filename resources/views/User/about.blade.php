<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/about.css')}}">
     <!-- Box-icon -->
	 <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css_user/navlord.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/css_user/footer.css')}}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div class="container">
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
        <section class="image_bar">
        <div class="chinh">
          <div class="image"><img src="https://cdn.shopify.com/s/files/1/0059/8835/2052/files/hp-box1-privacy-trees-6_c93a2d8d-ec65-4345-b4c4-4c51d36ee332.jpg?v=1648211406" alt=""></div>
          <div class="bar_img">
            <h1><i class="fa-solid fa-seedling"></i> Welcome to TECHTITAN</h1>
            <span>Hi! We're <i class="fa-solid fa-seedling"></i> TECHTITAN, and we were built with a single mission in mind - to
                deliver superior trees and plants that you can count on, directly to your door.</span> <br>
            <a href="{{ route('user.home_page') }}"><button>Shop Now</button></a>
          </div>
        </div>
      </section>

    <section class="main">
        <div class="about">
            <div class="information">
                <div class="left">
                    <div class="top">
                        <span>
                            Thanks for stopping by! We're TECHTITAN, and we're VIETNAM's #1 
                            online nursery. We started selling trees in our backyard in 2023, 
                            and we still do (only now, our backyard is nearly 100 acres). We pioneered the concept
                            of farm-to-backyard plants, and made it possible to grow happier, healthier and easier 
                            than the garden center or big box store.
                        </span>
                    </div>
                    <div class="bot">
                        <span>
                            What sets us apart? We are as close to the farm as it gets. Our plants are 
                            sourced from the best growers across the country, cared for by our in-house 
                            Plant Experts and shipped straight to your yard. This means you're shopping 
                            straight from the source and guaranteed (yes, we guarantee them!) fresh, 
                            thriving plants. Forget the leftovers—with us, you get first dibs on the biggest,
                            freshest selection of privacy trees, shrubs, shade trees, fruits, flowering 
                            trees, house plants, perennials, tropicals and more, all from the comfort of your home.
                        </span>
                    </div>
                </div>
                <div class="right">
                    <div class="inf">
                        <img src="https://www.fast-growing-trees.com/cdn/shop/files/20230325_FGT_S29_ResidentialDiggingWithModels_02998.jpg?v=1682622843&width=675" alt="">
                    </div>
                </div>
            </div>
            <div class="demo">
              <img src="https://www.fast-growing-trees.com/cdn/shop/files/001-sprout_small.png?v=1651667791" alt=""> <br>
              <span>Healthier, well-developed root systems grown and shipped in nutrient-rich soil.</span>
            </div>
            <div class="best">
              <div class="content">
                <div class="left">
                  <div class="top">
                    <span>
                      No matter where you're at in your planting journey, what your yard looks like or what you're dreaming it will look like, we've got you covered—our Plant Experts and care guides are always here to help you troubleshoot or plan your next dig.
                    </span>
                  </div>
                  <div class="bot">
                    <span>
                      Contact our specialists for one-on-one support, and check out our Resource Center for how-to guides, tips, and recommendations.
                    </span>
                    </div>
                  <div class="siu">
                    <h1>Not sure where to start? Get to know our best sellers!</h1>
                  </div>
                </div>
                <div class="right">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/e4Tk-kcOmUA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <div class="demo">
              <img src="https://www.fast-growing-trees.com/cdn/shop/files/003-landscape_small.png?v=1651667857" alt=""> <br>
              <span>The ideal plants and trees for your climate and landscape needs.</span>
            </div>
        </div>
    </section>



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

    <script src="{{ asset('assets/js/js_admin/about.js')}}"></script>
</body>
</html>
