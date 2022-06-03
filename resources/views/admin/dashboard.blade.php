@extends('master.masteradmin')
@section('title')
	Dashboard
@endsection
@section('content')
        
 <!--**********************************
            Sidebar end
        ***********************************-->
		
		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body ">
            <!-- row -->
                        <!-- row -->
			<div class="container-fluid">
				
				
				<div class="card">
					<div class="card-header border-0 pb-0">
					</div>
					<div class="row">
							
						<div class="col-xl-6 col-lg-6 col-sm-6">
							<div class="widget-stat card bg-warning">
								<div class="card-body p-4">
									<div class="media">
										<span class="mr-3">
											<i class="la la-user"></i>
										</span>
										<div class="media-body text-white">
											<p class="mb-1">Total d'administrateurs</p>
											@foreach ($totadmin as $totadmin)
											<h3 class="text-white">{{$totadmin->totid}}</h3>

											@endforeach
											<div class="progress mb-2 bg-primary">
												<div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-sm-6">
							<div class="widget-stat card bg-secondary">
								<div class="card-body p-4">
									<div class="media">
										<span class="mr-3">
											<i class="la la-graduation-cap"></i>
										</span>
										<div class="media-body text-white">
											<p class="mb-1">Total d'avocats</p>
                                            @foreach ($totavocat as $totavocat)
											<h3 class="text-white">{{$totavocat->totid}}</h3>
											@endforeach
											<div class="progress mb-2 bg-primary">
												<div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-sm-6">
							<div class="widget-stat card bg-danger">
								<div class="card-body p-4">
									<div class="media">
										<span class="mr-3">
											<i class="la la-dollar"></i>
										</span>
										<div class="media-body text-white">
											<p class="mb-1">Total d'immeubles</p>
                                            @foreach ($totimmeuble as $totimmeuble)
											<h3 class="text-white">{{$totimmeuble->totid}}</h3>
											@endforeach
											<div class="progress mb-2 bg-secondary">
												<div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-sm-6">
							<div class="widget-stat card bg-success">
								<div class="card-body p-4">
									<div class="media">
										<span class="mr-3">
											<i class="la la-dollar"></i>
										</span>
										<div class="media-body text-white">
											<p class="mb-1">Total de clients</p>
                                            @foreach ($totclient as $totclient)
											<h3 class="text-white">{{$totclient->totid}}</h3>
											@endforeach
											<div class="progress mb-2 bg-secondary">
												<div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
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
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
@endsection