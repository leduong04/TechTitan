@extends('Admin.templates.tpl_default', ['pageId'=>'comment'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS -->

<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/pr_list.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/detail_comment.css')}}">



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
						<h3>Comment Details</h3>
					</div>
                    <a href="#" class="back-link">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
					<div class="product-details">
                        <div class="product-image">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRLlPBqgMRZzLhsrp-YYgunRjdo9Hwwkmcog&usqp=CAU" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <div class="info-row">
								<span class="info-label">Comment ID:</span>
                                <span class="pr_id">{{ $comment->id}}</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">User ID:</span>
                                <span class="pr_id">{{ $comment->user_id}}</span>
                              
                            </div>
                            <div class="info-row">
								<span class="info-label">Product Name:</span>
                                <span class="pr_id">cay</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">User Comment:</span>
                                <span class="pr_id">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque nobis enim illum adipisci consequuntur magni facere. Unde culpa nihil maiores. Dolores, praesentium aut? Quidem ut numquam vitae fugit cupiditate soluta!</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">Current at:</span>
                                <span class="pr_id">14/4/1243</span>
                                
                            </div>
                            <div class="info-row">
								<span class="info-label">User Rate:</span>
                                <span class="pr_id">5 star</span>
                                
                            </div>
                        </div>
                    </div>
                    
					
				</div>
			</div>
</main>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/js/js_admin/navbar_sidebar.js')}}"></script>
<script src="{{ asset('assets/js/js_admin/datatable.js')}}"></script>


@endsection