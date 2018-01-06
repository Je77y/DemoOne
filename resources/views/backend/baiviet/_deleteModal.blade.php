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
                    <p>Bạn có chắc muốn xoá bản ghi này?</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="center">
                <button type="button" class="btn btn-success" onclick="deleteAction({{ $id }})">Xác nhận
                </button>
                <button type="button" class="btn btn-default " data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>

<script>
    deleteAction = function(id) {
        $.ajax({
            type: 'get',
            url: '/admin/baiviet/destroy/'+id,
            success: function(mss) {
                $.notify(mss.message, "success");
                $("#modal-delete").modal("hide");
                $("#modal-delete").empty();
            }
        })
    }
</script>
