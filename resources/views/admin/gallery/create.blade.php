@extends('voyager::master')

@section('page_title','Add New Image')

@section('css')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('javascript');
<script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <h4>Add New Image</h4>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            {!! Form::open(['url' => '/admin/gallery/store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data'] ) !!}

            {!! csrf_field() !!}
      
            <!-- upload -->
            <div class="form-group">
                 {!! Form::label('image', 'File Upload:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10" >
                    <input type="file" name="filename" class="form-control">
                </div>
            </div>

            <!-- Order -->
            <div class="form-group">
                {!! Form::label('order', 'Order', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col-lg-10">
                    {!! Form::text('order', '', ['class' => 'form-control']) !!}
                </div>
            </div>

            <!-- Select With One Default -->
            <div class="form-group">
                {!! Form::label('select', 'Active?', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col-lg-10">
                    {!!  Form::select('image_active', ['1' => 'Yes', '0' => 'No'],  'Yes', ['class' => 'form-control' ]) !!}
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                </div>
            </div>

            {!! Form::close()  !!}
        </div>
    </div>

    
</div>
@endsection