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
										<i class="flaticon-speech-bubble mr-3"></i> Tạo chiến dịch SMS marketing
									</h3>
								</div>
							</div>
							<!--begin::Form-->
							<form class="kt-form">
								<div class="kt-portlet__body">
									<div class="form-group">
										<label>Tên chiến dịch</label>
										<input type="text" class="form-control" placeholder="Tên chiến dịch SMS">
									</div>
									<div class="form-group">
										<label>
											Chọn Brandname gửi

										</label> 
										<span class="float-right">
												<a href="demo6/sms-brandname-create.php"><i class="flaticon-add-circular-button mr-2"></i> Tạo thêm Brandname khác</a>
											</span>
										<select class="form-control" id="selectbrand">
											<option>CRMLAND</option>
											<option>ROMAN PLAZA</option>
										</select>
									</div>
									<div class="form-group">
										<label>Bạn muốn gửi SMS cho</label>
										<select class="form-control" id="selecttype">
											<option>Chọn theo dự án</option>
											<option>Chọn theo loại khách hàng</option>
											<option>Chọn theo nhóm khách hàng</option>
										</select>
										<div class="kt-checkbox-inline mt-4">
											<label class="kt-checkbox">
												<input type="checkbox"> Dự án 1 (99 khách)
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
										</div>
									</div>
									<div class="form-group form-group-last">
										<label for="exampleTextarea">Nội dung SMS</label>
										<textarea class="form-control" id="smscontent" rows="5" placeholder="Viết nội dung SMS vào đây"></textarea>
									</div>
								</div>
								<div class="kt-portlet__foot">
									<div class="mb-3">
										<table class="table">
											<thead>
												<tr>
													<th>Số SMS</th>
													<th>Chi phí SMS</th>
													<th>VAT</th>
													<th>Tổng</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1.000</td>
													<td>350</td>
													<td>35.000</td>
													<td class="kt-font-danger kt-font-xl kt-font-boldest">385.000 đ</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="kt-form__actions">
										<button type="reset" class="btn btn-primary">Gửi SMS</button>
										<a  href="demo6/sms-camp.php" class="btn btn-secondary">Hủy bỏ</a>
									</div>
								</div>
							</form>
							<!--end::Form-->			
						</div>
						<!--end::Portlet-->
					</div>
					<div class="col-md-6">
							<h3 class="kt-portlet__head-title">
								SMS Preview
							</h3>
							<!--begin::Table-->
							<style type="text/css">
								.sms-camp-preview{
									transition: box-shadow .3s;
								  width: 80%;
								  margin-top:30px;
								  min-height: 550px;
								  border-radius:30px;
								  border: 1px solid #ccc;
								  background: #fff;
								}
								.sms-camp-preview-head{
									width: 100%;
									margin: 0;
									height: 80px;
									background: #ddd;
									position: relative;
									border-top-left-radius: 30px;
									border-top-right-radius: 30px;
								}
								.button-back{
									width: 30px;
									height: 30px;
									position: absolute;
									top:25px;
									left: 20px;
									font-size: 1.6rem;
									color:#666;
								}
								.brandname{
									text-align: center;
									font-size: 1.6rem;
									color:#333;
									padding-top:20px;
									font-weight: 400;
									display: block;
								}
								.sms-camp-preview-body{margin:30px 80px 0 20px;}
								.sms-camp-preview-body .time{
									font-size: 1.1rem;
									font-weight: 700;
									display: block;
									padding-left: 20px;
								}
								.sms-camp-preview-body .sms-content{
									padding:20px;
									border-radius: 20px;
									background: #ddd;
									margin-top:10px;
									font-size: 1.6rem;
									font-weight: 300;
									line-height: 1.5;
								}
							</style>
							<div class="sms-camp-preview">
								<div class="sms-camp-preview-head">
									<span class="brandname" id="selectedbrand">CRMLAND</span>
									<span class="button-back"><i class="flaticon2-back"></i></span>
								</div>
								<div class="sms-camp-preview-body">
									<span class="time">Ngày 09 tháng 01 năm 2020</span>
									<div class="sms-content">
										[QC] <span id="smscontentpreview">Đây là nội dung sms được gửi từ Brandname CRMLAND nền tảng chuyên nghiệp quản trị khách hàng bất động sản</span>. Tu choi QC, soan NO gui 9241
									</div>
								</div>
							</div>
							<div class="mt-5">	
								<div class="kt-checkbox-single">
									<label class="kt-checkbox">
									<input type="checkbox" checked="checked"> Đồng ý với điều khoản dịch vụ của CRMLAND
									<span></span>
									</label>
								</div>
								<span class="form-text text-muted">
								Bằng việc tick vào ô trên đồng nghĩa với việc bạn đồng ý với các điều khoản dịch vụ về SMS Marketing của CRMLAND
								<a href="#" class="kt-link">Click xem chi tiết điều khoản</a>.
								</span>
							</div>		
					</div>
				</div>	
			</div>
		<!-- end:: Content -->
	</div>
		
		<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script type="text/javascript">
			$(document).ready(function(){
			    $("#selectbrand").change(function(){
			        var selectedBrand = $(this).children("option:selected").val();
			        $('#selectedbrand').empty().append(selectedBrand);
			    });
			
				$('#smscontent').keyup(function(){
					$('#smscontentpreview').empty().append(this.value);
				});

			});
			
		</script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>