@extends('layouts.admin')

@section('content')

<section class="content-header">
	<h1>
		Edit {{ $user->name }}'s profile
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
              		<h3 class="box-title">Edit profile</h3>
            	</div>
	            <!-- /.box-header -->
	            <!-- form start -->
            	<form class="form-horizontal" action="{{ url('/admin/profile', [$user->id, 'edit']) }}" method="POST" enctype="multipart/form-data">
            		{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="userName" class="col-sm-2 control-label">Name</label>

							<div class="col-sm-10">
								<input type="text" id="userName" value="{{ (old('name') != null)? old('name') : $user->name }}" name="name" class="form-control" placeholder="Name">
								@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="userEmail" class="col-sm-2 control-label">Email</label>

							<div class="col-sm-10">
								<input type="text" id="userEmail" value="{{ (old('email') != null)? old('email') : $user->email }}" name="email" class="form-control" placeholder="Email">
								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('place_of_residence') ? ' has-error' : '' }}">
							<label for="placeOfResidence" class="col-sm-2 control-label">Place of residence</label>

							<div class="col-sm-10">
								<input type="text" id="placeOfResidence" value="{{ (old('place_of_residence') != null)? old('place_of_residence') : $user->place_of_residence }}" name="place_of_residence" class="form-control" placeholder="Place of residence">
								@if ($errors->has('place_of_residence'))
									<span class="help-block">
										<strong>{{ $errors->first('place_of_residence') }}</strong>
									</span>
								@endif
							</div>
						</div>
					</div>
					<div class="box-footer">
                		<h4>Optional</h4>
              		</div>
              		<div class="box-body">
              			<div class="form-group current_photo_wrapper">
              				<label class="col-sm-2 control-label">Current photo</label>

              				<div class="col-sm-10">
              					<img class="current_photo" src="{{ url('/images', [$user->photo]) }}"><button type="button" id="delete_current_photo" class="btn btn-danger">Delete</button>
              				</div>
              			</div>
              			<div class="form-group new_photo_wrapper">
              				<label class="col-sm-2 control-label">New photo</label>

              				<div class="col-sm-10">
              					<input type="file" name="photo" class="form-control">
              					<button type="button" id="cancel_new_photo" class="btn btn-default">Cancel</button>
              				</div>
              			</div>
						<div class="form-group">
							<label for="userPassword" class="col-sm-2 control-label">Password</label>

							<div class="col-sm-10">
								<input type="password" name="password" id="userPassword" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="userPasswordConfirmation" class="col-sm-2 control-label">Password confirmation</label>

							<div class="col-sm-10">
								<input type="text" name="password_confirmation" id="userPasswordConfirmation" class="form-control" placeholder="Password confirmation">
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