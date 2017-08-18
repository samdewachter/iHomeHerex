@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<!-- <small>Optional description</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
		<li class="active">Here</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<h2 class="page-header">iHomes</h2>
	@if(count($user->Homes) != 0)
		@foreach($user->Homes as $home)
			<div class="row">
				<div class="col-md-6">
		          	<!-- Widget: user widget style 1 -->
		          	<div class="box box-widget widget-user">
		            	<!-- Add the bg color to the header using any of the bg-* classes -->
		            	<div class="widget-user-header bg-aqua-active">
		              		<h3 class="widget-user-username">Sending iHome (main)</h3>
		              		<h5 class="widget-user-desc">{{ $home->SendingHome->name }}</h5>
		            	</div>
		            	<div class="widget-user-image">
		              		<img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
		            	</div>
		            	<div class="box-footer">
		              		<div class="row">
		                		<div class="col-sm-4 border-right">
		                  			<div class="description-block">
		                    			<h5 class="description-header">3,200</h5>
		                    			<span class="description-text">SALES</span>
		                  			</div>
		                  			<!-- /.description-block -->
		                		</div>
		                		<!-- /.col -->
		                		<div class="col-sm-4 border-right">
		                  			<div class="description-block">
		                    			<h5 class="description-header">13,000</h5>
		                    			<span class="description-text">FOLLOWERS</span>
		                  			</div>
		                  			<!-- /.description-block -->
		                		</div>
		                		<!-- /.col -->
		                		<div class="col-sm-4">
		                 			<div class="description-block">
		                    			<h5 class="description-header">35</h5>
		                    			<span class="description-text">PRODUCTS</span>
		                  			</div>
		                  			<!-- /.description-block -->
		                		</div>
		                		<!-- /.col -->
		              		</div>
		              		<!-- /.row -->
		            	</div>
		          	</div>
		          	<!-- /.widget-user -->
		        </div>
		        <div class="col-md-6">
		          	<!-- Widget: user widget style 1 -->
		          	<div class="box box-widget widget-user">
		            	<!-- Add the bg color to the header using any of the bg-* classes -->
		            	<div class="widget-user-header bg-aqua-active">
		              		<h3 class="widget-user-username">Receiving iHome (secondary)</h3>
		              		<h5 class="widget-user-desc">{{ $home->ReceivingHome->name }}</h5>
		            	</div>
		            	<div class="widget-user-image">
		              		<img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
		            	</div>
		            	<div class="box-footer">
		              		<div class="row">
		                		<div class="col-sm-4 border-right">
		                  			<div class="description-block">
		                    			<h5 class="description-header">3,200</h5>
		                    			<span class="description-text">SALES</span>
		                  			</div>
		                  			<!-- /.description-block -->
		                		</div>
		                		<!-- /.col -->
		                		<div class="col-sm-4 border-right">
		                  			<div class="description-block">
		                    			<h5 class="description-header">13,000</h5>
		                    			<span class="description-text">FOLLOWERS</span>
		                  			</div>
		                  			<!-- /.description-block -->
		                		</div>
		                		<!-- /.col -->
		                		<div class="col-sm-4">
		                 			<div class="description-block">
		                    			<h5 class="description-header">35</h5>
		                    			<span class="description-text">PRODUCTS</span>
		                  			</div>
		                  			<!-- /.description-block -->
		                		</div>
		                		<!-- /.col -->
		              		</div>
		              		<!-- /.row -->
		            	</div>
		          	</div>
		          	<!-- /.widget-user -->
		        </div>
			</div>
			<div class="row">
				@foreach($home->Lights as $light)
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-{{ $light->color }}"><i class="fa fa-lightbulb-o"></i></span>

							<div class="info-box-content">
								  <span class="info-box-text"><b>Color:</b> {{ $light->color }}</span>
								  <span class="info-box-text"><b>Message:</b> {{ $light->message }}</span>
								  <span class="info-box-text"><b>Active:</b> {{ $light->time }} seconds</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
				@endforeach
			</div>
		@endforeach
	@else
		<p>You have no iHomes yet.</p>
	@endif
</section>
<!-- /.content -->



@endsection