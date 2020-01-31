<?php require "header.php"; ?>
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
	<!-- begin:: Content -->

	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
			<div class="kt-portlet">
				<div class="kt-portlet__body kt-portlet__body--fit">
					<div class="kt-grid">
						<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

							<!--begin: Form Wizard Form-->
							<div class="kt-form automation-create">
								<!--begin: Form Wizard Step 1-->
								<div class="kt-heading kt-heading--md">Chọn chiến dịch tự động</div>
								<div class="kt-form__section kt-form__section--first">
									<div class="kt-wizard-v4__form">
										<div class="form-group form-group-last">
											<div class="row">
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" id="birthday" name="billing_delivery" checked="checked" value="birthday">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Chúc mừng sinh nhật				
													</span>												 
													</span>
													<span class="kt-option__body">
													Tự động gửi nội dung chúc mừng sinh nhật cho khách hàng
													</span>
													</span>		
													</label> 
												</div>
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="billing_delivery" id="holiday" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Lễ tết, ngày đặc biệt				
													</span>											 
													</span>
													<span class="kt-option__body">
													Tự động chúc mừng khách hàng khi đến ngày đặc biệt
													</span>
													</span>		
													</label> 
												</div>
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="billing_delivery" id="news" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Bản tin tự động				
													</span>											 
													</span>
													<span class="kt-option__body">
													Định kỳ gửi bản tin tự động lấy từ website của bạn
													</span>
													</span>		
													</label> 
												</div>
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="billing_delivery" id="welcome" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Lời chào tự động			
													</span>											 
													</span>
													<span class="kt-option__body">
													Gửi lời chào tự động cho khách hàng đầu tuần hoặc đầu tháng
													</span>
													</span>		
													</label> 
												</div>
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="billing_delivery" id="recent" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Gửi bản tin định kỳ			
													</span>											 
													</span>
													<span class="kt-option__body">
													Tạo bản tin tự động gửi định kỳ hàng tuần, hàng tháng
													</span>
													</span>		
													</label> 
												</div>
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="billing_delivery" id="formsubmit" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Tin nhắn tự động			
													</span>											 
													</span>
													<span class="kt-option__body">
													Gửi lời chào sau khi khách hàng nhập thông tin vào form trên website
													</span>
													</span>		
													</label> 
												</div>
											</div>
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-xl"></div>
											<div class="kt-heading kt-heading--md">Bạn muốn gửi cho</div>
											<div class="row">
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="choose-data" id="choose-alldata" value="">
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
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="choose-data" checked="checked" id="choose-data" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
														<span class="kt-option__title">
														Lựa chọn tệp khách hàng			
														</span>												 
													</span>
													</span>		
													</label> 
												</div>
											</div>
											<div class="my-5" id="choose-data-content">
												<h5 class="col-form-label">Chọn tệp khách hàng</h5>
												<select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>	
											<div class="kt-heading kt-heading--md">Gửi bằng</div>
											<div class="row">
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" checked="checked" name="automation-birthday" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													SMS Brandname			
													</span>
													<span class="kt-option__focus">
													850đ/1 sms					
													</span>												 
													</span>
													<span class="kt-option__body">
													Tin nhắn có thể cá nhân hóa theo từng khách hàng
													</span>
													</span>		
													</label> 
												</div>
												<div class="col-lg-6">
													<label class="kt-option">
													<span class="kt-option__control">
													<span class="kt-radio kt-radio--state-brand">
													<input type="radio" name="automation-birthday" value="">
													<span></span>
													</span>
													</span>
													<span class="kt-option__label">
													<span class="kt-option__head">
													<span class="kt-option__title">
													Email			
													</span>
													<span class="kt-option__focus">
													30đ/1 email					
													</span>												 
													</span>
													<span class="kt-option__body">
													Gửi thư chúc mừng sinh nhật cho khách hàng qua email
													</span>
													</span>		
													</label> 
												</div>
											</div>
											<div class="kt-heading kt-heading--md">Thời gian gửi</div>
											<div id="automation-birthday">
												<div class="row">
													<div class="col-lg-4">
														<input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time" type="text" />
													</div>
													<div class="col-lg-8">
														<span class="kt-option__title form-control">
															<i class="flaticon-event-calendar-symbol mr-3"></i> Hệ thống sẽ tự động gửi nội dung vào ngày sinh nhật khách hàng có trong danh sách
														</span>
													</div>
												</div>
											</div>	
											<div id="automation-holiday" style="display: none">
												<div class="alert alert-solid-brand alert-bold fade show" role="alert">
						                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
						                            <div class="alert-text">Bạn có thể cài đặt các ngày đặc biệt trong năm tại đây, VD: Tết dương lịch, tết âm lịch, Ngày doanh nhân, Giáng sinh hoặc một ngày bất kỳ trong năm bạn thấy đặc biệt. Tất cả các cài đặt trên bạn chỉ cần thực hiện duy nhất 1 lần. Đến thời gian, hệ thống sẽ tự động gửi đi mà bạn không cần phải thao tác gì thêm</div>
						                            <div class="alert-close">
						                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                                    <span aria-hidden="true"><i class="la la-close"></i></span>
						                                </button>
						                            </div>
						                        </div>
												<div id="kt_repeater_1">
													<div class="form-group form-group-last row" id="kt_repeater_1">
														<div data-repeater-list="" class="col-lg-12">
															<div data-repeater-item class="form-group row align-items-center">
																<div class="col-md-4">
																	<div class="kt-form__group--inline">
																		<div class="kt-form__control">
																			<input type="text" class="form-control" placeholder="Tên ngày (VD: Tết dương lịch)">
																		</div>
																	</div>
																	<div class="d-md-none kt-margin-b-10"></div>
																</div>
																<div class="col-md-3">
																	<div class="kt-form__group--inline">
																		<div class="kt-form__control">
																			<div class="input-group date">
																				<input type="text" class="form-control" readonly placeholder="Chọn ngày gửi" id="kt_datepicker_2" />
																				<div class="input-group-append">
																					<span class="input-group-text">
																						<i class="la la-calendar-check-o"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="d-md-none kt-margin-b-10"></div>
																</div>
																<div class="col-md-3">
																	<div class="kt-form__group--inline">
																		<div class="kt-form__control">
																			<div class="input-group timepicker">
																				<input class="form-control" id="kt_timepicker_2" readonly placeholder="Chọn thời gian gửi" type="text" />
																				<div class="input-group-append">
																					<span class="input-group-text">
																						<i class="la la-clock-o"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="d-md-none kt-margin-b-10"></div>
																</div>
																<div class="col-md-2">
																	<a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
																		<i class="la la-trash-o"></i>
																		Xóa
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group form-group-last row">
														<label class="col-lg-2 col-form-label"></label>
														<div class="col-lg-4">
															<a href="javascript:;" data-repeater-create="1" class="btn btn-bold btn-sm btn-label-brand">
																<i class="la la-plus"></i> Thêm ngày đặc biệt
															</a>
														</div>
													</div>
												</div>
											</div>
											<div style="display: none" id="automation-news">
												<div class="row">
													<div class="col-lg-3">
														<label>Thời gian gửi</label>
														<input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time" type="text" />
													</div>
													<div class="col-lg-3">
														<label>Chọn ngày</label>
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Thứ 2
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Thứ 3
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Thứ 4
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Thứ 5
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Thứ 6
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Thứ 7
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Chủ nhật
																<span></span>
															</label>
														</div>
													</div>
													<div class="col-lg-3">
														<label>Chọn tuần</label>
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Tuần 1
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tuần 2
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tuần 3
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tuần 4
																<span></span>
															</label>
														</div>
													</div>
													<div class="col-lg-3">
														<label>Chọn tháng</label>
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 1
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 2
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 3
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 4
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 5
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 6
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 7
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 8
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 9
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 10
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 11
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tháng 12
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div style="display: none" id="automation-welcome">
												<div class="row">
													<div class="col-lg-3">
														<label>Thời gian gửi</label>
														<input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time" type="text" />
													</div>
													<div class="col-lg-9">
														<label>Chọn ngày</label>
														<div class="kt-checkbox-inline">
															<label class="kt-checkbox">
																<input type="checkbox"> Ngày đầu tiên trong tuần
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Ngày đầu tiên trong tháng
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div style="display: none" id="automation-recent">
												<div class="row">
													<div class="col-lg-3">
														<label>Thời gian gửi</label>
														<input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time" type="text" />
													</div>
													<div class="col-lg-9">
														<label>Chọn ngày</label>
														<div class="kt-checkbox-inline">
															<label class="kt-checkbox">
																<input type="checkbox"> Ngày đầu tiên trong tuần
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Ngày đầu tiên trong tháng
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div style="display: none" id="automation-formsubmit">
												<span class="kt-option__title form-control">
													<i class="flaticon-event-calendar-symbol mr-3"></i> Ngay lập tức Khi có khách hàng submit vào form do bạn tạo trên hệ thống
												</span>
											</div>
											<div class="kt-form__actions mt-5">
												<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
													Hủy
												</div>
												<a href="demo6/sms-create-automation.php" class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
													Tiếp theo
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--end: Form Wizard Form-->
						</div>
					</div>
				</div>
			</div>
	</div>

	<!-- end:: Content -->
