@extends('layouts.mst_admin')
@section('title', 'SWF Admins: Color Codes Table | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admins/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/Buttons-1.5.6/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap-tagsinput/tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <style>
        .bootstrap-select .dropdown-menu {
            min-width: 100% !important;
        }

        .form-control-feedback {
            position: absolute;
            top: 3em;
            right: 2em;
        }

        .bootstrap-tagsinput {
            background-color: #fff !important;
            border: 1px solid #e4e6fc !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
            display: inline-block !important;
            padding: 4px 6px;
            color: #555;
            vertical-align: middle;
            border-radius: 0 4px 4px 0;
            width: 95.5%;
            height: 42px !important;
            line-height: 22px;
            cursor: text;
        }

        .bootstrap-tagsinput .badge {
            background-color: #E31B23 !important;
        }

        .bootstrap-tagsinput .badge [data-role="remove"]:after {
            content: "\f00d";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
        }

        #video {
            display: none;
        }
    </style>
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Color Codes Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Master</div>
                <div class="breadcrumb-item">Color</div>
                <div class="breadcrumb-item">Codes</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-form">
                                <button id="btn_create" class="btn btn-primary text-uppercase">
                                    <strong><i class="fas fa-plus mr-2"></i>Create</strong>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="content1" class="table-responsive">
                                <table class="table table-striped" id="dt-buttons">
                                    <thead>
                                    <tr>
                                        <th class="text-center" width="5%">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" class="custom-control-input" id="cb-all">
                                                <label for="cb-all" class="custom-control-label">#</label>
                                            </div>
                                        </th>
                                        <th class="text-center">ID</th>
                                        <th width="15%">Category</th>
                                        <th width="20%">Code</th>
                                        <th width="25%">Name</th>
                                        <th class="text-center" width="15%">Color</th>
                                        <th class="text-center" width="20%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($codes as $row)
                                        <tr>
                                            <td style="vertical-align: middle" align="center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" id="cb-{{$row->id}}"
                                                           class="custom-control-input dt-checkboxes">
                                                    <label for="cb-{{$row->id}}"
                                                           class="custom-control-label">{{$no++}}</label>
                                                </div>
                                            </td>
                                            <td style="vertical-align: middle" align="center">{{$row->id}}</td>
                                            <td style="vertical-align: middle">
                                                <strong>{{$row->getColorCategory->name}}</strong>
                                            </td>
                                            <td style="vertical-align: middle">{{$row->code}}</td>
                                            <td style="vertical-align: middle">{{$row->name}}</td>
                                            <td style="vertical-align: middle" align="center">
                                                @if($row->file != '')
                                                    <div class="row lightgallery float-left mr-0">
                                                        <div class="col item"
                                                             data-src="{{asset('storage/colors/'.$row->file)}}"
                                                             data-sub-html="<h4>{{$row->file}}</h4><p>{{$row->name.' ['.$row->code.']'}}</p>">
                                                            <a href="javascript:void(0)">
                                                                <img width="100" alt="Thumbnail" class="img-thumbnail"
                                                                     src="{{asset('storage/colors/'.$row->file)}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @else
                                                    &ndash;
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle" align="center">
                                                <button data-placement="left" data-toggle="tooltip" title="Edit"
                                                        type="button" class="btn btn-warning mr-1"
                                                        onclick="editColorCode('{{$row->id}}','{{$row->category_id}}',
                                                            '{{$row->code}}','{{$row->name}}','{{$row->file}}')">
                                                    <i class="fa fa-edit"></i></button>
                                                <a href="{{route('delete.color.codes', ['id' => encrypt($row->id)])}}"
                                                   class="btn btn-danger delete-data" data-toggle="tooltip"
                                                   title="Delete" data-placement="right">
                                                    <i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <form method="post" id="form-mass">
                                    {{csrf_field()}}
                                    <input type="hidden" name="code_ids">
                                </form>
                            </div>

                            <div id="content2" style="display: none;">
                                <form id="form-colorCode" method="post" action="{{route('create.color.codes')}}"
                                      enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method">
                                    <input type="hidden" name="id">
                                    <div class="row form-group">
                                        <div class="col fix-label-group">
                                            <label for="category_id">Category</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                        <span class="input-group-text fix-label-item" style="height: 2.25rem">
                                            <i class="fa fa-tag"></i></span>
                                                </div>
                                                <select id="category_id" class="form-control selectpicker" required
                                                        title="-- Choose --" name="category_id" data-live-search="true">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="code">Code</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-code"></i></span>
                                                </div>
                                                <input id="code" type="text" maxlength="191" name="code" required
                                                       class="form-control" placeholder="Color code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <label for="name">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                </div>
                                                <input id="name" type="text" maxlength="191" name="name" required
                                                       class="form-control" placeholder="Color name">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="file">File</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input"
                                                           id="file" accept="image/*" required>
                                                    <label class="custom-file-label" id="txt_file">Choose
                                                        File</label>
                                                </div>
                                            </div>
                                            <div class="form-text text-muted">
                                                Allowed extension: jpg, jpeg, gif, png. Allowed size: < 5 MB
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary btn-block text-uppercase"
                                                    style="font-weight: 900">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push("scripts")
    <script src="{{asset('admins/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/Buttons-1.5.6/js/buttons.dataTables.min.js')}}"></script>
    <script src="{{asset('admins/modules/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admins/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('admins/modules/bootstrap-tagsinput/tagsinput.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script>
        $(function () {
            var export_filename = 'Color Codes Table ({{now()->format('j F Y')}})',
                table = $("#dt-buttons").DataTable({
                    dom: "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    columnDefs: [
                        {sortable: false, targets: 6},
                        {targets: 1, visible: false, searchable: false},
                    ],
                    buttons: [
                        {
                            text: '<strong class="text-uppercase"><i class="far fa-clipboard mr-2"></i>Copy</strong>',
                            extend: 'copy',
                            exportOptions: {
                                columns: [0, 2, 3, 4]
                            },
                            className: 'btn btn-warning assets-export-btn export-copy ttip'
                        }, {
                            text: '<strong class="text-uppercase"><i class="far fa-file-excel mr-2"></i>Excel</strong>',
                            extend: 'excel',
                            exportOptions: {
                                columns: [0, 2, 3, 4]
                            },
                            className: 'btn btn-success assets-export-btn export-xls ttip',
                            title: export_filename,
                            extension: '.xls'
                        }, {
                            text: '<strong class="text-uppercase"><i class="fa fa-print mr-2"></i>Print</strong>',
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 2, 3, 4]
                            },
                            className: 'btn btn-info assets-select-btn export-print'
                        }, {
                            text: '<strong class="text-uppercase"><i class="fa fa-trash-alt mr-2"></i>Deletes</strong>',
                            className: 'btn btn-danger btn_massDelete'
                        }
                    ],
                    fnDrawCallback: function (oSettings) {
                        $('.use-nicescroll').getNiceScroll().resize();
                        $('[data-toggle="tooltip"]').tooltip();

                        $('.lightgallery').lightGallery({
                            loadYoutubeThumbnail: true,
                            youtubeThumbSize: 'default',
                        });

                        $("#cb-all").on('click', function () {
                            if ($(this).is(":checked")) {
                                $("#dt-buttons tbody tr").addClass("terpilih")
                                    .find('.dt-checkboxes').prop("checked", true).trigger('change');
                            } else {
                                $("#dt-buttons tbody tr").removeClass("terpilih")
                                    .find('.dt-checkboxes').prop("checked", false).trigger('change');
                            }
                        });

                        $("#dt-buttons tbody tr").on("click", function () {
                            $(this).toggleClass("terpilih");
                            if ($(this).hasClass('terpilih')) {
                                $(this).find('.dt-checkboxes').prop("checked", true).trigger('change');
                            } else {
                                $(this).find('.dt-checkboxes').prop("checked", false).trigger('change');
                            }
                        });

                        $('.dt-checkboxes').on('click', function () {
                            if ($(this).is(':checked')) {
                                $(this).parent().parent().parent().addClass("terpilih");
                            } else {
                                $(this).parent().parent().parent().removeClass("terpilih");
                            }
                        });

                        $('.btn_massDelete').on("click", function () {
                            var ids = $.map(table.rows('.terpilih').data(), function (item) {
                                return item[1]
                            });
                            $("#form-mass input[name=code_ids]").val(ids);
                            $("#form-mass").attr("action", "{{route('massDelete.color.codes')}}");

                            if (ids.length > 0) {
                                swal({
                                    title: 'Delete Color Codes',
                                    text: 'Are you sure to delete this ' + ids.length + ' selected record(s)? ' +
                                        'You won\'t be able to revert this!',
                                    icon: 'warning',
                                    dangerMode: true,
                                    buttons: ["No", "Yes"],
                                    closeOnEsc: false,
                                    closeOnClickOutside: false,
                                }).then((confirm) => {
                                    if (confirm) {
                                        swal({icon: "success", buttons: false});
                                        $("#form-mass")[0].submit();
                                    }
                                });
                            } else {
                                $("#cb-all").prop("checked", false).trigger('change');
                                swal("Error!", "There's no any selected record!", "error");
                            }
                        });
                    },
                });

            @if($find != "")
            $(".dataTables_filter input[type=search]").val('{{$find}}').trigger('keyup');
            @endif
        });

        $("#btn_create").on('click', function () {
            $("#content1").toggle(300);
            $("#content2").toggle(300);
            $(this).toggleClass('btn-primary btn-outline-primary');
            $("#btn_create strong").html(function (i, v) {
                return v === '<i class="fas fa-plus mr-2"></i>Create' ?
                    '<i class="fas fa-th-list mr-2"></i>View' : '<i class="fas fa-plus mr-2"></i>Create';
            });

            $(".fix-label-group .bootstrap-select").addClass('p-0');
            $(".fix-label-group .bootstrap-select button").css('border-color', '#e4e6fc');

            $("#form-colorCode").attr('action', '{{route('create.color.codes')}}');
            $("#form-colorCode input[name=_method], #form-colorCode input[name=id], #code, #name").val('');
            $("#form-colorCode button[type=submit]").text('Submit');
            $("#category_id").val('default').selectpicker('refresh');
            $("#file").attr('required', 'required');
            $("#txt_file").text('Choose File');
        });

        function editColorCode(id, category_id, code, name, file) {
            $("#content1").toggle(300);
            $("#content2").toggle(300);
            $("#btn_create").toggleClass('btn-primary btn-outline-primary');
            $("#btn_create strong").html(function (i, v) {
                return v === '<i class="fas fa-plus mr-2"></i>Create' ?
                    '<i class="fas fa-th-list mr-2"></i>View' : '<i class="fas fa-plus mr-2"></i>Create';
            });

            $(".fix-label-group .bootstrap-select").addClass('p-0');
            $(".fix-label-group .bootstrap-select button").css('border-color', '#e4e6fc');

            $("#form-colorCode").attr('action', '{{route('update.color.codes')}}');
            $("#form-colorCode input[name=_method]").val('PUT');
            $("#form-colorCode input[name=id]").val(id);
            $("#category_id").val(category_id).selectpicker('refresh');
            $("#code").val(code);
            $("#name").val(name);
            $("#file").removeAttr('required', 'required');
            if(file != ""){
                $("#txt_file").text(file.length > 60 ? file.slice(0, 60) + "..." : file);
            } else {
                $("#txt_file").text('Choose File');
            }
            $("#form-colorCode button[type=submit]").text('Save Changes');
        }

        $("#file").on('change', function () {
            var files = $(this).prop("files"), names = $.map(files, function (val) {
                return val.name;
            }), text = names[0];
            $("#txt_file").text(text.length > 60 ? text.slice(0, 60) + "..." : text);
        });

        $(document).on('mouseover', '.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });
    </script>
@endpush
