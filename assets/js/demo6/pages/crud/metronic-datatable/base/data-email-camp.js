'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"RecordID":1,"OrderID":"0374-5070","Country":"China","ShipCountry":"CN","ShipCity":"Jiujie","ShipName":"Rempel Inc","ShipAddress":"60310 Schiller Center","CompanyEmail":"cdodman0@wsj.com","CompanyAgent":"Cordi Dodman","CompanyName":"Kris-Wehner","Currency":"CNY","Notes":"sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus","Department":"Kids","Website":"tripadvisor.com","Latitude":39.952319,"Longitude":119.598195,"ShipDate":"8/27/2017","PaymentDate":"2016-09-15 22:18:06","TimeZone":"Asia/Chongqing","TotalPayment":"$336309.10","Status":6,"Type":2,"Actions":null},\n' +
			'{"RecordID":2,"OrderID":"63868-257","Country":"Philippines","ShipCountry":"PH","ShipCity":"Gibgos","ShipName":"Muller, Leannon and McKenzie","ShipAddress":"26734 Mitchell Drive","CompanyEmail":"kscritch1@google.es","CompanyAgent":"Katrinka Scritch","CompanyName":"Stanton, Friesen and Grant","Currency":"PHP","Notes":"ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur","Department":"Tools","Website":"elpais.com","Latitude":13.8503992,"Longitude":123.7585154,"ShipDate":"9/3/2017","PaymentDate":"2016-09-05 16:27:07","TimeZone":"Asia/Manila","TotalPayment":"$786612.37","Status":1,"Type":2,"Actions":null},\n' +
			'{"RecordID":3,"OrderID":"49288-0815","Country":"Paraguay","ShipCountry":"PY","ShipCity":"General Elizardo Aquino","ShipName":"Fahey, Rosenbaum and Leannon","ShipAddress":"9 Daystar Center","CompanyEmail":"neberlein2@google.ca","CompanyAgent":"Nevin Eberlein","CompanyName":"Cartwright, Hilpert and Hartmann","Currency":"PYG","Notes":"bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris","Department":"Electronics","Website":"bing.com","Latitude":-24.4436327,"Longitude":-56.9014072,"ShipDate":"4/23/2016","PaymentDate":"2016-01-01 08:03:07","TimeZone":"America/Asuncion","TotalPayment":"$216102.85","Status":5,"Type":1,"Actions":null},\n' +
			'{"RecordID":4,"OrderID":"49288-0039","Country":"Azerbaijan","ShipCountry":"AZ","ShipCity":"Maştağa","ShipName":"Gaylord-Aufderhar","ShipAddress":"68 Bunker Hill Street","CompanyEmail":"sdenge3@discuz.net","CompanyAgent":"Syd Denge","CompanyName":"Bednar-Grant","Currency":"AZN","Notes":"suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus","Department":"Computers","Website":"nbcnews.com","Latitude":40.5329933,"Longitude":50.0035678,"ShipDate":"9/6/2017","PaymentDate":"2016-08-26 05:27:20","TimeZone":"Asia/Baku","TotalPayment":"$555545.40","Status":1,"Type":2,"Actions":null},\n' +
			'{"RecordID":5,"OrderID":"59762-0009","Country":"Brazil","ShipCountry":"BR","ShipCity":"Corrego Grande","ShipName":"Zemlak-Ward","ShipAddress":"8 Orin Terrace","CompanyEmail":"mtreanor4@histats.com","CompanyAgent":"Mallory Treanor","CompanyName":"Feeney Inc","Currency":"BRL","Notes":"luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat","Department":"Computers","Website":"rediff.com","Latitude":-27.593609,"Longitude":-48.5027406,"ShipDate":"10/28/2017","PaymentDate":"2017-02-20 12:31:25","TimeZone":"America/Sao_Paulo","TotalPayment":"$968744.59","Status":5,"Type":1,"Actions":null},\n' +
			'{"RecordID":6,"OrderID":"43419-020","Country":"Honduras","ShipCountry":"HN","ShipCity":"San Juan Pueblo","ShipName":"Marvin-D\'Amore","ShipAddress":"660 Riverside Place","CompanyEmail":"lyankishin5@jiathis.com","CompanyAgent":"Lanae Yankishin","CompanyName":"Bechtelar, Wisoky and Homenick","Currency":"HNL","Notes":"tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis","Department":"Beauty","Website":"wordpress.org","Latitude":15.5973118,"Longitude":-87.2145498,"ShipDate":"4/6/2017","PaymentDate":"2017-10-22 02:33:29","TimeZone":"America/Tegucigalpa","TotalPayment":"$1119199.00","Status":5,"Type":3,"Actions":null},\n' +
			'{"RecordID":7,"OrderID":"33261-641","Country":"China","ShipCountry":"CN","ShipCity":"Yihe","ShipName":"MacGyver, Witting and Gleason","ShipAddress":"757 Daystar Crossing","CompanyEmail":"mmangeot6@harvard.edu","CompanyAgent":"Margy Mangeot","CompanyName":"Towne, MacGyver and Greenholt","Currency":"CNY","Notes":"metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet","Department":"Garden","Website":"huffingtonpost.com","Latitude":23.2196922,"Longitude":113.3138804,"ShipDate":"4/15/2017","PaymentDate":"2016-01-30 06:42:56","TimeZone":"Asia/Chongqing","TotalPayment":"$629781.98","Status":3,"Type":2,"Actions":null},\n' +
			'{"RecordID":8,"OrderID":"68462-221","Country":"France","ShipCountry":"FR","ShipCity":"Saint-Leu-la-Forêt","ShipName":"Turner-Parisian","ShipAddress":"21390 Golf Course Lane","CompanyEmail":"apolo7@opera.com","CompanyAgent":"Aubree Polo","CompanyName":"Lubowitz Inc","Currency":"EUR","Notes":"blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse","Department":"Clothing","Website":"dell.com","Latitude":49.0301146,"Longitude":2.2509675,"ShipDate":"6/13/2016","PaymentDate":"2017-03-01 14:18:47","TimeZone":"Europe/Paris","TotalPayment":"$1106347.34","Status":6,"Type":2,"Actions":null},\n' +
			'{"RecordID":9,"OrderID":"68084-555","Country":"Mexico","ShipCountry":"MX","ShipCity":"Hidalgo","ShipName":"O\'Kon, Heller and Flatley","ShipAddress":"960 Vahlen Avenue","CompanyEmail":"lsneddon8@hugedomains.com","CompanyAgent":"Leif Sneddon","CompanyName":"Larson Inc","Currency":"MXN","Notes":"rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut","Department":"Sports","Website":"ifeng.com","Latitude":20.0910963,"Longitude":-98.7623874,"ShipDate":"11/14/2016","PaymentDate":"2016-09-21 23:32:43","TimeZone":"America/Mexico_City","TotalPayment":"$677621.03","Status":4,"Type":2,"Actions":null},\n' +
			'{"RecordID":10,"OrderID":"49230-191","Country":"Japan","ShipCountry":"JP","ShipCity":"Yokosuka","ShipName":"White, Legros and Carroll","ShipAddress":"8 Annamark Place","CompanyEmail":"mellse2q@xinhuanet.com","CompanyAgent":"Meade Ellse","CompanyName":"Purdy-Carroll","Currency":"JPY","Notes":"magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia","Department":"Sports","Website":"abc.net.au","Latitude":34.6830797,"Longitude":137.9865313,"ShipDate":"12/12/2016","PaymentDate":"2016-08-30 12:27:38","TimeZone":"Asia/Tokyo","TotalPayment":"$1127673.96","Status":1,"Type":1,"Actions":null},\n' +
			'{"RecordID":11,"OrderID":"50865-056","Country":"Honduras","ShipCountry":"HN","ShipCity":"Yuscarán","ShipName":"Anderson, Pfannerstill and Miller","ShipAddress":"116 Bay Way","CompanyEmail":"hensley2r@businessweek.com","CompanyAgent":"Hamil Ensley","CompanyName":"Kessler, Greenfelder and Gaylord","Currency":"HNL","Notes":"nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis","Department":"Kids","Website":"dell.com","Latitude":13.9448964,"Longitude":-86.8508942,"ShipDate":"1/14/2016","PaymentDate":"2016-12-27 22:25:10","TimeZone":"America/Tegucigalpa","TotalPayment":"$386091.31","Status":6,"Type":3,"Actions":null}]');

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
					field: 'Country',
					title: 'Khách hàng',
					autoHide: false,
					template: function(row) {
						return row.Country + ' ' + row.ShipCountry;
					},
				}, {
					field: 'CompanyEmail',
					title: 'Email',
					autoHide: false,
				}, {
					field: 'Trạng thái',
					title: 'Status',
					autoHide: false,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Chưa mở', 'class': 'kt-badge--brand'},
							2: {'title': 'Delivered', 'class': ' kt-badge--danger'},
							3: {'title': 'Đã hủy', 'class': ' kt-badge--primary'},
							4: {'title': 'Đã mở', 'class': ' kt-badge--success'},
							5: {'title': 'Info', 'class': ' kt-badge--info'},
							6: {'title': 'Bị trải lại', 'class': ' kt-badge--danger'},
							7: {'title': 'Warning', 'class': ' kt-badge--warning'},
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
				}, {
					field: 'Type',
					title: 'Số lần mở',
					autoHide: false,
				}, {
					field: 'ShipDate',
					title: 'Lần mở gần nhất',
					type: 'date',
					format: 'MM/DD/YYYY',
					autoHide: false,
				} ],
		});

		$('#kt_form_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Status');
		});

		$('#kt_form_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Type');
		});

		$('#kt_form_status,#kt_form_type').selectpicker();

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