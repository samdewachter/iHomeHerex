@extends('layouts.admin')

@section('content')

	<section class="content-header">
		<h1>
			Overview
			<!-- <small>Optional description</small> -->
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>
	<section class="content">
		@if(count($user->Homes) != 0)
			@foreach($user->Homes as $key => $home)
				@if(($key % 3) == 0)
					<div class="row">
				@endif
					<div class="col-lg-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">{{ $home->name }}</h3>
							</div>
							<div class="box-body">
								<h4>Sender</h4>
								<span class="col-sm-3 text-right"><b>Name:</b></span><span class="col-sm-9">{{ $home->SendingHome->name }}</span>
								<span class="col-sm-3 text-right"><b>Location:</b></span><span class="col-sm-9">{{ $home->SendingHome->location }}</span>
								<h4>Receiver</h4>
								<span class="col-sm-3 text-right"><b>Name:</b></span><span class="col-sm-9">{{ $home->ReceivingHome->name }}</span>
								<span class="col-sm-3 text-right"><b>Location:</b></span><span class="col-sm-9">{{ $home->ReceivingHome->location }}</span>
							</div>
							<div class="box-footer">
								<a href="{{ url('/admin/ihomes', [$home->id, 'edit']) }}" class="btn btn-primary">Edit</a>
			                	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
					                Delete
					            </button>
							</div>
						</div>
					</div>
				@if(($key % 3) == 2)
					</div>
				@endif
				<div class="modal modal-danger fade" id="modal-danger">
	          		<div class="modal-dialog">
	            		<div class="modal-content">
	              			<div class="modal-header">
	                			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                	  			<span aria-hidden="true">×</span>
	                	  		</button>
	                			<h4 class="modal-title">Delete {{ $home->name }}</h4>
	              			</div>
	              			<div class="modal-body">
	                			<p>Are you sure you want to delete this iHome?</p>
	              			</div>
	              			<div class="modal-footer">
	                			<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
	                			<form action="{{ url('/admin/ihomes', [$home->id, 'delete']) }}" method="POST">
	                				{{ method_field('DELETE') }}
	                				{{ csrf_field() }}
	                				<button type="submit" class="btn btn-outline">Delete</button>
	                			</form>
	              			</div>
	            		</div>
	            		<!-- /.modal-content -->
	          		</div>
	          		<!-- /.modal-dialog -->
	        	</div>
			@endforeach
		@else
			<p>You have no iHome yet.</p>
		@endif
	</section>

@endsection