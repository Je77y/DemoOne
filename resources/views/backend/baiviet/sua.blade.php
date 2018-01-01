@extends('backend/layout/base') @section('title', 'Quản lý bài viết') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật bài viết</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" value="michael23">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Company" value="Mike">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="City" value="Mike">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea class="form-control ckeditor" rows="10" name="content" placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
