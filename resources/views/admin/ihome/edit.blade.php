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
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-info">
	            	<div class="box-header with-border">
	              		<h3 class="box-title">New iHome</h3>
	            	</div>
		            <!-- /.box-header -->
		            <!-- form start -->
	            	<form class="form-horizontal" action="{{ url('/admin/ihomes', [$ihome->id, 'edit']) }}" method="POST">
	            		{{ csrf_field() }}
	              		<div class="box-body">
	                		<div class="form-group{{ $errors->has('homeName') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Name of iHomes</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ (old('homeName') != null)? old('homeName') : $ihome->name }}" name="homeName" class="form-control" placeholder="Name">
	                    			@if ($errors->has('homeName'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('homeName') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	                	</div>
	                	<div class="box-footer">
	                		<h4>Receiving iHome</h4>
	              		</div>
	                	<div class="box-body">
	                		<div class="form-group{{ $errors->has('receivingName') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Name</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ (old('receivingName') != null)? old('receivingName') : $ihome->ReceivingHome->name }}" name="receivingName" class="form-control" placeholder="Name">
	                    			@if ($errors->has('receivingName'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('receivingName') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	                		<div class="form-group{{ $errors->has('receivingLocation') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Location</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ (old('receivingLocation') != null)? old('receivingLocation') : $ihome->ReceivingHome->location }}" name="receivingLocation" class="form-control" placeholder="Location">
	                    			@if ($errors->has('receivingLocation'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('receivingLocation') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	              		</div>
	              		<!-- /.box-body -->
	              		<div class="box-footer">
	                		<h4>Sending iHome</h4>
	              		</div>
	                	<div class="box-body">
	                		<div class="form-group{{ $errors->has('sendingName') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Name</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ (old('sendingName') != null)? old('sendingName') : $ihome->SendingHome->name }}" name="sendingName" class="form-control" placeholder="Name">
	                    			@if ($errors->has('sendingName'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('sendingName') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	                		<div class="form-group{{ $errors->has('sendingLocation') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Location</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ (old('sendingLocation') != null)? old('sendingLocation') : $ihome->SendingHome->location }}" name="sendingLocation" class="form-control" placeholder="Location">
	                    			@if ($errors->has('sendingLocation'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('sendingLocation') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	              		</div>
	              		<!-- /.box-body -->
	              		<div class="box-footer">
	                		<button type="submit" class="btn btn-default">Cancel</button>
	                		<button type="submit" class="btn btn-info pull-right">Edit</button>
	              		</div>
	              		<!-- /.box-footer -->
	            	</form>
	          	</div>
			</div>
		</div>
	</section>

@endsection