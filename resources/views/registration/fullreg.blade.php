<div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container contest-text">
        {!! Form::open(['route' => ['event.registration', $amount, $pre], 'method' => 'POST', 'class' => '', 'role' => 'form']) !!}

        {{ csrf_field() }} 

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left text-center">
            <p class="mammoth-form-text">Select your team level</p>
            @if ($errors->has('team_type'))
                <span class="has-error">{{ $errors->first('team_type') }}</span>
            @endif
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left input-container">
            <ul class="alt sponsor-benefits">
                <li><input name="team_type" type="radio" id="platinum" class="select-sponsor" value="Toughman"> Tough-man Team</li>
                <li><input name="team_type" type="radio" id="gold" class="select-sponsor" value="Regular"> Regular Team</li>
                <li><input name="team_type" type="radio" id="silver" class="select-sponsor" value="Open"> Open Team</li>
            </ul>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
            <p class="sponsorship-text mammoth-team-member">Team Member 1</p>
        
            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_first_name', $user->first_name, array('class' => 'sponsor-input form-control $error', 'placeholder' => 'First Name (required)')) !!}
                    @if ($errors->has('member1_first_name'))
                        <span class="has-error">{{ $errors->first('member1_first_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_last_name', $user->last_name, array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Last Name (required)')) !!}
                    @if ($errors->has('member1_last_name'))
                        <span class="has-error">{{ $errors->first('member1_last_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_phone', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Phone (required)')) !!}
                    @if ($errors->has('member1_phone'))
                        <span class="has-error">{{ $errors->first('member1_phone') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_address', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Street Address (required)')) !!}
                    @if ($errors->has('member1_address'))
                        <span class="has-error">{{ $errors->first('member1_address') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_city', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'City (required)')) !!}
                    @if ($errors->has('member1_city'))
                        <span class="has-error">{{ $errors->first('member1_city') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-3 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('member1_state', [  '' => 'State (required)', 'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas',
                                            'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut',
                                            'DE' => 'Delaware', 'DC' => 'District Of Columbia', 'FL' => 'Florida',
                                            'GA' => 'Georgia', 'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois',
                                            'IN' => 'Indiana', 'IA' => 'Iowa', 'KS' => 'Kansas', 'KY' => 'Kentucky',
                                            'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland', 'MA' => 'Massachusetts',
                                            'MI' => 'Michigan', 'MN' => 'Minnesota', 'MO' => 'Missouri', 'MS' => 'Mississippi', 'MT' => 'Montana',
                                            'NE' => 'Nebraska', 'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey',
                                            'NM' => 'New Mexico', 'NY' => 'New York', 'NC' => 'North Carolina',
                                            'ND' => 'North Dakota', 'OH' => 'Ohio', 'OK' => 'Oklahoma', 'OR' => 'Oregon',
                                            'PA' => 'Pennsylvania', 'RI' => 'Rhode Island', 'SC' => 'South Carolina',
                                            'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah',
                                            'VT' => 'Vermont', 'VA' => 'Virginia', 'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin',
                                            'WY' => 'Wyoming'], null, array('class' => 'sponsor-input form-control one-whole')) !!}
                    @if ($errors->has('member1_state'))
                        <span class="has-error">{{ $errors->first('member1_state') }}</span>
                    @endif
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-3 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_zip', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Zip Code (required)')) !!}
                    @if ($errors->has('member1_zip'))
                        <span class="has-error">{{ $errors->first('member1_zip') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-8 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_email', $user->email, array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Email (required)')) !!}
                    @if ($errors->has('member1_email'))
                        <span class="has-error">{{ $errors->first('member1_email') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('member1_size', [  '' => 'Shirt Size (required)', 'Small' => 'Small', 'Medium' => 'Medium', 'Large' => 'Large', 'X-Large' => 'X-Large',
                                            '2X-Large' => '2X-Large', '3X-Large' => '3X-Large'
                                            ], null, array('class' => 'sponsor-input form-control one-whole')) !!}
                    @if ($errors->has('member1_size'))
                        <span class="has-error">{{ $errors->first('member1_size') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('member1_pastcompetitor', [  '' => 'Past Competitor? (required)', 'No' => 'No', 'Yes' => 'Yes'], null, array('class' => 'past-comp-m1 sponsor-input form-control one-whole')) !!}
                    @if ($errors->has('member1_pastcompetitor'))
                        <span class="has-error">{{ $errors->first('member1_pastcompetitor') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container past-comp-years pastcomp_m1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member1_pastyears', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Past # of Years as a Competitor?')) !!}
                    @if ($errors->has('member1_pastyears'))
                        <span class="has-error">{{ $errors->first('member1_pastyears') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
            <p class="sponsorship-text mammoth-team-member">Team Member 2</p>
        
            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_first_name', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'First Name (required)')) !!}
                    @if ($errors->has('member2_first_name'))
                        <span class="has-error">{{ $errors->first('member2_first_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_last_name', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Last Name (required)')) !!}
                    @if ($errors->has('member2_last_name'))
                        <span class="has-error">{{ $errors->first('member2_last_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_phone', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Phone (required)')) !!}
                    @if ($errors->has('member2_phone'))
                        <span class="has-error">{{ $errors->first('member2_phone') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_address', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Street Address (required)')) !!}
                    @if ($errors->has('member2_address'))
                        <span class="has-error">{{ $errors->first('member2_address') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_city', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'City (required)')) !!}
                    @if ($errors->has('member2_city'))
                        <span class="has-error">{{ $errors->first('member2_city') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-3 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('member2_state', [  '' => 'State (required)', 'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas',
                                            'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut',
                                            'DE' => 'Delaware', 'DC' => 'District Of Columbia', 'FL' => 'Florida',
                                            'GA' => 'Georgia', 'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois',
                                            'IN' => 'Indiana', 'IA' => 'Iowa', 'KS' => 'Kansas', 'KY' => 'Kentucky',
                                            'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland', 'MA' => 'Massachusetts',
                                            'MI' => 'Michigan', 'MN' => 'Minnesota', 'MO' => 'Missouri', 'MS' => 'Mississippi', 'MT' => 'Montana',
                                            'NE' => 'Nebraska', 'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey',
                                            'NM' => 'New Mexico', 'NY' => 'New York', 'NC' => 'North Carolina',
                                            'ND' => 'North Dakota', 'OH' => 'Ohio', 'OK' => 'Oklahoma', 'OR' => 'Oregon',
                                            'PA' => 'Pennsylvania', 'RI' => 'Rhode Island', 'SC' => 'South Carolina',
                                            'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah',
                                            'VT' => 'Vermont', 'VA' => 'Virginia', 'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin',
                                            'WY' => 'Wyoming'], null, array('class' => 'sponsor-input form-control one-whole')) !!}
                    @if ($errors->has('member2_state'))
                        <span class="has-error">{{ $errors->first('member2_state') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-3 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_zip', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Zip Code (required)')) !!}
                    @if ($errors->has('member2_zip'))
                        <span class="has-error">{{ $errors->first('member2_zip') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-8 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_email', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Email (required)')) !!}
                    @if ($errors->has('member2_email'))
                        <span class="has-error">{{ $errors->first('member2_email') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('member2_size', [  '' => 'Shirt Size (required)', 'Small' => 'Small', 'Medium' => 'Medium', 'Large' => 'Large', 'X-Large' => 'X-Large',
                                            '2X-Large' => '2X-Large', '3X-Large' => '3X-Large'
                                            ], null, array('class' => 'sponsor-input form-control one-whole')) !!}
                    @if ($errors->has('member2_size'))
                        <span class="has-error">{{ $errors->first('member2_size') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::select('member2_pastcompetitor', [  '' => 'Past Competitor? (required)', 'No' => 'No', 'Yes' => 'Yes'], null, array('class' => 'past-comp-m2 sponsor-input form-control one-whole')) !!}
                    @if ($errors->has('member2_pastcompetitor'))
                        <span class="has-error">{{ $errors->first('member2_pastcompetitor') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left input-container past-comp-years pastcomp_m2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-left">
                    {!! Form::text('member2_pastyears', '', array('class' => 'sponsor-input form-control $error', 'placeholder' => 'Past # of Years as a Competitor?')) !!}
                    @if ($errors->has('member2_pastyears'))
                        <span class="has-error">{{ $errors->first('member2_pastyears') }}</span>
                    @endif
                </div>
            </div>
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