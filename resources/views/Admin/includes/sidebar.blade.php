<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">




</head>

<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <i class="fa-regular fa-user io"></i>
            <span class="text">Admin</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#" onclick="changeText();">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="product();">
                    <i class='bx bxs-shopping-bag'></i>
                    <span class="text">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Danh mục sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-cart-alt'></i>
                    <span class="text">Đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Đánh giá</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Khách hàng</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="Team();">
                    <i class='bx bxs-group'></i>
                    <span class="text">Nhân viên</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-file'></i>
                    <span class="text">Thông tin trang</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-data'></i>
                    <span class="text">Thống kê báo cáo</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <script src="script.js"></script>
</body>

</html>