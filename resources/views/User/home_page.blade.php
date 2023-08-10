<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css_user/home.css')}}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <a class="name_web" href="{{ route('user.home_page') }}"><h2><i class="fa-solid fa-seedling"></i> TECHTITAN</h2></a>
      <div class="search-bar">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" placeholder="Search">
      </div>
      <div class="content">
        <a href="{{ route('user.cart') }}" class="cart"><i class="fa-solid fa-basket-shopping"></i><span class="my-content"> Shopping Carts</span></a>
        <div class="dropdown-hotline">
          <a href="#" class="hotline"><i class="fa-solid fa-phone-volume"></i><span class="my-content"> Hotline</span></a>
          <div class="hotl-btn">
            <a href="mailto:techtitan@aptech.vn"><span><i class="fa-regular fa-envelope"></i> Email : <span class="inf-btn">techtitan@aptech.vn</span></span></a>
            <a href="#"><span><i class="fa-regular fa-clock"></i> Time : <span class="inf-btn">8h00 - 19h00</span></span></a>
          </div>
        </div>
        <div class="dropdown-account">
          <a href="" class="account"><i class="fa-solid fa-circle-user"></i><span class="my-content"> Account</span></a>
          <div class="acc-btn">
            <a href="{{ route('user.personal_information') }}"><span>Account Information</span></a>
            <a href="{{ route('user.my_order') }}"><span>My Order</span></a>
          </div>
        </div>
      </div>
    </div>
  </nav>







  <section class="menu_content">
    <div class="menu_left">
      <div class="left_main">
        <i class="fa-solid fa-bars"></i>
        <span>MENU</span>
      </div>
      <div class="left_list">
        <ul>
          <li><a href=""><i class="fa-solid fa-check-double"></i> All <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-sun"></i> Flowering <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-circle-dot"></i> Non-Flowering <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-house-chimney-window"></i> Indoor <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-snowflake"></i> Outdoor <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-tree"></i> Succulents <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-cannabis"></i> Medicinal <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
          <li><a href=""><i class="fa-solid fa-trowel"></i> Accessories <div id="muiten"><i class="fa-solid fa-chevron-right"></i></div></a></li>
        </ul>
        <div class="all_left"><a href=""><a href=""><img  src="https://www.fast-growing-trees.com/cdn/shop/files/hp-hero-mobile-2-8-8-23.avif?v=6869916982188266093" alt=""></a></a></div>
      </div>
    </div>
    <div class="menu_right">
      <div class="right_main">
        <div class="right_main_sale">Perfect plant <i class="fa-solid fa-leaf"></i></div>
      </div>
      <div class="right_slider">
        <div class="slider">
          <div class="slide active">
            <img src="https://www.fast-growing-trees.com/cdn/shop/files/iStock-1249037280.jpg?v=1670597448" alt="">
          </div>
          <div class="slide">
            <img src="https://www.fast-growing-trees.com/cdn/shop/files/20230325_FGT_S29_ResidentialDiggingWithModels_02998.jpg?v=1682622843&width=675" alt="">
          </div>
          <div class="slide">
            <img src="https://agrisustineri.org/wp-content/uploads/2022/08/The-Story-of-Todays-Successful-Young-Farmers-.jpg" alt="">
          </div>
          <div class="slide">
            <img src="https://www.fast-growing-trees.com/cdn/shop/files/shop-by-state.jpg?v=1644929619&width=900" alt="">
          </div>
          <div class="slide">
            <img src="https://www.fast-growing-trees.com/cdn/shop/files/iStock-954339178.jpg?v=1670597530" alt="">
          </div>
          <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
          </div>
          <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
          </div>
        </div>
        <div class="qc_right">
          <img src="https://cdn.shopify.com/s/files/1/0059/8835/2052/files/iStock-924891502.jpg?v=1689699573" alt="">
          <img src="https://cdn.shopify.com/s/files/1/0059/8835/2052/files/iStock-1293052585.jpg?v=1689260719" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="main">
    <div class="content">
      <i class="fa-solid fa-heart"></i>
      <span>You may also like</span>
    </div>
    @foreach ($like_product as $product)
    <div class="prd">
      <a href="{{ route('user.product_detail', ['id' => $product->id]) }}">
        <div class="card">
          <div class="cnt">
            @if ($product->images->count() > 0)
              <img src="{{ $product->images->first()->img_link }}" alt="">
            @else
              <img src="default_image_url_here" alt="No Image">
            @endif
          </div>
          <div class="container">
            <div class="name"><span>{{ $product->product_name}}</span></div>
            <div class="price"><span>${{$product->price}}</span> 
            </div>
          </div>
        </div>
      </a>
      <a href="https://www.fast-growing-trees.com/" class="work"><span><i class="fa-solid fa-bag-shopping"></i></span><span class="add"> ADD</span></a>
    </div>
    @endforeach
    
    <div class="more-prd">
      <a href=""><span>View more products <i class="fa-solid fa-angle-down"></i></span></a>
    </div>
    
  </section>

  <section class="main">
    <div class="content">
      <i class="fa-solid fa-spa"></i>
      <span>Tree In Techtitan</span>
    </div>
    @foreach($tree_product as $product)
    <div class="prd">
      <a href="">
        <div class="card">
          <div class="cnt">
            @if ($product->images->count() > 0)
              <img src="{{ $product->images->first()->img_link }}" alt="">
            @else
              <img src="default_image_url_here" alt="No Image">
            @endif
          </div>
          <div class="container">
            <div class="name"><span>{{ $product->product_name}}</span></div>
            <div class="price"><span>${{$product->price}}</span> 
            </div>
          </div>
        </div>
      </a>
      <a href="https://www.fast-growing-trees.com/" class="work"><span><i class="fa-solid fa-bag-shopping"></i></span><span class="add"> ADD</span></a>
    </div>
    @endforeach
    <div class="more-prd">
      <a href=""><span>View more products <i class="fa-solid fa-angle-down"></i></span></a>
    </div>
    
  </section>


  <section class="main">
    <div class="content">
      <i class="fa-solid fa-screwdriver-wrench"></i>
      <span>Accessories</span>
    </div>
    @foreach($accessories as $product)
    <div class="prd">
      <a href="">
        <div class="card">
          <div class="cnt">
            @if ($product->images->count() > 0)
              <img src="{{ $product->images->first()->img_link }}" alt="">
            @else
              <img src="default_image_url_here" alt="No Image">
            @endif
          </div>
          <div class="container">
            <div class="name"><span>{{ $product->product_name}}</span></div>
            <div class="price"><span>${{$product->price}}</span> 
            </div>
          </div>
        </div>
      </a>
      <a href="https://www.fast-growing-trees.com/" class="work"><span><i class="fa-solid fa-bag-shopping"></i></span><span class="add"> ADD</span></a>
    </div>
    @endforeach
    
    <div class="more-prd">
      <a href=""><span>View more products <i class="fa-solid fa-angle-down"></i></span></a>
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
          <li><a href="#">Create an Account / Sign In</a></li>
          <li><a href="#">Forgot password</a></li>
          <li><a href="#">Purchase history</a></li>
          <li><a href="#">Track My Shipment</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Our Company</li>
          <li><a href="#">About Us</a></li>
          <li><a href="">List of products</a></li>
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

  <script src="{{ asset('assets/js/js_admin/home.js')}}"></script>
</body>
</html>