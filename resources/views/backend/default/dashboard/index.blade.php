@extends('backend.default.layouts.simple.master')

@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Welcome, Ashikur Rahaman.</h3>
@endsection

@section('breadcrumb-items')
	<a class="btn btn-gradient" data-bs-original-title="" title="">Add Student</a>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row second-chart-list third-news-update">
		{{-- <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
			<div class="card o-hidden profile-greeting">
				<div class="card-body">
					<div class="media">
						<div class="badge-groups w-100">
							<div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
							<div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
						</div>
					</div>
					<div class="greeting-user text-center">
						<div class="profile-vector"><img class="img-fluid" src="{{asset('assets/images/dashboard/welcome.png')}}" alt=""></div>
						<h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
						<p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the last 24 hours</span></p>
						<div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
						<div class="left-icon"><i class="fa fa-bell"> </i></div>
					</div>
				</div>
			</div>
		</div> --}}
		{{-- <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
			<div class="card earning-card">
				<div class="card-body p-0">
					<div class="row m-0">
						<div class="col-xl-3 earning-content p-0">
							<div class="row m-0 chart-left">
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>Dashboard</h5>
									<p class="font-roboto">Overview of last month</p>
								</div>
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>$4055.56 </h5>
									<p class="font-roboto">This Month Earning</p>
								</div>
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>$1004.11</h5>
									<p class="font-roboto">This Month Profit</p>
								</div>
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>90%</h5>
									<p class="font-roboto">This Month Sale</p>
								</div>
								<div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
							</div>
						</div>
						<div class="col-xl-9 p-0">
							<div class="chart-right">
								<div class="row m-0 p-tb">
									<div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
										<div class="inner-top-left">
											<ul class="d-flex list-unstyled">
												<li>Daily</li>
												<li class="active">Weekly</li>
												<li>Monthly</li>
												<li>Yearly</li>
											</ul>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
										<div class="inner-top-right">
											<ul class="d-flex list-unstyled justify-content-end">
												<li>Online</li>
												<li>Store</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="card-body p-0">
											<div class="current-sale-container">
												<div id="chart-currently"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row border-top m-0">
								<div class="col-xl-4 ps-0 col-md-6 col-sm-6">
									<div class="media p-0">
										<div class="media-left"><i class="icofont icofont-crown"></i></div>
										<div class="media-body">
											<h6>Referral Earning</h6>
											<p>$5,000.20</p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-sm-6">
									<div class="media p-0">
										<div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
										<div class="media-body">
											<h6>Cash Balance</h6>
											<p>$2,657.21</p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-12 pe-0">
									<div class="media p-0">
										<div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
										<div class="media-body">
											<h6>Sales forcasting</h6>
											<p>$9,478.50     </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<div class="col-xl-12 xl-100 chart_data_left box-col-12">
			<div class="row">
				<div class="col-sm-6 col-xl-3 col-lg-6">
					<div class="card o-hidden">
					  <div class="bg-info b-r-4 card-body">
						<div class="media static-top-widget">
						  <div class="align-self-center text-center"><i data-feather="file-text"></i></div>
						  <div class="media-body"><span class="m-0">Applications</span>
							<h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="file-text"></i>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6 col-xl-3 col-lg-6">
					<div class="card o-hidden">
					  <div class="bg-success b-r-4 card-body">
						<div class="media static-top-widget">
						  <div class="align-self-center text-center"><i data-feather="check-square"></i></div>
						  <div class="media-body"><span class="m-0">Accepted</span>
							<h4 class="mb-0 counter">2548</h4><i class="icon-bg" data-feather="check-square"></i>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6 col-xl-3 col-lg-6">
					<div class="card o-hidden">
					  <div class="bg-danger b-r-4 card-body">
						<div class="media static-top-widget">
						  <div class="align-self-center text-center"><i data-feather="zap"></i></div>
						  <div class="media-body"><span class="m-0">Rejected</span>
							<h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="zap"></i>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6 col-xl-3 col-lg-6">
					<div class="card o-hidden">
					  <div class="bg-warning b-r-4 card-body">
						<div class="media static-top-widget">
						  <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
						  <div class="media-body"><span class="m-0">Students</span>
							<h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
			</div>
		</div>

		<div class="col-xl-3 xl-50 chart_data_right second d-none">
			<div class="card">
				<div class="card-body">
					<div class="media align-items-center">
						<div class="media-body right-chart-content">
							<h4>$95,000<span class="new-box">New</span></h4>
							<span>Product Order Value</span>
						</div>
						<div class="knob-block text-center">
							<input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 xl-50 news box-col-6">
			<div class="card">
				<div class="card-header">
					<div class="header-top">
						<h5 class="m-0">News & Update</h5>
						<div class="card-header-right-icon">
							<select class="button btn btn-primary">
								<option>Today</option>
								<option>Tomorrow</option>
								<option>Yesterday</option>
							</select>
						</div>
					</div>
				</div>
				<div class="card-body p-0">
					<div class="news-update">
						<h6>36% off For pixel lights Couslations Types.</h6>
						<span>Lorem Ipsum is simply dummy...</span>
					</div>
					<div class="news-update">
						<h6>We are produce new product this</h6>
						<span> Lorem Ipsum is simply text of the printing... </span>
					</div>
					<div class="news-update">
						<h6>50% off For COVID Couslations Types.</h6>
						<span>Lorem Ipsum is simply dummy...</span>
					</div>
				</div>
				<div class="card-footer">
					<div class="bottom-btn"><a href="#">More...</a></div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 xl-50 appointment-sec box-col-6">
			<div class="row">
				<div class="col-xl-12 appointment">
					<div class="card">
						<div class="card-header card-no-border">
							<div class="header-top">
								<h5 class="m-0">appointment</h5>
								<div class="card-header-right-icon">
									<select class="button btn btn-primary">
										<option>Today</option>
										<option>Tomorrow</option>
										<option>Yesterday</option>
									</select>
								</div>
							</div>
						</div>
						<div class="card-body pt-0" style="padding-top: 18px;">
							<div class="appointment-table table-responsive">
								<table class="table table-bordernone">
									<tbody>
										@for($i=0; $i<=5; $i++)
											<tr>
												<td>
													<img class="img-fluid img-40 rounded-circle mb-3" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
													<div class="status-circle bg-primary"></div>
												</td>
												<td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
												<td>
													<p class="m-0 font-primary">28 Sept</p>
												</td>
												@if($i % 2 == 0)
													<td class="text-end">
														<div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
													</td>
													
												@else
												<td class="text-end">
													<div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
												</td>

												@endif
												
											</tr>
										@endfor
										
										
										{{-- <tr>
											<td>
												<img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
											<td>
												<p class="m-0 font-primary">22 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle mb-3" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
											<td>
												<p class="m-0 font-primary">28 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
											<td>
												<p class="m-0 font-primary">22 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle mb-3" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
											<td>
												<p class="m-0 font-primary">28 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
											<td>
												<p class="m-0 font-primary">22 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
											<td>
												<p class="m-0 font-primary">22 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr> --}}
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
			<div class="card gradient-primary o-hidden">
				<div class="card-body">
					<div class="setting-dot">
						<div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
					</div>
					<div class="default-datepicker">
						<div class="datepicker-here" data-language="en"></div>
					</div>
					<span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script') 
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection
