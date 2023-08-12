@extends('layouts.app')
@section('css')
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/small.css')}}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @endsection

@section('small_menu')
  <div id="select_menu" class="mnsl">
    <div class="menunow">
      <div class="mn"><span>MENU</span></div>
      <div class="product_menu">
        <ul>
          <li><a href="{{ route('category.products', ['categoryName' => 'All']) }}"><i class="fa-solid fa-check-double"></i> All</a></li>
          @foreach($categories as $category)  
          <li><a href="{{ route('category.products', ['categoryName' => $category->Name]) }}"><span>{{ $category->Name }}</span> <i class="fa-solid fa-angle-down"></i></a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="out" id="outl"><div class="close"><span>Click here to close</span></div></div>
  </div>
  @endsection
    @section('content')
    <section class="image_bar">
      <div class="chinh">
        <div class="image"><img src="http://getwallpapers.com/wallpaper/full/2/1/8/1058882-download-zen-garden-wallpaper-1920x1080-for-iphone.jpg" alt=""></div>
        <div class="bar_img">
          <span>Sitting together and chatting under the cool green trees, surrounded by 
            fragrant flowers and grass, there is a gentle breeze. Let <span><i class="fa-solid fa-seedling"></i> TECHTITAN</span> help 
            you create a wonderful garden.</span>
        </div>
      </div>
    </section>

    <section class="main">
      <div class="content">
        <span class="home">Home<span class="xs">>></span></span><span>{{ $categoryName }}</span>
        <a href="" id="showmenu" class="menu_show"><span><i class="fa-solid fa-bars"></i>SELECT MENU</span></a>
      </div>
      @foreach ($products as $product)
      <div class="prd">
        <a href="{{ route('user.product_detail', ['id' => $product->id]) }}">
          <div class="card">
            <div class="cnt">
                <img src="{{ $product->images->first()->img_link }}" alt="">
            </div>
            <div class="container">
              <div class="name"><span>{{ $product->product_name }}</span></div>
              <div class="price"><span>${{ $product->price }}</span> 
              </div>
            </div>
          </div>
        </a>
        <a href="https://www.fast-growing-trees.com/" class="work"><span><i class="fa-solid fa-bag-shopping"></i></span><span class="add"> ADD</span></a>
      </div>
      @endforeach
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

    <script src="{{ asset('assets/js/js_admin/small.js')}}"></script>
    @endsection