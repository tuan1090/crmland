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
			                    <a href="demo6/chance-pass.php" class="kt-widget__item kt-widget__item--active">
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
			                    <a href="demo6/history-pay.php" class="kt-widget__item ">
			                        <span class="kt-widget__section">
			                            <span class="kt-widget__icon">
			                            	<i class="flaticon-piggy-bank"></i>
			                            </span>
			                            <span class="kt-widget__desc">
			                                Lịch sử thanh toán
			                            </span>
			                        </span>
			                    </a>
			                    <a href="demo6/history.php" class="kt-widget__item ">
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
			                            <h3 class="kt-portlet__head-title">Đổi mật khẩu</h3>
			                        </div>
			                    </div>
			                    <form class="kt-form kt-form--label-right">
			                        <div class="kt-portlet__body">
			                            <div class="kt-section kt-section--first">
			                                <div class="kt-section__body">
			                                    <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
			                                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
			                                        <div class="alert-text">Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire, <br>or they might inadvertently get locked out of the system!</div>
			                                        <div class="alert-close">
			                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                                                <span aria-hidden="true"><i class="la la-close"></i></span>
			                                            </button>
			                                        </div>
			                                    </div>
			                                    <div class="form-group row">
			                                        <label class="col-xl-3 col-lg-3 col-form-label">Mật khẩu cũ</label>
			                                        <div class="col-lg-9 col-xl-6">
			                                            <input type="password" class="form-control" value="" placeholder="Mật khẩu cũ">
			                                            <a href="#" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Bạn quên mật khẩu ?</a>
			                                        </div>
			                                    </div>
			                                    <div class="form-group row">
			                                        <label class="col-xl-3 col-lg-3 col-form-label">Mật khẩu mới</label>
			                                        <div class="col-lg-9 col-xl-6">
			                                            <input type="password" class="form-control" value="" placeholder="Mật khẩu mới">
			                                        </div>
			                                    </div>
			                                    <div class="form-group form-group-last row">
			                                        <label class="col-xl-3 col-lg-3 col-form-label">Nhập lại mật khẩu mới</label>
			                                        <div class="col-lg-9 col-xl-6">
			                                            <input type="password" class="form-control" value="" placeholder="Nhập lại mật khẩu mới">
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="kt-portlet__foot">
			                            <div class="kt-form__actions">
			                                <div class="row">
			                                    <div class="col-lg-3 col-xl-3">
			                                    </div>
			                                    <div class="col-lg-9 col-xl-9">
			                                        <button type="reset" class="btn btn-brand btn-bold">Đổi mật khẩu</button>&nbsp;
			                                        <button type="reset" class="btn btn-secondary">Hủy</button>
			                                    </div>
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