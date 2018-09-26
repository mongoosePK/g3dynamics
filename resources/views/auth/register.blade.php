@extends('layouts.g3')

@section('content')
<div class="register-container">
	<div class="row">
		@include('errors.regerrors')
		<div class="col-lg-4 col-md-4 col-sm-4 col-4 page-container"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-4 page-container">
			<div class="panel panel-default">
				<div class="panel-heading">Create A User Account</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="/accounts/create">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-12  control-label">Name</label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-12 control-label">E-Mail Address</label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-4 page-container"></div>
	</div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/slider-pro.min.css') }}"/>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.sliderPro.js') }}"></script>

@endsection