</div>
<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/crud/forms/widgets/bootstrap-timepicker.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('input#birthday').click(function() {
						$("#automation-birthday").css("display", "block");
						$("#automation-holiday").css("display", "none");
						$("#automation-news").css("display", "none");
						$("#automation-welcome").css("display", "none");
						$("#automation-recent").css("display", "none");
						$("#automation-formsubmit").css("display", "none");
				});
				$('input#holiday').click(function() {
						$("#automation-birthday").css("display", "none");
						$("#automation-holiday").css("display", "block");
						$("#automation-news").css("display", "none");
						$("#automation-welcome").css("display", "none");
						$("#automation-recent").css("display", "none");
						$("#automation-formsubmit").css("display", "none");
				});
				$('input#news').click(function() {
						$("#automation-birthday").css("display", "none");
						$("#automation-holiday").css("display", "none");
						$("#automation-news").css("display", "block");
						$("#automation-welcome").css("display", "none");
						$("#automation-recent").css("display", "none");
						$("#automation-formsubmit").css("display", "none");
				});
				$('input#welcome').click(function() {
						$("#automation-birthday").css("display", "none");
						$("#automation-holiday").css("display", "none");
						$("#automation-news").css("display", "none");
						$("#automation-welcome").css("display", "block");
						$("#automation-recent").css("display", "none");
						$("#automation-formsubmit").css("display", "none");
				});
				$('input#recent').click(function() {
						$("#automation-birthday").css("display", "none");
						$("#automation-holiday").css("display", "none");
						$("#automation-news").css("display", "none");
						$("#automation-welcome").css("display", "none");
						$("#automation-recent").css("display", "block");
						$("#automation-formsubmit").css("display", "none");
				});
				$('input#formsubmit').click(function() {
						$("#automation-birthday").css("display", "none");
						$("#automation-holiday").css("display", "none");
						$("#automation-news").css("display", "none");
						$("#automation-welcome").css("display", "none");
						$("#automation-recent").css("display", "none");
						$("#automation-formsubmit").css("display", "block");
				});
				$('input#choose-alldata').click(function() {
						$("#choose-data-content").addClass("d-none");
				});
				$('input#choose-data').click(function() {
						$("#choose-data-content").removeClass("d-none");
				});
            });
		</script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>
	</body>
	<!-- end::Body -->
</html>