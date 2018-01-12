@extends('backend/layout/base')
@section('css')
    <style>
        .hovereffect {
            width:100%;
            height:100%;
            float:left;
            overflow:hidden;
            position:relative;
            text-align:center;
            cursor:default;
        }

        .hovereffect .overlay {
            width:100%;
            height:50.5%;
            position:absolute;
            overflow:hidden;
            top:0;
            left:0;
            opacity:0;
            background-color:rgba(0,0,0,0.5);
            -webkit-transition:all .4s ease-in-out;
            transition:all .4s ease-in-out
        }

        .hovereffect img {
            display:block;
            position:relative;
            -webkit-transition:all .4s linear;
            transition:all .4s linear;
        }

        .hovereffect h2 {
            text-transform:uppercase;
            color:#fff;
            text-align:center;
            position:relative;
            font-size:17px;
            background:rgba(0,0,0,0.6);
            -webkit-transform:translatey(-100px);
            -ms-transform:translatey(-100px);
            transform:translatey(-100px);
            -webkit-transition:all .2s ease-in-out;
            transition:all .2s ease-in-out;
            padding:10px;
        }

        .hovereffect a.info {
            text-decoration:none;
            display:inline-block;
            text-transform:uppercase;
            color:#fff;
            border:1px solid #fff;
            background-color:transparent;
            opacity:0;
            filter:alpha(opacity=0);
            -webkit-transition:all .2s ease-in-out;
            transition:all .2s ease-in-out;
            margin:50px 0 0;
            padding:7px 14px;
        }

        .hovereffect a.info:hover {
            box-shadow:0 0 5px #fff;
        }

        .hovereffect:hover img {
            -ms-transform:scale(1.2);
            -webkit-transform:scale(1.2);
            transform:scale(1.2);
        }

        .hovereffect:hover .overlay {
            opacity:1;
            filter:alpha(opacity=100);
        }

        .hovereffect:hover h2,.hovereffect:hover a.info {
            opacity:1;
            filter:alpha(opacity=100);
            -ms-transform:translatey(0);
            -webkit-transform:translatey(0);
            transform:translatey(0);
        }

        .hovereffect:hover a.info {
            -webkit-transition-delay:.2s;
            transition-delay:.2s;
        }
    </style>
@endsection
@section('title', 'BlockContent')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tổng quan dự án
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">BlockContent</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="mailbox-read-message">
                                <h3 class="box-title">Chủ đề  </h3>
                                <p>{{ $block->ChuDe->tenchude }}</p>
                            </div>
                        </div>
                        <div class="box-header with-border ">
                            <div class="mailbox-read-message">
                                <h3 class="box-title">Loại Block</h3>
                                <p>{{ $block->LoaiBlock->ten  }}</p>
                            </div>
                        </div>
                        <div class="box-header with-border ">
                            <div class="mailbox-read-message">
                                <h3 class="box-title">Tên Block</h3>
                                <p>{{ $block->tenblock  }}</p>
                            </div>
                        </div>
                        <div class="box-header with-border ">
                            <div class="mailbox-read-message">
                                <h3 class="box-title">Tóm tắt</h3>
                                <p>{{ $block->tomtat  }}</p>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-header with-border">
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <h3 class="box-title">Nội dung</h3>
                                <p>{!! $block->noidung !!}</p>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-header">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="hovereffect">
                                    <img style="width: 350px; height: 200px" class="img-responsive" src="upload/hinhanh/07fB-123.jpg" alt="">
                                    <div class="overlay">
                                        <h2>Hover effect 3</h2>
                                        <a class="info" href="#">Cập nhật</a>
                                        <a class="info" href="#">Xem</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                        <div class="box-footer">
                            <a href="/admin/blockcontent/{{ $block->ChuDe->id }}" type="button" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i>  Quay lại</a>
                            <a href="javascript:void(0)" onclick="editBlockContent({{ $block->id }})" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>  Cập nhật</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        <div class="modal fade" id="modal-edit"></div>
    </div>



@endsection
<script>
    var editBlockContent = function(id) {
        $.ajax({
            type: 'get',
            url: '/admin/blockcontent/edit/'+id,
            success: function(data) {
                $("#modal-edit").html(data);
                $("#modal-edit").modal("show");
            },
            error: function() {
                console.log('Lỗi')
            }
        })
    }
</script>

