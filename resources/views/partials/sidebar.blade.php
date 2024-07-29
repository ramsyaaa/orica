            <!-- Slide Nav -->
            <div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
                                <div class="append mr-auto my-0 my-md-0 mr-auto">
                                    <ul class="list-group list-group-horizontal-md mr-auto">
                                        <li class="mr-1 {{request()->segment(1) == 'admin' && request()->segment(2) == null ? 'active' : ''}}"><a href="{{url('admin')}}" class="btn-ctm-space {{request()->segment(1) == 'admin' && request()->segment(2) == null ? 'text-light' : 'text-dark'}} header_class"><span class="lnr lnr-home pr-0 pr-lg-2"></span><span class="d-none d-lg-inline">Dashboard</span></a></li>
                                        <li class="mr-1 {{request()->segment(1) == 'admin' && request()->segment(2) == 'location' ? 'active' : ''}}"><a href="{{url('admin/location')}}" class="btn-ctm-space {{request()->segment(1) == 'admin' && request()->segment(2) == 'location' ? 'text-light' : 'text-dark'}} header_class"><span class="lnr lnr-location pr-0 pr-lg-2"></span><span class="d-none d-lg-inline">Location</span></a></li>
                                        <li class="mr-1 {{request()->segment(1) == 'admin' && request()->segment(2) == 'asset' ? 'active' : ''}}"><a href="{{url('admin/asset')}}" class="btn-ctm-space {{request()->segment(1) == 'admin' && request()->segment(2) == 'asset' ? 'text-light' : 'text-dark'}} header_class"><span class="lnr lnr-database pr-0 pr-lg-2"></span><span class="d-none d-lg-inline">Assets</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Slide Nav -->