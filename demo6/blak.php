<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-5">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Thông tin khách hàng
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<h6 class="mb-4">Thông tin cơ bản</h6>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group mb-3">
											<label>Danh xưng</label>
											<select class="form-control form-control-sm m-input mb-3" name="sex">
											<option value="">Danh xưng</option>
		                                	<option value="1">Anh</option>
		                                	<option value="2">Chị</option>
		                                	<option value="2">Cô</option>
		                                	<option value="2">Chú</option>
		                                </select>
		                               </div>
		                            </div>
		                            <div class="col-lg-6">    
                                        <div class="form-group mb-3">
                                        	<label>Họ tên</label>
                                        	<input type="text" class="form-control form-control-sm mb-3" id="name" placeholder="Họ tên (Bắt buộc)" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">    
                                        <div class="form-group mb-3">
											<label>Ngày sinh</label>
											<input class="form-control form-control-sm" id="kt_inputmask_1" type="text" im-insert="true">
										</div>
                                    </div>
                                    <div class="col-lg-6">    	
                                        <div class="form-group mb-3">
                                        	<label>Địa chỉ</label>
                                        	<input type="text" class="form-control form-control-sm mb-3" id="add" placeholder="Địa chỉ" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">    	
                                        <div class="form-group mb-3">
                                        	<label>Điện thoại</label>
                                        	<input type="text" class="form-control form-control-sm mb-3" id="tel" placeholder="Điện thoại (Bắt buộc)" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">    	
                                        <div class="form-group mb-3">
                                        	<label>Email</label>
                                        	<input type="text" class="form-control form-control-sm mb-3" id="email" placeholder="Email" required="">
                                        </div>	
									</div>
								</div>
								<h6 class="my-4">Thông tin Phân loại</h6>
								<div class="form-group mb-3">
									<label>Khách hàng của dự án</label>
									<div class="w-100">
										<select class="form-control form-control-sm kt-select2" id="kt_select2_1" name="param" multiple="multiple" style="width: 100% !important">
											<option value="AK" selected>Alaska</option>
											<option value="HI" selected>Hawaii</option>
											<option value="CA" selected>California</option>
											<option value="NV" selected>Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
										</select>
									</div>
									<span class="form-text text-muted">Lựa chọn 1 hoặc nhiều nhóm trong danh sách</span>
								</div>
								<div class="form-group mb-3">
									<label>Thuộc nhóm khách hàng</label>
									<div class="w-100">
										<select class="form-control form-control-sm kt-select2" id="kt_select2_2" name="param" multiple="multiple" style="width: 100% !important">
											<option value="AK" selected>Alaska</option>
											<option value="HI" selected>Hawaii</option>
											<option value="CA" selected>California</option>
											<option value="NV" selected>Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
										</select>
									</div>
									<span class="form-text text-muted">Lựa chọn 1 hoặc nhiều nhóm trong danh sách</span>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group mb-3">
											<label>Phân loại khách hàng</label>
											<select class="form-control form-control-sm">
													<option selected>Khách phổ thông</option>
													<option selected>Khách tiềm năng</option>
													<option selected>Khách Nét</option>
													<option selected>Khách chốt</option>
													<option selected>Khách đã mua</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">	
										<div class="form-group mb-3">
											<label>Nguồn khách</label>
											<select class="form-control form-control-sm">
													<option selected>Internet</option>
													<option selected>Facebook</option>
													<option selected>Google</option>
													<option selected>SMS</option>
													<option selected>Telesale</option>
											</select>
										</div>
									</div>
								</div>
								<h6 class="my-4">Thông tin Bổ sung</h6>
								<div class="form-group mb-3">
									<label>Fiel nâng cao 1</label>
									<textarea class="form-control form-control-sm" rows="3"></textarea>
								</div>
								<div class="form-group mb-3">
									<label>Fiel nâng cao 2</label>
									<textarea class="form-control form-control-sm" rows="3"></textarea>
								</div>	
								<div class="form-group mb-3">
									<label>Fiel nâng cao 3</label>
									<textarea class="form-control form-control-sm" rows="3"></textarea>
								</div>		
							</div>
						</div>	
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>
		<!-- end:: Content -->
	</div>
		
		<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>