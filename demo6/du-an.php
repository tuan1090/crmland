<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-md-5">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Thêm mới dự án
									</h3>
								</div>
							</div>
							<!--begin::Form-->
							<form class="kt-form">
								<div class="kt-portlet__body">
									<div class="form-group">
										<label>Tên dự án</label>
										<input type="text" class="form-control" placeholder="Tên dự án">
									</div>
									<div class="form-group form-group-last">
										<label for="exampleTextarea">Mô tả dự án</label>
										<textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Mô tả dự án (có thể bỏ trống)"></textarea>
									</div>
								</div>
								<div class="kt-portlet__foot">
									<div class="kt-form__actions">
										<button type="reset" class="btn btn-primary">Thêm dự án</button>
										<button type="reset" class="btn btn-secondary">Hủy bỏ</button>
									</div>
								</div>
							</form>
							<!--end::Form-->			
						</div>
						<!--end::Portlet-->
					</div>
					<div class="col-md-7">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Danh sách dự án hiện có
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
		<script src="./assets/js/demo6/pages/crud/metronic-datatable/base/data-duan.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>