@extends('User.templates.tpl_default', ['pageId'=>'personal_information'])
@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/personal_i.css')}}">

@endsection

@section('content')
<div class="container">
		<main>
			<div class="breadcrumb">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / </li>
					<li>Account</li>
				</ul>
			</div>
			
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
					<h2>Account</h2>
					<div class="billing-detail">					
						<form class="checkout-form">
							<div class="form-inline">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" id="fname" name="fname" value="Nguyen Le Trung Thanh">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" id="email" name="email" value="trungthanhcva2206@gmail.com">
								</div>
							</div>
							<div class="form-inline">
								<div class="form-group">
									<label>Gender</label>
									<select id="gender" name="gender">
										<option selected>---Select a Gender---</option>
										<option value="Male">Male</option>
                                        <option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea style="resize:none" id="address" name="address" rows="3">xyz area, street 24 </textarea>
							</div>
							<div class="form-inline">					
								<div class="form-group">
									<label>Date of birth</label>
									<input type="text" id="date" name="date" minlength="11" maxlength="11" value="2004/06/22">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" id="phone" name="phone" minlength="11" maxlength="11" value="555-XXXXXXX">
								</div>
							</div>
							<div class="form-group">
								<label></label>
								<input type="submit" id="update" name="update" value="Update">
							</div>
						</form>		
					</div>
				</div>				
			</div>		
		</main>
	</div>
@endsection

@section('js')


@endsection
