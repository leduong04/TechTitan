<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/css_user/navlord.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/css_user/footer.css')}}">
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/cart.css')}}">
</head>
<body>
<div class="container" >
	<nav class="navbard">
        <div class="containerd">
        <a class="name_web" href="{{ route('user.home_page') }}"><h2 class="h2n"><i class="fa-solid fa-seedling"></i> TECHTITAN</h2></a>
        <div class="search-bard">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Search">
        </div>
        <div class="contentd">
            <a href="{{ route('user.cart') }}" class="cart"><i class="fa-solid fa-basket-shopping"></i><span class="my-content"> Shopping Carts</span></a>
            <div class="dropdown-hotline">
            <a href="{{ route('user.contact_us')}}" class="hotline"><i class="fa-solid fa-phone-volume"></i><span class="my-content"> Hotline</span></a>
            <div class="hotl-btn">
                <a href="mailto:techtitan@aptech.vn" class="em"><span><i class="fa-regular fa-envelope"></i> Email : <span class="inf-btn">techtitan@aptech.vn</span></span></a>
                <a href="#" class="time"><span><i class="fa-regular fa-clock"></i> Time : <span class="inf-btn">8h00 - 19h00</span></span></a>
            </div>
            </div>
            <div class="dropdown-account">
            <a href="" class="account"><i class="fa-solid fa-circle-user"></i><span class="my-content"> Account</span></a>
            <div class="acc-btn">
                <a href="{{ route('user.personal_information') }}" class="ai"><span>Account Information</span></a>
                <a href="{{ route('user.my_order') }}" class="mo"><span>My Order</span></a>
            </div>
            </div>
        </div>
        </div>
    </nav>
    <div id="container">
        <h1>Giỏ hàng</h1>
        <div class="cart-items">
            <div class="item">
                <img src="data:image/jpeg;base64,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" alt="Sản phẩm 1">
                <div class="item-info">
                    <h3>Iphone 14 Pro Max</h3>
                    <p>Giá: 1300$</p>
                </div>
                <div class="quantity">
                    <button class="minus-btn">-</button>
                    <input type="text" value="1" size="1" readonly>
                    <button class="plus-btn">+</button>
                </div>
                <button class="remove-btn">Xóa</button>
            </div>
        </div>
        <hr width="80%" align="center"/>
        <div class="cart-items">
            <div class="item">
                <img src="data:image/jpeg;base64,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" alt="Sản phẩm 1">
                <div class="item-info">
                    <h3>Iphone 14 Pro Max</h3>
                    <p>Giá: 1300$</p>
                </div>
                <div class="quantity">
                    <button class="minus-btn">-</button>
                    <input type="text" value="1" size="1" readonly>
                    <button class="plus-btn">+</button>
                </div>
                <button class="remove-btn">Xóa</button>
            </div>
            


            <hr width="100%" align="center"/>
            <div class="allmonney">
                <span>Tổng Tiền: </span>
                <span>30$</span>
            </div>
            <button class="add-button">Thêm sản phẩm</button>
            <button class="submit-button">Thanh toán</button>
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
          <li><a href="#">About Us</a></li>
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
	</div>	
	<script src="{{ asset('assets/js/js_admin/nav.js')}}"></script>
    
</body>
</html>
