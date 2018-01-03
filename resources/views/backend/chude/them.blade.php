@extends('backend/layout/base') @section('title', 'Quản lý chủ đề') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm mới chủ đề / dự án</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="/admin/chude/tao" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên chủ đề</label>
                                        <input name="tenchude" type="text" class="form-control" placeholder="Company" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <textarea name="tomtat" class="form-control" rows="5" name="content" placeholder="Nội dung" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            Dự án
                                            <input style="margin-left: 15px;" name="duan" type="checkbox" value="1">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" class="form-control-file" name="hinhanh" required>
                                    </div>
                                </div>
                            </div>
                            <a href="/admin/chude" class="btn btn-default pull-right">Quay lai</a>
                            <button type="submit" class="btn btn-info btn-fill pull-left">Tạo mới</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection