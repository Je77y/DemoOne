<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="center">
                <h4 class="modal-title">Đổi mật khẩu người dùng</h4>
            </div>
        </div>
        <div class="modal-body">
            <div class="row">
                <form action="/admin/nguoidung/changepassword" role="form" enctype="multipart/form-data" method="POST" id="frm-doimatkhau">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mật khẩu cũ</label> <span class="requireTxt">(*)</span>
                            <input type="password" name="matKhau" class="form-control required"  placeholder="Mật khẩu cũ" >
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới</label> <span class="requireTxt">(*)</span>
                            <input type="password" name="matKhau" id="matKhau" class="form-control required"  placeholder="Mật khẩu mới" >
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label> <span class="requireTxt">(*)</span>
                            <input type="password" name="nhapLaiMatKhau" id="nhapLaiMatKhau" class="form-control required"  placeholder="Mật khẩu" ></textarea>
                            <div class="note-error">
                                <span class="error mes-note-error" id="errMatKhau"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <div class="center">
                <button type="button" class="btn btn-primary" onclick="SaveUpdateAction()">Cập nhật</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script>

    function SaveUpdateAction()
    {
        $("#frm-doimatkhau").submit();
    }

    $("#frm-doimatkhau").submit(function() {
        event.preventDefault();
        var valid = checkForm("frm-doimatkhau");

        var mk = $("#matKhau").val();
        var remk = $("#nhapLaiMatKhau").val();

        var data = $(this).serialize();
        var url = $(this).attr('action');
        var post = $(this).attr('method');
        if (!valid) {
            return false;
        } else {

            if(mk!=remk)
            {
                $("#errMatKhau").html("Mật khẩu phải giống nhau.");
                $("#errMatKhau").css("display","inline");
                $("#nhapLaiMatKhau").val("");
            }else
            {
                $("#errMatKhau").css("display","none");
                $.ajax({
                    type: "POST",
                    url: '/admin/nguoidung/',
                    data: data,
                    dataType: "json",
                    success: function(rs) {
                        if(rs.status)
                        {
                            $.notify("Thêm mới người dùng thành công", "success");
                            $("#modal-create").modal("hide");
                            ReloadAction();
                        }else{
                            $.notify("Thêm mới người dùng thất bại", "error");
                        }
                        //reloadAction();
                    },
                    error: function() {
                        $.notify("Loi. Them that bai", "error");
                    }
                });
            }


        }

        return false;


    });
</script>
