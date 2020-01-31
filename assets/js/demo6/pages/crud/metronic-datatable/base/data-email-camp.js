'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"Camp":"Chiến dịch email 01","Type":"1","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 02","Type":"1","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 03","Type":"1","Date":"8/27/2019","Status":"4","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 04","Type":"1","Date":"8/27/2019","Status":"4","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 05","Type":"1","Date":"8/27/2019","Status":"4","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 06","Type":"2","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 07","Type":"2","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 08","Type":"2","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 09","Type":"2","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 10","Type":"1","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 11","Type":"1","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"},\n' +
			'{"Camp":"Chiến dịch email 12","Type":"1","Date":"8/27/2019","Status":"1","Numtotal":"10000","Numsent":"10000","Numopen":"5%"}]');

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
					field: 'Type',
					title: 'Loại chiến dịch',
					autoHide: false,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Regular', 'state': 'warning'},
							2: {'title': 'Html Camp', 'state': 'success'},
						};
						return '<span class="kt-font-bold kt-font-' + status[row.Type].state +
							'">' +
							status[row.Type].title + '</span>';
					},
				}, {
					field: 'Date',
					title: 'Ngày khởi tạo',
					type: 'date',
					width: 130,
					format: 'MM/DD/YYYY',
				}, {
					field: 'Status',
					title: 'Trạng thái',
					width: 110,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Pending', 'class': 'kt-badge--brand'},
							2: {'title': 'Delivered', 'class': ' kt-badge--danger'},
							3: {'title': 'Canceled', 'class': ' kt-badge--primary'},
							4: {'title': 'Success', 'class': ' kt-badge--success'},
							5: {'title': 'Info', 'class': ' kt-badge--info'},
							6: {'title': 'Danger', 'class': ' kt-badge--danger'},
							7: {'title': 'Warning', 'class': ' kt-badge--warning'},
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
				}, {
					field: 'Numtotal',
					title: 'Tổng số email gửi',
					type: 'number',
					width: 180,
				}, {
					field: 'Numsent',
					title: 'Tổng số email thành công',
					type: 'number',
					width: 180,
				},  {
					field: 'Numopen',
					title: 'Tỷ lệ mở',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
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