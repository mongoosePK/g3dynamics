@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit User: {{$user->name}}</div>
				<div class="panel-body">

					@include('errors.errors')

					{!! Form::model($user, array('method' => 'PATCH', 'route' => array('accounts.edit', $user->id), 'class' => 'form-horizontal', 'role' => 'form')) !!}


						<div class="form-group">
							{!! Form::label('name', 'Name:', array('class'=>'col-md-4 control-label')) !!}
							<div class="col-md-6">
            					{!! Form::text('name', null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('email', 'Email:', array('class'=>'col-md-4 control-label')) !!}
							<div class="col-md-6">
            					{!! Form::text('email', null, array('class' => 'form-control', 'disabled' => 'disabled')) !!}
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-4 control-label">Group</label>
							<div class="col-md-6">
								@foreach ( $roles as $i => $role )
								<div>
								{!! Form::checkbox( 'roles[]', $role, $arr[$i], ['class' => 'md-check', 'id' => $role]) !!}
								{!! Form::label($role,  $role) !!}
								</div>
								@endforeach
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Password:', array('class'=>'col-md-4 control-label')) !!}
							<div class="col-md-6">
            					{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'YOU CAN IGNORE THIS BOX, IF YOU ARE NOT CHANGING YOUR PASSWORD')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password_confirmation', 'Confirm Password:', array('class'=>'col-md-4 control-label')) !!}
							<div class="col-md-6">
            					{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'YOU CAN IGNORE THIS BOX, IF YOU ARE NOT CHANGING YOUR PASSWORD')) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5">&nbsp;</div>
							<div class="col-md-2">
								{!! Form::submit('Update', array('class' => 'btn btn-info')) !!}
            					{!! link_to_route('admin.accounts', 'Cancel', [], array('class' => 'btn')) !!}
							</div>
							<div class="col-md-5">&nbsp;</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
