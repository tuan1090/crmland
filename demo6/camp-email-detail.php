<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-container container">
				<div class="kt-portlet kt-portlet--tabs kt-portlet--sortable">
					<div class="kt-portlet__head ui-sortable-handle">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Chi tiết chiến dịch email marketing
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<ul class="nav nav-tabs nav-tabs-line  nav-tabs-line-right" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#kt_portlet_base_demo_1_tab_content" role="tab">
										THỐNG KÊ CHIẾN DỊCH
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_2_tab_content" role="tab">
										XEM LẠI EMAIL
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="kt-portlet__body">
						<div class="tab-content">
							<div class="tab-pane active" id="kt_portlet_base_demo_1_tab_content">
								<div class="kt-section">
									<div class="kt-section__title">
										Tên chiến dịch - <span class="kt-font-warning">Chiến dịch email marketing số 1</span>
									</div>
									<div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
									<div class="kt-section__content">
										<div class="row">
											<div class="col-lg-6">
												<p>Gửi từ: <span class="kt-font kt-font-bold kt-font-info">admin@webland.vn</span></p>
												<p>Tiêu đề email: <span class="kt-font kt-font-bold kt-font-info">Dự án Eco Green Sông Đà tái khởi động</span></p>
												<p>Email nhận reply: <span class="kt-font kt-font-bold kt-font-info">admin@webland.vn</span></p>
											</div>
											<div class="col-lg-6">
												<p>Ngày tạo: <span class="kt-font kt-font-bold kt-font-info">2020-02-11, 14:42</span></p>
												<p>Ngày Gửi: <span class="kt-font kt-font-bold kt-font-info">2019-12-27, 18:04</span></p>
												<p>Hoàn thành: <span class="kt-font kt-font-bold kt-font-info">2019-12-27, 18:15</span></p>
											</div>
										</div>
										<div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
										<div class="row">
											<div class="col-lg-3">
												<div class="btn btn-block btn-success" role="alert">
													<p style="font-weight: bold;font-size:30px;">1000</p>
													<p class="text-white">
														Email thành công
													</p>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="btn btn-block btn-success" role="alert">
													<p style="font-weight: bold;font-size:30px;">1000</p>
													<p class="text-white">
														Email đã mở
													</p>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="btn btn-block btn-warning" role="alert">
													<p style="font-weight: bold;font-size:30px;">0</p>
													<p class="text-white">
														Email bị trả lại
													</p>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="btn btn-block btn-warning" role="alert">
													<p style="font-weight: bold;font-size:30px;">0</p>
													<p class="text-white">
														Email hủy đăng ký
													</p>
												</div>
											</div>
										</div>
										<div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
										<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-12 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Tìm theo tên khách hàng hoặc email..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																		<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<select class="form-control bootstrap-select" id="kt_form_status">
																			<option value="">Tất cả</option>
																			<option value="1">Đã mở</option>
																			<option value="2">Chưa mở</option>
																			<option value="3">Trả lại</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Open:</label>
																	</div>
																	<div class="kt-form__control">
																		<select class="form-control bootstrap-select" id="kt_form_type">
																			<option value="">Tất cả</option>
																			<option value="1">0</option>
																			<option value="2">1</option>
																			<option value="3">2</option>
																			<option value="3">3</option>
																			<option value="3">Nhiều hơn 3</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										<!--end: Search Form -->
										<div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
										<div class="kt-datatable" id="local_data"></div>		
									</div>
								</div>
							</div>
							<div class="tab-pane" id="kt_portlet_base_demo_2_tab_content">
								<div class="kt-heading kt-heading--md">
									Nội dung email
								</div>
								<div class="editor">
									<p>Đây là nội dung email được đặt trong ckeditor</p>
								</div>
								<div class="kt-heading kt-heading--md">File đính kèm</div>
								<input type="file" name="img" multiple>
								<div class="kt-heading kt-heading--md">Các Tag sử dụng</div>
								<div class="row">
									<div class="col-lg-6">
										<label class="kt-font-bold">Tag bắt buộc</label>
										<div class="tag">
											<span class="kt-badge kt-badge--inline kt-badge--warning">[HUY_DANG_KY]</span> Hủy Đăng ký
										</div>
									</div>
									<div class="col-lg-6">
										<label class="kt-font-bold">Tag cá nhân hóa nội dung</label>
										<div class="tag mb-2">
											<span class="kt-badge kt-badge--inline kt-badge--info">[DANH_XUNG]</span> Chèn danh xưng khách hàng
										</div>
										<div class="tag mb-2">
											<span class="kt-badge kt-badge--inline kt-badge--info">[HO_TEN]</span> Chèn họ tên khách hàng
										</div>
										<div class="tag mb-2">
											<span class="kt-badge kt-badge--inline kt-badge--info">[DIA_CHI]</span> Chèn địa chỉ khách hàng
										</div>
										<div class="tag mb-2">
											<span class="kt-badge kt-badge--inline kt-badge--info">[DIEN_THOAI]</span> Chèn số điện thoại khách hàng
										</div>	
										<div class="tag mb-2">
											<span class="kt-badge kt-badge--inline kt-badge--info">[EMAIL]</span> Chèn Email khách hàng
										</div>
										<div class="tag mb-2">
											<span class="kt-badge kt-badge--inline kt-badge--info">[NGAY_SINH]</span> Chèn ngày sinh khách hàng
										</div>				
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end:: Content -->
	</div>
		
		<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/crud/metronic-datatable/base/data-email-camp.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/ckeditor/ckeditor.js"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>