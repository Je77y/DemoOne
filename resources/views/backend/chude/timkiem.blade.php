@extends('backend/layout/base') @section('title', 'Quản lý chủ đề') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tìm kiếm: {{ $text }} </h4>
                        <br>
                        <form action="/admin/chude/timkiem" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Từ khóa</label>
                                        <input name="tukhoa" type="text" class="form-control" placeholder="Từ khóa ...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Loại dự án</label>
                                        <select class="form-control" name="isDuAn">
                                            <option value="-1" @if($duan == -1) {{ 'selected' }} @endif>Tất cả</option>
                                            <option value="0" @if($duan == 0) {{ 'selected' }} @endif >Chủ đề</option>
                                            <option value="1" @if($duan == 1) {{ 'selected' }} @endif>Dự án</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-fill pull-left"><i class="fa fa-search" aria-hidden="true"></i> Lọc / Tìm kiếm</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <a href="/admin/chude/them" class="btn btn-fill btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>  Thêm chủ đề / dự án</a>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Chủ đề</th>
                                <th>Dự án</th>
                                <th>Tóm tắt</th>
                                <th>Hình ảnh</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                                    $page = isset($_GET['page']) ? $_GET['page'] : 0; 
                                    $index = 1 + $page*9 
                                ?>
                                    @foreach($dschude as $chude)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $chude->tenchude }}</td>
                                        <td>
                                            @if($chude->duan == 1)
                                            <span class="label label-primary">Dự án</span> @else
                                            <span class="label label-info">Chủ đề</span> @endif
                                        </td>
                                        <td>{{ $chude->tomtat }}</td>
                                        <td>
                                            <img src="upload/{{ $chude->hinhanh }}" style="width: 80px; height: 80px; " alt="loi">
                                        </td>
                                        <td class="text-right">
                                            <a href="/admin/chude/sua/{{ $chude->id }}" type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                            <a href="/admin/chude/xoa/{{ $chude->id }}" type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="/admin/chude" class="btn btn-default pull-left" style="margin-bottom: 10px; margin-left: 15px ">Quay lai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection