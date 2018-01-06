@extends('backend/layout/base')
@section('css')

@endsection
@section('title', 'Quản lý bài viết')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách bài viết
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Bài viết</li>
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
                                <button class="btn btn-primary pull-right margin-10"  onclick="createBaiViet()"><i class="fa fa-plus"></i> Thêm mới</button>
                                <button class="btn btn-primary pull-right margin-10" data-toggle="collapse" data-target="#timkiembox"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row nomargin nopadding">
                                <div id="timkiembox" class="collapse">
                                    <div class="row nomargin nopadding">
                                        <div class="col-md-offset-1 col-md-10">
                                            <form action="/admin/baiviet/search" method="post" role="form" class="form-horizontal" id="frm-searchChuDe">
                                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                                <div class="form-group col-md-6">
                                                    <label class="control-label col-md-3">Từ khóa</label>
                                                    <div class="col-md-9">
                                                        <input name="tukhoa" type="text" class="form-control" placeholder="Từ khóa...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label col-md-3">Loại</label>
                                                    <div class="col-md-9">
                                                        <select name="loai" class="form-control" style="width: 100%;">
                                                            <option selected="selected" value="-1">Tất cả</option>
                                                            <option value="0">Chủ đề</option>
                                                            <option value="1">Dự án</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="center">
                                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                                    <button type="button" class="btn btn-danger" onclick="closeTimKiem()">Đóng</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="tblChuDe" class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                <tr>
                                    <th class="width-30">Id</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên bài viết</th>
                                    <th>Chủ đề</th>
                                    <th>Hiển thị</th>
                                    <th>Slub</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="baiviet-info">
                                @include('backend/baiviet/_listTable')
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
        <div class="modal fade" id="modal-edit"></div>
        <div class="modal fade" id="modal-delete"></div>
        <div class="modal fade" id="modal-create" ></div>
    </div>
@endsection
@section('js')
    <script>
        var createBaiViet = function(){
            $.ajax({
                type: 'get',
                url: '/admin/baiviet/create',
                success: function(data){
                    $("#modal-create").html(data);
                    $("#modal-create").modal("show");
                }
            })
        }

        var editBaiViet = function(id){
            $.ajax({
                type: 'get',
                url: '/admin/baiviet/edit/'+id,
                success: function(data) {
                    $("#modal-edit").html(data);
                    $("#modal-edit").modal("show");
                }
            })
        }

        var deleteBaiViet = function(id) {
            $.ajax({
                type: 'get',
                url: '/admin/baiviet/delete/'+id,
                success: function(data) {
                    $("#modal-delete").html(data);
                    $("#modal-delete").modal("show");
                },
                error: function() {
                    console.log('Lỗi')
                }
            })
        }
//        function reloadAction() {
//            $.ajax({
//                type: "get",
//                url: '/admin/baiviet/reload',
//                dataType: 'json',
//                success: function(mss) {
//                    loadDataTable(mss);
//                },
//                error: function() {
//                    $.notify("Lỗi. Không thực hiện được thao tác", "error");
//                }
//            })
//        }

    </script>
@endsection
