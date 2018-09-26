@extends('voyager::master')

@section('page_title','Mammoth Registrations')

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
            <h4>Mammoth Registrations</h4>
        </div>
    </div>

    <table class="table table-striped fold-table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Team Type</th>
            <th scope="col">Stripe Payment ID</th>
            <th scope="col">Amount Paid</th>
            <th scope="col">Registration Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $t)
        <tr class="view">
            <td>{{ $t->id }}</td>
            <td>{{ $t->team_type }}</td>
            <td>{{ $t->stripe_payment_id }}</td>
            <td>{{ $t->amount_paid }}</td>
            <td>{{ $t->created_at }}</td>
        </tr>
        <tr class="fold">
            <td colspan="5">
                <div class="fold-content">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Past Competitor</th>
                                <th scope="col"># of Years</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $t->m1->first_name }}</td>
                                <td>{{ $t->m1->last_name }}</td>
                                <td>{{ $t->m1->email }}</td>
                                <td>{{ $t->m1->phone }}</td>
                                <td>{{ $t->m1->past_competitor }}</td>
                                <td>{{ $t->m1->past_num_of_years }}</td>
                            </tr>
                            <tr>
                                <td>{{ $t->m2->first_name }}</td>
                                <td>{{ $t->m2->last_name }}</td>
                                <td>{{ $t->m2->email }}</td>
                                <td>{{ $t->m2->phone }}</td>
                                <td>{{ $t->m2->past_competitor }}</td>
                                <td>{{ $t->m2->past_num_of_years }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection