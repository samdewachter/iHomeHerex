@extends('layouts.admin')

@section('content')

<section class="content-header">
	<h1>
		Edit iHome '{{ $ihome->name }}' light messages
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
              		<h3 class="box-title">Edit lights</h3>
            	</div>
	            <!-- /.box-header -->
	            <!-- form start -->
            	<form class="form-horizontal" action="{{ url('/admin/lights', [$ihome->id, 'edit']) }}" method="POST">
            		{{ csrf_field() }}
              		<div class="box-body">
              			@foreach($ihome->Lights as $light)
              				<div class="form-group{{ $errors->has($light->color) ? ' has-error' : '' }}">
              				<label for="inputEmail3" class="col-sm-2 control-label">{{ $light->color }} light's message</label>

	                  			<div class="col-sm-10">
	                    			<input type="text" value="{{ (old($light->color) != null)? old($light->color) : $light->message }}" name="{{ $light->color }}" class="form-control" placeholder="Name">
	                    			@if ($errors->has($light->color))
				                        <span class="help-block">
				                            <strong>{{ $errors->first($light->color) }}</strong>
				                        </span>
				                    @endif
	                  			</div>
              				</div>
              			@endforeach
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