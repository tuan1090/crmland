<?php require "header.php"; ?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3">
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
								<div class="row">
									<div class="col-xl-12">
										<h6 class="mb-4">Thông tin cơ bản</h6>
										<select class="form-control m-input mb-3" name="sex">
											<option value="">Danh xưng</option>
		                                	<option value="1">Anh</option>
		                                	<option value="2">Chị</option>
		                                	<option value="2">Cô</option>
		                                	<option value="2">Chú</option>
		                                </select>
                                        <input type="text" class="form-control mb-3" id="username" placeholder="Họ tên (Bắt buộc)" required="">
                                        <input type="text" class="form-control mb-3" id="username" placeholder="Địa chỉ" required="">
                                        <input type="text" class="form-control mb-3" id="username" placeholder="Điện thoại (Bắt buộc)" required="">
                                        <input type="text" class="form-control mb-3" id="username" placeholder="Email" required="">
                                        <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample5">
											<div class="card">
												<div class="card-header" id="headingTwo5">
													<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
														<i class="flaticon2-notification"></i> Thông tin bổ sung
													</div>
												</div>
												<div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo5" data-parent="#accordionExample5" style="">
													<div class="card-body">
														<div class="row">
															<div class="form-group col-lg-12">
																<label>Ngày sinh</label>
																<input class="form-control" id="kt_inputmask_1" type="text" im-insert="true">
															</div>
															<div class="form-group col-lg-6">
																<label>Khách hàng dự án</label>
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Default
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox"> Option 2
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox" checked="checked"> Checked
																		<span></span>
																	</label>
																</div>
															</div>
															<div class="form-group col-lg-6">
																<label>Khách hàng dự án</label>
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Default
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox"> Option 2
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox" checked="checked"> Checked
																		<span></span>
																	</label>
																</div>
															</div>
															<div class="form-group col-lg-6">
																<label>Khách hàng dự án</label>
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Default
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox"> Option 2
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox" checked="checked"> Checked
																		<span></span>
																	</label>
																</div>
															</div>
															<div class="form-group col-lg-6">
																<label>Khách hàng dự án</label>
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Default
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox"> Option 2
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox" checked="checked"> Checked
																		<span></span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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
	<script src="./assets/js/demo6/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>

	<!-- end::Body -->
</html>