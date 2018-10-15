@extends('layouts.g3')

@section('content')

@if($page->slug === 'mammoth-sniper-challenge')
<div class="col-lg-9 col-md-9 col-sm-12 col-12 page-container">
    @if (Session::has('success'))
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2>{{ $page->title }}</h2></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 page-content">
        <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-content-image'>
            <img src='storage/{{ $page->image }}' class='page-image'/>
        </div>
        <div class='col-lg-9 col-md-9 col-sm-12 col-12 page-body page-container'>
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" data-toggle="tab" href="#rules" role="tab" aria-controls="rules" aria-selected="false">Rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link qa-tab" data-toggle="tab" href="#qa" role="tab" aria-controls="qa" aria-selected="false">Q & A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" data-toggle="tab" href="#aar" role="tab" aria-controls="aar" aria-selected="false">AAR</a>
                </li>
            </ul>
        </div>
        <div class="tab-content col-lg-9 col-md-9 col-sm-12 col-12  page-container" id="myTabContent">
            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container contest-text">
                    {!! $page->body !!}
                    * $6.95 shipping and handling applies to each address
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container contest-text">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container-text">
                        <ul class="alt sponsor-benefits">
                            <li class='list-header'>Tough-man Team</li>
                            <li class="team-list">Compete as a 2 person team.</li>
                            <li class="team-list">Stages to be completed as a team.</li>
                            <li class="team-list">Scenario-Based stages</li>
                            <li class="team-list">Shooting in natural terrain and man-made structures.</li>
                            <li class="team-list">Tough man Division is designed to test your physically, mentally, as well as test your marksmanship capabilities. Competitors will compete as a 2 person team with one primary and a secondary and the ability to determine those roles based on scenario.</li>
                            <li class="team-list">Primary shooter acceptable weapons will be .223 up to 300 Winchester Magnum with 220gr projectiles and a maximum muzzle velocity of 3200 fps.</li>
                            <li class="team-list">Secondary weapons be either .223 or 308.</li>
                            <li class="team-list"> Minumum handgun caliber is 9mm. Recommended min mag capacity is 15 rounds.</li>
                            <li class="team-list">Team must walk/ruck the entire match, with estimated ruck distances ranging from 1 to 5+ miles between stages and you will be given a pre-determined minute per mile time to complete the distances.</li>
                            <li class="team-list">30+ miles over 3 days, Pace must average 16 min/mi</li>
                            <li class="team-list">Once the teams leave the Start/Finish point on Friday they will not return until Sunday. You will bivouac at pre-determined locations on the property Friday and Saturday night. All equipment and weapons must be carried as a team througout the weekend to complete
                    the three day event. Your weapon, ammunition, food, shooting equipment, sleep system, etc ... willl need to be packed with you for three days.</li>
                            <li class="team-list">All equipment and weapons must be carried as a team during the entire match. Equipment and weapons may be distributed between team members as they see fit to complete the challenge.</li>
                            <li class="team-list">If a team is unable to continue or fails to make the ruck times they are allowed to drop down into the next lower division.</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container-text">
                        <ul class="alt sponsor-benefits">
                            <li class='list-header'>Regular Team</li>
                            <li class="team-list"> Compete as a 2 person team.</li>
                            <li class="team-list"> Stages to be completed as a team.</li>
                            <li class="team-list"> Scenario-Based stages.</li>
                            <li class="team-list"> Shooting in natural terrain and man-made structures.</li>
                            <li class="team-list"> Regular Division is designed to test your physically, mentally, as well as test your marksmanship capabilities. Competitors will compete as a 2 person team with one primary and a secondary and the ability to determine those roles based on scenario.</li>
                            <li class="team-list"> Primary shooter acceptable weapons will be .223 up to 300 Winchester Magnum with 220gr projectiles and a maximum muzzle velocity of 3200 fps.</li>
                            <li class="team-list"> Secondary weapons be either .223 or 308.</li>
                            <li class="team-list"> Minumum handgun caliber is 9mm. Recommended min mag capacity is 15 rounds.</li>
                            <li class="team-list"> Team must walk/ruck the entire match, with estimated ruck distances ranging from 1 to 5+ miles between stages and you will be given a pre-determined minute per mile time to complete the distances.</li>
                            <li class="team-list"> 30+ miles over 3 days, Pace must average 16 min/mi</li>
                            <li class="team-list"> Teams will start and end each day at the Start/Finish point and will stay off site. All equipment and weapons must be carried as a team during the day to complete that days stages. Your weapons, ammunition, food, shooting equipment etc will need to be packed with you.</li>
                            <li class="team-list"> All equipment and weapons must be carried as a team during the entire match. Equipment and weapons may be distributed between team members as they see fit to complete the challenge.</li>
                            <li class="team-list"> If a team is unable to continue or fails to make the ruck times they are allowed to drop down into the next lower division.</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left input-container-text">
                        <ul class="alt sponsor-benefits">
                            <li class='list-header'>Open Team</li>
                            <li class="team-list"> Compete as a 2 person team.</li>
                            <li class="team-list"> Stages to be completed as a team.</li>
                            <li class="team-list"> Scenario-Based stages.</li>
                            <li class="team-list"> Shooting in natural terrain and man-made structures.</li>
                            <li class="team-list"> Open Division is designed to test your physically, mentally, as well as test your marksmanship capabilities. Competitors will compete as a 2 person team with one primary and a secondary and the ability to determine those roles based on scenario.</li>
                            <li class="team-list"> Primary shooter acceptable weapons will be .223 up to 300 Winchester Magnum with 220gr projectiles and a maximum muzzle velocity of 3200 fps.</li>
                            <li class="team-list"> Secondary weapons be either .223 or 308.</li>
                            <li class="team-list"> Minumum handgun caliber is 9mm. Recommended min mag capacity is 15 rounds.</li>
                            <li class="team-list"> Open division teams will be either allowed to drive or be shuttled to each firing stage.</li>
                            <li class="team-list"> Open division is geared more toward teams that have a medical necessity or mobility issues and cannot ruck, for new shooters with little to no experience, and sponsor teams who want to participate as a way of testing their abilities.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="rules" role="tabpanel" aria-labelledby="rules-tab">
                <object data="/files/rules_mammoth.pdf" type="application/pdf" width="100%" height="100%">
                    alt : <a href="/files/rules_mammoth.pdf">Mammoth Sniper Challenge Rules</a>
                </object>
            </div>

            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                @if ($user)
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    
                    @if($amount == 0 && $pre === true)
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12 page-container">
                            <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2>Your team has completed the pre-registration process, please come back on October 1st, to pay the remainder of the entry fee.</h2></div>
                        </div>
                    @endif

                    @if($amount == 0 && $pre == false)
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12 page-container">
                            <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2>Your team has completed the registration process, Thank you for registering!</h2></div>
                        </div>
                    @endif

                    @if($amount == 100 && $pre == true)

                        @include('registration.fullreg')

                    @endif

                    @if($amount == 700 && $pre == false)
                        @include('registration.fullreg')
                    @endif

                    @if($amount == 600 && $pre == false)

                        @include('registration.prereg')
                    
                    @endif



                @else
                <div class="col-lg-9 col-md-9 col-sm-12 col-12 page-container">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2>You must be logged in to register for this match!</h2></div>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2><a href="/admin/login">Login</a> or <a href="/register">Create Account</a></h2></div>
                </div>
                @endif
            </div>

            <div class="tab-pane fade" id="qa" role="tabpanel" aria-labelledby="qa-tab">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container qa-container">
                   
                </div>
            </div>

            <div class="tab-pane fade" id="aar" role="tabpanel" aria-labelledby="aar-tab">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container aar-container">
                    <a href="AAR_14.pdf" class="aar-link float-left">2014</a>
                    <a href="AAR_15.pdf" class="aar-link float-left">2015</a>
                    <a href="AAR_15_1.pdf" class="aar-link float-left">2015-1</a>
                    <a href="AAR_16.pdf" class="aar-link float-left">2016</a>
                    <a href="AAR_17.pdf" class="aar-link float-left">2017</a>
                    <a href="AAR_18.pdf" class="aar-link float-left">2018</a>
                    <div class="aar-source"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-lg-9 col-md-9 col-sm-12 col-12 page-container">
    <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-title'><h2>{{ $page->title }}</h2></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 page-content">
        @if($page->image)
        <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-content-image'>
            <img src='storage/{{ $page->image }}' class='page-image'/>
        </div>
        @endif
        <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-body'>
            {!! $page->body !!}
        </div>
    </div>
</div>
@endif
@php
Session::forget('success');
Session::forget('error');
@endphp
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/slider-pro.min.css') }}"/>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.sliderPro.js') }}"></script>

@endsection