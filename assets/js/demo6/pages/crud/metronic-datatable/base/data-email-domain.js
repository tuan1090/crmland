
'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse(
			'[{"brand":"crmland.vn","mota":"Bạn có thể tạo các email định dạng abc@crmland.vn (abc do bạn tự đặt)","Type":"1"},\n' +
			'{"brand":"romanplaza.vn","mota":"-","Type":"2"},\n' +
			'{"brand":"romanplaza.com","mota":"-","Type":"4"}]');

		var datatable = $('.kt-datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataJSONArray,
				pageSize: 10,
			},

			// layout definition
			layout: {
				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
				// height: 450, // datatable's body's fixed height
				footer: false, // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			// columns definition
			columns: [
				{
					field: 'brand',
					title: 'Brandname',
				},
				{
					field: 'mota',
					title: 'Mô tả',
				},
				{
					field: 'Type',
					title: 'Trạng thái',
					width: 150,
					autoHide: false,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Sẵn sàng', 'state': 'success'},
							2: {'title': 'Đang duyệt', 'state': 'warning'},
							3: {'title': 'Đã tiếp nhận hồ sơ', 'state': 'info'},
							4: {'title': 'Hồ sơ thiếu', 'state': 'dark'},
							5: {'title': 'Lỗi', 'state': 'danger'},
						};
						return '<span class="btn btn-bold btn-sm btn-font-sm  btn-label-' + status[row.Type].state +
							' kt-font-' + status[row.Type].state +
							'">' +
							status[row.Type].title + '</span>';
					},
				},

				],
		});


	};

	return {
		// Public functions
		init: function() {
			// init dmeo
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableDataLocalDemo.init();
});