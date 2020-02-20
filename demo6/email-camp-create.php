<?php require "header.php"; ?>
<link href="./assets/css/demo6/pages/general/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<!-- begin:: Content -->
			<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
				<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

					<!--begin: Form Wizard Nav -->
					<div class="kt-wizard-v4__nav">
						<div class="kt-wizard-v4__nav-items">
							<a class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
								<div class="kt-wizard-v4__nav-body">
									<div class="kt-wizard-v4__nav-number">
										1
									</div>
									<div class="kt-wizard-v4__nav-label">
										<div class="kt-wizard-v4__nav-label-title">
											Cấu hình
										</div>
										<div class="kt-wizard-v4__nav-label-desc">
											Cấu hình chiến dịch
										</div>
									</div>
								</div>
							</a>
							<a class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
								<div class="kt-wizard-v4__nav-body">
									<div class="kt-wizard-v4__nav-number">
										2
									</div>
									<div class="kt-wizard-v4__nav-label">
										<div class="kt-wizard-v4__nav-label-title">
											Nội dung
										</div>
										<div class="kt-wizard-v4__nav-label-desc">
											Chỉnh sửa nội dung email
										</div>
									</div>
								</div>
							</a>
							<a class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
								<div class="kt-wizard-v4__nav-body">
									<div class="kt-wizard-v4__nav-number">
										3
									</div>
									<div class="kt-wizard-v4__nav-label">
										<div class="kt-wizard-v4__nav-label-title">
											Hoàn thành
										</div>
										<div class="kt-wizard-v4__nav-label-desc">
											Xem lại chiến dịch và gửi
										</div>
									</div>
								</div>
							</a>
					</div>
					<!--end: Form Wizard Nav -->
					<div class="kt-portlet">
						<div class="kt-portlet__body kt-portlet__body--fit">
							<div class="kt-grid">
								<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

									<!--begin: Form Wizard Form-->
									<form class="kt-form" id="kt_form">

										<!--begin: Form Wizard Step 1-->
										<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
											<div class="kt-heading kt-heading--md">Cấu hình chiến dịch và người nhận</div>
											<div class="kt-form__section kt-form__section--first">
												<div class="kt-wizard-v4__form">
													<h5 class="mb-3" style="font-size: 1.1rem">Tên chiến dịch</h5>
													<div class="form-group">
														<input type="text" class="form-control" name="fname" placeholder="First Name" value="Chiến dịch email marketing 01">
													</div>
													<div class="kt-separator kt-separator--space-lg kt-separator--border-soild"></div>
													<h5 class="mb-3" style="font-size: 1.1rem">Người gửi</h5>
													<div class="form-group">
														<label>Chọn Email gửi</label> 
														<span class="float-right">
															<a href="demo6/sms-brandname-create.php"><i class="flaticon-add-circular-button mr-2"></i> Tạo thêm Email khác</a>
														</span>
														<select class="form-control" id="selectbrand">
															<option>tuannguyen@crmland.vn</option>
															<option>tuannguyen@romanplaza.vn</option>
														</select>
													</div>
													<div class="form-group">
														<label>Email nhận Reply</label>
														<input type="text" class="form-control" placeholder="Email Nhận reply" value="tuannguyen@gmail.com">
													</div>
													<div class="kt-separator kt-separator--space-lg kt-separator--border-soild"></div>
													<h5 class="mb-3" style="font-size: 1.1rem">Người nhận</h5>
													<div class="row">
														<div class="col-lg-4">
															<label class="kt-option">
															<span class="kt-option__control">
															<span class="kt-radio kt-radio--state-brand">
															<input type="radio" name="choose-data" checked="checked" id="choose-alldata" value="">
															<span></span>
															</span>
															</span>
															<span class="kt-option__label">
															<span class="kt-option__head">
																<span class="kt-option__title">
																Tất cả các khách hàng			
																</span>												 
															</span>
															</span>		
															</label> 
														</div>
														<div class="col-lg-4">
															<label class="kt-option">
															<span class="kt-option__control">
															<span class="kt-radio kt-radio--state-brand">
															<input type="radio" name="choose-data" id="choose-data" value="">
															<span></span>
															</span>
															</span>
															<span class="kt-option__label">
															<span class="kt-option__head">
																<span class="kt-option__title">
																Chọn theo Nhóm khách hàng			
																</span>												 
															</span>
															</span>		
															</label> 
														</div>
														<div class="col-lg-4">
															<label class="kt-option">
															<span class="kt-option__control">
															<span class="kt-radio kt-radio--state-brand">
															<input type="radio" name="choose-data" id="choose-data" value="">
															<span></span>
															</span>
															</span>
															<span class="kt-option__label">
															<span class="kt-option__head">
																<span class="kt-option__title">
																Chọn theo dự án		
																</span>												 
															</span>
															</span>		
															</label> 
														</div>
													</div>
													<div class="my-2 d-none" id="choose-data-content">
								                        <div class="form-group">
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
								                        <div class="form-group">
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
															</div>
								                        </div>
								                        <div class="form-group">
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
						                        		<div class="form-group">
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
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
											<div class="kt-heading kt-heading--md">
												Nội dung email
												<div class="dropdown float-right">
				                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				                                        Sử dụng các mẫu email
				                                    </button>
				                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="top-start">
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 01</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 02</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                        <a class="dropdown-item" href="#">Mẫu email giới thiệu dự án 03</a>
				                                    </div>
				                                </div>
											</div>
											<div class="editor">
											
												<p>Đây là nội dung email</p>
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
										<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
											<div class="kt-heading kt-heading--md">Xem lại chiến dịch</div>
											<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__review">
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Tên chiến dịch
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		Chiến dịch email marketing 01
																	</div>
																</div>
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Gửi từ
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		<span>Email gửi: tuannguyen@crmland.vn</span>
																		<span class="ml-5">Reply to: tuannh1090@gmail.com</span>
																	</div>
																</div>
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Người nhận
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		<ul style="padding-left: 15px;">
																			<li>Khách hàng Roman Plaza</li>
																			<li>Khách hàng phổ thông</li>
																		</ul>
																	</div>
																</div>
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Chi phí
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		<table class="table">
																			<thead>
																				<tr>
																					<th>Số email</th>
																					<th>Chi phí email</th>
																					<th>Tổng</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>1</td>
																					<td>30</td>
																					<td class="kt-font-danger kt-font-xl kt-font-boldest">30 đ</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
										</div>		
										<!--begin: Form Actions -->
										<div class="kt-form__actions">
											<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
												Quay lại
											</div>
											<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
												Gửi email marketing
											</div>
											<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
												Tiếp theo
											</div>
										</div>
										<!--end: Form Actions -->
									</form>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>					
		<!-- end:: Content -->
	</div>
		
	<?php require "footer.php"; ?>
	<script src="./assets/js/demo6/pages/wizard/wizard-4.js" type="text/javascript"></script>
	<script src="./assets/js/demo6/ckeditor/ckeditor.js"></script>
	<!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
	<script type="text/javascript">
		$('input#choose-alldata').click(function() {
				$("#choose-data-content").addClass("d-none");
		});
		$('input#choose-data').click(function() {
				$("#choose-data-content").removeClass("d-none");
		});
		ClassicEditor
			.create( document.querySelector( '.editor' ), {
				
				toolbar: {
					items: [
						'heading',
						'|',
						'fontFamily',
						'fontSize',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'indent',
						'outdent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo'
					]
				},
				language: 'vi',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
				licenseKey: '',
				
			} )
			.then( editor => {
				window.editor = editor;
		
				
				
				
			} )
			.catch( error => {
				console.error( error );
			} );
	</script>
	<!-- end::Body -->
</html>