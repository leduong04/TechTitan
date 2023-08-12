@extends('Admin.templates.tpl_default', ['pageId'=>'product'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/pr_list.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/detail_order.css')}}">



@endsection

@section('content')
<main>
<div class="head-title">
				<div class="left">
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<p id="myText"></p>
						</li>
					</ul>
				</div>
			</div>
		
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Order details</h3>
					</div>
                    <a href="#" class="back-link">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
					<div class="product-details">
                        <div class="product-image">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRLlPBqgMRZzLhsrp-YYgunRjdo9Hwwkmcog&usqp=CAU" height="150px" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <div class="info-row">
                                <span class="info-label">ID:</span>
                                <span class="pr_id">{{ $order->id }}</span>
                            </div>
                            <div class="info-row">
								<span class="info-label">Order ID:orders_id</span>
                                <span class="pr_id">{{ $order->orders_id }}</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">Product ID:</span>
                                <span class="pr_id">{{ $order->product_id }}</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">Product Name:</span>
                                <span class="pr_id">{{ $order->product_name }}</span>                              
                            </div>
                            <div class="info-row">
								<span class="info-label">Quantity:</span>
                                <span class="pr_id">{{ $order->quantity }}</span>
                            </div>
                            <div class="info-row">
								<span class="info-label">Price:</span>
                                <span class="pr_id">{{ $order->price }}</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">Total Price:</span>
                                <span class="pr_id">{{ $order->total_price }}</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">Current at:</span>
                                <span class="pr_id">{{ $order->current_at }}</span>
                                
                            </div>
                            
                        </div>
                    </div>
                    
					
				</div>
			</div>
</main>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{ asset('assets/js/js_admin/navbar_sidebar.js')}}"></script>
<script src="{{ asset('assets/js/js_admin/datatable.js')}}"></script>
@endsection