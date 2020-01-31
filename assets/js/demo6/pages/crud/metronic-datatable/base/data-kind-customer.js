'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse(
			'[{"id":1,"group-customer":"Phổ thông","mota":"-","khachhang":"1000"},\n' +
			'{"id":2,"group-customer":"Tiềm năng","mota":"-","khachhang":"1000"},\n' +
			'{"id":3,"group-customer":"Khách net","mota":"-","khachhang":"1000"},\n' +
			'{"id":4,"group-customer":"Khách chốt","mota":"-","khachhang":"1000"},\n' +
			'{"id":5,"group-customer":"Khách đã mua","mota":"-","khachhang":"1000"}]');

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
					field: 'id',
					title: '#',
					sortable: false,
					width: 20,
					type: 'number',
					selector: {class: 'kt-checkbox--solid'},
					textAlign: 'center',
				},  
				{
					field: 'group-customer',
					title: 'Loại khách hàng',
				},
				{
					field: 'mota',
					title: 'Mô tả',
				},
				{
					field: 'khachhang',
					title: 'Số khách hàng',
					type: 'number',
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