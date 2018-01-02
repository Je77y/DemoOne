@extends('backend/layout/base') @section('title', 'Quản lý chủ đề') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật chủ đề / dự án</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="/admin/chude/capnhat/{{$chude->id}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên chủ đề</label>
                                        <input name="tenchude" type="text" class="form-control" placeholder="Company" value="{{ $chude->tenchude }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <textarea name="tomtat" class="form-control" rows="5" name="content" placeholder="Nội dung" required>{{ $chude->tomtat }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Dự án</label>
                                        <input name="duan" type="checkbox" class="checkbox" value="1"  @if($chude->duan == 1)
                                            {{ 'checked' }}
                                        @endif
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <img src="upload/{{ $chude->hinhanh }}" alt="" style="width: 640px; height: 480px">
                                        <br>
                                        <input type="file" class="form-control-file" name="hinhanh" value="{{ $chude->hinhanh }}">
                                    </div>
                                </div>
                            </div>
                            <a href="/admin/chude" class="btn btn-default pull-right">Quay lai</a>
                            <button type="submit" class="btn btn-info btn-fill pull-left">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
