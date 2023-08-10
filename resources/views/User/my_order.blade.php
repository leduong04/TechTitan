<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css_user/navlord.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/css_user/footer.css')}}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/my_oder.css')}}">
	

</head>
<body>
	<div class="container">
	<nav class="navbard">
        <div class="containerd">
        <a class="name_web" href=""><h2 class="h2n"><i class="fa-solid fa-seedling"></i> TECHTITAN</h2></a>
        <div class="search-bard">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Search">
        </div>
        <div class="contentd">
            <a href="" class="cart"><i class="fa-solid fa-basket-shopping"></i><span class="my-content"> Shopping Carts</span></a>
            <div class="dropdown-hotline">
            <a href="" class="hotline"><i class="fa-solid fa-phone-volume"></i><span class="my-content"> Hotline</span></a>
            <div class="hotl-btn">
                <a href="mailto:techtitan@aptech.vn" class="em"><span><i class="fa-regular fa-envelope"></i> Email : <span class="inf-btn">techtitan@aptech.vn</span></span></a>
                <a href="#" class="time"><span><i class="fa-regular fa-clock"></i> Time : <span class="inf-btn">8h00 - 19h00</span></span></a>
            </div>
            </div>
            <div class="dropdown-account">
            <a href="" class="account"><i class="fa-solid fa-circle-user"></i><span class="my-content"> Account</span></a>
            <div class="acc-btn">
                <a href="#" class="ai"><span>Account Information</span></a>
                <a href="#" class="mo"><span>My Order</span></a>
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

