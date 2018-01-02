@extends('backend/layout/base') @section('title', 'Quản lý bài viết') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm mới bài viết</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chủ đề</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" class="form-control" placeholder="Company">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <textarea class="form-control" rows="5" name="content" placeholder="Tóm tắt"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea class="form-control ckeditor" rows="10" name="content" placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                            </div>
                            <a href="/admin/baiviet" class="btn btn-default pull-right">Quay lai</a>
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
@section('css')
<!-- Latest compiled and minified CSS -->

@endsection
@section('script')
<!-- Ckeditor  -->
<script src="ckeditor/ckeditor.js"></script>
<!-- Bootstrap Select -->

@endsection
