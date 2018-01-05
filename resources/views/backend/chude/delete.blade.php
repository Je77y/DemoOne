<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <div class="center">
            <h4 class="modal-title">Xác nhận xóa dữ liệu</h4>
        </div>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="attachment-block clearfix background-none">
                        <img class="attachment-img" src="upload/{{ $chude->hinhanh }}" alt="Attachment Image">
                        <div class="attachment-pushed">
                            <h4 class="attachment-heading">{{ $chude->tenchude }}</h4>
                            <div class="attachment-text">
                                {{ $chude->tomtat }}
                            </div>
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="center">
                <button type="button" class="btn btn-success" onclick="XoaChuDe({{ $chude->id }})">Xác nhận
                </button>
                <button type="button" class="btn btn-default " data-dismiss="modal">Đóng</button>
                
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<script>
var XoaChuDe = function(id) {
    console.log(id);
    $.ajax({
        type: 'GET',
        url: '/admin/chude/destroy/' + id,
        dataType: 'json',
        success: function(mss) {
            if(mss.status){
                $.notify(mss.message, "success");
                $("#modal-delete").modal("hide");
                reloadAction();
            }
            else {
                $.notify(mss.message, "error");
            }

        },
        error: function() {
            $.notify("Loi. Xoa that bai", "error");
        }
    })
}
</script>