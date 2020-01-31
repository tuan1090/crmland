<?php require "header.php"; ?>

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

	<!-- begin:: Content -->

	<!-- begin:: Content -->
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

		<!--Begin::Dashboard 6-->

		<!--Begin::Section-->
		<div class="row">    

			<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
				<!--begin:: Widgets/Daily Sales-->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-widget14">
						<div class="kt-widget14__header kt-margin-b-30">
							<h3 class="kt-widget14__title">
								Danh sách khách hàng             
							</h3>
							<span class="kt-widget14__desc">
								Biều đồ biến động danh sách khách hàng
							</span>
						</div>
						<div class="kt-widget14__chart" style="height:120px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
							<canvas id="kt_chart_daily_sales" style="display: block; height: 120px; width: 395px;" width="592" height="180" class="chartjs-render-monitor"></canvas>
						</div>
					</div>
				</div>	
				<!--end:: Widgets/Daily Sales-->  
			</div>
		  	<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
				<!--begin:: Widgets/Profit Share-->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-widget14">
						<div class="kt-widget14__header">
							<h3 class="kt-widget14__title">
								Khách hàng theo phân loại          
							</h3>
							<span class="kt-widget14__desc">
								Biểu đồ phân loại khách hàng theo phân loại
							</span>
						</div>	 
						<div class="kt-widget14__content">	
							<div class="kt-widget14__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
								<div class="kt-widget14__stat">45</div>
								<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px; display: block;" width="210" height="210" class="chartjs-render-monitor"></canvas>
							</div> 
							<div class="kt-widget14__legends">
								<div class="kt-widget14__legend">
									<span class="kt-widget14__bullet kt-bg-success"></span>
									<span class="kt-widget14__stats">37% Khách hàng mới</span>
								</div>
								<div class="kt-widget14__legend">
									<span class="kt-widget14__bullet kt-bg-warning"></span>
									<span class="kt-widget14__stats">47% Khách hàng nét</span>
								</div>
								<div class="kt-widget14__legend">
									<span class="kt-widget14__bullet kt-bg-brand"></span>
									<span class="kt-widget14__stats">19% Khách đã mua</span>
								</div>
							</div>			
						</div> 
					</div>
				</div>		
				<!--end:: Widgets/Profit Share-->  
			</div>
		  	<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
				<!--begin:: Widgets/Revenue Change-->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-widget14">
						<div class="kt-widget14__header">
							<h3 class="kt-widget14__title">
								Khách hàng theo dự án          
							</h3>
							<span class="kt-widget14__desc">
								Biểu đồ phân loại khách hàng theo dự án
							</span>
						</div>
						<div class="kt-widget14__content">
							<div class="kt-widget14__chart">
								<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;">
								</div>
							</div>  		 
							<div class="kt-widget14__legends">
								<div class="kt-widget14__legend">
									<span class="kt-widget14__bullet kt-bg-success"></span>
									<span class="kt-widget14__stats">+10% HPC</span>
								</div>
								<div class="kt-widget14__legend">
									<span class="kt-widget14__bullet kt-bg-warning"></span>
									<span class="kt-widget14__stats">-7% The Pride</span>
								</div>
								<div class="kt-widget14__legend">
									<span class="kt-widget14__bullet kt-bg-brand"></span>
									<span class="kt-widget14__stats">+20% Home City</span>
								</div>
							</div>		 
						</div> 	 
					</div>
				</div>	
				<!--end:: Widgets/Revenue Change-->	
			</div>
			
			<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
				<!--begin:: Widgets/Tasks -->
				<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Lịch hẹn công việc
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
									Hôm nay
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
									Tuần này
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
									Tháng này
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="kt-portlet__body">
						<div class="tab-content">
							<div class="tab-pane active" id="kt_widget2_tab1_content">
								<div class="kt-notification">
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New order has been received.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                2 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New member is registered and pending for approval.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                3 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                Membership application has been added.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                3 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New report file has been uploaded.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                5 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New user feedback received and pending for review.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                8 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                Database sever #2 has been fully restarted. 
				                            </div>
				                            <div class="kt-notification__item-time">
				                                23 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                </div>           
							</div>

							<div class="tab-pane" id="kt_widget2_tab2_content">
								<div class="kt-notification">
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New order has been received.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                2 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New member is registered and pending for approval.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                3 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                Membership application has been added.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                3 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New report file has been uploaded.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                5 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New user feedback received and pending for review.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                8 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                Database sever #2 has been fully restarted. 
				                            </div>
				                            <div class="kt-notification__item-time">
				                                23 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                </div> 	
							</div>	

							<div class="tab-pane" id="kt_widget2_tab3_content">
								<div class="kt-notification">
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New order has been received.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                2 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New member is registered and pending for approval.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                3 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                Membership application has been added.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                3 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New report file has been uploaded.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                5 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                New user feedback received and pending for review.
				                            </div>
				                            <div class="kt-notification__item-time">
				                                8 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                    <a href="#" class="kt-notification__item">
				                        <div class="kt-notification__item-details">
				                            <div class="kt-notification__item-title">
				                                Database sever #2 has been fully restarted. 
				                            </div>
				                            <div class="kt-notification__item-time">
				                                23 hrs ago
				                            </div>
				                        </div>
				                    </a>
				                </div> 
							</div>		
						</div>
					</div>
				</div>
				<!--end:: Widgets/Tasks -->
		    </div>
		    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
				<!--begin:: Widgets/Notifications-->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Thông báo
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<a class="nav-link" href="#">
								Xem tất cả
							</a>
						</div>
					</div>
					<div class="kt-portlet__body">
		                <div class="kt-notification">
		                    <a href="#" class="kt-notification__item">
		                        <div class="kt-notification__item-details">
		                            <div class="kt-notification__item-title">
		                                New order has been received.
		                            </div>
		                            <div class="kt-notification__item-time">
		                                2 hrs ago
		                            </div>
		                        </div>
		                    </a>
		                    <a href="#" class="kt-notification__item">
		                        <div class="kt-notification__item-details">
		                            <div class="kt-notification__item-title">
		                                New member is registered and pending for approval.
		                            </div>
		                            <div class="kt-notification__item-time">
		                                3 hrs ago
		                            </div>
		                        </div>
		                    </a>
		                    <a href="#" class="kt-notification__item">
		                        <div class="kt-notification__item-details">
		                            <div class="kt-notification__item-title">
		                                Membership application has been added.
		                            </div>
		                            <div class="kt-notification__item-time">
		                                3 hrs ago
		                            </div>
		                        </div>
		                    </a>
		                    <a href="#" class="kt-notification__item">
		                        <div class="kt-notification__item-details">
		                            <div class="kt-notification__item-title">
		                                New report file has been uploaded.
		                            </div>
		                            <div class="kt-notification__item-time">
		                                5 hrs ago
		                            </div>
		                        </div>
		                    </a>
		                    <a href="#" class="kt-notification__item">
		                        <div class="kt-notification__item-details">
		                            <div class="kt-notification__item-title">
		                                New user feedback received and pending for review.
		                            </div>
		                            <div class="kt-notification__item-time">
		                                8 hrs ago
		                            </div>
		                        </div>
		                    </a>
		                    <a href="#" class="kt-notification__item">
		                        <div class="kt-notification__item-details">
		                            <div class="kt-notification__item-title">
		                                Database sever #2 has been fully restarted. 
		                            </div>
		                            <div class="kt-notification__item-time">
		                                23 hrs ago
		                            </div>
		                        </div>
		                    </a>
		                </div>
					</div>
				</div>
				<!--end:: Widgets/Notifications-->    
			</div>
		    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
				<!--begin:: Widgets/Support Tickets -->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Support Tickets
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<a class="nav-link" href="#">
								Xem tất cả
							</a>
						</div>
					</div>
					<div class="kt-portlet__body">
						<div class="kt-widget3">
							<div class="kt-widget3__item">
								<div class="kt-widget3__header">
									<div class="kt-widget3__user-img">							 
										<img class="kt-widget3__img" src="./assets/media/users/300_21.jpg" alt="">  
									</div>
									<div class="kt-widget3__info">
										<a href="#" class="kt-widget3__username">
										Melania Trump   
										</a><br> 
										<span class="kt-widget3__time">
										2 day ago
										</span>		 
									</div>
									<span class="kt-widget3__status kt-font-info">
									Pending
									</span>	
								</div>
								<div class="kt-widget3__body">
									<p class="kt-widget3__text"> 
										Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
									</p>
								</div>
							</div>
							<div class="kt-widget3__item">
								<div class="kt-widget3__header">
									<div class="kt-widget3__user-img">							 
										<img class="kt-widget3__img" src="./assets/media/users/300_21.jpg" alt="">  
									</div>
									<div class="kt-widget3__info">
										<a href="#" class="kt-widget3__username">
										Melania Trump   
										</a><br> 
										<span class="kt-widget3__time">
										2 day ago
										</span>		 
									</div>
									<span class="kt-widget3__status kt-font-info">
									Pending
									</span>	
								</div>
								<div class="kt-widget3__body">
									<p class="kt-widget3__text"> 
										Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
									</p>
								</div>
							</div>
							<div class="kt-widget3__item">
								<div class="kt-widget3__header">
									<div class="kt-widget3__user-img">							 
										<img class="kt-widget3__img" src="./assets/media/users/300_21.jpg" alt="">  
									</div>
									<div class="kt-widget3__info">
										<a href="#" class="kt-widget3__username">
										Melania Trump   
										</a><br> 
										<span class="kt-widget3__time">
										2 day ago
										</span>		 
									</div>
									<span class="kt-widget3__status kt-font-info">
									Pending
									</span>	
								</div>
								<div class="kt-widget3__body">
									<p class="kt-widget3__text"> 
										Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end:: Widgets/Support Tickets -->	
			</div>
		</div>

		<!--End::Section-->

		<!--End::Dashboard 6-->
	</div>

	<!-- end:: Content -->

	<!-- end:: Content -->
</div>
		
		<?php require "footer.php"; ?>
		
		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo6/pages/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>