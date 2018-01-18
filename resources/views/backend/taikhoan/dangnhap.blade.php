@extends('backend/taikhoan/layout/base')
@section('content')
<div class="login-box-body">
    <p class="login-box-msg">Đăng nhập để bất đầu phiên làm việc của bạn</p>

    <form action="/admin/truycap" method="post">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">

            <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
            <!-- /.col -->
        </div>
    </form>
    <a href="/admin/quenmatkhau">Bạn quên mật khẩu?</a><br>
</div>
@endsection
