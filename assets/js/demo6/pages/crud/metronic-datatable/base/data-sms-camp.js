'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"Camp":"Chiến dịch sms 01","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"4"},\n' +
			'{"Camp":"Chiến dịch sms 02","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"4"},\n' +
			'{"Camp":"Chiến dịch sms 03","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"4"},\n' +
			'{"Camp":"Chiến dịch sms 04","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"4"},\n' +
			'{"Camp":"Chiến dịch sms 05","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"4"},\n' +
			'{"Camp":"Chiến dịch sms 06","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"4"},\n' +
			'{"Camp":"Chiến dịch sms 07","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"1"},\n' +
			'{"Camp":"Chiến dịch sms 08","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"1"},\n' +
			'{"Camp":"Chiến dịch sms 09","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"1"},\n' +
			'{"Camp":"Chiến dịch sms 10","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"1"},\n' +
			'{"Camp":"Chiến dịch sms 11","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"1"},\n' +
			'{"Camp":"Chiến dịch sms 12","Date":"8/27/2019","Numtotal":"10000","Type":"1","Content":"Đây là nội dung sms quảng cáo được gửi đi từ hệ thống CRMLAND","Status":"1"}]');

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

			search: {
				input: $('#generalSearch'),
			},

			// columns definition
			columns: [
				 
				{
					field: 'Camp',
					title: 'Tên chiến dịch',
				}, {
					field: 'Date',
					title: 'Ngày khởi tạo',
					type: 'date',
					width: 110,
					format: 'MM/DD/YYYY',
				}, {
					field: 'Numtotal',
					title: 'Số SMS gửi',
					type: 'number',
					width: 110,
				}, {
					field: 'Type',
					title: 'Gửi từ Brandname',
					width: 110,
					autoHide: false,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'CRMLAND', 'state': 'warning'},
							2: {'title': 'Romanplaza', 'state': 'success'},
						};
						return '<span class="kt-font-bold kt-font-' + status[row.Type].state +
							'">' +
							status[row.Type].title + '</span>';
					},
				}, {
					field: 'Content',
					title: 'Nội dung',
				}, {
					field: 'Status',
					title: 'Trạng thái',
					width: 110,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Đang xử lý', 'class': 'kt-badge--brand'},
							2: {'title': 'Đã chuyển', 'class': ' kt-badge--danger'},
							3: {'title': 'Hủy', 'class': ' kt-badge--primary'},
							4: {'title': 'Thành công', 'class': ' kt-badge--success'},
							5: {'title': 'Info', 'class': ' kt-badge--info'},
							6: {'title': 'Lỗi', 'class': ' kt-badge--danger'},
							7: {'title': 'Warning', 'class': ' kt-badge--warning'},
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
				},],
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