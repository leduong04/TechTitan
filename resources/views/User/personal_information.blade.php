<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/personal_i.css')}}">
     <!-- Box-icon -->
	 <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css_user/navlord.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/css_user/footer.css')}}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar">
    	<div class="container">
      	<a class="name_web" href=""><h2><i class="fa-solid fa-seedling"></i> TECHTITAN</h2></a>
      	<div class="search-bar">
        	<i class="fa-solid fa-magnifying-glass"></i>
        	<input type="search" placeholder="Search">
      	</div>
      	<div class="content">
        	<a href="" class="cart"><i class="fa-solid fa-basket-shopping"></i><span class="my-content"> Shopping Carts</span></a>
        	<div class="dropdown-hotline">
          	<a href="" class="hotline"><i class="fa-solid fa-phone-volume"></i><span class="my-content"> Hotline</span></a>
          	<div class="hotl-btn">
            	<a href="mailto:techtitan@aptech.vn"><span><i class="fa-regular fa-envelope"></i> Email : <span class="inf-btn">techtitan@aptech.vn</span></span></a>
            	<a href="#"><span><i class="fa-regular fa-clock"></i> Time : <span class="inf-btn">8h00 - 19h00</span></span></a>
          	</div>
        	</div>
        	<div class="dropdown-account">
          	<a href="" class="account"><i class="fa-solid fa-circle-user"></i><span class="my-content"> Account</span></a>
          	<div class="acc-btn">
            	<a href="#"><span>Account Information</span></a>
            	<a href="#"><span>My Order</span></a>
          	</div>
        	</div>
      	</div>
    	</div>
  	</nav>
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
	</div>
	<script src="{{ asset('assets/js/js_admin/nav.js')}}"></script>
</body>
</html>
