<?php require "header.php"; ?>
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h3 class="kt-subheader__title">
									Khách hàng
								</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
								<div class="kt-subheader__group" id="kt_subheader_search">
									<span class="kt-subheader__desc" id="kt_subheader_total">
										hiển thị 50 khách </span>
									<form class="kt-margin-l-20" id="kt_subheader_search_form">
										<div class="kt-input-icon kt-input-icon--right kt-subheader__search">
											<input type="text" class="form-control" placeholder="Tìm kiếm..." id="generalSearch">
											<span class="kt-input-icon__icon kt-input-icon__icon--right">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect id="bound" x="0" y="0" width="24" height="24" />
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>

													<!--<i class="flaticon2-search-1"></i>-->
												</span>
											</span>
										</div>
									</form>

								</div>
								<div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
									<div class="kt-subheader__desc">Đã chọn: <span id="kt_subheader_group_selected_rows"></span> khách</div>
									<div class="btn-toolbar kt-margin-l-20">
										<button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_add_new_group_customer_modal">
											<i class="flaticon-folder-1"></i> Tạo mới Tệp khách hàng
										</button>
										<button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_add_current_group_customer_modal">
											<i class="flaticon-folder-1"></i> Thêm vào tệp hiện có
										</button>
										<button class="btn btn-label-info btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_edit_customer_modal">
											<i class="flaticon-edit"></i> Chỉnh sửa
										</button>
										<button data-toggle="modal" data-target="#kt_datatable_email" class="btn btn-label-warning btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
											<i class="flaticon-multimedia-2"></i> Gửi Email
										</button>
										<button data-toggle="modal" data-target="#kt_datatable_sms" class="btn btn-label-warning btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch">
											<i class="flaticon-speech-bubble"></i> Gửi SMS
										</button>
										<button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
											<i class="flaticon-delete"></i> Xóa
										</button>
									</div>
								</div>
							</div>
							<div class="kt-subheader__toolbar">
								<a href="#" class="btn btn-label-primary btn-bold" data-toggle="modal" data-target="#kt_datatable_add_customer_modal">
									<i class="flaticon-user-add"></i> Thêm mới 
								</a>
								<a href="#" class="btn btn-label-primary btn-bold" data-toggle="modal" data-target="#kt_datatable_import_customer_modal">
									<i class="flaticon-download"></i> Import từ file excel
								</a>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--begin::Portlet-->
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<!--begin: Datatable -->
									<div class="kt-datatable" id="kt_apps_user_list_datatable"></div>

									<!--end: Datatable -->
								</div>
							</div>

							<!--end::Portlet-->

							<!--begin::Modal add new group Customer-->
							<div class="modal fade show" id="kt_datatable_add_new_group_customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header bg-primary">
							                <h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="flaticon-users-1"></i> Tạo nhóm khách hàng mới</h5>
							                <button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
							                </button>
							            </div>
							            <div class="modal-body">
							                <p>Tạo nhóm khách hàng mới cho các khách hàng đã chon</p>
							                <div class="form-group">
												<label>Tên nhóm</label>
												<input type="text" class="form-control" placeholder="Nhập tên nhóm khách hàng">
											</div>
											<div class="kt-portlet__foot mt-4">
												<div class="kt-form__actions">
													<button type="reset" class="btn btn-primary">
														<i class="flaticon2-check-mark"></i> Lưu
													</button>
													<button type="reset" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="flaticon2-cancel-music"></i> Hủy bỏ</button>
												</div>
											</div>
							            </div>
							        </div>
							    </div>
							</div>
							<!--end::Modal add new group Customer-->

							<!--begin::Modal add current group Customer-->
							<div class="modal fade show" id="kt_datatable_add_current_group_customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header bg-primary">
							                <h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="flaticon-users-1"></i> Thêm vào nhóm khách hàng hiện có</h5>
							                <button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
							                </button>
							            </div>
							            <div class="modal-body">
							                <form class="kt-form">
												<div class="form-group">
													<label>Cập nhật khách hàng vào nhóm</label>
													<div class="kt-checkbox-list">
														<label class="kt-checkbox">
															<input type="checkbox"> Nhóm 1
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Nhóm 2
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Nhóm 3
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Nhóm 4
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Nhóm 5
															<span></span>
														</label>
													</div>
												</div>
											</form>
											<div class="kt-portlet__foot mt-4">
												<div class="kt-form__actions">
													<button type="reset" class="btn btn-primary">
														<i class="flaticon2-check-mark"></i> Lưu
													</button>
													<button type="reset" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="flaticon2-cancel-music"></i> Hủy bỏ</button>
												</div>
											</div>
							            </div>
							        </div>
							    </div>
							</div>
							<!--end::Modal add current group Customer-->

							<!--begin::Modal view / edit user-->
							<div class="modal fade show" id="kt_datatable_edit_customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header bg-primary">
							                <h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="flaticon-users-1"></i> Chỉnh sửa thông tin khách hàng</h5>
							                <button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
							                </button>
							            </div>
							            <div class="modal-body">
							                <form class="kt-form">
												<div class="kt-portlet__body">
													<div class="form-group form-group-last">
														<div class="alert alert-warning" role="alert">
								                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
								                            <div class="alert-text">Lưu ý: Việc chỉnh sửa thông tin cho <span id="kt_subheader_group_selected_rows"></span> khách hàng đã chọn sẽ làm thay đổi chung toàn bộ thông tin. Hãy cân nhắc trước khi thực hiện</div>
								                        </div>
													</div>
													<div class="form-group m-form__group row mt-4">
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
												</div>
												<div class="kt-portlet__foot">
													<div class="kt-form__actions">
														<button type="reset" class="btn btn-primary"><i class="flaticon2-check-mark"></i> Lưu</button>
														<button type="reset" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="flaticon2-cancel-music"></i> Hủy bỏ</button>
													</div>
												</div>
											</form>
							            </div>
							        </div>
							    </div>
							</div>
							<!--end::Modal view / edit user-->

							<!--begin::Modal add user-->
							<div class="modal fade show" id="kt_datatable_add_customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header bg-primary">
							                <h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="flaticon-users-1"></i> Thêm mới khách hàng</h5>
							                <button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
							                </button>
							            </div>
							            <div class="modal-body">
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
			                                        <input type="text" class="form-control mb-3" id="name" placeholder="Họ tên (Bắt buộc)" required="">
			                                        <input type="text" class="form-control mb-3" id="add" placeholder="Địa chỉ" required="">
			                                        <input type="text" class="form-control mb-3" id="tel" placeholder="Điện thoại (Bắt buộc)" required="">
			                                        <input type="text" class="form-control mb-3" id="email" placeholder="Email" required="">
			                                        <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample5">
														<div class="card mb-0">
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
																					<input type="checkbox"> Dự án 01
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox"> Dự án 02
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Dự án 03
																					<span></span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group col-lg-6">
																			<label>Loại khách hàng</label>
																			<div class="kt-checkbox-list">
																				<label class="kt-checkbox">
																					<input type="checkbox"> Phổ thông
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox"> Tiềm năng
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Khách chốt
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Khách đã mua
																					<span></span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group col-lg-6">
																			<label>Nguồn khách</label>
																			<div class="kt-checkbox-list">
																				<label class="kt-checkbox">
																					<input type="checkbox"> Tự tìm kiếm
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox"> Form website
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Facebook
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Google
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Hotline
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Công ty chuyển
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Giới thiệu
																					<span></span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group col-lg-6">
																			<label>Nhóm khách hàng</label>
																			<div class="kt-checkbox-list">
																				<label class="kt-checkbox">
																					<input type="checkbox"> Nhóm khách hàng 01
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox"> Nhóm khách hàng 02
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Nhóm khách hàng 03
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Nhóm khách hàng 04
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Nhóm khách hàng 05
																					<span></span>
																				</label>
																				<label class="kt-checkbox">
																					<input type="checkbox" checked="checked"> Nhóm khách hàng 06
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
							            <div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Lưu lại</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
										</div>
							        </div>
							    </div>
							</div>
							<!--end::Modal Modal add user-->

							<!--begin::Modal import user-->
							<div class="modal fade show" id="kt_datatable_import_customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
							    <div class="modal-dialog modal-lg" role="document">
							        <div class="modal-content">
							            <div class="modal-header bg-primary">
							                <h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="flaticon-users-1"></i> Import dữ liệu khách hàng</h5>
							                <button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
							                </button>
							            </div>
							            <div class="modal-body">
							                <p>Để thực hiện việc import dữ liệu khách hàng từ file excel, bạn vui lòng tải về file excel chuẩn, điền thông tin khách hàng và upload file lên hệ thống</p>
							                <div class="alert alert-secondary" role="alert">
												<div class="alert-icon"><i class="flaticon-download"></i></div>
											  	<div class="alert-text">
													<a href="#">
											  		 	Download mẫu file excel import khách hàng 
											  		</a>
												</div>
											</div>
											<h5 class="mb-4">Import khách hàng</h5>
											<form action="/file" class="dropzone">
												<div class="dropzone-msg dz-message needsclick">
												    <h3 class="dropzone-msg-title">Kéo thả file vào đây hoặc click vào để chọn file.</h3>
												    <span class="dropzone-msg-desc">Trình upload chỉ chấp nhận file định dạng <strong>XML</strong> Vui lòng sử dụng file mẫu để việc import chính xác</span>
												</div>
											</form>
											<div class="form-group m-form__group row mt-4">
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
											<div class="kt-portlet__foot mt-4">
												<div class="kt-form__actions">
													<button type="reset" class="btn btn-primary">
														<i class="flaticon-download"></i> Import
													</button>
													<button type="reset" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="flaticon2-cancel-music"></i> Hủy bỏ</button>
												</div>
											</div>
							            </div>
							        </div>
							    </div>
							</div>
							<!--end::Modal Modal import user-->

							<!--begin::Modal edit customer-->
							<div class="modal fade" id="kt_datatable_edit_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header bg-primary">
											<h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="la la-user"></i> Chỉnh sửa thông tin khách hàng</h5>
											<button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"></span>
											</button>
										</div>
										<div class="modal-body">
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
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Lưu lại</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Modal-->

							<!--begin::Modal add History-->
							<div class="modal fade" id="kt_datatable_add_history" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header bg-primary">
											<h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="la la-history"></i> Thêm lịch sử chăm sóc</h5>
											<button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"></span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-form-label col-lg-4 col-sm-12">Thời gian</label>
												<div class="col-lg-8 col-md-9 col-sm-12">
													<div class="input-group date">
														<input type="text" class="form-control" readonly="" placeholder="Select date &amp; time" id="kt_datetimepicker_2">
														<div class="input-group-append">
															<span class="input-group-text"><i class="la la-calendar-check-o glyphicon-th"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-4 col-sm-12">Kênh chăm sóc</label>
												<div class="col-lg-8 col-md-9 col-sm-12">
													<select class="form-control" id="exampleSelectd">
														<option>Gọi điện</option>
														<option>Gặp tư vấn trực tiếp</option>
														<option>Nhắn tin</option>
														<option>Gửi email</option>
													</select>
												</div>
											</div>
											<div class="form-group form-group-last">
												<label for="exampleTextarea">Ghi chú</label>
												<textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Nội dung ghi chú"></textarea>
											</div>
											<p class="mt-4">
												Lưu ý: Nếu thời gian bạn đặt lịch chăm sóc sẽ diễn ra trong tương lai, hệ thống sẽ nhận diện là lịch chăm sóc khách hàng và sẽ nhắc nhở bạn khi sự kiện sắp diễn ra
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Lưu lại</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Modal-->

							<!--begin::Modal SMS Sent-->
							<div class="modal fade" id="kt_datatable_sms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header bg-primary">
											<h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="la la-history"></i> Gửi SMS cho khách hàng</h5>
											<button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"></span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label>Tên chiến dịch</label>
												<input type="text" class="form-control" placeholder="Tên chiến dịch SMS" value="Gửi SMS - Ngày 30/01/2020">
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
												<label>
													Gửi cho khách hàng
												</label>
												<div data-scroll="true" data-height="100"> 
							                        <select class="form-control kt-select2" id="kt_select2_1" name="param" multiple="multiple">
														<option value="AK" selected>Alaska</option>
														<option value="HI" selected>Hawaii</option>
														<option value="CA" selected>California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR" selected>Oregon</option>
														<option value="WA" selected>Washington</option>
														<option value="AZ" selected>Arizona</option>
														<option value="CO" selected>Colorado</option>
														<option value="ID" selected>Idaho</option>
														<option value="MT" selected>Montana</option>
														<option value="AK" selected>Alaska</option>
														<option value="HI" selected>Hawaii</option>
														<option value="CA" selected>California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR" selected>Oregon</option>
														<option value="WA" selected>Washington</option>
														<option value="AZ" selected>Arizona</option>
														<option value="CO" selected>Colorado</option>
														<option value="ID" selected>Idaho</option>
														<option value="MT" selected>Montana</option>
													</select>
												</div>	
							                </div>
											<div class="form-group form-group-last">
												<label for="exampleTextarea">Nội dung SMS</label>
												<textarea class="form-control" id="smscontent" rows="8" placeholder="Viết nội dung SMS vào đây"></textarea>
											</div>
											<div class="mt-3">
												<table class="table">
													<thead>
														<tr>
															<th>Số SMS</th>
															<th>Chi phí SMS</th>
															<th>Tổng</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>850</td>
															<td class="kt-font-danger kt-font-xl kt-font-boldest">850 đ</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="modal-footer">
											<button type="reset" class="btn btn-primary">Gửi SMS</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Modal-->

							<!--begin::Modal Email Sent-->
							<div class="modal fade" id="kt_datatable_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header bg-primary">
											<h5 class="modal-title kt-font-light" id="exampleModalLabel"><i class="la la-history"></i> Gửi Email cho khách hàng</h5>
											<button type="button" class="close kt-font-light" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"></span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label>Tên chiến dịch</label>
												<input type="text" class="form-control" placeholder="Tên chiến dịch Email" value="Gửi Email - Ngày 30/01/2020">
											</div>
											<div class="form-group">
												<label>
													Chọn Email gửi
												</label> 
												<span class="float-right">
													<a href="demo6/sms-brandname-create.php"><i class="flaticon-add-circular-button mr-2"></i> Tạo thêm Email khác</a>
												</span>
												<select class="form-control" id="selectbrand">
													<option>tuannguyen@crmland.vn</option>
													<option>tuannguyen@romanplaza.vn</option>
												</select>
											</div>
											<div class="form-group">
												<label>
													Email nhận Reply
												</label>
												<input type="text" class="form-control" placeholder="Email Nhận reply" value="tuannguyen@gmail.com">
											</div>
											<div class="form-group">
												<label>
													Gửi cho khách hàng
												</label>
												<div data-scroll="true" data-height="100"> 
							                        <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
														<option value="AK" selected>Alaska</option>
														<option value="HI" selected>Hawaii</option>
														<option value="CA" selected>California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR" selected>Oregon</option>
														<option value="WA" selected>Washington</option>
														<option value="AZ" selected>Arizona</option>
														<option value="CO" selected>Colorado</option>
														<option value="ID" selected>Idaho</option>
														<option value="MT" selected>Montana</option>
														<option value="AK" selected>Alaska</option>
														<option value="HI" selected>Hawaii</option>
														<option value="CA" selected>California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR" selected>Oregon</option>
														<option value="WA" selected>Washington</option>
														<option value="AZ" selected>Arizona</option>
														<option value="CO" selected>Colorado</option>
														<option value="ID" selected>Idaho</option>
														<option value="MT" selected>Montana</option>
													</select>
												</div>	
							                </div>
											<div class="form-group form-group-last">
												<label for="exampleTextarea">Nội dung Email</label>
												<textarea class="form-control" id="smscontent" rows="8" placeholder="Viết nội dung SMS vào đây"></textarea>
											</div>
											<div class="mt-3">
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
										<div class="modal-footer">
											<button type="reset" class="btn btn-primary">Gửi Email</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Modal-->
						</div>

						<!-- end:: Content -->
					</div>
<?php require "footer.php"; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/custom/apps/contacts/list-datatable.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/dropzone.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
		<script src="./assets/js/demo6/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>