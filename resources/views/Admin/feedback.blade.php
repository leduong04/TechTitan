@extends('Admin.templates.tpl_default', ['pageId'=>'feedback'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS -->

<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_admin/feedback.css')}}">



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
						<h3>User Feedback</h3>
					</div>
					
					<table id="tb">
						<thead>
							<tr>
								<th>ID</th>
								<th>User Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Curent At</th>
                                <th>Action</th>								
							</tr>
						</thead>
						<tbody>
                        @foreach ($feedbacks as $feedback)
							<tr>
								<td>
									<p>{{ $feedback->id}}</p>
								</td>
                                <td>
                                    <p>
                                    {{ $feedback->fullname}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    {{ $feedback->email}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    {{ $feedback->messsage}}
                                    </p>
                                </td>
                                
                                <td>
                                    <p>
                                    {{ $feedback->current_at}}
                                    </p>
                                </td>
								<td>
									 <button class="delete-button">
										 <i class="fa-solid fa-trash"></i>
									 </button>
								</td>
							</tr>
						@endforeach
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