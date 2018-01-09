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
            height:100%;
            position:absolute;
            overflow:hidden;
            top:0;
            left:0;
            opacity:0;
            background-color:rgba(44, 62, 80, 0.8);
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
            background:rgba(44, 62, 80, 0.8);
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
@section('title', 'Quản lý Album')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách Album
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Album</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- /.row -->
            <div class="row nomargin nopadding" style="margin:0px; padding: 0px">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="row nomargin nopadding">
                                <button class="btn btn-primary pull-right margin-10"  onclick="createAlbum()"><i class="fa fa-plus"></i> Thêm mới</button>
                                <button class="btn btn-primary pull-right margin-10"  onclick="createImport()"><i class="fa fa-plus"></i> Import</button>
                            </div>
                        </div>
                        <div class="box-body" id="view-list-album">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
        <div class="modal fade" id="modal-edit"></div>
        <div class="modal fade" id="modal-view"></div>
        <div class="modal fade" id="modal-create" ></div>
        <div class="modal fade" id="modal-import" ></div>
    </div>
@endsection
@section('js')
    <script>

        var dataObj = decodeURIComponent("<?php echo rawurlencode($dsalbum); ?>");
        var jsdata = JSON.parse(dataObj);
        $(document).ready(function () {
            loadData(jsdata);
        })

        function reloadAction() {
            $.ajax({
                type: "get",
                url: '/admin/album/reload',
                dataType: 'json',
                success: function(mss) {
//                    location.href = location.href;
                    loadData(mss);
                },
                error: function() {
                    $.notify("Lỗi. Không thực hiện được thao tác", "error");
                }
            })
        }

        function drawHtml (obj) {
            var str = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding: 5px ">\n' +
                '<div class="hovereffect">\n' +
                '<img style="height: 170px" class="img-responsive" src="upload/hinhanh/' + obj.hinhanh +'" alt="' + obj.hinhanh +'">\n' +
                '<div class="overlay">\n' +
                '<a class="info" href="javascript:void(0)" onclick="editAlbum(' + obj.id + ')"  style="color: #3498db" title="Sửa"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>\n' +
                '<a class="info" href="javascript:void(0)" onclick="viewAlbum(' + obj.id + ')" style="color: #27ae60" title="Xem"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>';
            return str;
        }

        function loadData(data) {
            var a="";
            $.each(data, function(index, obj) {
                a+=drawHtml(obj);
            })
            $("#view-list-album").html(a);
        }
        var createImport = function(){
            $.ajax({
                type: 'get',
                url: '/admin/album/import',
                success: function(data){
                    $("#modal-import").html(data);
                    $("#modal-import").modal("show");
                },
                error: function(){
                    console.log('Lỗi');
                }
            })
        }

        var createAlbum = function(){
            $.ajax({
                type: 'get',
                url: '/admin/album/create',

                success: function(data){
                    $("#modal-create").html(data);
                    $("#modal-create").modal("show");
                },
                error: function() {
                    console.log('Lỗi khi gọi button thêm bài viết')
                }

            })
        }
        var editAlbum = function(id) {
            $.ajax({
                type: 'get',
                url: '/admin/album/edit/'+id,
                success: function(data) {
                    $("#modal-edit").html(data);
                    $("#modal-edit").modal("show");
                },
                error: function() {
                    console.log('Lỗi')
                }
            })
        }

        var viewAlbum = function (id) {
            $.ajax({
                type: 'get',
                url: '/admin/album/show/'+id,
                success: function (data) {
                    $("#modal-view").html(data);
                    $("#modal-view").modal("show");
                },
                error: function() {
                    console.log('Lỗi')
                }
            })
        }

    </script>
@endsection
