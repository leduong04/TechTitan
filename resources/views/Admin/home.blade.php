@extends('Admin.templates.tpl_default', ['pageId'=>'home'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/home.css')}}">

@endsection

@section('content')

<main>
	<div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="left-side">
                    <div class="box_topic">
                        Total orders
                    </div>
                    <div class="number">40,876</div>
                    <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Latest data</span>
                    </div>
                </div>
                <i class="bx bxs-cart-alt cart"></i>
            </div>
            <div class="box">
                <div class="left-side">
                    <div class="box_topic">
                    Total revenue
                    </div>
                    <div class="number">40,876</div>
                    <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Latest data</span>
                    </div>
                </div>
                <i class="bx bx-money cart two"></i>
            </div>
            <div class="box">
                <div class="left-side">
                    <div class="box_topic">
                        Total products
                    </div>
                    <div class="number">40,876</div>
                    <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Latest data</span>
                    </div>
                </div>
                <i class="bx bxs-shopping-bag cart three"></i>
            </div>
            <div class="box">
                <div class="left-side">
                    <div class="box_topic">
                        Total users
                    </div>
                    <div class="number">40,876</div>
                    <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Latest data</span>
                    </div>
                </div>
                <i class="bx bxs-user cart cart four"></i>
            </div>
        </div>

        <!-- sales-content -->
        <div class="sales-boxes">
            <div class="recent-sale box">
                <div class="title">Recent Sales</div>
                <div class="sales-details">
                    <ul class="details">
                        <li class="topic"><a href="#"><b>Date</b></a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                    </ul>
                    <ul class="details">
                        <li class="topic"><a href="#"><b>Customer</b></a></li>
                        <li><a href="#">Anna</a></li>
                        <li><a href="#">John</a></li>
                        <li><a href="#">Ben</a></li>
                        <li><a href="#">Justin</a></li>
                        <li><a href="#">Rose</a></li>
                        <li><a href="#">Lisa</a></li>
                    </ul>
                    <ul class="details">
                        <li class="topic"><a href="#"><b>Processing status</b></a></li>
                        <li><a href="#">Unprocessed</a></li>
                        <li><a href="#">Unprocessed</a></li>
                        <li><a href="#">Unprocessed</a></li>
                        <li><a href="#">Unprocessed</a></li>
                        <li><a href="#">Unprocessed</a></li>
                        <li><a href="#">Processed</a></li>
                    </ul>
                    <ul class="details">
                        <li class="topic"><a href="#"><b>Total pay</b></a></li>
                        <li><a href="#">100$</a></li>
                        <li><a href="#">100$</a></li>
                        <li><a href="#">100$</a></li>
                        <li><a href="#">100$</a></li>
                        <li><a href="#">100$</a></li>
                        <li><a href="#">100$</a></li>
                    </ul>
                </div>
                <div class="button">
                    <a href="#">See all</a>
                </div>
            </div>

            <!-- Right-Side -->
            <div class="top-sales box">
                <div class="title">Top Selling Product</div>
                <ul>
                    <li>
                        <a href="">
                            <img src="https://daikin.vn/upload_images/images/2018/04/27/4.jpg" alt="">
                            <span class="product_name">Máy lạnh Casper Inverter 1.5HP GC-12IS35</span>
                        </a>
                        <span class="price">$100</span>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://daikin.vn/upload_images/images/2018/04/27/4.jpg" alt="">
                            <span class="product_name">Máy lạnh Casper Inverter 1.5HP GC-12IS35</span>
                        </a>
                        <span class="price">$100</span>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://daikin.vn/upload_images/images/2018/04/27/4.jpg" alt="">
                            <span class="product_name">Máy lạnh Casper Inverter 1.5HP GC-12IS35</span>
                        </a>
                        <span class="price">$100</span>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://daikin.vn/upload_images/images/2018/04/27/4.jpg" alt="">
                            <span class="product_name">Máy lạnh Casper Inverter 1.5HP GC-12IS35</span>
                        </a>
                        <span class="price">$100</span>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://daikin.vn/upload_images/images/2018/04/27/4.jpg" alt="">
                            <span class="product_name">Máy lạnh Casper Inverter 1.5HP GC-12IS35</span>
                        </a>
                        <span class="price">$100</span>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://daikin.vn/upload_images/images/2018/04/27/4.jpg" alt="">
                            <span class="product_name">Điều hòa</span>
                        </a>
                        <span class="price">$100</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>


@endsection

@section('js')
<script src="{{ asset('assets/js/js_admin/navbar_sidebar.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


@endsection