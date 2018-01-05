<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Sửa chủ đề</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="/admin/chude/update" role="form" enctype="multipart/form-data" method="POST" id="frm-capnhat">
                        <input type="hidden" name="id" value="{{ $chude->id }}">
                        <div class="form-group">
                            <label>Loại</label>
                            <select name="loai" class="form-control select2" style="width: 100%;">
                                <option value="0" @if ($chude->duan == 0) {{ 'selected' }} @endif>Chủ đề</option>
                                <option value="1" @if ($chude->duan == 1) {{ 'selected' }} @endif>Dự án</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên chủ đề</label>
                            <input name="tenchude" type="text" class="form-control" placeholder="Tên chủ đề" value="{{ $chude->tenchude }}">
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea name="tomtat" class="form-control" row="8" placeholder="Tóm tắt">{{ $chude->tomtat }}</textarea>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <img class="img-responsive pad" src="{{ $chude->hinhanh }}">
                            <input type="file" name="hinhanh">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default " data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-success pull-left" onclick="CapNhatChuDe({{ $chude->id }})">Cập nhật</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<script>
var CapNhatChuDe = function(id){
    var data = $("#frm-capnhat").serialize();
    var post = $("#frm-capnhat").attr('method');
    var url = $("#frm-capnhat").attr('action');
    $.ajaxSetup({
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
        type: post,
        url: url,
        contentType:'application/json',
        dataType:'json',
        data: data,
        success: function(rs) {
            $.notify(rs.noidung, "success");
        },
        error:function()
        {
            $.notify("Cap nhat that bai", "error");
        }
    });
}
</script>