"use strict";
// Class definition

var KTAppUserListDatatable = function () {

    // variables
    var datatable;

    // init
    var init = function () {
        // init the datatables. Learn more: https://keenthemes.com/metronic/?page=docs&section=datatable
        datatable = $('#kt_apps_user_list_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'http://localhost/metronix/assets/api/client.php',
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#generalSearch'),
                delay: 400,
            },

            // columns definition
            columns: [
                {
                    field: 'ID',
                    title: '#',
                    sortable: false,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: "Name",
                    title: "Họ tên",
                    autoHide: false,
                    // callback function support for column rendering
                    template: function (data, i) {
                        var number = 4 + i;
                        while (number > 12) {
                            number = number - 3;
                        }
                        var user_img = '100_' + number + '.jpg';

                        var pos = KTUtil.getRandomInt(0, 5);
                        var position = [
                            'Anh',
                            'Chị',
                            'Cô',
                            'Chú',
                            'Bác',
                            'Em'
                        ];

                        var output = '';
                            output = '' +
                                '<div class="kt-user-card-v2">' +
                                '<div class="kt-user-card-v2__details">' +
                                '<a href="#" data-toggle="modal" data-target="#kt_datatable_edit_customer" class="kt-user-card-v2__name">' + data.Name + '</a>' +
                                '<span class="kt-user-card-v2__desc">' + position[pos] + '</span>' +
                                '</div>' +
                                '</div>';

                        return output;
                    }
                },
                {
                    field: 'City',
                    title: 'Địa chỉ',
                },
                {
                    field: 'Country',
                    title: 'Điện thoại',
                },
                {
                    field: 'Address',
                    title: 'Email',
                    width: 150,
                },
                {
                    width: 110,
                    field: 'Status',
                    title: 'Loại Khách hàng',
                    // callback function support for column rendering
                    template: function (row) {
                        var status = {
                            1: {'title': 'Active', 'state': 'success'},
                            2: {'title': 'Pending', 'state': 'primary'},
                            3: {'title': 'Suspended', 'state': 'danger'},
                        };
                        // return '<span class="kt-badge kt-badge--' + status[row.Status].state + ' kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-' + status[row.Status].state + '">' + status[row.Status].title + '</span>';
                        return '<select class="form-control"><option>Phổ thông</option><option>Tiềm năng</option><option>3</option><option>4</option></select>';
                    },
                },
                {
                    field: 'DateCreated',
                    title: 'Ngày thêm',
                    type: 'date',
                    format: 'MM/DD/YYYY',
                },

                {
                    field: "Actions",
                    title: "Xử lý",
                    width: 180,
                    sortable: false,
                    autoHide: false,
                    overflow: 'visible',
                    template: function () {
                        return '' +
                        '<a href="#" data-toggle="modal" data-target="#kt_datatable_edit_customer" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Sửa thông tin khách hàng">'+
                            '<i class="la la-edit"></i>'+
                        '</a>'+
                        '<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Thêm lịch sử chăm sóc" data-toggle="modal" data-target="#kt_datatable_add_history">'+
                            '<i class="la la-history"></i>'+
                        '</a>'+
                        '<a href="#" data-toggle="modal" data-target="#kt_datatable_email" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Gửi Email"><i class="la la-envelope"></i></a>'+
                        '<a href="#" data-toggle="modal" data-target="#kt_datatable_sms" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Gửi SMS Brandname"><i class="la la-comment"></i></a>'+
                        '<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Xóa">'+
                            '<i class="la la-trash"></i>'+
                        '</a>'
                    },
                }]
        });
    };

    // search
    var search = function () {
        $('#kt_form_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });
    };


    // selection
    var selection = function () {
        // init form controls
        // $('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            $('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                $('#kt_subheader_search').addClass('kt-hidden');
                $('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                $('#kt_subheader_search').removeClass('kt-hidden');
                $('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // fetch selected records
    var selectedFetch = function () {
        // event handler on selected records fetch modal launch
        $('#kt_datatable_edit_customer_modal').on('show.bs.modal', function (e) {
            // show loading dialog
            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': 'Loading ...'});
            loading.show();

            setTimeout(function () {
                loading.hide();
            }, 1000);

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type="checkbox"]').map(function (i, chk) {
                return $(chk).val();
            });

            // populate selected IDs
            var c = document.createDocumentFragment();

            for (var i = 0; i < ids.length; i++) {
                var li = document.createElement('li');
                li.setAttribute('data-id', ids[i]);
                li.innerHTML = ids[i];
                c.appendChild(li);
            }

            $(e.target).find('#kt_apps_user_fetch_records_selected').append(c);
        }).on('hide.bs.modal', function (e) {
            $(e.target).find('#kt_apps_user_fetch_records_selected').empty();
        });
    };

    // selected records status update
    var selectedStatusUpdate = function () {
        $('#kt_subheader_group_actions_status_change').on('click', "[data-toggle='status-change']", function () {
            var status = $(this).find(".kt-nav__link-text").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type="checkbox"]').map(function (i, chk) {
                return $(chk).val();
            });

            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: "Are you sure to update " + ids.length + " selected records status to " + status + " ?",
                    type: "info",

                    confirmButtonText: "Yes, update!",
                    confirmButtonClass: "btn btn-sm btn-bold btn-brand",

                    showCancelButton: true,
                    cancelButtonText: "No, cancel",
                    cancelButtonClass: "btn btn-sm btn-bold btn-default"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: 'Deleted!',
                            text: 'Your selected records statuses have been updated!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: "OK",
                            confirmButtonClass: "btn btn-sm btn-bold btn-brand",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: 'Cancelled',
                            text: 'You selected records statuses have not been updated!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: "OK",
                            confirmButtonClass: "btn btn-sm btn-bold btn-brand",
                        });
                    }
                });
            }
        });
    }

    // selected records delete
    var selectedDelete = function () {
        $('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type="checkbox"]').map(function (i, chk) {
                return $(chk).val();
            });

            if (ids.length > 0) {
                // learn more: https://sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: "Bạn có chắc muốn xóa thông tin " + ids.length + " khách hàng này ?",
                    type: "danger",

                    confirmButtonText: "Xóa",
                    confirmButtonClass: "btn btn-sm btn-bold btn-danger",

                    showCancelButton: true,
                    cancelButtonText: "Không",
                    cancelButtonClass: "btn btn-sm btn-bold btn-brand"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: 'Đã xóa!',
                            text: 'Đã xóa thông tin khách hàng :(',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: "OK",
                            confirmButtonClass: "btn btn-sm btn-bold btn-brand",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: 'Hủy bỏ',
                            text: 'Đã hủy việc xóa thông tin khách hàng :)',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: "OK",
                            confirmButtonClass: "btn btn-sm btn-bold btn-brand",
                        });
                    }
                });
            }
        });
    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            //$('#kt_subheader_total').html(datatable.getTotalRows() + ' Total');
        });
    };
    return {
        // public functions
        init: function () {
            init();
            search();
            selection();
            selectedFetch();
            selectedStatusUpdate();
            selectedDelete();
            updateTotal();
        },
    };
}();

// On document ready
KTUtil.ready(function () {
    KTAppUserListDatatable.init();
});