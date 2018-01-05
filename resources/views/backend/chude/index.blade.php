@extends('backend/layout/base') @section('css')
<!-- daterange picker -->
<link rel="stylesheet" href="backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="backend/plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="backend/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="backend/plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="backend/bower_components/select2/dist/css/select2.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="backend/dist/css/skins/_all-skins.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="backend/dist/css/AdminLTE.min.css"> @endsection @section('title', 'Home ') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Danh sách chủ đề
        
      </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Chủ đề</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row nomargin nopadding" style="margin:0px; padding: 0px">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row nomargin nopadding">
                            <button class="btn btn-primary pull-right margin-10" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Thêm mới</button>
                            <button class="btn btn-primary pull-right margin-10" data-toggle="collapse" data-target="#timkiembox"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row nomargin nopadding">
                            <div id="timkiembox" class="collapse">
                                <div class="row nomargin nopadding">
                                    <div class="col-md-offset-1 col-md-10">
                                        <form action="/admin/chude/search" method="post" role="form" class="form-horizontal" id="frm-searchChuDe">
                                            <div class="form-group col-md-6">
                                                <label class="control-label col-md-3">Từ khóa</label>
                                                <div class="col-md-9">
                                                    <input name="tukhoa" type="text" class="form-control" placeholder="Từ khóa...">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label col-md-3">Loại</label>
                                                <div class="col-md-9">
                                                    <select name="loai" class="form-control" style="width: 100%;">
                                                        <option selected="selected" value="-1">Tất cả</option>
                                                        <option value="0">Chủ đề</option>
                                                        <option value="1">Dự án</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="center">
                                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                                <button type="button" class="btn btn-danger" onclick="closeTimKiem()">Đóng</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="tblChuDe" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th class="width-30">Id</th>
                                    <th>Hinh anh</th>
                                    <th>Ten chu de</th>
                                    <th>The loai</th>
                                    <th>Tom tat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="chude-info">
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-default">
    </div>
    <div class="modal fade" id="modal-delete">
    </div>
    <div id="modal-create" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="center">
                        <h4 class="modal-title">Thêm mới chủ đề</h4>
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
    </div>
</div>
@endsection @section('js')
<!-- jQuery 3 -->
<script src="backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="backend/plugins/input-mask/jquery.inputmask.js"></script>
<script src="backend/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="backend/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="backend/bower_components/moment/min/moment.min.js"></script>
<script src="backend/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="backend/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="backend/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="backend/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="backend/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
// $.ajax({
//     type: 'GET',
//     url: 'admin/chude/list',
//     success: function(data) {
//         $("#chude-info").empty().html(data);
//     },
//     error: function() {
//         console.log("loi");
//     }
// });
// 
// 

// var dataObj= '<?php echo str_replace("\u0022","\\\\\"",json_encode( $dschude,JSON_HEX_QUOT));?>';
var dataObj = '<?php echo $dschude;?>';
// var dataObj = '<?php echo json_encode($dschude,JSON_HEX_APOS); ?>';

var js_obj_data = eval(dataObj);
$(document).ready(function() {
    loadDataTable(js_obj_data);
})

function closeTimKiem() {
    $("#timkiembox").collapse("hide")
}
var createbtnaction = function() {
    $("#frm-themmoi").submit();
}

function reloadAction() {
    $.ajax({
        type: "get",
        url: '/admin/chude/reload',
        dataType: 'json',
        success: function(mss) {
            loadDataTable(mss);
        },
        error: function() {
            $.notify("Lỗi. Không thực hiện được thao tác", "error");
        }
    })
}
// $("#frm-themmoi").submit(function(e) {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     e.preventDefault();
//     var data = $(this).serialize();
//     var url = $(this).attr('action');
//     var post = $(this).attr('method');

//     $.ajax({
//         type: post,
//         url: url,
//         data: data,
//         success: function(mss) {

//             $.notify(mss, "success");
//             // console.log(mss.noidung);
//             $("#modal-create").modal("hide");
//         },
//         error: function() {
//             $.notify("Loi. Them that bai", "error");
//         }

//     })
// })

