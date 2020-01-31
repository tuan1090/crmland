<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="./assets/css/demo6/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="demo6/index.html">
					<img alt="Logo" src="./assets/media/logos/logo-6-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
				<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon2-user-outline-symbol"></i></div>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--active">
									<a href="demo6/index.php" class="kt-menu__link ">
										<i class="kt-menu__link-icon flaticon2-protection"></i>
										<span class="kt-menu__link-text">Bảng quản trị</span>
									</a>
								</li>
								<li class="kt-menu__item">
									<a href="demo6/du-an.php" class="kt-menu__link ">
										<i class="kt-menu__link-icon flaticon2-cube"></i>
										<span class="kt-menu__link-text">Dự án</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
									<a href="" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon flaticon-users"></i>
										<span class="kt-menu__link-text">Khách hàng</span>
										<i class="kt-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/list-contact.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Danh sách khách hàng</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-customer.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Thêm mới</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-group-customer.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Nhóm khách hàng</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-kind-customer.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Phân loại khách hàng</span>
												</a>
											</li>											
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
									<a href="" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon flaticon-paper-plane"></i>
										<span class="kt-menu__link-text">Marketing</span>
										<i class="kt-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/sms-camp.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">SMS marketing</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/email-camp.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Email marketing</span>
												</a>
											</li>											
										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true">
									<a href="demo6/automation.php" class="kt-menu__link ">
										<i class="kt-menu__link-icon flaticon-clock-2"></i>
										<span class="kt-menu__link-text">Chăm sóc tự động</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
									<a href="" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon flaticon-imac"></i>
										<span class="kt-menu__link-text">Web bất động sản</span>
										<i class="kt-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/list-contact.html" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Mẫu giao diện</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-customer.html" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Danh sách website</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-customer.html" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Tạo Web tự động</span>
												</a>
											</li>											
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
									<a href="" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon flaticon-layers"></i>
										<span class="kt-menu__link-text">Tiện ích mở rộng</span>
										<i class="kt-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/list-contact.html" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Tạo form khách hàng</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-customer.html" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Tạo nút liên hệ</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/add-customer.html" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Chatbot</span>
												</a>
											</li>											
										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true">
									<a href="#" class="kt-menu__link ">
										<i class="kt-menu__link-icon flaticon-alert"></i>
										<span class="kt-menu__link-text">Nhắc việc cho tôi</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
									<a href="" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon flaticon2-gear"></i>
										<span class="kt-menu__link-text">Cấu hình hệ thống</span>
										<i class="kt-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/sms-brandname-create.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Brandname SMS</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/email-domain-create.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Email theo tên miền</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/email-create.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Tạo Email</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
									<a href="" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon flaticon-user"></i>
										<span class="kt-menu__link-text">Tài khoản</span>
										<i class="kt-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/profile.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Thông tin tài khoản</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/chance-pass.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Đổi mật khẩu</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/history-pay.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Lịch sử thanh toán</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/invoice.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Hóa đơn dịch vụ</span>
												</a>
											</li>											
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="demo6/history.php" class="kt-menu__link ">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
													<span class="kt-menu__link-text">Nhật ký hoạt động</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true">
									<a href="#" class="kt-menu__link ">
										<i class="kt-menu__link-icon flaticon-lifebuoy"></i>
										<span class="kt-menu__link-text">Ticket - Hỗ trợ</span>
									</a>
								</li>
								<li class="kt-menu__item " aria-haspopup="true">
									<a href="#" class="kt-menu__link ">
										<i class="kt-menu__link-icon flaticon-logout"></i>
										<span class="kt-menu__link-text">Đăng xuất</span>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

						<!-- begin:: Aside -->
						<div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
							<div class="kt-header__brand-logo">
								<a href="demo6/index.html">
									<img alt="Logo" src="./assets/media/logos/logo-6.png" />
								</a>
							</div>
						</div>

						<!-- end:: Aside -->

						<!-- begin:: Title -->
						<h3 class="kt-header__title">
							CRMLAND - nền tảng chuyên nghiệp quản trị khách hàng bất động sản
						</h3>

						<!-- end:: Title -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<!--begin: User bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-welcome">Xin chào,</span>
									<span class="kt-header__topbar-username">Tuan Nguyen</span>
									<img class="" alt="Pic" src="./assets/media/users/300_21.jpg" />
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(./assets/media/misc/bg-1.jpg)">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="./assets/media/users/300_25.jpg" />

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">T</span>
										</div>
										<div class="kt-user-card__name">
											Tuan Nguyen
										</div>
										<div class="kt-user-card__badge">
											<span class="btn btn-success btn-sm btn-bold btn-font-md">Số dư: 300.000.000 đ</span>
										</div>
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<a href="demo6/profile.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Thông tin tài khoản
												</div>
												<div class="kt-notification__item-time">
													Xem và chỉnh sửa các thông tin tài khoản của bạn
												</div>
											</div>
										</a>
										<a href="demo6/chance-pass.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon-lock"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Đổi mật khẩu
												</div>
												<div class="kt-notification__item-time">
													Thay đổi mật khẩu đăng nhập hệ thống
												</div>
											</div>
										</a>
										<a href="demo6/notification.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-mail"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Thông báo
												</div>
												<div class="kt-notification__item-time">
													Các thông báo từ hệ thống đến bạn
												</div>
											</div>
										</a>
										<a href="demo6/history-pay.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon-piggy-bank"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Lịch sử thanh toán
												</div>
												<div class="kt-notification__item-time">
													Thông tin lịch sử thanh toán - Nạp tiền hệ thống
												</div>
											</div>
										</a>
										<a href="demo6/invoice.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon-graphic"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Hóa đơn dịch vụ
												</div>
												<div class="kt-notification__item-time">
													Yêu cầu xuất hóa đơn VAT tại đây
												</div>
											</div>
										</a>
										<a href="demo6/history.php" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-cardiogram"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Nhật ký hoạt động
												</div>
												<div class="kt-notification__item-time">
													Lịch sử chi tiêu tài khoản hệ thống
												</div>
											</div>
										</a>
										<div class="kt-notification__custom kt-space-between">
											<a href="demo6/custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>

										</div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->