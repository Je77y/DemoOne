<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang quản lý</title>
    <base href="{{ asset('') }}" >
    <!-- Bootstrap core CSS-->
    <link href="backend/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="backend/asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="backend/asset/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">
            <h3>Quản lý Admin</h3>
        </div>
        <div >@if( isset($thongbao)) {{ $thongbao  }} @endif</div>
        <div class="card-body">
            <form action="/admin/truycap" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" name="email" type="email"  placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label for="matkhau">Mật khẩu</label>
                    <input class="form-control" name="matkhau" type="password" placeholder="Mật khẩu">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="backend/asset/vendor/jquery/jquery.min.js"></script>
<script src="backend/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="backend/asset/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
