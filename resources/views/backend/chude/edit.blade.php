<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <div class="center">
                <h4 class="modal-title">Sửa chủ đề</h4>
            </div>
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
                            <label>Tên chủ đề</label> <span class="requireTxt">(*)</span>
                            <input name="tenchude" type="text" class="form-control required" placeholder="Tên chủ đề" value="{{ $chude->tenchude }}">
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label> <span class="requireTxt">(*)</span>
                            <textarea name="tomtat" class="form-control required" row="8" placeholder="Tóm tắt">{{ $chude->tomtat }}</textarea>
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <img class="img-responsive pad" src="upload/{{ $chude->hinhanh }}" alt="{{ $chude->tenchude }}">
                            <input type="file" name="hinhanh">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="center">
                <button type="button" class="btn btn-success" onclick="CapNhatChuDe({{ $chude->id }})">Cập nhật</button>
                <button type="button" class="btn btn-default " data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<script>
$("#frm-capnhat").submit(function() {
    var valid = checkForm("frm-capnhat");
    if (valid) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var dataString;
        event.preventDefault();
        var contentType1 = false;
        var action = $("#frm-capnhat").attr("action");
        if ($("#frm-capnhat").attr("enctype") == "multipart/form-data") {
            //this only works in some browsers.
            //purpose? to submit files over ajax. because screw iframes.
            //also, we need to call .get(0) on the jQuery element to turn it into a regular DOM element so that FormData can use it.
            dataString = new FormData($("#frm-capnhat").get(0));
            contentType1 = false;
            processData = false;
        } else {
            // regular form, do your own thing if you need it
        }
        $.ajax({
            type: "POST",
            url: action,
            data: dataString,
            dataType: "json", //change to your own, else read my note above on enabling the JsonValueProviderFactory in MVC
            contentType: false,
            processData: false,
            success: function(mss) {

                if (mss.status) {

                    $.notify(mss.message, "success");
                    // console.log(mss.noidung);
                    //
                    $("#modal-default").modal("hide");
                    reloadAction();
                } else {
                    $.notify(mss.message, "error");
                }
            },
            error: function() {
                $.notify("Loi. Them that bai", "error");
            }
        });
    }

})

var CapNhatChuDe = function(id) {
    $("#frm-capnhat").submit();
}
</script>