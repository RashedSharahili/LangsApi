<?php
require('./api/get/langs_api.php');

$langs = get_langs();

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لغات البرمجة</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap_icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap/sweetalert2/dist/sweetalert2.min.css">

    <style>
        .modal-title {

            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <h1 class="text-center">تعليم برمجة واجهة التطبيقات API</h1>
        <br>
        <br>
        <!-- button for modal -->
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addModal">أضف <label><i
                    class="bi bi-plus"></i></label></button>
        <br>
        <br>
        <!-- The Add Modal -->
        <div class="modal fade" id="addModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <form action="api/post/add_lang.php" method="post">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            <h4 class="modal-title text-center">اضافة لغة برمجة</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">لغة البرمجة</label>
                                </div>
                                <div class="col-lx-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" name="l_name" id="l_name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">نبذة عن لغة البرمجة</label>
                                </div>
                                <div class="col-lx-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" name="l_brief" id="l_brief" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">شعار لغة البرمجة(رابط)</label>
                                </div>
                                <div class="col-lx-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" name="l_image" id="l_image" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row" style="border: 1px solid #ccc; padding: 8px;">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">أُطر عمل لغة البرمجة</label>
                                </div>
                                <div class="col-lx-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div id="frameworks_div">
                                        <input type="text" name="l_frame_works[]" id="l_frame_works_0" class="form-control" autocomplete="off" style="margin-top: 8px;">
                                    </div>
                                </div>
                                <div class="col-lx-1 col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button type="button" name="" id="add_framework_btn" class="btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                            <br>
                            <div class="row" style="border: 1px solid #ccc; padding: 8px;">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">الاستخدامات الشائعة للغة البرمجة</label>
                                </div>
                                <div class="col-lx-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div id="popular_uses_div">
                                        <input type="text" name="l_popular_uses[]" id="l_popular_uses_0" class="form-control" autocomplete="off" style="margin-top: 8px;">
                                    </div>
                                </div>
                                <div class="col-lx-1 col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button type="button" name="" id="add_popular_uses_btn" class="btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="row" style="width: 100%;">
                                <div class="col-lx-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">إضافة</button>
                                </div>
                                <div class="col-lx-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: left;">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- The Edit Modal -->
        <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <form action="#" method="post" id="edit_lang">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            <h4 class="modal-title text-center">تعديل لغة برمجة</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">لغة البرمجة</label>
                                </div>
                                <div class="col-lx-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" name="l_name" id="edit_l_name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">نبذة عن لغة البرمجة</label>
                                </div>
                                <div class="col-lx-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" name="l_brief" id="edit_l_brief" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">شعار لغة البرمجة(رابط)</label>
                                </div>
                                <div class="col-lx-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" name="l_image" id="edit_l_image" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row" style="border: 1px solid #ccc; padding: 8px;">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">أُطر عمل لغة البرمجة</label>
                                </div>
                                <div class="col-lx-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div id="edit_frameworks_div">
                                        <!-- <input type="text" name="l_frame_works[]" id="l_frame_works_0" class="form-control" autocomplete="off" style="margin-top: 8px;"> -->
                                    </div>
                                </div>
                                <div class="col-lx-1 col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button type="button" name="" id="edit_add_framework_btn" class="btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                            <br>
                            <div class="row" style="border: 1px solid #ccc; padding: 8px;">
                                <div class="col-lx-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="">الاستخدامات الشائعة للغة البرمجة</label>
                                </div>
                                <div class="col-lx-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div id="edit_popular_uses_div">
                                        <!-- <input type="text" name="l_popular_uses[]" id="l_popular_uses_0" class="form-control" autocomplete="off" style="margin-top: 8px;"> -->
                                    </div>
                                </div>
                                <div class="col-lx-1 col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button type="button" name="" id="edit_add_popular_uses_btn" class="btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="row" style="width: 100%;">
                                <div class="col-lx-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: right;">
                                    <input type="hidden" name="id" value="">
                                    <button type="button" id="edit_submit" class="btn btn-primary">تعديل</button>
                                </div>
                                <div class="col-lx-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: left;">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <th>م</th>
                <th>لغة البرمجة</th>
                <th style="width: 25%;">نبذة عن لغة البرمجة</th>
                <th>شعار لغة البرمجة</th>
                <th>أُطر العمل للغة البرمجة</th>
                <th>الاستخدامات الشائعة للغة البرمجة</th>
                <th>الخصائص</th>
            </thead>
            <tbody>
                <?php if(!empty($langs)) { ?>
                <?php foreach ($langs as $key => $lang) { ?>
                    <tr>
                        <td>
                            <?php echo $lang['id']; ?>
                        </td>
                        <td>
                            <?php echo $lang['l_name']; ?>
                        </td>
                        <td>
                            <?php echo $lang['l_brief']; ?>
                        </td>
                        <td>
                            <img src="<?php echo $lang['l_image']; ?>" alt="" srcset="" width="70">
                        </td>
                        <td>
                            <?php foreach ($lang['l_frame_works'] as $key => $frameworks) {

                                echo ($key + 1) . ". " . $frameworks . "<br>";
                            } ?>
                        </td>
                        <td>
                            <?php foreach ($lang['l_popular_uses'] as $key => $popular_uses) {

                                echo ($key + 1) . ". " . $popular_uses . "<br>";
                            } ?>
                        </td>
                        <td>
                            <button type="button" name="" id="" class="btn btn-primary edit-btn"
                                data-id="<?php echo $lang['id']; ?>">تعديل <i class="bi bi-pencil-square"></i></button>
                            <button type="button" name="" id="" class="btn btn-danger delete-btn"
                                data-id="<?php echo $lang['id']; ?>">حذف <i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="7" class="text-center">لا يوجد بيانات...</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="bootstrap/js/jquery.min.js"></script>

<script src="bootstrap/sweetalert2/dist/sweetalert2.min.js"></script>

<script>
    $(document).ready(function () {

        let i = 0;
        $("#add_framework_btn").click(function () {

            i++;

            $("#frameworks_div").append('<input type="text" name="l_frame_works[]" id="l_frame_works_' + i + '" class="form-control" autocomplete="off" style="margin-top: 8px;">');
        });

        let x = 0;
        $("#add_popular_uses_btn").click(function () {

            x++;

            $("#popular_uses_div").append('<input type="text" name="l_popular_uses[]" id="l_popular_uses_' + x + '" class="form-control" autocomplete="off" style="margin-top: 8px;">');
        });


        $(".delete-btn").click(function () {

            let id = $(this).data('id');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'هل أنت متأكد؟',
                text: "هل أنت متأكد من حذف هذا العنصر؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'نعم، أحذف',
                cancelButtonText: 'إلغاء',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'POST',
                        url: 'api/delete/delete_lang.php?id=' + id,
                        data: { id: id },
                        success: function (data) {

                            console.log(data);

                            swalWithBootstrapButtons.fire({
                                title: 'تم الحذف بنجاح!',
                                text: "تم حذف العنصر بنجاح.",
                                icon: 'success',
                                confirmButtonText: 'تم',

                            }).then((ok) => {

                                if (ok.isConfirmed) {

                                    location.reload();
                                }
                            });
                        },
                        error: function (data) {

                            swalWithBootstrapButtons.fire(
                                'لم يتم الحذف!',
                                'حدث خطأ ما.',
                                'error'
                            )
                        }
                    });
                }
            });

        });

        $(".edit-btn").click(function () {

            let id = $(this).data('id');
            $("input[name='id']").val($(this).data('id'));

            $.ajax({
                type: 'GET',
                url: 'api/get/langs_api.php?id=' + id,
                data: { id: id },
                dataType: 'json',
                success: function (data) {
                    
                    let res = $.parseJSON(data);

                    // console.log(res);

                    $("#edit_l_name").val(res['l_name']);
                    $("#edit_l_brief").val(res['l_brief']);
                    $("#edit_l_image").val(res['l_image']);

                    let l_frame_works = [];

                    $.each(res['l_frame_works'], function(index, value) {

                        l_frame_works += '<input type="text" name="l_frame_works[]" id="edit_l_frame_works_' + index + '" value="'+value+'" class="form-control" autocomplete="off" style="margin-top: 8px;">';
                    });

                    $("#edit_frameworks_div").html(l_frame_works);
                    
                    let l_popular_uses = [];

                    $.each(res['l_popular_uses'], function(index, value) {

                        l_popular_uses += '<input type="text" name="l_popular_uses[]" id="l_popular_uses_'+index+'"  value="'+value+'" class="form-control" autocomplete="off" style="margin-top: 8px;">';
                    });

                    $("#edit_popular_uses_div").html(l_popular_uses);

                    $("#editModal").modal("show");
                },
                error: function (data) {

                    console.log(data);
                }
            });


        });

        $("#edit_add_framework_btn").click( function() {

            $("#edit_frameworks_div").append('<input type="text" name="l_frame_works[]" class="form-control" autocomplete="off" style="margin-top: 8px;">');
        });

        $("#edit_add_popular_uses_btn").click( function() {

            $("#edit_popular_uses_div").append('<input type="text" name="l_popular_uses[]" class="form-control" autocomplete="off" style="margin-top: 8px;">');
        });

        $("#edit_submit").click( function() {

            let id = $("input[name='id']").val();

            $("#edit_lang").attr('action','api/put/update_lang.php?id='+id);
            $("#edit_lang").submit();

            // location.reload();
        });

    });
</script>

</html>