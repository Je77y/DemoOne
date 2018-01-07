@extends('backend/layout/base')
@section('css')

@endsection
@section('title', 'Quản lý BlockContent')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách BlockContent
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">BlockContent</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- /.row -->
            <div class="row nomargin nopadding" style="margin:0px; padding: 0px">
                <div class="col-xs-12">
                    <div class="box">

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="tblBlockContent" class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                <tr>
                                    <th class="width-30">Id</th>
                                    <th>Tên </th>
                                    <th>Tóm tắt</th>
                                    <th>Nội dung</th>
                                    <th>Hiển thị</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="blockcontent-info">

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
    </div>
@endsection
@section('js')

@endsection
