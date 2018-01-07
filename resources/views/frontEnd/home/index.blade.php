@extends('frontEnd/layout/baseClient')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="upload/diatrunghai.png" alt="First slide">

                    </div>

                    <div class="item">
                        <img src="upload/tong-theg.jpg" alt="Second slide">

                    </div>
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
                                    <div class="content-img col-sm-4 nomargin nopadding center" style="    max-height: 220px;">
                                        <img src="upload/20180106081548-9832.jpg">
                                    </div>
                                    <div class="content-text col-sm-8 nomargin nopadding" style="    max-height: 220px;">
                                        <div class="content-title">
                                            Biệt thự, nhà liên kế “mạnh tay” khuyến mại mùa cận Tết hệ số điều chỉnh giá
                                        </div>
                                        <div class="content-tomtat">
                                            Thông tin từ Văn phòng UBND Tp.HCM cho biết, phương án hệ số điều chỉnh giá đất để tính bồi thường, hỗ trợ cho 3 dự án trên địa bàn vừa được UBND thành phố phê duyệt.
                                            hông tin từ Văn phòng UBND Tp.HCM cho biết, phương án hệ số điều chỉnh giá đất để tính bồi thường, hỗ trợ cho 3 dự án trên địa bàn vừa được UBND thành phố phê duyệt.
                                            hương án hệ số điều chỉnh giá đất để tính bồi thường...
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        <li><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin tức, dự án bất động sản nổi bật tuần từ 1/1 - 6/1/2018 </li>
                                        <li><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin tức, dự án bất động sản nổi bật tuần từ 1/1 - 6/1/2018</li>
                                        <li><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin tức, dự án bất động sản nổi bật tuần từ 1/1 - 6/1/2018</li>
                                        <li><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin tức, dự án bất động sản nổi bật tuần từ 1/1 - 6/1/2018</li>
                                        <li><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin tức, dự án bất động sản nổi bật tuần từ 1/1 - 6/1/2018</li>


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
                                        <div class="col-sm-6 duan-item">
                                            <div class="duan-item-img">
                                                <img src="upload/20171003134542-c89a.jpg"/>
                                            </div>
                                            <div class="duan-item-name center">
                                                Golden City
                                            </div>
                                        </div>
                                        <div class="col-sm-6 duan-item">
                                            <div class="duan-item-img">
                                                <img src="upload/20171003134542-c89a.jpg"/>
                                            </div>
                                            <div class="duan-item-name center">
                                                Golden City
                                            </div>
                                        </div>
                                        <div class="col-sm-6 duan-item">
                                            <div class="duan-item-img">
                                                <img src="upload/20171003134542-c89a.jpg"/>
                                            </div>
                                            <div class="duan-item-name center">
                                                Golden City
                                            </div>
                                        </div>
                                        <div class="col-sm-6 duan-item">
                                            <div class="duan-item-img">
                                                <img src="upload/20171003134542-c89a.jpg"/>
                                            </div>
                                            <div class="duan-item-name center">
                                                Golden City
                                            </div>
                                        </div>
                                        <div class="col-sm-6 duan-item">
                                            <div class="duan-item-img">
                                                <img src="upload/20171003134542-c89a.jpg"/>
                                            </div>
                                            <div class="duan-item-name center">
                                                Golden City
                                            </div>
                                        </div>
                                        <div class="col-sm-6 duan-item">
                                            <div class="duan-item-img">
                                                <img src="upload/20171003134542-c89a.jpg"/>
                                            </div>
                                            <div class="duan-item-name center">
                                                Golden City
                                            </div>
                                        </div>
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
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label">Họ tên</label> <span class="requireTxt">(*)</span>
                            <div>
                                <input type="text" class="form-control"/>
                                <div class="note-error">
                                    <span class="error mes-note-error" id="errMatKhau"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label> <span class="requireTxt">(*)</span>
                            <div>
                                <input type="text" class="form-control"/>
                                <div class="note-error">
                                    <span class="error mes-note-error" id="errMatKhau"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số điện thoại</label> <span class="requireTxt">(*)</span>
                            <div>
                                <input type="text" class="form-control"/>
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
                    </div>
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
        $("#slimScrollDiv").slimScroll({
            height: '400px'
        });
    </script>
@endsection