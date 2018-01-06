<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="center">
                <h4 class="modal-title">Thêm mới người dùng</h4>
            </div>
        </div>
        <div class="modal-body">
            <div class="row">
                <form action="/admin/chude/store" role="form" enctype="multipart/form-data" method="POST" id="frm-themmoi">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Loại</label>
                            <select name="loai" class="form-control" style="width: 100%;">
                                <option selected="selected" value="0">Chủ đề</option>
                                <option value="1">Dự án</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên chủ đề</label> <span class="requireTxt">(*)</span>
                            <input name="tenchude" type="text" class="form-control required" placeholder="Tên chủ đề" required>
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label> <span class="requireTxt">(*)</span>
                            <textarea name="tomtat" class="form-control required" row="8" placeholder="Tóm tắt" required></textarea>
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label> <span class="requireTxt">(*)</span>
                            <input class="required" type="file" name="hinhanh" required>
                            <div class="note-error">
                                <span class="error mes-note-error"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <div class="center">
                <button type="button" class="btn btn-primary" onclick="createbtnaction()">Thêm mới</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>