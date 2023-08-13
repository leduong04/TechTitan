@extends('Admin.templates.tpl_default', ['pageId'=>'product'])

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
						<h3>Product</h3>
					</div>
					<button id="add-button">
						<i class="fa-solid fa-plus"></i><a href="#"> Add new product</a>
					</button>
					<table id="tb">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
                                <th>Categories ID</th>
                                <th>Quantity</th>
                                <th>Current at</th>
                                <th>Action</th>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>#4698</p>
								</td>
                                <td>
                                    <p>
                                        Flower
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        732597
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        732597
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        9/8/2023
                                    </p>
                                </td>
								<td>
									<button class="edit-button">
										<i class="fa-solid fa-pen-to-square"></i>
									 </button>
                                     <button class="detail-button">
                                        <i class="fa-solid fa-info"></i>
                                    </button>
									 <button class="delete-button">
										 <i class="fa-solid fa-trash"></i>
									 </button>
								</td>
							</tr>
							
						</tbody>
					</table>
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