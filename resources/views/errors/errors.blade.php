@if (count($errors) > 0)
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row col-md-3 col-sm-3"></div>
    <div class="row col-md-6 col-sm-6">
       <div class="alert alert-danger">
       <strong>Whoops!</strong> There were some problems with your input.<br><br>
       <ul>
           @foreach ($errors->all() as $error)
                 <li>{!! $error !!}</li>
           @endforeach
        </ul>
        </div>
    </div>
    <div class="row col-md-3 col-sm-3"></div>
</div>
@else
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row col-md-3 col-sm-3"></div>
    <div class="row col-md-6 col-sm-6">
       <div class="alert alert-info">
       <strong>Requirements: </strong>The password must contain 1 character from each of the following categories:<br />
       <ul>
          <li>English uppercase characters (A – Z)</li>
          <li>English lowercase characters (a – z)</li>
          <li>Base 10 digits (0 – 9)</li>
          <li>Non-alphanumeric (@ . ! $ # or %)</li>
        </ul>
        </div>
    </div>
    <div class="row col-md-3 col-sm-3"></div>
</div>
@endif
