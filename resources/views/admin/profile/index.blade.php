@extends('layouts.admin')

@section('content')

<section class="content-header">
	<h1>
		Profile
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
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="{{ url('/images', [$user->photo]) }}" alt="User profile picture">

					<h3 class="profile-username text-center">{{ $user->name }}</h3>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right">{{ $user->email }}</a>
						</li>
						<li class="list-group-item">
							<b>Number of iHomes</b> <a class="pull-right">{{ count($user->Homes) }}</a>
						</li>
						<li class="list-group-item">
							<b>Place of residence</b> <a class="pull-right">{{ $user->place_of_residence }}</a>
						</li>
					</ul>

					<a href="{{ url('/admin/profile', [$user->id, 'edit']) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
@endsection