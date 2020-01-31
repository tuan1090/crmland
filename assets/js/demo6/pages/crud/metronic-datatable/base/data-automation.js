'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"Camp":"Chiến dịch automation 01","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 02","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 03","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 04","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 05","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 06","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 07","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 08","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 09","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 10","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 11","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"},\n' +
			'{"Camp":"Chiến dịch automation 12","Number":"1000","Price":"850","Total":"850.000","Typecamp":"1","Date":"8/27/2019","channer":"1","Type":"1"}]');

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
					field: 'Typecamp',
					title: 'Loại chiến dịch',
					width: 150,
					autoHide: false,
					template: function(row) {
						var status = {
							1: {'title': 'Chúc mừng sinh nhật', 'state': 'warning'},
							2: {'title': 'Chúc mừng ngày lễ', 'state': 'warning'},
							3: {'title': 'Bản tin tự động', 'state': 'warning'},
							4: {'title': 'Lời chào tự động', 'state': 'warning'},
							5: {'title': 'Bản tin định kỳ', 'state': 'warning'},
							6: {'title': 'Tin nhắn tự động', 'state': 'warning'},
						};
						return '<span class="kt-font-bold kt-font-' + status[row.Type].state +
							'">' +
							status[row.Type].title + '</span>';
					},
				}, {
					field: 'Date',
					title: 'Ngày khởi tạo',
					type: 'date',
					width: 100,
					format: 'MM/DD/YYYY',
				}, {
					field: 'channer',
					title: 'Kênh gửi',
					width: 100,
					autoHide: false,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'SMS QC', 'class': 'kt-badge--success'},
							2: {'title': 'SMS Brandname', 'class': 'kt-badge--success'},
							2: {'title': 'Email', 'class': 'kt-badge--success'},
						};
						return '<span class="kt-badge ' + status[row.channer].class + ' kt-badge--inline kt-badge--pill">' + status[row.channer].title + '</span>';
					},
				}, {
					field: 'Type',
					title: 'Gửi tới',
					autoHide: false,
					template: function(row) {
						var status = {
							1: {'title': 'Khách đã mua'},
							2: {'title': 'Khách VIP'},
							2: {'title': 'Khách Hà Nội'},
						};
						return '<span class="kt-badge kt-badge--inline kt-badge--pill">' + status[row.channer].title + '</span>';
					},
				}, {
					field: 'Number',
					title: 'Số lượng',
					width: 100,
				}, {
					field: 'Price',
					title: 'Chi phí',
					width: 100,
				}, {
					field: 'Total',
					title: 'Tổng',
					width: 100,
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