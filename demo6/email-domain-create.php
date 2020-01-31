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
									<p>Lưu ý, Theo quy định quốc tế về phòng chống thư rác, email giả mạo, Bạn cần xác minh các chứng chỉ về tên miền cho Email để tránh việc email gửi đi sẽ bị vào các hòm thư spam.</p>
									<p>Để thực hiện việc này, bạn sẽ phải thêm 1 số record dns vào tên miền. Bạn có thể tự thực hiện hoặc nhờ chúng tôi hỗ trợ miễn phí bằng cách cung cấp thông tin quản trị tên miền</p>
									<p>Thời gian xác thực tên miền sẽ là<strong>3h - 48h</strong> tùy thuộc vào nhà cung cấp tên miền của bạn. sau khi xác thực tên miền, bạn có thể gửi mail theo định dạng <strong>abc@tenmiencuaban.com</strong></p>
									<div class="form-group">
										<label>Tên Miền</label>
										<input type="text" class="form-control" placeholder="tenmiencuaban.com">
									</div>
									<div class="form-group">
										<label for="exampleTextarea">Link đăng nhập</label>
										<input type="text" class="form-control" placeholder="xxx.com">
									</div>
									<div class="form-group">
										<label for="exampleTextarea">Tài khoản</label>
										<input type="text" class="form-control" placeholder="abc">
									</div>
									<div class="form-group">
										<label for="exampleTextarea">Mật khẩu</label>
										<input type="text" class="form-control" placeholder="*******">
									</div>
								</div>
								<div class="kt-portlet__foot">
									<div class="kt-form__actions">
										<button type="reset" class="btn btn-primary">Thêm Brandname</button>
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