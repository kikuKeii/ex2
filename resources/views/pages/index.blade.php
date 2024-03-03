@extends('home')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <a href="{{ url('/payment/export') }}" class="btn btn-success">Export To Excel</a>
            </div>
        </div>
        <div class="row">
            <div class="col px-3 ">
                @include('tabels.index')
            </div>
        </div>
    </div>
@endsection
