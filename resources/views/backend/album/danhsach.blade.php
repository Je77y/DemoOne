@extends('backend/layout/base') @section('title', 'Quản lý bài viết') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Album</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>
                    <div class="col-md-6">
                        <a href="/admin/baiviet/them" class="btn btn-primary">Thêm Album</a>
                    </div>
                    <div class="col-md-6">
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
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Mô tả</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Netherlands</td>
                                    <td>Baileux</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Korea, South</td>
                                    <td>Overland Park</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Malawi</td>
                                    <td>Feldkirchen in Kärnten</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Sửa" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
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
