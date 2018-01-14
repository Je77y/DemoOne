@extends('backend/layout/base')
@section('title', 'Chi tiết bài viết')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chủ đề: <span style="margin-left: 20px">{{ $chude->tenchude  }}</span>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Bài viết</li>
            </ol>
        </section>
        <section class="content">
            <div class="row nomargin nopadding" style="margin:0px; padding: 0px">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="row nomargin nopadding">
                                <div class="pull-left"><h3>Chi tiết bài viết</h3></div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="tblBaiViet" class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                <tr>
                                    <th style="width: 30px"></th>
                                    <th>Nội dung</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td >Tiêu đề</td>
                                    <td>{{ $baiviet->tenbaiviet  }}</td>
                                </tr>
                                </tbody>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <a href="/admin/chude" class="btn btn-info ">Quay lại</a>
                </div>
            </div>
        </section>
    </div>
@endsection
