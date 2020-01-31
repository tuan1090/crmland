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
										Thêm Brandname mới
									</h3>
								</div>
							</div>
							<!--begin::Form-->
							<form class="kt-form">
								<div class="kt-portlet__body">
									<p>Lưu ý, theo quy định pháp luật, Brandname dùng trong quảng cáo tin nhắn được cấp bởi các nhà mạng viễn thông. Do đó, để tạo Brandname theo yêu cầu, Quý khách vui lòng tải về mẫu Brandname đăng ký, Điền đầy đủ thông tin và scan để upload lên hệ thống. Xem chi tiết các quy định về Brandname <a href="#">tại đây</a></p>
									<p>Brandname có độ dài tối đa 11 ký tự (bao gồm dấu cách), chấp nhận 3 ký tự ( - dấu gạch giữa , _ gạch dưới , . dấu chấm ) và Không chứa các kí tự đặc biệt : % # & [] {} \ < @.</p>
									<p>Brandname có thể khai báo theo đăng ký kinh doanh hoặc theo tên miền. Thời gian phê duyệt từ <strong>3 - 5 ngày</strong> kể từ khi đủ hồ sơ</p>
									<div class="alert alert-secondary" role="alert">
										<div class="alert-icon"><i class="flaticon-download"></i></div>
									  	<div class="alert-text">
											<a href="#">
									  		 	Download mẫu công văn đăng ký brandname với các nhà mạng
									  		</a>
										</div>
									</div>
									<div class="form-group">
										<label>Tên Brandname</label>
										<input type="text" class="form-control" placeholder="Tên dự án">
									</div>
									<div class="form-group">
										<label for="exampleTextarea">Mô tả brandname</label>
										<textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Mô tả dự án (có thể bỏ trống)"></textarea>
									</div>
									<div class="form-group form-group-last">
										<div class="dropzone dropzone-default dz-clickable" id="kt_dropzone_1">
											<div class="dropzone-msg dz-message needsclick">
											    <h3 class="dropzone-msg-title">Upload hồ sơ lên hệ thống</h3>
											    <span class="dropzone-msg-desc">Quý khách vui lòng upload đầy đủ hồ sơ tại đây. Hồ sơ bao gồm Công văn đăng ký Brandname, Đăng ký kinh doanh (Nếu đăng ký brandname là công ty) hoặc hợp đồng mua tên miền (nếu là cá nhân đăng ký qua tên miền).</span>
											</div>
										</div>
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
										Danh sách Brandname hiện có
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
		<script src="./assets/js/demo6/pages/crud/metronic-datatable/base/data-brand.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/dropzone.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>