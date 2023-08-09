@extends('User.templates.tpl_default', ['pageId'=>'my_order'])
@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/my_oder.css')}}">

@endsection

@section('content')
<div class="container">
		<main>
			<div class="breadcrumb">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / </li>
					<li><a href="account.html">Account</a></li>
					<li> / </li>
					<li>Orders</li>
				</ul>
			</div> <!-- End of Breadcrumb-->

			
			<div class="account-page">
				<div class="profile">
					<div class="profile-img">
						<img src="https://anphupet.com/wp-content/uploads/2020/11/Cho-Bulldog-Anh.jpg">
						<h2>Trung Thanh</h2>
						<p>trungthanh@gmail.com</p>
					</div>						
					<ul>
						<li><a href="#" class="active">Account <span>></span></a></li>
						<li><a href="#">My Orders <span>></span></a></li>
						<li><a href="#">Change Password <span>></span></a></li>
						<li><a href="#">Logout <span>></span></a></li>
					</ul>
				</div>
				<div class="account-detail">					
					<h2>My Orders</h2>
					<div class="order-detail">
						<table>
							<thead>
								<tr>
									<th>Date</th>
									<th>Order id</th>
									<th>Amount</th>
									<th>Processing status</th>
									<th>View</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>06-02-2020</td>
									<td>61245231241</td>
									<td>2,150</td>
									<td>Unprocessed</td>
									<td><a href="#">View</a></td>
								</tr>
								<tr>
									<td>08-02-2020</td>
									<td>612467771245</td>
									<td>5,000</td>
									<td>Unprocessed</td>
									<td><a href="#">View</a></td>
								</tr>
								<tr>
									<td>15-08-2020</td>
									<td>612874511233</td>
									<td>3000</td>
									<td>Processed</td>
									<td><a href="#">View</a></td>
								</tr>	
							</tbody>
						</table>
					</div>
				</div>				
			</div>		
		</main>
	</div>

@endsection

@section('js')


@endsection
