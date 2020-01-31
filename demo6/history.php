<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
		<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
			    <!--Begin:: App Aside-->
			<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
			        <!--begin:: Widgets/Applications/User/Profile1-->
				<div class="kt-portlet kt-portlet--height-fluid-">
				    <div class="kt-portlet__head  kt-portlet__head--noborder">
				        <div class="kt-portlet__head-label">
				            <h3 class="kt-portlet__head-title">
				            </h3>
				        </div>
				    </div>
			    <div class="kt-portlet__body kt-portlet__body--fit-y">
			        <!--begin::Widget -->
			        <div class="kt-widget kt-widget--user-profile-1">
			            <div class="kt-widget__head">
			                <div class="kt-widget__media">
			                    <img src="assets/media/users/100_13.jpg" alt="image">
			                </div>
			                <div class="kt-widget__content">
			                    <div class="kt-widget__section">
			                        <a href="#" class="kt-widget__username">
			                            Jason Muller
			                            <i class="flaticon2-correct kt-font-success"></i>
			                        </a>
			                    </div>

			                    <div class="kt-widget__action">
			                        <button type="button" class="btn btn-info btn-sm">Số dư : 300.000.000 vnđ</button>&nbsp;
			                    </div>
			                </div>
			            </div>
			            <div class="kt-widget__body">
			                <div class="kt-widget__content">
			                    <div class="kt-widget__info">
			                        <span class="kt-widget__label">Họ tên:</span>
			                        <span class="kt-widget__data">Jason Muller</span>
			                    </div>
			                    <div class="kt-widget__info">
			                        <span class="kt-widget__label">Email:</span>
			                        <a href="#" class="kt-widget__data">matt@fifestudios.com</a>
			                    </div>
			                    <div class="kt-widget__info">
			                        <span class="kt-widget__label">Điện thoại:</span>
			                        <a href="#" class="kt-widget__data">44(76)34254578</a>
			                    </div>
			                </div>
			                <div class="kt-widget__items">
			                    <a href="demo6/profile.php" class="kt-widget__item">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon2-calendar-3"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Thông tin tài khoản
			                            </span>
			                        </span>
			                    </a>
			                    <a href="demo6/chance-pass.php" class="kt-widget__item">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon-lock"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Đổi mật khẩu
			                            </span>
			                        </span>
			                    </a>
			                    <a href="demo6/notification.php" class="kt-widget__item ">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon2-mail kt-font-warning"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Thông báo
			                            </span>
			                        </span>
			                    </a>
			                    <a href="demo6/history-pay.php" class="kt-widget__item">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon-piggy-bank"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Lịch sử thanh toán
			                            </span>
			                        </span>
			                    </a>
			                    <a href="demo6/history.php" class="kt-widget__item kt-widget__item--active">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon2-cardiogram kt-font-warning"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Nhật ký hoạt động
			                            </span>
			                        </span>
			                    </a>
			                    <a href="demo6/invoice.php" class="kt-widget__item ">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon-graphic"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Hóa đơn dịch vụ
			                            </span>
			                        </span>
			                    </a>
			                </div>
			            </div>
			        </div>
			        <!--end::Widget -->
			    </div>
			</div>
			<!--end:: Widgets/Applications/User/Profile1-->
			    </div>
			    <!--End:: App Aside-->
			    
			    <!--Begin:: App Content-->
			    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
			        <div class="row">
			            <div class="col-xl-12">
			                <div class="kt-portlet kt-portlet--height-fluid">
			                    <div class="kt-portlet__head">
			                        <div class="kt-portlet__head-label">
			                            <h3 class="kt-portlet__head-title">Nhật ký hoạt động</h3>
			                        </div>
			                    </div>
			                    <form class="kt-form kt-form--label-right">
			                        <div class="kt-portlet__body">
			                            <div class="kt-section kt-section--first">
			                                <div class="kt-section__body">
			                                	<p class="history-empty text-center my-5">
			                                		<svg height="200px" viewBox="-24 0 423 423.25163" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="m293.671875 273.066406c0 79.175782-64.183594 143.359375-143.359375 143.359375s-143.359375-64.183593-143.359375-143.359375c0-79.175781 64.183594-143.359375 143.359375-143.359375s143.359375 64.183594 143.359375 143.359375zm0 0" fill="#fff35f"/><g fill="#54596e"><path d="m293.671875 273.066406h6.828125c-.007812-82.945312-67.238281-150.183594-150.1875-150.1875-82.949219.003906-150.183594 67.242188-150.1875 150.1875.007812 82.945313 67.238281 150.183594 150.1875 150.183594 82.945312 0 150.179688-67.238281 150.1875-150.183594h-13.652344c-.003906 37.722656-15.273437 71.8125-39.992187 96.542969-24.730469 24.71875-58.820313 39.988281-96.542969 39.992187-37.722656-.007812-71.8125-15.273437-96.542969-39.992187-24.71875-24.730469-39.988281-58.820313-39.992187-96.542969.003906-37.722656 15.273437-71.8125 39.992187-96.542968 24.730469-24.71875 58.820313-39.988282 96.542969-39.988282 37.722656.003906 71.8125 15.269532 96.542969 39.992188 24.71875 24.726562 39.988281 58.820312 39.992187 96.542968h6.824219zm0 0"/><path d="m102.527344 211.625c0 7.542969-6.113282 13.65625-13.65625 13.65625-7.539063 0-13.652344-6.113281-13.652344-13.65625 0-7.539062 6.113281-13.652344 13.652344-13.652344 7.542968 0 13.65625 6.113282 13.65625 13.652344zm0 0"/><path d="m225.40625 211.625c0 7.542969-6.113281 13.65625-13.652344 13.65625-7.542968 0-13.65625-6.113281-13.65625-13.65625 0-7.539062 6.113282-13.652344 13.65625-13.652344 7.539063 0 13.652344 6.113282 13.652344 13.652344zm0 0"/></g><path d="m225.40625 252.585938c0 7.542968-6.113281 13.652343-13.652344 13.652343-7.542968 0-13.65625-6.109375-13.65625-13.652343 0-7.539063 6.113282-13.652344 13.65625-13.652344 7.539063 0 13.652344 6.113281 13.652344 13.652344zm0 0" fill="#ff927d"/><path d="m102.527344 252.585938c0 7.542968-6.113282 13.652343-13.65625 13.652343-7.539063 0-13.652344-6.109375-13.652344-13.652343 0-7.539063 6.113281-13.652344 13.652344-13.652344 7.542968 0 13.65625 6.113281 13.65625 13.652344zm0 0" fill="#ff927d"/><path d="m170.792969 279.894531c0-18.851562-10.699219-34.132812-23.894531-34.132812-13.195313 0-23.894532 15.28125-23.894532 34.132812 0 18.851563 10.699219 34.132813 23.894532 34.132813 13.195312 0 23.894531-15.28125 23.894531-34.132813zm0 0" fill="#54596e"/><path d="m341.460938 191.148438c-15.082032 0-27.308594-12.226563-27.308594-27.308594v-129.707032c0-15.078124 12.226562-27.304687 27.308594-27.304687 15.078124 0 27.304687 12.226563 27.304687 27.304687v129.707032c0 15.082031-12.226563 27.308594-27.304687 27.308594zm0 0" fill="#f4a14e"/><path d="m341.460938 191.148438v-6.828126c-11.308594-.023437-20.460938-9.175781-20.480469-20.480468v-129.707032c.019531-11.304687 9.171875-20.460937 20.480469-20.480468 11.304687.019531 20.457031 9.175781 20.476562 20.480468v129.707032c-.019531 11.304687-9.171875 20.457031-20.476562 20.480468v13.652344c18.851562-.003906 34.125-15.277344 34.132812-34.132812v-129.707032c-.007812-18.855468-15.28125-34.12890575-34.132812-34.132812-18.855469.00390625-34.128907 15.277344-34.136719 34.132812v129.707032c.007812 18.855468 15.28125 34.128906 34.136719 34.132812zm0 0" fill="#54596e"/><path d="m341.460938 266.238281c-7.242188 0-14.269532-2.9375-19.320313-7.984375-5.054687-5.121094-7.988281-12.152344-7.988281-19.320312 0-7.167969 2.933594-14.199219 7.988281-19.320313 5.117187-5.054687 12.152344-7.988281 19.320313-7.988281 7.164062 0 14.199218 2.933594 19.316406 7.988281 5.046875 5.121094 7.988281 12.152344 7.988281 19.320313 0 7.167968-2.941406 14.199218-7.988281 19.320312-1.300782 1.226563-2.664063 2.386719-4.164063 3.414063-1.5.953125-3.074219 1.769531-4.707031 2.453125-1.640625.683594-3.347656 1.234375-5.121094 1.574218-1.78125.339844-3.554687.542969-5.324218.542969zm0 0" fill="#f4a14e"/><path d="m341.460938 266.238281v-6.824219c-5.390626.011719-10.753907-2.234374-14.5-5.992187l.035156.035156c-3.796875-3.828125-6.03125-9.222656-6.019532-14.523437-.011718-5.300782 2.222657-10.699219 6.019532-14.527344l-4.859375-4.792969 4.796875 4.859375c3.828125-3.800781 9.226562-6.035156 14.523437-6.019531 5.300781-.015625 10.695313 2.222656 14.523438 6.019531l4.796875-4.859375-4.863282 4.792969c3.796876 3.828125 6.035157 9.230469 6.023438 14.527344.015625 5.296875-2.226562 10.695312-6.023438 14.527344l4.863282 4.792968-4.683594-4.964844c-1.128906 1.0625-2.222656 1.980469-3.339844 2.742188l3.855469 5.636719-3.660156-5.761719c-1.171875.742188-2.398438 1.382812-3.671875 1.910156-1.285156.539063-2.542969.933594-3.78125 1.171875-1.453125.28125-2.796875.425781-4.039063.425781v13.652344c2.300781 0 4.507813-.265625 6.605469-.667968 2.3125-.441407 4.472656-1.140626 6.476562-1.980469 1.980469-.824219 3.902344-1.828125 5.730469-2.988281l.195313-.128907c1.882812-1.289062 3.523437-2.691406 4.996094-4.082031l.175781-.171875c6.296875-6.410156 9.9375-15.078125 9.953125-24.113281-.015625-9.039063-3.65625-17.707032-9.953125-24.113282l-.066407-.066406c-6.410156-6.308594-15.082031-9.941406-24.113281-9.953125-9.035156.011719-17.707031 3.644531-24.117187 9.953125l-.0625.0625c-6.308594 6.410156-9.941406 15.082032-9.953125 24.117188.011719 9.03125 3.640625 17.703125 9.953125 24.113281l.035156.039063c6.359375 6.332031 15.050781 9.96875 24.144531 9.980468v-6.828125zm0 0" fill="#54596e"/></svg>
			                                		<h5 class="d-block my-4 text-center">Oh! Bạn chưa có hoạt động trả phí nào</h5>
			                                	</p>
			                                    <table class="table table-bordered table-head-solid">
												 	<thead>
												    	<tr>
												      		<th style="width: 150px">Ngày tháng</th>
												      		<th>Loại chi tiêu</th>
												      		<th style="width: 200px">Chi phí</th>
												      		<th style="width: 300px">Mô tả</th>
												    	</tr>
												  	</thead>
												  	<tbody>
												  		<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												    	<tr>
												    		<td>30/09/2019</td>
												    		<td>Chạy chiến dịch sms marketing</td>
												      		<td>350.000 vnđ</td>
												      		<td>Chiến dịch sms 01 - 1000 SMS</td>
												    	</tr>
												  	</tbody>
												</table>
			                                </div>
			                            </div>
			                        </div>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			    <!--End:: App Content-->
		</div>
		<!-- end:: Content -->
	</div>
		
		<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/crud/metronic-datatable/base/data-duan.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>