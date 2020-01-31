<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-md-6">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Thêm Email theo tên miền mới
									</h3>
								</div>
							</div>
							<!--begin::Form-->
							<form class="kt-form">
								<div class="kt-portlet__body">
									<p>Lưu ý, Tùy chọn này giúp bạn tạo ra các email dùng để chạy các chiến dịch email marketing.</p>
									<p>Bạn có thể sử dụng email định dạng abc@crmland.vn (abc theo tùy chọn của bạn) miễn phí và sử dụng ngay mà không cần xác minh</p>
									<p>Nếu bạn muốn tạo các email theo tên miền tùy chỉnh của bạn, vui lòng sử dụng trình hỗ trợ xác thực email theo tên miền của hệ thống. sau khi xác thực tên miền, bạn có thể gửi mail theo định dạng <strong>abc@tenmiencuaban.com</strong>. Tạo email theo tên miền của bạn ngay <a href="domain6/email-domain-create.php" class="btn btn-bold btn-sm btn-font-sm  btn-label-warning kt-font-warning">Tại đây</a></p>
									<h3 class="mb-4 mt-3">Tạo email mới</h3>
									<div class="form-group ">
										<label>Email</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Nhập tiền tố">
											<div class="input-group-append">
												<select class="btn btn-secondary">
													<option>.crmland.vn</option>
													<option>.romanplaza.vn</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="exampleTextarea">Mô tả</label>
										<textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Mô tả dự án (có thể bỏ trống)"></textarea>
									</div>
								</div>
								<div class="kt-portlet__foot">
									<div class="kt-form__actions">
										<button type="reset" class="btn btn-primary">Tạo Email</button>
									</div>
								</div>
							</form>
							<!--end::Form-->			
						</div>
						<!--end::Portlet-->
					</div>
					<div class="col-md-6">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Danh sách Email theo Domain hiện có
									</h3>
								</div>
							</div>
							<!--begin::Table-->
							<div class="kt-datatable" id="local_data"></div>		
						</div>
						<!--end::Portlet-->
					</div>
				</div>	
			</div>
		<!-- end:: Content -->
	</div>
		
		<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/crud/metronic-datatable/base/data-email-domain.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>