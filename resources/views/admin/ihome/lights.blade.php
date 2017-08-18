@extends('layouts.admin')

@section('content')

<section class="content-header">
	<h1>
		Lights overview
		<!-- <small>Optional description</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
		<li class="active">Here</li>
	</ol>
</section>
<section class="content">
	@if(count($homes) != 0)
		@foreach($homes as $home)
			<h2 class="page-header">{{ $home->name }} <a href="{{ url('/admin/lights', [$home->id, 'edit']) }}" class="btn btn-primary">Edit</a></h2>
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
		<p>You have no iHome yet.</p>
	@endif
</section>

@endsection