var xoachude = function(id) {
    $.ajax({
        type: 'GET',
        url: 'admin/chude/show/' + id,
        data: { 'id': id },
        success: function(rs) {
            $("#modal-delete").html(rs);
            $("#modal-delete").modal("show");
        }
    })
}
var suachude = function(id) {
    $.ajax({
        type: 'GET',
        url: 'admin/chude/edit/' + id,
        data: { 'id': id },
        success: function(rs) {
            $("#modal-default").html(rs);
            $("#modal-default").modal("show");
        }
    })
}
$("#frm-searchChuDe").submit(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: 'json',
        success: function(rs) {
            console.log(rs);
            if (rs != null) {
                loadDataTable(rs);
            } else {
                $("#chude-info").empty();
            }


        },
        error: function() {
            $.notify("Lỗi. Không thực hiện được thao tác", 'error');
        }
    })
})
</script>
<script>
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>
<!-- Page script -->
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )
});

$("#frm-themmoi").submit(function() {
    event.preventDefault();
    var valid = checkForm("frm-themmoi");
    if (!valid) {
        return false;
    } else {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var dataString;

        var contentType1 = false;
        var action = $("#frm-themmoi").attr("action");
        if ($("#frm-themmoi").attr("enctype") == "multipart/form-data") {
            //this only works in some browsers.
            //purpose? to submit files over ajax. because screw iframes.
            //also, we need to call .get(0) on the jQuery element to turn it into a regular DOM element so that FormData can use it.
            dataString = new FormData($("#frm-themmoi").get(0));
            contentType1 = false;
            processData = false;
        }
        $.ajax({
            type: "POST",
            url: action,
            data: dataString,
            dataType: "json", //change to your own, else read my note above on enabling the JsonValueProviderFactory in MVC
            contentType: false,
            processData: false,
            success: function(mss) {

                $.notify(mss, "success");
                // console.log(mss.noidung);
                $("#modal-create").modal("hide");
                reloadAction();
            },
            error: function() {
                $.notify("Loi. Them that bai", "error");
            }
        });

    }

    return false;


});




//Date picker
$('#datepicker').datepicker({
    autoclose: true
})

//iCheck for checkbox and radio inputs
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
})
//Red color scheme for iCheck
$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass: 'iradio_minimal-red'
})
//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass: 'iradio_flat-green'
})

//Colorpicker
$('.my-colorpicker1').colorpicker()
//color picker with addon
$('.my-colorpicker2').colorpicker()

//Timepicker
$('.timepicker').timepicker({
    showInputs: false
})

var loadDataTable = function(item) {
    var table = $('#tblChuDe').DataTable({

        // "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>" +
        //     "t" +
        //     "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
        // "oLanguage": {
        //     "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
        // },
        "data": item,
        "bDestroy": true,
        "iDisplayLength": 20,
        paging: true,
        "aoColumns": [{
                "orderable": false,
                "sClass": "center",
                "mData": function(data, type, dataToSet) {
                    return '<input class="global_" type="checkbox" name="ids" value="' + data.id + '" />';
                },
                "orderable": false,
            },

            //{
            //    "class": 'details-control',
            //    "orderable": false,
            //    "data": null,
            //    "defaultContent": ''
            //},
            {
                "sClass": "center",
                "orderable": false,
                "mData": function(data, type, dataToSet) {

                    var str = '<img class="attachment-img center" alt="' + data.tenchude + '" src="upload/' + data.hinhanh + '" style="width: 50px; height: 50px">';
                    return str;
                },

            },
            {
                "mData": function(data, type, dataToSet) {

                    return data.tenchude;
                },

            },
            {
                "mData": function(data, type, dataToSet) {
                    var str = data.duan == 0 ? '<span class=" badge bg-aqua">Chủ đề</span>' : '<span class=" badge bg-green">Dự án</span>';
                    return str;
                },

            },
            {
                "orderable": false,
                "mData": function(data, type, dataToSet) {

                    return data.tomtat;
                },

            },
            {
                "orderable": false,
                "sClass": "center",
                "mData": function(data, type, dataToSet) {
                    var str = '<a href="javascript:void(0)" onclick="suachude(' + data.id + ')"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a> ';
                    str += '<a href="javascript:void(0)" onclick="xoachude(' + data.id + ')" style="color: #f56954"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>';
                    return str;
                },

            },

        ],
        //"order": [[1, 'asc']],
        "fnDrawCallback": function(oSettings) {

            //runAllCharts()
        }
    });
}
</script>
@endsection