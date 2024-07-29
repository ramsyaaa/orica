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
															<li class="breadcrumb-item d-inline-block"><a href="{{url('/admin')}}" class="text-dark">Home</a></li>
															<li class="breadcrumb-item d-inline-block active">Asset</li>
														</ol>
														<h4 class="text-dark">Asset Detail</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					
						<div class="col-xl-9 col-lg-8  col-md-12">
							<div class="card shadow-sm ctm-border-radius">
								<div class="card-body align-center">
									<h4 class="card-title float-left mb-0 mt-2">Asset Detail</h4>
									<ul class="nav nav-tabs float-right border-0 tab-list-emp">
									</ul>
								</div>
							</div>
							<div class="ctm-border-radius shadow-sm card">
								<div class="card-body">
								
									<!--Content table-->
									<div class="table-back employee-office-table">
										<div class="table-responsive">
											<table class="table custom-table table-hover table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>{{ $asset->id }}</th>
                                                    </tr>
                                                    <tr><th> Asset Name </th><td> {{ $asset->asset_name }} </td></tr><tr><th> Asset Description </th><td> {{ $asset->asset_description }} </td></tr><tr><th> Balance Sheet Account </th><td> {{ $asset->balance_sheet_account }} </td></tr><tr><th> Balance Sheet Account Description </th><td> {{ $asset->balance_sheet_account_description }} </td></tr><tr><th> Asset Number </th><td> {{ $asset->asset_number }} </td></tr><tr><th> Asset Subnumber </th><td> {{ $asset->asset_subnumber }} </td></tr><tr><th> Asset Class Number </th><td> {{ $asset->asset_class_number }} </td></tr><tr><th> Asset Class </th><td> {{ $asset->asset_class }} </td></tr><tr><th> Asset Cost Center Number </th><td> {{ $asset->asset_cost_center_number }} </td></tr><tr><th> Asset Cost Center </th><td> {{ $asset->asset_cost_center }} </td></tr><tr><th> Location Id </th><td> {{ $asset->location_id }} </td></tr><tr><th> First Acquisition Period </th><td> {{ $asset->first_acquisition_period }} </td></tr><tr><th> Capitalized On </th><td> {{ $asset->capitalized_on }} </td></tr><tr><th> Dep Start Date </th><td> {{ $asset->dep_start_date }} </td></tr><tr><th> Planned Useful Life </th><td> {{ $asset->planned_useful_life }} </td></tr><tr><th> Apc Reporting Date Planned </th><td> {{ $asset->apc_reporting_date_planned }} </td></tr><tr><th> Ordinary Depreciation Reporting Date Posted </th><td> {{ $asset->ordinary_depreciation_reporting_date_posted }} </td></tr><tr><th> Unplanned Depreciation Reporting Date Posted </th><td> {{ $asset->unplanned_depreciation_reporting_date_posted }} </td></tr><tr><th> Netbook Value Reporting Date Planned </th><td> {{ $asset->netbook_value_reporting_date_planned }} </td></tr><tr><th> Last Verification Date </th><td> {{ $asset->last_verification_date }} </td></tr>
                                                    <tr>
                                                        <td colspan="10" align="center">
                                                            <a href="{{ url('/admin/asset') }}"><button class="btn btn-sm btn-warning"><span class="lnr lnr-arrow-left">Back</span></button></a>
                                                            <a href="{{ url('/admin/asset/' . $asset->id . '/edit') }}"><button class="btn btn-sm btn-primary" title="Edit Asset"><span class="lnr lnr-pencil">Edit</span></button></a>
                                                            {!! Form::open([
                                                                'method' => 'DELETE',
                                                                'url' => ['admin/asset', $asset->id],
                                                                'style' => 'display:inline'
                                                            ]) !!}
                                                                {!! Form::button('<span class="lnr lnr-trash">Delete</span>', array(
                                                                        'type' => 'submit',
                                                                        'class' => 'btn btn-sm btn-danger',
                                                                        'title' => 'Delete Asset',
                                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                                )) !!}
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                </tbody>
											</table>
										</div>
									</div>
									<!-- /Content Table -->
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<!--/Content-->
@endsection
