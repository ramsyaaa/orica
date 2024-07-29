@extends('layouts.backend')

@section('content')
   <div class="page-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
							<aside class="sidebar sidebar-user">
								<div class="card ctm-border-radius shadow-sm">
									<div class="card-body py-4">
										<div class="row">
											<div class="col-md-12 mr-auto text-left">
												<div class="custom-search input-group">
													<div class="custom-breadcrumb">
														<ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
															<li class="breadcrumb-item d-inline-block"><a href="index.html" class="text-dark">Home</a></li>
															<li class="breadcrumb-item d-inline-block active">Dashboard</li>
														</ol>
														<h4 class="text-dark">Admin Dashboard</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="user-card card shadow-sm bg-white text-center ctm-border-radius">
									<div class="user-info card-body">
										<div class="user-avatar mb-4">
                    <img src="{{asset('vendor/lakers')}}/img/profiles/img-13.jpg" alt="User Avatar" class="img-fluid rounded-circle" width="100">
										</div>
										<div class="user-details">
											<h4><b>Welcome Admin</b></h4>
										</div>
									</div>
								</div>
								<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item text-center active button-5"><a href="index.html" class="text-white">Admin Dashboard</a></li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
						
						<div class="col-xl-9 col-lg-8 col-md-12">
						
							<!-- Widget -->
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="card dash-widget ctm-border-radius shadow-sm">
										<div class="card-body">
											<div class="card-icon bg-primary">
												<i class="fa fa-users" aria-hidden="true"></i>
											</div>
											<div class="card-right">
												<h4 class="card-title">Employees</h4>
												<p class="card-text">700</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
									<div class="card dash-widget ctm-border-radius shadow-sm">
										<div class="card-body">
											<div class="card-icon bg-warning">
												<i class="fa fa-building-o"></i>
											</div>
											<div class="card-right">
												<h4 class="card-title">Companies</h4>
												<p class="card-text">30</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
									<div class="card dash-widget ctm-border-radius shadow-sm">
										<div class="card-body">
											<div class="card-icon bg-danger">
												<i class="fa fa-suitcase" aria-hidden="true"></i>
											</div>
											<div class="card-right">
												<h4 class="card-title">Leaves</h4>
												<p class="card-text">3</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
									<div class="card dash-widget ctm-border-radius shadow-sm">
										<div class="card-body">
											<div class="card-icon bg-success">
												<i class="fa fa-money" aria-hidden="true"></i>
											</div>
											<div class="card-right">
												<h4 class="card-title">Salary</h4>
												<p class="card-text">$5.8M</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- / Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/Content-->
@endsection
