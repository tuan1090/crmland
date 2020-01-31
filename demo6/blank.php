<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-md-8">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Thêm mới dự án
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="form-group m-form__group row">
		                            <div class="col-lg-2">
		                            	<!-- <label>Danh xưng</label> -->
		                                <select class="form-control m-input" name="sex">
		                                	<option value="1">Anh</option>
		                                	<option value="2">Chị</option>
		                                	<option value="2">Cô</option>
		                                	<option value="2">Chú</option>
		                                </select>
		                            </div>
		                            <div class="col-lg-6">
		                            	<!-- <label>Họ tên</label> -->
		                            	<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
											<input type="text" class="form-control" placeholder="Họ tên" aria-describedby="basic-addon1">
										</div>
		                            </div>
		                            <div class="col-lg-4">
		                            	<div class="input-group date">
											<input type="text" class="form-control" readonly="" placeholder="Sinh nhật" id="kt_datepicker_2">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
		                            </div>
		                        </div>
		                        <div class="form-group m-form__group row">
		                        	<div class="col-lg-12">
		                            	<!-- <label>Địa chỉ</label> -->
		                                <div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
											<input type="text" class="form-control" placeholder="Địa chỉ" aria-describedby="basic-addon1">
										</div>
		                            </div>
		                        </div>
		                        <div class="form-group m-form__group row">
		                            <div class="col-lg-6">
		                            	<!-- <label>Điện thoại</label> -->
		                                <div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
											<input type="tel" class="form-control" placeholder="Điện thoại" aria-describedby="basic-addon1">
										</div>
		                            </div>
		                            <div class="col-lg-6">
		                            	<!-- <label>Email</label> -->
		                                <div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">@</span></div>
											<input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
										</div>
		                            </div>
		                        </div>
								<div class="form-group m-form__group row">
		                            <div class="col-lg-6">
		                            	<label class="kt-font-bold">Khách hàng của dự án</label>
		                            	<div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 1
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 2
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 3
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 4
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 5
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 6
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 7
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 8
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 9
												<span></span>
											</label>
										</div>
		                            </div>
		                            <div class="col-lg-6">
		                            	<label class="kt-font-bold">Nhóm khách hàng</label>
		                                <div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 1
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 2
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 3
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 4
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 5
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 6
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 7
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 8
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Nhóm khách hàng 9
												<span></span>
											</label>
										</div>
		                            </div>
		                        </div>
								<div class="form-group m-form__group row">
		                            <div class="col-lg-6">
		                            	<label class="kt-font-bold">Loại khách hàng</label>
		                                <div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox"> Khách hàng phổ thông
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Khách hàng tiềm năng
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Khách chốt
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Khách đã mua
												<span></span>
											</label>
										</div>
		                            </div>
		                            <div class="col-lg-6">
		                            	<label class="kt-font-bold">Nguồn khách</label>
		                                <div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox"> Tự tìm kiếm
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Form website
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Facebook
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Google
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> SMS
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Hotline
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Công ty chuyển
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Giới thiệu
												<span></span>
											</label>
										</div>
		                            </div>
		                        </div>
		                        <div class="form-group">
									<label for="exampleTextarea">Field custom 1</label>
									<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleTextarea">Field custom 2</label>
									<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleTextarea">Field custom 3</label>
									<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
								</div>
							</div>			
						</div>
						<!--end::Portlet-->
					</div>
				</div>	
			</div>
		<!-- end:: Content -->
	</div>
		
		<?php require "footer.php"; ?>

	<!-- end::Body -->
</html>