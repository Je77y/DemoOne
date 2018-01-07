<div class="modal-dialog" role="document" style="width: 1000px;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="center">
                <h4 class="modal-title">Cập nhật BlockContent</h4>
            </div>
        </div>
        <div class="modal-body">
            <div class="row">
                <form action="/admin/blockcontent/update" role="form" method="POST" id="frm-capnhat">
                    <div class="col-md-12">
                        <input type="hidden" name="idchude" value="{{ $idduan }}">
                        <div class="form-group">
                            <label>Tên BlockContent</label> <span class="requireTxt">(*)</span>
                            <input name="tenblock" type="text" class="form-control required" placeholder="Tên BlockContent" required>
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label> <span class="requireTxt">(*)</span>
                            <input name="thutu" class="form-control required" row="8" placeholder="Thứ tự" required>
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label> <span class="requireTxt">(*)</span>
                            <textarea id="editor1" name="noidung" class="form-control " row="8" placeholder="Nội dung" ></textarea>
                            <div class="note-error">
                                <span class="error mes-note-error" id="errNoiDung"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>SubTitle</label>
                            <input name="subtitle" type="text" class="form-control required" placeholder="Đường dẫn" required>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <div class="center">
                <button type="button" class="btn btn-primary" onclick="editAction()">Cập nhật</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
    $("#frm-capnhat").submit(function() {
        event.preventDefault();
        var valid = checkForm("frm-capnhat");
        var valueArea = CKEDITOR.instances['editor1'].getData();
        var err=0;
        if (valueArea.length==0)
        {
            $("#errNoiDung").html("Vui lòng nhập thông tin này");
            $("#errNoiDung").css("display","inline");
            err+=1;
        }else {
            $("#errNoiDung").css("display","none");
            $("#editor1").html(valueArea);
        }
        err += checkForm("frm-themmoi")?0:1;
        if (err) {
            return false;
        }
        if (!valid) {
            return false;
        } else {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: action,
                data: $("#frm-capnhat").serialize(),
                dataType: "json", //change to your own, else read my note above on enabling the JsonValueProviderFactory in MVC
                contentType: false,
                processData: false,
                success: function(mss) {

                    $.notify(mss.message, "success");
                    // console.log(mss.noidung);
                    $("#modal-edit").modal("hide");
                    $("#modal-edit").empty();
                    //-----------------------------------
                    reloadAction();
                },
                error: function() {
                    $.notify("Lỗi. Cập nhật thất bại", "error");
                }
            });
        }
        return false;
    });

    var editAction = function () {
        $("#frm-capnhat").submit();
    }
</script>
