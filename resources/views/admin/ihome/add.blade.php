@extends('layouts.admin')

@section('content')

	<section class="content-header">
		<h1>
			Add iHome
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
	            	<form class="form-horizontal" action="{{ url('/admin/ihome/add') }}" method="POST">
	            		{{ csrf_field() }}
	              		<div class="box-body">
	              			<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
	                 			<label for="inputPassword3" class="col-sm-2 control-label">Code</label>

	                  			<div class="col-sm-10">
	                    			<input type="password" name="password" class="form-control"  placeholder="Password">
	                    			@if ($errors->has('password'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('password') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	                		<div class="form-group{{ $errors->has('homeName') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Name of iHomes</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('homeName') }}" name="homeName" class="form-control" placeholder="Name">
	                    			@if ($errors->has('homeName'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('homeName') }}</strong>
				                        </span>
				                    @endif
	                  			</div>
	                		</div>
	                	</div>
	                	<div class="box-footer">
	                		<h4>Sending iHome</h4>
	              		</div>
	                	<div class="box-body">
	                		<div class="form-group{{ $errors->has('receivingName') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Name</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('receivingName') }}" name="receivingName" class="form-control" placeholder="Name">
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
	                    			<input type="text" value="{{ old('receivingLocation') }}" name="receivingLocation" class="form-control" placeholder="Location">
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
	                		<h4>Receiving iHome</h4>
	              		</div>
	                	<div class="box-body">
	                		<div class="form-group{{ $errors->has('sendingName') ? ' has-error' : '' }}">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Name</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('sendingName') }}" name="sendingName" class="form-control" placeholder="Name">
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
	                    			<input type="text" value="{{ old('sendingLocation') }}" name="sendingLocation" class="form-control" placeholder="Location">
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
	                		<h4>Lights</h4>
	              		</div>
	                	<div class="box-body">
	                		<div class="form-group">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Message of white light</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('white') }}" name="white" class="form-control" placeholder="Message">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Message of green light</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('green') }}" name="green" class="form-control" placeholder="Message">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Message of orange light</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('orange') }}" name="orange" class="form-control" placeholder="Message">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputEmail3" class="col-sm-2 control-label">Message of red light</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ old('red') }}" name="red" class="form-control" placeholder="Message">
	                  			</div>
	                		</div>
	              		</div>
	              		<!-- /.box-body -->
	              		<div class="box-footer">
	                		<button type="submit" class="btn btn-default">Cancel</button>
	                		<button type="submit" class="btn btn-info pull-right">Activate</button>
	              		</div>
	              		<!-- /.box-footer -->
	            	</form>
	          	</div>
			</div>
		</div>
	</section>
@endsection