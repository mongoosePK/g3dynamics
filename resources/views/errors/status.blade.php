@if (session('status'))
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row col-md-3 col-sm-3"></div>
    <div class="row col-md-6 col-sm-6">
        <div class="alert alert-success">
             {{ session('status') }}
        </div>
    </div>
    <div class="row col-md-3 col-sm-3"></div>
</div>
@endif

@if (session('statuserror'))
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row col-md-3 col-sm-3"></div>
    <div class="row col-md-6 col-sm-6">
        <div class="alert alert-danger">
             {{ session('statuserror') }}
        </div>
    </div>
    <div class="row col-md-3 col-sm-3"></div>
</div>
@endif
