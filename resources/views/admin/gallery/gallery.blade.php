@extends('voyager::master')

@section('page_title','Gallery')

@section('css')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endsection

@section('javascript');
<script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <h4>Images in Slider</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="btn btn-danger add-new-gallery-image">Add New Image</div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Order</th>
            <th scope="col">Active</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($gallery as $g)
        <tr>
            <th scope="row">
                <a href="/storage/images/{{ $g->image_name }}" target="_blank"><img src="/storage/images/{{ $g->image_name }}" class='image-preview'/></a>
            </th>
            <td>{{ $g->order }}</td>
            <td>{{ $g->active }}</td>
            <td class="gallery-delete"><a href="/admin/gallery/delete/{{ $g->id }}"><i class="fas fa-times-circle danger delete-icon"></i></a>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection