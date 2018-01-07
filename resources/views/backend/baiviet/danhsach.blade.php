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
                                <button class="btn btn-primary pull-right margin-10"  onclick="createBaiViet1({{ $idchude  }})"><i class="fa fa-plus"></i> Thêm mới</button>
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
                            <table id="tblBaiViet" class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                <tr>
                                    <th class="width-30">Id</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên bài viết</th>
                                    <th>Hiển thị</th>
                                    <th>Slub</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="baiviet-info">
                                {{--@include('backend/baiviet/_listTable')--}}
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
        var idchude = '<?php echo $idchude; ?>';


        {{--var jsdata = JSON.parse(dataObj);--}}
        {{--$(document).ready(function () {--}}
            {{--loadDataTable(jsdata);--}}
        {{--})--}}


        var createBaiViet1 = function(id){
            $.ajax({
                type: 'get',
                url: '/admin/baiviet/create/'+id,

                success: function(data){
                    $("#modal-create").html(data);
                    $("#modal-create").modal("show");
                },
                error: function() {
                    console.log('Lỗi khi gọi button thêm bài viết')
                }

            })
        }
        var editBaiViet = function(id) {
            $.ajax({
                type: 'get',
                url: '/admin/baiviet/edit/'+id,
                success: function(data) {
                    $("#modal-edit").html(data);
                    $("#modal-edit").modal("show");


                },
                error: function() {
                    console.log('Lỗi')
                }
            })
        }

        function deleteBaiViet(id) {
            $.confirm({
                'title': 'Xác nhận xóa',
                'message': 'Bạn có chắc chắn muốn xóa?',
                'buttons': {
                    'Đồng ý': {
                        'class': 'btn-confirm-yes btn-info',
                        'action': function () {
                            $.ajax({
                                type: 'GET',
                                url: '/admin/baiviet/destroy/'+id,
                                dataType: 'json',
                                success: function(mss) {
                                    if(mss.status){
                                        $.notify("Xóa bài viết thành công", "success");
                                        $("#modal-delete").modal("hide");
                                        reloadAction();
                                    }
                                    else {
                                        $.notify(mss.message, "error");
                                    }
                                },
                                error: function() {
                                    $.notify("Lỗi. không thực hiện được thao tác", "error");
                                }
                            })
                        }
                    },
                    'Hủy bỏ': {
                        'class': 'btn-danger',
                        'action': function () { }
                    }
                }
            });
        }

        function reloadAction() {
            $.ajax({
                type: "get",
                url: '/admin/baiviet/reload/'+idchude,
                dataType: 'json',
                success: function(mss) {
                    loadDataTable(mss);
                },
                error: function() {
                    $.notify("Lỗi. Không thực hiện được thao tác", "error");
                }
            })
        }

        var loadDataTable = function(item) {
            var table = $('#tblBaiViet').DataTable({

                "data": item,
                "bDestroy": true,
                "iDisplayLength": 20,
                paging: true,
                "aoColumns": [{
                    "orderable": false,
                    "sClass": "center",
                    "mData": function(data, type, dataToSet) {
                        return '<input class="global_" type="checkbox" name="ids" value="' + data.id + '" />';
                    },
                    "orderable": false,
                },

                    //{
                    //    "class": 'details-control',
                    //    "orderable": false,
                    //    "data": null,
                    //    "defaultContent": ''
                    //},
                    {
                        "mData": function(data, type, dataToSet) {
                            var str = '<img class="attachment-img center" alt="' + data.tenbaiviet + '" src="/upload/' + data.hinhanh + '" style="width: 50px; height: 50px">';
                            return str;
                        },
                    },
                    {
                        "mData": function(data, type, dataToSet) {
                            return data.tenbaiviet;
                        },
                    },
                    {
                        "mData": function(data, type, dataToSet) {
                            var str = data.hienthi === 0 ? '<span class=" badge bg-aqua">Không</span>' : '<span class=" badge bg-green">Có</span>';
                            return str;
                        },
                    },
                    {
                        "mData": function(data, type, dataToSet) {
                            return data.slug;
                        },
                    },
                    {
                        "orderable": false,
                        "sClass": "center",
                        "mData": function(data, type, dataToSet) {
                            var str = '<a href="/admin/baiviet/show/' + data.id + '" ><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> ';
                            str += '<a href="javascript:void(0)" onclick="editBaiViet(' + data.id + ')"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>';
                            str += '<a href="javascript:void(0)" onclick="deleteBaiViet(' + data.id + ')" style="color: #f56954"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>';

                            return str;
                        },

                    },

                ],
                //"order": [[1, 'asc']],
                "fnDrawCallback": function(oSettings) {

                    //runAllCharts()
                }
            });
        }

    </script>
@endsection
