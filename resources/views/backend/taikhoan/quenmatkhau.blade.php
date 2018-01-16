@extends('backend/taikhoan/layout/base')
@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">Vui lòng nhập email của bạn</p>

        <form action="/admin/xacnhan" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Xác nhận</button>
            </div>
        </form>
    </div>
@endsection
