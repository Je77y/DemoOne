@extends('backend/layout/base') @section('title', 'Quản lý bài viết') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Bài viết</h4>
                        <p class="category">Here is a subtitle for this table</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                        <a href="/admin/baiviet/them" class="btn btn-primary">Tạo bài viết</a>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <form action="#" method="get" accept-charset="utf-8">
                            <div class="col-md-offset-4 col-md-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Từ khóa ...">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                        </div>
                    </div>
                    

                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <th>ID</th>
                                <th>Tên bài</th>
                                <th>Chủ đề</th>
                                <th>Hiển thị</th>
                                <th>Slug</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td class="text-right">
                                        <a type="button" rel="tooltip" title="Xem" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                    <td class="text-right">
                                        <a type="button" rel="tooltip" title="Xem" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                    <td>Baileux</td>
                                    <td class="text-right">
                                        <a type="button" rel="tooltip" title="Xem" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                    <td>Overland Park</td>
                                    <td class="text-right">
                                        <a type="button" rel="tooltip" title="Xem" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Doris Greene</td>
                                    <td>$63,542</td>
                                    <td>Malawi</td>
                                    <td>Feldkirchen in Kärnten</td>
                                    <td class="text-right">
                                        <a type="button" rel="tooltip" title="Xem" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mason Porter</td>
                                    <td>$78,615</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td class="text-right">
                                        <a type="button" rel="tooltip" title="Xem" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                        <a type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>    
        </div>
    </div>
</div>
@endsection