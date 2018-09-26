<div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container contest-text">
        {!! Form::open(['route' => ['event.registration', $amount, $pre], 'method' => 'POST', 'class' => '', 'role' => 'form']) !!}

        {{ csrf_field() }} 

        <div class="col-lg-9 col-md-9 col-sm-12 col-12 page-container">
            <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2>Thank you for pre-registering.  All we need is the remainder of the entry fee paid.  Please take a moment and complete the transaction.</h2></div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
            <p class="sponsorship-text mammoth-team-member">Payment</p>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('cc_name', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Name on Credit Card (required)')) !!}
                    @if ($errors->has('cc_name'))
                        <span class="has-error">{{ $errors->first('cc_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('cc_number', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Credit Card Number (required)')) !!}
                    @if ($errors->has('cc_number'))
                        <span class="has-error">{{ $errors->first('cc_number') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('cc_expire_month', [  '' => 'Exp. Month (required)', '01' => '01', '02' => '02', '03' => '03', '04' => '04',
                                            '05' => '05', '06' => '06', '07' => '07',
                                            '08' => '08', '09' => '09', '10' => '10',
                                            '11' => '11', '12' => '12'], null, array('class' => 'sponsor-input form-control')) !!}
                    @if ($errors->has('cc_expire_month'))
                        <span class="has-error">{{ $errors->first('cc_expire_month') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('cc_expire_year', [  '' => 'Exp. Month (required)', '2018' => '2018', '2019' => '2019', '2020' => '2020', '2021' => '2021',
                                            '2022' => '2022', '2023' => '2023', '2024' => '2024',
                                            '2025' => '2025', '2026' => '2026', '2027' => '2027',
                                            '2028' => '2028', '2029' => '2029', '2030' => '2030'], null, array('class' => 'sponsor-input form-control')) !!}
                    @if ($errors->has('cc_expire_year'))
                        <span class="has-error">{{ $errors->first('cc_expire_year') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('cc_cvv', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'CVV (required)', 'maxlength' => '4')) !!}
                    @if ($errors->has('cc_cvv'))
                        <span class="has-error">{{ $errors->first('cc_cvv') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                </div>
            </div>
        </div>


    {!! Form::close() !!}
</div>