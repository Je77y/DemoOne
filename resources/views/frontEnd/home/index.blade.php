@extends('frontEnd/layout/baseClient')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($dsslide as $key => $slide)
                        @if ($slide->hienthi == 1)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $key  }}" @if($key == 0) {{'class="active"' }} @endif></li>
                        @endif
                    @endforeach
                </ol>
                <div class="carousel-inner" >
                    @foreach($dsslide as $key => $slide)
                        @if ($slide->hienthi == 1)
                        <div class="item @if($key == 0) {{ 'active' }} @endif">
                            <img src="upload/slide/{{ $slide->hinhanh }}" alt="{{ $slide->hinhanh }}" >
                        </div>
                        @endif
                    @endforeach

                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
            <!-- Content Header (Page header) -->

            <div id="tinDauTrang">
                <div class="row">
                    <div class="col-sm-8" id="tinMoi">
                        <div class=" block">
                            <div class="block-header">
                                <span class="block-title">Tin mới</span>
                            </div>
                            <div class="block-body">
                                <div class="block-content row nomargin">
                                    <div class="content-img col-sm-4 nomargin nopadding center">
                                        <img id="tinmoi" src="upload/hinhanh/{{ $baivietmoinhat[0]->hinhanh }}" alt="{{ $baivietmoinhat[0]->hinhanh }}" >
                                    </div>
                                    <div class="content-text col-sm-8 nomargin nopadding">
                                        <div class="content-title">
                                            <a href="/post/{{ $baivietmoinhat[0]->id }}">{{ $baivietmoinhat[0]->tenbaiviet }}</a>
                                        </div>
                                        <div class="content-tomtat">
                                            {{ $baivietmoinhat[0]->tomtat }}
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        @foreach($dsbaiviet as $baiviet)
                                            <li><i class="fa fa-newspaper-o" aria-hidden="true"></i><a href="/post/{{ $baiviet->id }}">{{ $baiviet->tenbaiviet }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4" id="duAnNoiBat">
                        <div class=" block">
                            <div class="block-header">
                                <span class="block-title">Dự án nội bật</span>
                            </div>
                            <div class="block-body" id="slimScrollDiv">
                                <div class="block-content">
                                    <div class="row nomargin nopadding" >
                                        @foreach($dsduan  as $duan)
                                            @if($duan->noibat == 1)
                                                <div class="col-sm-6 col-xm-12 duan-item">
                                                    <div class="duan-item-img">
                                                        <img src="upload/hinhanh/{{ $duan->hinhanh  }}" id="duannoibat"/>
                                                    </div>
                                                    <div class="duan-item-name text-center">
                                                        <a href="/duan/{{ $duan->id }}">{{ $duan->tenthuongmai  }}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="dangKyEmail">
                <div class="form-email">
                    <div class="title">ĐĂNG KÝ NHẬN THÔNG TIN</div>
                    <div class="content">
                        <form class="form-horizontal" method="post" action="/dangkyemail" id="frm-dangkyemail">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">Họ tên</label> <span class="requireTxt">(*)</span>
                                <div>
                                    <input type="text" name="hoten" class="form-control"/>
                                    <div class="note-error">
                                        <span class="error mes-note-error" id="errMatKhau"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label> <span class="requireTxt">(*)</span>
                                <div>
                                    <input type="text" name="email" class="form-control"/>
                                    <div class="note-error">
                                        <span class="error mes-note-error" id="errMatKhau"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Số điện thoại</label> <span class="requireTxt">(*)</span>
                                <div>
                                    <input type="text" name="sodienthoai" class="form-control"/>
                                    <div class="note-error">
                                        <span class="error mes-note-error" id="errMatKhau"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <button class="btn btn-default btn-lg">
                                    ĐĂNG KÝ
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
@endsection
@section("js")
    <script>
//        $("#frm-dangkyemail").submit(function(){
//            var data = $(this).serialize();
//            var url = $(this).attr("action");
//            var method = $(this).attr("method");
//            $.ajaxSetup({
//                headers: {
//                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                }
//            });
//            $.ajax({
//                type: method,
//                url: url,
//                data: data,
//                success: function(data){
//                    if (mss.status)
//                    {
//                        $.notify(mss.message, "success");
//                        window.location.replace();
//                    }
//                    else
//                    {
//
//                    }
//                },
//                error: function() {
//                    console.log('Lỗi khi gọi khi đăng ký email')
//                }
//            });
//            return false;
//        });

        var mss = '<?php if(isset($mss)) echo $mss ?>';
        if (mss.status) {
            $.notify(mss.message, "success");
        }
        $("#slimScrollDiv").slimScroll({
            height: '350px'
        });
    </script>
@endsection